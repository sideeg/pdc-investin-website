<?php

namespace App\Http\Controllers;
use App\sector;
use App\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class sectorController extends Controller
{
    /***********
     * 
     * 
     */
    public function index($id)
    {
        // return view('pages.sector');

        $sector = json_decode( sector::where('id',$id)->select('id','icon',"image1","image2","image3", 'background_image',
        'sector_name_en','sector_name_ar', 'Brief_en','Brief_ar',"text_en","text_ar")->get());

        $session =json_decode( session::where('sector_id', $id)->whereRaw("num_of_taken_share < total_num_of_shares")
        ->select('*')->get());

<<<<<<< HEAD
          dd($sector);       
=======
        //  dd($session);       
>>>>>>> 56a30245bad175bbd30129cc73abd07c3a4c59e8
        
        return view('pages.sector')->with('sector',$sector )->with('session',$session );//TODO page_name
    }
    
    /****
     * *
     * 
     * 
     */
    public function showForm()
    {
        return view('pages.order');

        # code...
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
     $session =json_decode( session::where('sector_id',$id)->whereRaw("num_of_taken_share < total_num_of_shares")
     ->get() );
    dd($session->Remainingshares);
        //  $data->num_of_taken_share > 
    $ins = $data->all();
    
    $store = DB::table("share_order")->insert([$ins]);
    share_order()->flash('message', 'success');
    return url('Users/home');//TODO page_name
}
}
