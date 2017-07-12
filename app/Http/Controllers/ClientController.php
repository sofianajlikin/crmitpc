<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
/*use View;*/

class ClientController extends Controller
{
		public function index()
		{

			$clients = DB::table('clients')->where('Stage','<>',"Lead in" )->get();
			return view('admin.VClient',compact('clients'));

		}
        public function index_lead()
        {

            $clients = DB::table('clients')->where('Stage',"Lead in" )->get();
            return view('admin.VLead',compact('clients'));

        }
        public function Add1()
        {
            return view('admin.Client');


        }

        public function index1()
        {

          $client = DB::table ('clients')->where('id',$id)->get();
            return view('admin.clientpage',compact('clients'));

        }

            public function update($id)
        {
/*            $clients = cliensts::find($id)
            $allevent = DB::table('cleints')
                    ->join('cevent','clients.id','=','clients.client_id')
                    ->where('clients.id',$id)
                    ->get();
             view('admin.EClient1',compact('client',$client, 'allevent',$allevent));*/

            $clients = DB::table ('clients')->where('id',$id)->get();
           /* dd($client);*/
            return view('admin.EClient',compact('clients'));


        }

        public function view($id)
        {
/*            $clients = cliensts::find($id)
            $allevent = DB::table('cleints')
                    ->join('cevent','clients.id','=','clients.client_id')
                    ->where('clients.id',$id)
                    ->get();
             view('admin.EClient1',compact('client',$client, 'allevent',$allevent));*/

    $clients = DB::table ('clients')->where('id',$id)->get();
    $cevents = DB::table ('cevents')->where('client_id',$id)->orderBy('id', 'Aesc') ->get();
    $quotes = DB::table ('quotes')->where('client_id',$id)->orderBy('id', 'Aesc') ->get();
         /*  dd($clients, $cevents);*/
         return view('admin.clientpage',compact('clients','cevents','quotes'));


        }

    	public function store(Request $request)
    {
        $name_client = $request -> input('name_client');
        $email_client = $request -> input('email_client');
        $Website_client = $request -> input('Website_client');
        $Phone_client = $request -> input('Phone_client');
        $information_client = $request -> input('information_client');
        $City = $request -> input('City');
        $Country = $request -> input('Country');
        $type_of_business = $request -> input('type_of_business');
        $Location = $request -> input('Location');
        $sales_id = $request -> input('sales_id');
        $Stage = $request -> input('Stage');




    DB::table('clients')->insert([
    			'name_client'=>$name_client,
    			'email_client'=>$email_client,
    			'Website_client'=>$Website_client,
    			'Phone_client'=>$Phone_client,
    			'information_client'=>$information_client,
                'City'=>$City,
                'Country'=>$Country,
                'type_of_business'=>$type_of_business,
                'Location'=>$Location,
                'sales_id'=>$sales_id,
                'Stage'=>$Stage,

    	]);

       	  $clients = DB::table('clients')->get();
            return view('admin.VClient',compact('clients'));
    }




}
