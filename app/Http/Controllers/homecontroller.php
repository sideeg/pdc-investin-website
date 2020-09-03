<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use App\intro;
use App\about_us;
use App\sector;
use App\our_network;
use App\blog;
use App\success_stories;



class homeController extends Controller
{
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        // return view('index');
        // dd( success_stories::select('icon','name_en','name_ar', 'text_en','text_ar',"created_at")->get()));
        $success_stories = success_stories::select('icon','name_en','name_ar','text_ar', 'text_en','text_ar',"created_at")->get();
        $blog = blog::select('id','intro_en','intro_ar','blog_name_en','blog_name_ar', 'Brief_en','Brief_ar',"created_at","image")->take(3)->get();
        $our_network = our_network::all();
        $sector = sector::select('id','sector_name_en','sector_name_ar', 'Brief_en','Brief_ar','icon')->get();
        $about_us = about_us::all();
        $intro = intro::all();
        // dd($intro);
        return view('index')->with('intro',$intro )->with('about_us',$about_us )
        ->with('sector',$sector )->with('our_network',$our_network )->with('blog',$blog )
        ->with('success_stories',$success_stories );
    }

    public function message(Request $data)
{
    dd('I am here');
    $ins = $data->all();
    
    $store = DB::table("message")->insert([$ins]);
    session()->flash('message', 'success');
    return url('Users/home');
}
}
