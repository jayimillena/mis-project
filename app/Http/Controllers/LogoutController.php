<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /* Log out account user.
    *
    * @return \Illuminate\Routing\Redirector
    */
    public function perform()
    {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}
