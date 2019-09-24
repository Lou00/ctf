<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function encrypt($string)
    {
        $data = openssl_encrypt($string, 'AES-128-ECB', '*******************',true);
        $data=base64_encode($data);
        return $data;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        setcookie("auth_name",$this->encrypt(Auth::user()->name), time()+3600*1);
        return view('home');
    }
}
