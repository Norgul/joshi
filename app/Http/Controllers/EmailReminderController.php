<?php

namespace MailChamp\Http\Controllers;

use Illuminate\Http\Request;
use MailChamp\EmailReminder;

class EmailReminderController extends Controller
{
    public function index(){
//        dd("123");
        return view('email_reminder.index');
    }

    public function save(Request $request){


        $data=EmailReminder::find(1);
        $data->emails=$request->email_numbers;
        $data->save();
//        dd($request->email_numbers);
        return redirect('/');
    }
}
