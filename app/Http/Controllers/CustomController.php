<?php

namespace MailChamp\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index(Request $request)
    {
        $lists = \MailChamp\Model\Subscriber::paginate($request->per_page);
        return view('subscribers_list.index',['lists'=>$lists]);
    }

    public function listing(Request $request)
    {
        $lists = \MailChamp\Model\Subscriber::paginate($request->per_page);

        return view('subscribers_list._list', [
            'lists' => $lists,
        ]);
    }



}
