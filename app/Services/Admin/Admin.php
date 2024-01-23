<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule as ValidationRule;
class Admin
{


    public function getall()
    {


        $admins = User::all()->where('role_id', 1);

        return $admins;

    }
    public function showdetails($id)
    {
        $admin = User::find($id);
        if (!$admin) {
            abort(404);
        }
        return $admin;
    }


    public function update(Request $request,$id){
        $admin = User::find($id);


        $request->validate([
            'name' => 'required|string|max:255',

            'email' => ['required', 'string', 'email', 'max:255', ValidationRule::unique('users')->ignore($id)],
            'phone_number' => ['required', 'digits:9'],
        ]);

        $data = $request->all();

        // Update only the fields that are present in the request
        // foreach (['name', 'address', 'email', 'phone_number'] as $field) {
        //     if ($request->has($field)) {
        //         $data[$field] = $request->input($field);
        //     }
        // }


        if($request->password == ""){

            $admin->update([
                'name' =>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'phone_number'=>$request->phone_number

            ]);

        }
        else{
            $data['password'] = Hash::make($data['password']);

            $admin->update($data);
        }
        return $admin;

    }

    public function store(Request $request){
        // $request->validate=[

        // ]
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'digits:9'],
            // 'image_path'=>'nullable',
            'password' => ['required', 'min:6'],
            // 'country_id' => ['required'], // Add this line

        ]);
        // dd('a');


        $data = $request->all();
        $password = $data['password'];
        $data['password'] = Hash::make($data['password']);
        if ($request->hasFile('profile_photo_path')) {

            $image = $request->profile_photo_path->store('profile-photos');
            // dd($image);

            // $image = $request->file('image_path');
            // //$image->store('image');
            // $fileName = date('Ymdhisu').'.'.$image->guessExtension();
            // $path = $image->storeAs('image',$fileName);
            $data['profile_photo_path'] = $image;
        }
        // $x='storage/img'
        $user = User::create($data);
        $user->role_id = 1;
        // $user->country_id=$request->country_id;
        // $user->city_id=$request->city_id;
        $user->save();
        return $user;

    }



    public function deleteAdmin($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return true;

        } else {
            return false;
        }

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
