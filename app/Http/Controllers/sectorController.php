<?php

namespace App\Http\Controllers;
use App\sector;
use App\session;
use Illuminate\Http\Request;

class sectorController extends Controller
{
    /***********
     * 
     * 
     */
    public function index($id)
    {
        $sector = json_encode(sector::where('id',$id)->select('id','sector_name', 'Brief',"text","image1","image2","image3"
        ,"icon")->get());

        $session = json_encode(session::all()->where('sector_id',$id));
        dd($session);
       
        
        return view('welcome')->with('sector',$sector )->with('session',$session );//TODO page_name
    }

    /****
     * *
     * 
     * 
     */
    public function order(Request $request)
{
    $data = $request->validate([
        'name' => ['required'],
        'address' => ['required'],
        'session_id' => ['required'],
        'phone_number' => ['required'],
        'num_of_taken_share' => ['required'],


     ]);
    $ins = $data->all();
    
    $store = DB::table("share_order")->insert([$ins]);
    share_order()->flash('message', 'success');
    return url('Users/home');//TODO page_name
}
}
