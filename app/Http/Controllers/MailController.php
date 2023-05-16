<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index($name)
    {
        $username = $name;

        $mailData = [
            'Title' => 'New registered user',
            'body' => 'A new user '.$username.' is registered to the system'
        ];

        Mail::to('nourelnerwegiix.x@gmail.com')->send(new DemoMail($mailData));

        // Generate toast message
        $toast = [
            'message' => 'Email sent successfully',
            'type' => 'success'
        ];
        return response()->json($toast);
    }

}