<?php

namespace App\Controllers;

class Login extends BaseController
{
   public function login()
   {
      return view('auth/login');
   }
   public function register()
   {
      return view('auth/register');
   }
}
