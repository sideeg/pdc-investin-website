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
use App\message;



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
// <<<<<<< HEAD
        // dd( success_stories::select('icon','name_en','name_ar', 'text_en','text_ar',"created_at")->get()));
        $success_stories = success_stories::select('icon','name_en','name_ar','text_ar', 'text_en','text_ar',"created_at")->get();
        $blog = blog::select('id','intro_en','intro_ar','blog_name_en','blog_name_ar', 'Brief_en','Brief_ar',"created_at","image")->take(3)->get();
        $our_network = json_decode(our_network::all());
        $sector = json_decode(sector::select('id','intro_en','intro_ar','sector_name_en','sector_name_ar', 'Brief_en','Brief_ar','icon')->get());
// =======
//         // dd(json_encode( success_stories::select('icon','name_en','name_ar', 'text_en','text_ar',"created_at")->get()));
//         $success_stories = json_encode(success_stories::select('icon','name_en','name_ar','text_ar', 'text_en','text_ar',"created_at")->get());
//         $blog =json_encode( blog::select('id','intro_en','intro_ar','blog_name_en','blog_name_ar', 'Brief_en','Brief_ar',"created_at","image")->take(3)->get());
//         $our_network = json_decode(our_network::all());
//         $sector = json_decode(sector::select('id','sector_name_en','sector_name_ar', 'Brief_en','Brief_ar','icon')->get());
// >>>>>>> 5982b3f1aa1fa9feeec0d6097af70255aa9b7418
        $about_us = about_us::all();
        $intro = json_decode( intro::all());
        //   dd($our_network);
        return view('index')->with('intro',$intro )->with('about_us',$about_us )
        ->with('sector',$sector )->with('our_network',$our_network )->with('blog',$blog )
        ->with('success_stories',$success_stories );
    }

    public function message(Request $request)
{
    //  dd($data);

     $validatedData = $request->validate([
        'name' => 'required|max:255',
        'message' => 'required',
    ]);

    $message = new message();

    $message->name = $request->name;
    $message->email = $request->email;
    $message->subject = $request->subject;
    $message->message = $request->message;
    $message->save();

    return redirect('/');
}
}
