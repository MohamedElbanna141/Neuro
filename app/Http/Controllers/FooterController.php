<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function about()
    {
      return view('about');
    }  
    public function team()
    {
      return view('team');
    }  
    public function contact()
    {
      return view('contact');
    }  
    public function qas()
    {
      return view('qas');
    } 
}
