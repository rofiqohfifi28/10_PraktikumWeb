<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        return view('home',['user' => $user]); 
    }

}
