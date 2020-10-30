<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
  public function home($value='')
  {
    return view('home');
  }
    public function item($value='')
  {
    return view('item');
  }

  public function about($value='')
  {
    return view('about');
  }

  public function contact($value='')
  {
    return view('contact');
  }
   public function student($value='')
  {
    return view('student');
  }
}