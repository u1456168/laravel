<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{

  public function home() {


          $people = ['Taylor' , 'Matt' , 'Jeffrey'];
          return view('welcome', compact('people'));
    }




// about page

public function about() {

  return view('pages.about');


 }

}
