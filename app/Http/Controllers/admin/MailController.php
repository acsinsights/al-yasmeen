<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(Request $request, $id){
        $user = User::findOrFail($id);
        Mail::to($request->user())->send(new MailableClass);


        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('2490rahuljadhav@gmail.com', 'Your Application');
            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }
}
