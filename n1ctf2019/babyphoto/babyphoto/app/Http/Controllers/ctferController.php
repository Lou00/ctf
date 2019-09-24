<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ctferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function decrypt($string)
    {
        $data = openssl_decrypt(base64_decode($string), 'AES-128-ECB', '******************',true);
        return $data;
    }
    public function userpage(Request $request,$id)
    {   
        if($request->isMethod('get')){
          if(isset($_COOKIE['auth_name'])){
            $auth_check=$this->decrypt($_COOKIE['auth_name']);}else{
            $auth_check=Auth::user()->name;
          }
          if($auth_check==='admin'){
              $imgurl="";
              $usern='admin';
          }else{
              $imgurl="";
              $usern=Auth::user()->name;
          }
          return view('userpage')->with([
              'imgurl'=>$imgurl,
              'username'=>$usern,
              'id'=>$id
          ]);
        }else{
          if(Auth::user()->email_verified_at){
                  $file=$request->file('avatar');
                  $data=file_get_contents('/tmp/'.$file->getFilename());
                  $filesize=$file->getClientSize();
                  if($filesize > 204800){
                      die("too big");
                  }
                 //waf is here.don't rce.
                  $file->storeAs('avatars',md5(time().Auth::user()->id).'.gif');
          }else{
            die('NO!');
            }
        }      
    }
}
