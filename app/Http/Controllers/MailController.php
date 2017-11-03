<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    // Mail Controller here
    public function basic_email() {
        $data = array('name' => "Mj Fauzy PP");
        Mail::send(['text' => 'mail'], $data, function($message) {
            $message->to('mjfauzy@gmail.com', 'Mj Fauzy')->subject('Laravel Basic Testing Mail');
            $message->from('mjfauzypp@gmail.com','Mj Fauzy PP');
        });
        echo "Basic Email sent. Check your inbox.";
    }

    public function html_email() {
        $data = array('name' => "Mj Fauzy PP");
        Mail::send('mail', $data, function($message) {
            $message->to('mjfauzy@gmail.com', 'Mj Fauzy')->subject('Laravel HTML Testing Mail');
            $message->from('mjfauzypp@gmail.com', 'Mj Fauzy PP');
        });
        echo "HTML Email sent. Check your inbox.";
    }

    public function attachment_email() {
        $data = array('name' => "Mj Fauzy PP");
        Mail::send('mail', $data, function($message) {
            $message->to('mjfauzy@gmail.com', 'Mj Fauzy')->subject('Laravel Testing Mail with Attachment');
            $message->attach('/home/mjfauzy/Downloads/Images/kreta1.jpg');
            $message->attach('/home/mjfauzy/Downloads/color.html');
            $message->from('mjfauzypp@gmail.com', 'Mj Fauzy PP');
        });
        echo "Email sent with attachment. Check your inbox.";
    }
}
