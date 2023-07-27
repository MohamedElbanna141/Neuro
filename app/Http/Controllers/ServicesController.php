<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function showhospitals()
    {
      return view('hospital');
    }  
    public function showlabs()
    {
      return view('lab');
    }  
    public function showpharmacy()
    {
      return view('pharmacy');
    }  
    public function showdocs()
    {
      return view('doctspecialize');
    }  
    public function showmedicine()
    {
      return view('medicine');
    }  
    public function showdocsdetail()
    {
      return view('docsdetail');
    }  
    public function showpharmproducts()
    {
      return view('pharmproducts');
    }  
    
    
}
