<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;

class DashboardController extends Controller
{
    public function post(Request $request)
    {
        try {            
            $details['email'] = $request->email;
            $details['message'] = $request->message;
            dispatch(new SendEmailJob($details));
            return redirect('/home')->with('status', 'Email Sent.');
        } catch(Throwable $e) {
            return redirect('/home')->with('status', 'Failed on sending an email.');
        }
    }
}
