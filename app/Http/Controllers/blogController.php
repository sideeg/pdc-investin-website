<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class blogController extends Controller
{
    public function index()
    {

        //We will use datatable to display data by using index_data function
        // $orders = Order::paginate(10);
        // return view('orders.index', compact('orders'));
        $blog = json_encode( blog::orderBy('id', 'asc')->select('id','blog_name', 'Brief',"created_at","image")->get());
        dd($blog);
        return view('welcome', compact('blog'));

    }

    public function blogById( $id)
    {
        dd(json_encode( blog::find($id)));
    }
}
