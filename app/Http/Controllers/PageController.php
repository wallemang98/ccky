<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class PageController extends Controller
{
  //load index page using route '/'
  public function index() {
        return view('pages.index');
    } //closing index()
}
