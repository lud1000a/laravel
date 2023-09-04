<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
    $var='variavel';
    $arr=['value', 'value1', 'value2', 'value3'];
    return view('welcome', ['var'=>$var], ['array'=>$arr]);
    } 

    public function create(){
        return view('events.create');
    }
}
