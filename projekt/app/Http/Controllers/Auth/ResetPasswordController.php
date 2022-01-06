<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;


    protected $redirectTo = '/welcome';


    public function __construct()
    {
        $this->middleware('guest');
    }
}
