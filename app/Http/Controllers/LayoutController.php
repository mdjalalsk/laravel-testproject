<?php

namespace App\Http\Controllers;
use  App\Models\User;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home(){
        
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }
    public function users(){
        $users=User::paginate(3);
        return view('frontend.user',['users'=>$users]);
    }
    public function service(){
        return view('frontend.service');
    }
}
