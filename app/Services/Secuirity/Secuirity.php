<?php
namespace App\Services\Secuirity;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\ValidationException;
class Secuirity{



    public function getall(){
        $user_id = auth()->user()->id;

        $secuirity = User::where('manager_creator_id', $user_id)->get();

        return $secuirity;
    }
    public function store(Request $request){

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

                $data['profile_photo_path'] = $image;
            }
            // $x='storage/img'
            $user = User::create($data);
            $user->role_id = 3;
            $user->manager_creator_id=auth()->user()->id;
            // $user->country_id=$request->country_id;
            // $user->city_id=$request->city_id;
            $user->save();
            return $user;
    }

    public function update(Request $request,$id){
        $secuirity = User::find($id);


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

            $secuirity->update([
                'name' =>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'phone_number'=>$request->phone_number

            ]);

        }
        else{
            $data['password'] = Hash::make($data['password']);

            $secuirity->update($data);
        }
        return $secuirity;

    }

}












