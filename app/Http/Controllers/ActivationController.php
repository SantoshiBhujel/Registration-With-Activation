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

}
