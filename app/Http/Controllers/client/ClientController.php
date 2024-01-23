<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\User;
// use Illuminate\Http\Request;
use App\Services\client\client;

class ClientController extends Controller
{
    protected $clients;

    public function __construct(client $client){

        $this->clients=$client;
    }

    public function show(){
        $clients=$this->clients->getall();
        // dd($clients);

        return view('Clients.Index',compact('clients'));

    }
    public function showdetails($id){
        $client=  $this->clients->showdetails($id);

        return view('Clients.Showdetails',compact('client'));
    }
    public function create(){
        return view('Clients.Add');
    }

    public function store(Request $request){
        // dd($request);
        $client=$this->clients->store($request);
        // dd($client);

        if ($client) {
            // $invite->delete();

            return redirect()->route('user.show')->with('createdsyccess', 'تم انشاء عميل بنجاح!');
        } else {
            return redirect()->route('user.show')->with('errordelete', 'فشل حذف عميل.');
        }

    }
    public function delete($id){
        $client=   $this->clients->deleteClient($id);
        if ($client) {
            // $invite->delete();

            return redirect()->route('user.show')->with('successdelete', 'تم حذف العميل بنجاح!');
        } else {
            return redirect()->route('user.show')->with('errordelete', 'فشل حذف العميل.');
        }
    }
    public function search(Request $request)
    {
        $searchOption = $request->input('search_option');
        $searchValue = $request->input('search_value');
        // // dd($searchValue);
        // dd($searchOption);
        // echo $searchValue;


        if($searchValue == 'all'){


            $results=$this->clients->getall();

            // return response()->json(['message'=>$results]);
        }
        else{   // Perform your dynamic search logic here and return the results
        $results = User::where(function ($query) use ($searchOption, $searchValue) {
            $query->where($searchOption, 'like', '%' . $searchValue . '%')
                  ->orWhere($searchOption, 'like', $searchValue . '%');
        })
        ->where('role_id', 2)
        ->get();
    }


            // echo (json_encode($results));

        return response()->json(['message'=>$results]);
    }
}
