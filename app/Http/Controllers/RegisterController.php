<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $data=$request->all();
        $user=\App\Models\User::create($data);

        if(!$user) {

            return back()->with("error", "An Error Occur");
        }
        $mailcontroller=new MailController();
        $mailcontroller->index($user->name);

        return back()->with("message", "User Added Successfully")->with("toast", "Email sent successfully");

    }

public function checkUsername(Request $request)
{
    $username = $request->input('username');
    $count = DB::table('users')
        ->where('username', $username)
        ->count();

    $response = $count > 0 ? 'Not Available' : 'Available';

    return $response;
}



    // public function test(Request $request)
    // {
    //     $data=$request->all();
    //     dd($data);
    //     $user=\App\Models\User::create($data);
    //     if(!$user) {

    //         return back()->with("error", "An Error Occur");
    //     }
    //     $mailcontroller=new MailController();
    //     $toast=$mailcontroller->index($user->name);

    //     if($toast) {

    //         return back()->with("message", "User Added Successfully")->with("toast", $toast);
    //     }

    //     return back()->with("error", "An Error Occur");

    // }

}
