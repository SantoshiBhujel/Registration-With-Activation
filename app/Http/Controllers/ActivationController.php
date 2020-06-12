<?php

namespace App\Http\Controllers;

use App\ActivationCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivationController extends Controller
{
    public function activation(ActivationCode $code)
    {
        $code->delete();
        $code->User()->update(['active'=>true]);
        Auth::login($code->user);
        return redirect('/home');
    }

    public function coderesend(Request $request)
    {
        $user = User::whereEmail($request->email)->firstOrFail();

        if($user->userIsActivated())
        {
            return redirect('/');
        }
    
        //mail the user firing the event
        event(new ActivationEmailEvent($user));
        // Mail::to($user)->queue(new AccountActivation($user->ActivationCode->code) );

        return redirect('/login');
    }
}
