<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Processor\HostnameProcessor;

class GenericController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function sobre(){
        return view('sobre');
    }
    public function servicos(){
        return view('servicos');
    }
    public function contacto(){
        return view('contacto');
    }
}
