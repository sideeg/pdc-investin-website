<?php

namespace App\Http\Controllers;
use App\sector;
use App\session;
use App\share_order;
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

        return view('pages.sector')->with('sector',$sector )->with('session',$session );//TODO page_name
    }
    
    /****
     * *
     * 
     * 
     */
    public function showForm($id)
    {
        $error = false;
        return view('pages.order', compact('id','error'));

        # code...
    }

    /****
     * *
     * 
     * 
     */
    public function order(Request $request, $id)
{
    $data = $request->validate([
        'name' => ['required'],
        'address' => ['required'],
        'email' => ['required'],
        'session_id' => ['required'],
        'phone_number' => ['required'],
        'num_of_taken_share' => ['required'],


     ]);
     $session =json_decode( session::find($id)->get() );
     $new_session = session::find($id);

     
        // dd($session[0]->Remainingshares ."pppppppppppppppppppppppppppppp". $request->num_of_taken_share );
     if($session[0]->Remainingshares < $request->num_of_taken_share){
         $error = true;
        return view('pages.order', compact('id','error'));
     }else{
         $new_session->num_of_taken_share += $request->num_of_taken_share;
         $new_session->setRemainingsharesAttribute($new_session->total_num_of_shares -$new_session-> num_of_taken_share);
        //  $session_update->Remainingshares = $session[0]->Remainingshares;
         $new_session->save();
     }
        //  $data->num_of_taken_share > 
    // $ins = $request->all();
    // dd('here');
    // $store = DB::table("shares_order")->insert([$ins]);
    $order = new share_order();
    $order->name = $request->name;
    $order->address = $request->address;
    $order->email = $request->email;
    $order->session_id = $request->session_id;
    $order->phone_number = $request->phone_number;
    $order->num_of_taken_share = $request->num_of_taken_share;
    
    $order->save();
    // dd($order);


    // share_order()->flash('message', 'success');
    return redirect('/');//TODO page_name
}
}
