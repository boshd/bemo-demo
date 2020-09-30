<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

    public function index()
    {
        return view('app', ['main_body' => "ssffdfdfd"]);
    }

    public function main_body()
    {
        return 'body text';
    }

    public function update_main_body()
    {

    }
}
