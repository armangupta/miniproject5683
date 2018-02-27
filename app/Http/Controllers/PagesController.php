<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('pages.index');
    }
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }
    function signup(){
        return view('pages.signup');
    }
    function signin(){
        return view('pages.signin');
    }
    function logout(){
        return view('pages.logout');
    }
    function viewmessage(){
        return view('pages.viewmessage');
    }
    function viewmessage1(){
        return view('pages.viewmessage1');
    }
    function store(Request $request){
        $email=$request->email;
        return redirect()->route('thanks',['name'=>$email]);
    }
    function thanks($email,Request $request){

        return view('pages.thankyou')->with(compact('email'));
    }
}
