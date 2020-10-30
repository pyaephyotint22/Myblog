<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function home($value='')
  {
    return view('welcome');
  }

  public function a($value='')
  {
    return 'Hello / Route';
  }

  public function testing($value='')
  {
    return view('testing');
  }
  public function service($value='')
  {
    //string
    //return view(service,['name'=>'Pyae Phyo Tint']);
    //arrays of arrays
    $students=array(
      array('name' =>'mg mag' ,'age'=>26 ),
              array('name' =>'su su' ,'age'=>20 )
            );

    return view('service',['a'=>$students]);
  }
}