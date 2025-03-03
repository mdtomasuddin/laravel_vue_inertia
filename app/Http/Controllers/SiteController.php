<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    function index(){
        return Inertia::render('index');
    }

    function page1(){
        $Json=['name'=>'Tomas Uddin','age'=>25, 'city'=>'dhaka' ];

        return Inertia::render('page1',['data' => $Json]);
    }

    function page2(){
        return Inertia::render('page2');
    }

    function page3(){
        return Inertia::render('page3');
    }

    function page4(){
        return Inertia::render('page4');
    }

    function page5(){
        return Inertia::render('page5');
    }
}
