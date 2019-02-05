<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'hello';
        return view('pages.index')->with('le',$title);
    }
    public function about(){
       
        return view('pages.about')->with('title','My App');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'seo', 'cyber expert']
            );
        return view('pages.services')->with($data);
    }

    public function home(){
     
        return view('pages.home');
    }

    public function oath(){
     
        return view('auth.oath');
    }

    public function upload(){
     
        return view('auth.upload');
    }

    public function contactus(){
     
        return view('pages.contactus');
    }

}
