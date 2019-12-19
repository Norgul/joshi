<?php

namespace MailChamp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MailChamp\EmailReminder;
use MailChamp\Model\Campaign;
use MailChamp\Model\MailList;
use MailChamp\Model\Subscriber;
use MailChamp\Model\TrackingLog;
use MailChamp\SpamWords;
use Mikemike\Spinner\Spinner;
use Session;
//use Excel;
use File;
use Carbon\Carbon;
use Zend\Validator\File\Hash;

//use Maatwebsite\Excel\Excel as Excel;
class HomeController extends Controller
{

    public function index(Request $request)
    {
        event(new \MailChamp\Events\UserUpdated($request->user()->customer));
//       return view('dashboard');
        $emails_remaining = EmailReminder::find(1);
        return view('v2.index', ['emails_remaining' => $emails_remaining]);
    }

    public function newpage()
    {
        return view('v2.index');
    }

    public function select_list_for_form()
    {
        $mail_lists = MailList::all();
        return view('pages.select_list', ['mail_lists' => $mail_lists]);
    }

    public function list_to_show_forms(Request $request)
    {

        $unit_id = $request->input('list');

        return view('form.index', ['unit_id' => $unit_id]);
    }

    public function form_templates()
    {
        return view('form.index');
    }

    public function spinner_index()
    {
        return view('spinner');
    }

    public function spinner(Request $request)
    {
        $customMessages = [
            'g-recaptcha-response.required' => 'Please check the captcha box.',
        ];
        $this->validate($request, [
//            'g-recaptcha-response'=>'required|captcha',
            'content_text' => 'required',
        ], $customMessages);


        $file = file(storage_path('app/db.sdata'));
        $data = $request->content_text;


        foreach ($file as $line) {
            $synonyms = explode('|', $line);
            foreach ($synonyms as $word) {
                $word = trim($word);
                if ($word != '') {
                    $word = str_replace('/', '\/', $word);
                    if (preg_match('/\b' . $word . '\b/i', $data)) {
                        $founds[md5($word)] = str_replace(array("\n", "\r"), '', $line);
                        $data = preg_replace('/\b' . $word . '\b/i', md5($word), $data);
                    }
                }
            }
        }

        $array_count = count($founds);
        if ($array_count != 0) {
            foreach ($founds as $code => $value) {
                $data = str_replace($code, '{' . $value . '}', $data);
            }
        }

        $spinner = new Spinner();
        $spin = $spinner->process($data);
        return redirect()->back()->withSpinned($spin)->withContent($request->content_text);
    }

    public function spam_detector()
    {
        $spamWords = SpamWords::all();
        $words = [];
        foreach ($spamWords as $spamWord) {
            array_push($words, $spamWord->word);
        }

        return view('spam_detector', ['words' => json_encode($words)]);
    }

    public function save(Request $request)
    {


        $extension = File::extension($request->file->getClientOriginalName());

        if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {


            $path = $request->file->getRealPath();
            $data = \Excel::load($path, function ($reader) {
            })->get();


            if (!empty($data) && $data->count()) {


                foreach ($data as $key => $value) {

                    $insert[] = [
                        'word' => $value->word,
                    ];
                }


                if (!empty($insert)) {

                    $insertData = DB::table('spamwords')->insert($insert);
                    if ($insertData) {
                        Session::flash('success', 'Your Data has successfully imported');
                    } else {
                        Session::flash('error', 'Error inserting the data..');
                        return back();
                    }
                }
            }

            return back();

        } else {
            Session::flash('error', 'File is a ' . $extension . ' file.!! Please upload a valid xls/csv file..!!');
            return back();
        }
    }

    public function purge()
    {
        return view('purge');
    }

    public function purge_list(Request $request)
    {


        $date = \Carbon\Carbon::today()->subDays($request->days);
        $campaigns = Campaign::where('created_at', '>=', $date)->get();
        $nonOpeners = [];
        $nonClickers = [];
        $request = ['per_page' => 25, 'sort_order' => 'created_at', 'sort_direction' => 'desc', 'keyword' => "", 'columns' => '', 'filters' => ['sort-order' => 'created_at']];

        foreach ($campaigns as $campaig) {
            $campaign = \MailChamp\Model\Campaign::findByUid($campaig->uid);
            $non_open_subscribers = $campaign->subscribers(['open' => 'not_opened'])->groupBy('subscribers.email')->get();
            $non_click_subscribers = \MailChamp\Model\ClickLog::search($request, $campaign)->paginate($request['per_page']);
            foreach ($non_open_subscribers as $subscriber) {
                if (!in_array($subscriber->email, $nonOpeners)) {
                    array_push($nonOpeners, $subscriber->email);
                }
            }

            foreach ($non_click_subscribers as $nonClick) {
                if (!in_array($nonClick->trackingLog->subscriber->email, $nonClickers)) {
                    array_push($nonOpeners, $nonClick->trackingLog->subscriber->email);
                }
            }


        }

        return view('purge_list',['nonOpeners'=>$nonOpeners]);
    }

    public function deletePurge($email){
        $data=Subscriber::where('email',$email)->first();
        $data->delete();
        return redirect('/purge');
    }

    public function genPassword(){
        return bcrypt('Joshi123###');
    }
}
