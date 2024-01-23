<?php

namespace App\Services\Roless;

// use App\Models\User;

use App\Models\role;
use Illuminate\Http\Request;

class myrole
{


    public function getall()
    {


       $rols = role::all();

        return $rols;

    }

    public function store(Request $request)

    {
        $role=role::create($request->all());
        return $role;
        // $clients = User::find($id);
        // if (!$clients) {
        //     abort(404);
        // }
        // return $clients;
    }


    public function showdetails($id){
        $role=role::find($id);
        return $role;
    }
    public function update(Request $request,$id)
    {
        $role=role::find($id);
        $role->update($request->all());
        if($role){
            return true;
        }
        else{
            return false;
        }
    }

    public function deleteClient($id)
    {
        // $user = User::find($id);
        // if ($user) {
        //     $user->delete();
        //     return true;

        // } else {
        //     return false;
        // }

    }
    public function search(Request $request)
    {
        // $searchOption = $request->input('search_option');
        // $searchValue = $request->input('search_value');

        // // Perform your dynamic search logic here and return the results
        // $results = Role::where($searchOption, 'like', '%' . $searchValue . '%')

        //     ->get();

        // return view('search_results', compact('results'));
    }

    public function DeleteRole($id){

        $role=role::find($id);

        if($role){
            $role->delete();
            return true;
        }
        else{
            return false;
        }



    }

}
