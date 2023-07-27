<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavController extends Controller
{
  public function index()
  {
    return view('login');
  } 
   
  public function show()
  {
    return view('signup');
  } 
  public function gethome()
  {
    return view('home');
  } 
  public function getaid()
  {
    return view('aid');
  }  
  public function getscan()
  {
    return view('scan');
  }  
  public function getins()
  {
    return view('ins');
  }  
  
   
}
