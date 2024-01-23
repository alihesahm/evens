<?php

namespace App\Services\client;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class client
{


    public function getall()
    {

        $clients = User::all()->where('role_id', 2);

        return $clients;

    }

    public function showdetails($id)
    {
        $clients = User::find($id);
        if (!$clients) {
            abort(404);
        }
        return $clients;
    }

    public function deleteClient($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return true;

        } else {
            return false;
        }

    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'phone_number' => ['required', 'digits:9'],
            // 'image_path'=>'nullable',
            'password' => ['required', 'min:6'],
            // 'country_id' => ['required'], // Add this line

        ]);
        // dd('a');


        $data = $request->all();
        $password = $data['password'];
        $data['password'] = Hash::make($data['password']);
        if ($request->hasFile('image_path')) {

            $image = $request->image_path->store('Image');
            // dd($image);

            // $image = $request->file('image_path');
            // //$image->store('image');
            // $fileName = date('Ymdhisu').'.'.$image->guessExtension();
            // $path = $image->storeAs('image',$fileName);
            $data['image_path'] = $image;
        }
        // $x='storage/img'
        $user = User::create($data);
        $user->role_id = 2;
        // $user->country_id=$request->country_id;
        // $user->city_id=$request->city_id;
        $user->save();
        return $user;
    }
    public function search(Request $request)
    {
        $searchOption = $request->input('search_option');
        $searchValue = $request->input('search_value');

        // Perform your dynamic search logic here and return the results
        $results = User::where($searchOption, 'like', '%' . $searchValue . '%')
            ->where('role_id', 2)
            ->get();

        return view('search_results', compact('results'));
    }

}
