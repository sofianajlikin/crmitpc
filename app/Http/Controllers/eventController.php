<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class eventController extends Controller
{

    public function Eindex()
        {

            $clients = DB::table('clients')->where('Stage','<>',"Lead in" )->get();
            return view('admin.VClient',compact('clients'));

        }
    public function store(Request $request)
    {
        $name_event = $request -> input('name_event');
        $details = $request -> input('details');
       $Nextfollowupdate = $request -> input('Nextfollowupdate');
         $client_id = $request -> input('client_id');
     /* $information_client = $request -> input('information_client');*/


    DB::table('cevents')->insert([
    			'name_event'=>$name_event,
                'details'=>$details,
   		    	'Nextfollowupdate'=>$Nextfollowupdate,
    			'client_id'=>$client_id,
    		/* 	'Phone_client'=>$Phone_client,
    			'information_client'=>$information_client, */
                    	]);

       	  return redirect()->back();
         
    }}
