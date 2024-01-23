<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\city;
use App\Models\country;

use App\Services\auth\Authi;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class AuthController extends Controller


{
//
    // public Authi $x;
    protected $auth;

    public function __construct(Authi $auth)
    {
        $this->auth = $auth;
    }



    public function loginpage(){
        return view('login');
    }
    public function login(Request $request){
        // $data=$request->all();
        // echo json_encode($data);
        // echo "here";
        $this->auth->loging($request);
        if($this->auth->loging($request)){
            $email=$request->input('email');
            // $myemail=$request->session()->get('email',auth()->user()->role->name);
            // dd($s);
            // dd($request->session()->put('email',$email));

            return view('homepage',compact('email'));
        }
        else {
            return back()->withInput()->withErrors(['email' => 'Email or password is incorrect']);
        }

        // $s=$this->auth->loging($request);
        // dd($this->auth->log($request));
        // echo "vickie39@example.com";
        // dd($s);
        // if($this->auth->loging($request)){
        //     echo 'successs';
        //         // return redirect()->route('index');

        // }
        // else{
        //     return 'fail';
        // }
        // dd( $this->auth->log($request));

        // dd($check);
            // if ($check) {
            //     echo ('success');
            // return redirect()->route('homepage');
            // }else{
            //     return back() -> withInput() -> withErrors(['email'=>'Email or password is incorrect']);
            //     }
    }

    public function registerform(){

            $countries = country::all();
            $cities=city::all();


            return view('register',compact('countries','cities'));
    }

    public function register(Request $request){
        // dd("ss");
        // echo "above";
       $check= $this->auth->register($request);

       if($check==true){
        return redirect()->route('index');

       }
        // echo "Done";
        // return redirect('homepage');

        // if($this->auth->register($request)=='true')

        // {
        //    return 'succes';
        // }
        // return 'fail';
        // dd( $this->auth->register($request));
    }

    public function getneighborhood($id)
    {
        // $response = $this->auth->getcities($id);

        return response()->json($this->auth->getcities($id));

            // $html= '';
            //  $cities = city::where('country_id', $id)->get();
            // //  return response()->json($neighborhoods);

            //  foreach($cities as $city)
            //  {
            //     $html.='<option value="'.$city->id.'">'.$city->name. '</option>';

            //  }

            //  return response()->json($html);

            //  return view('register',['neighborhoods'=>$neighborhoods]);

    }
    public function logout()
    {
        // echo "above";
        auth::guard('web')->logout();
        // echo 'under';
        Session::flush();
        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
