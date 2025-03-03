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
        $meta=['title'=>'This is blade  title page 2 '];
        return Inertia::render('page2')->withViewData(['meta' => $meta]);
    }

    function page3(){
        $ShareData=['message'=>'Logged In','status'=>true, 'share_data'=>'My share Data' ];
        return Inertia::render('page3')->with($ShareData);
    }

    function page4(){
        return Inertia::render('page4');
    }
    function PostBackRequest(Request $request){
        $Json= $request->input();
        $ShareData=['message'=>'Logged In','status'=>true, 'share_data'=>$Json ];
        return redirect()->route('page4')->with($ShareData);
    }

    function page5(){
        return Inertia::render('page5');
    }
}
