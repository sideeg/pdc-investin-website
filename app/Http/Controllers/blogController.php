<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class blogController extends Controller
{
    public function index()
    {
        return view('pages.blog');

        //We will use datatable to display data by using index_data function
        // $orders = Order::paginate(10);
        // return view('orders.index', compact('orders'));
        //$blog = json_encode( blog::orderBy('id', 'asc')->select('id','blog_name', 'Brief',"created_at","image")->get());
       $blog = blog::paginate(10);
        dd($blog);
        return view('pages.blog', compact('blog'));

    }

    public function blogById( $id)
    {
        return view('pages.article');

        dd(json_encode( blog::find($id)));
    }
}