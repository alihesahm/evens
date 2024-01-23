<?php
namespace App\Services\Auth;

use App\Mail\Registermail;
use App\Models\city;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Authi
{



    public function loging(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $credentials=$request->only('email','password');
        // echo (json_encode($data));

        // dd($credentials);
        // auth()->user();
        return Auth::attempt($credentials);
    //    Auth::attempt($credentials);
    //    if( Auth::attempt($credentials)){
    //     return 'success';
    //     // return redirect()->route('index');
    //     // return response()->json(['status'=>200,'msg'=>"Logged in Successfully"]);
    //    }
    //    else {
    //     echo 'wrong';
    //     return response()->json(['status'=>403,'msg'=>'wrong']);
    //    }
    //    echo "sad";
    //    if (!Auth::check()) {
    //     return response()->json(['msg'=>"ایمیل یا رمز عبور ناد
    //     قالید"]);
    //     }else{
    //         $user= User::where("id",Auth::user()->id)->first();
    //         // $token = $user->createToken('my-app-token')->plainTextToken;
    //         return [
    //             "status"=>200,
    //             "user"=>$this->getUserData($user)
    //             ];
    //             }
    //    dd($checklogin);
        // return $checklogin;
        // if (Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])) {
        //     return redirect()->route('homepage');
        //     }else{
        //         return back() -> withInput() -> withErrors(['email'=>'Email or password is incorrect']);
        //         }

    }


    public function register(Request $request)
    {
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
        $user->role_id = 2;
        // $user->country_id=$request->country_id;
        // $user->city_id=$request->city_id;
        $user->save();


        $checklogin=auth::attempt(['email' => $data['email'], 'password' => $password], true);

        // Mail::to("abdo99669@gmail.com")->send(new Registermail($request->name,'
        // مرحبا بك يتمنى فريق حفلات سوفت قضاء وقت ممتعاً'));
        // // if($checklogin){
        // //     redirect()->route('index');
        // // }
        // // dd($checklogin);
        // // dd($checklogin);
        // // return $checklogin;
        // // else {

        // // }
        return $checklogin;


        // dd('s');

        // Hash the password before creating the user
        // $data['password'] = Hash::make($data['password']);

        // Create the user
        // try {
        //     $user = User::create([
        //         'name' => $data['name'],
        //         'email' => $data['email'],
        //         'password' => Hash::make($data['password']),
        //         'phone_number' => $data['phone_number'],
        //         'address' => $data['address'],
        //         'city_id' => $data['city_id'],
        //         'country_id' => $data['country_id'], // Add this line
        //     ]);

        //     // ... (continue with the rest of your user creation code)
        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }
    }

    public function getcities($id)
    {
        $html = '';
        $cities = city::where('country_id', $id)->get();
        //  return response()->json($neighborhoods);

        foreach ($cities as $city) {
            $html .= '<option value="' . $city->id . '">' . $city->name . '</option>';

        }

        return response()->json($html);

        //  return view('register',['neighborhoods'=>$neighborhoods]);

    }
}

?>
