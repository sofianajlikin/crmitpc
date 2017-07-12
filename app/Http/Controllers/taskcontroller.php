<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class taskcontroller extends Controller
{
     public function view()
        {
/*            $clients = cliensts::find($id)
            $allevent = DB::table('cleints')
                    ->join('cevent','clients.id','=','clients.client_id')
                    ->where('clients.id',$id)
                    ->get();
             view('admin.EClient1',compact('client',$client, 'allevent',$allevent));*/

            $cclients = DB::table ('clients')->groupBy()->count() ;
            $ccevents = DB::table ('cevents')->groupBy()->count();
            $cquotes = DB::table ('quotes')->groupBy()->count();
   		/*	dd($cclients, $ccevents, $cquotes);*/
         return view('admin.Dashboard',compact('cclients','ccevents','cquotes'));


        }}
