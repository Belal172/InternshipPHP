<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $to="milanbelal@cloudtechservice.com";
        $msg="this is trying email";
        $subject="First Try";
        Mail::to($to)->send(new HelloMail($msg,$subject));
    }
}
