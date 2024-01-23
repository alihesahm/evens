<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\party;
use App\Models\User;
use Illuminate\Support\Facades\Notification;

use App\Notifications\createparty;
// use App\Notifications\createparty;
// use App\Notifications\createparty;
// use App\Notifications\createparty;
use App\Services\concerts;
// use App\Services\concert\concerts;
// use App\Notifications\createparty;

use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Gate as FacadesGate;

class concertsController extends Controller
{
    //
    protected $concert;
    public function __construct(concerts $concert)
    {
        $this->middleware('auth');
        $this->concert = $concert;
    }
    public function show()
    {
        if (auth()->user()->role->name == "Manager") {
            $user = auth()->user()->id;

            // dd($user);
            $currentparty_user = party::all()->where('user_id', $user);
            // dd($currentparty_user->total()); // what do you get here?

            // dd($currentparty_user);

            // dd($currentparty_user->secuirity_id);
            // foreach($currentparty_user as $par){
            //     print_r( $par);
            // }

            // echo($currentparty_user);
            return view('Concerts.Index', compact('currentparty_user'));
        } else {
            $party = party::all();
            return view('Concerts.Index', compact('party'));
        }

    }
    public function create()
    {

        $result = $this->concert->createpage();
        //    dd($result);
        if (auth()->user()->role_id == 2) {
            $category = category::all();
            $currentuser = auth()->user();
            $user_id = auth()->user()->id;
            $user = auth()->user();

            //     // $user=User::find(1);
            //     // $user->role->name;
            //     // dd($user->role->name);
            //     // dd($user_id->role->name);
            //     // $card=Card::find($id);
            //     // $card_id=$card->id;
            //     // $cardcomment=cardcomment::where('card_id',$card);
            //     // $user->ujds->name;

            $category = $result['category'];
            $currentuser = $result['currentuser'];
            $secuirity = $result['securityUsers'];


            //     $secuirity = User::with('role')->where('manager_creator_id', $user_id)->get();

            return view('Concerts.Add', compact('category', 'currentuser', 'secuirity'));
        } else {
            return redirect()->back();
        }

    }

    public function store(Request $request, $id)
    {
        // echo $id;
        // dd($request);
        $party = $this->concert->store($request, $id);
        //    $request->validate([
        //         'name'=>'required',
        //         'description' =>'required',
        //         // 'startdate'=>'required|after:today',
        //         // 'enddate'=>'required|after:startdate',
        //         // 'location' => 'required',
        //         // 'user_id'=>'required'

        //     ]);
        //     // $data['user_id']=User::find($id);

        //     $data = $request->all();

        //     // dd('dd');
        //     // echo( $data['user_id']);


        //     // dd($request->category_id);
        //     $party=party::create([
        //         "name"=>$data["name"],
        //         "description"=>$data["description"] ,
        //         "startdate"=> date("Y-m-d H:i",strtotime($data["startdate"])),
        //         'location' =>$data['location'],
        //         'user_id'=>$id,
        //         'secuirity_id'=>$data['secuirity_id'],
        //         'category_id'=>$request->category_id
        //     ]);
        //     $party->save();
        $Admin = User::where('role_id', 1)->where('email', 'Admin@admin.com')->first();
        // FacadesNotification::send()
        $user = auth()->user();
        $addparty="اضافه حفله";
        Notification::send($Admin, new createparty($party->id, $user->name, $party->name, $addparty,$user->profile_photo_path));
        // Notification::send(auth()->user()->name,$new createparty($party->id,'a'));


        if ($party) {

            return redirect()->route('concert.show')->with('createdsyccess', 'تم انشاء الفعاليه بنجاح!');
        } else {
            return redirect()->route('concert.show')->with('errordelete', 'فشل في انشاء الفعاليه');
        }
        // auth()->user()->party->save();
        // return redirect()->route('concert.create');


    }
    public function detailspage()
    {

        return view('Concerts.Showdetails');

    }
    public function showdetails($id)
    {
        if (auth()->user()->role->name == "Manager") {
            $concertdetails = party::where('id', $id)->firstOrFail();
            $secuirity_id = $concertdetails->secuirity_id;
            $security_id_in_user_table = User::find($secuirity_id);

            return view('Concerts.Show', compact('concertdetails', 'security_id_in_user_table'));
        } else if (auth()->user()->role_id == 1) {
            $concert_details = party::find($id);
            return view('Concerts.Show', compact('concert_details'));

        }




    }
    public function edit($id, $secuirity_id)
    {
        // dd($secuirity_id);
        // dd($id);
        $concert = party::find($id);
        // dd($concert);

        $category = category::all();



        $user_id = auth()->user()->id;


        $currentuser = auth()->user();

        $selected_secuirity = User::find($secuirity_id);
        // dd($secuirity_name);
        $secuirity = User::with('role')->where('manager_creator_id', $user_id)->get();


        return view('Concerts.Edit', compact('category', 'currentuser', 'concert', 'secuirity', 'selected_secuirity'));

    }
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     '
        // ])
        // $concert = party::where('id', $id)->update([
        //     'name' => request('name'),
        //     'description' => request('description'),
        //     'location' => $request->description,
        //     'startdate' => $request->startdate,
        //     'category_id' => $request->category_id,
        //     'secuirity_id' => $request->secuirity_id,
        // ]);
        $concert = $this->concert->update($request, $id);
        // $concert->save();
        // dd($concert);
        $current_concert=party::find($id);
        // dd($concert_id);

        $Admin = User::where('role_id', 1)->where('email', 'Admin@admin.com')->first();
        // FacadesNotification::send()
        $user = auth()->user();
        Notification::send($Admin, new createparty($current_concert->id, $user->name, $current_concert->name, 'تعديل حفله',$user->profile_photo_path));

        if ($concert) {
            return redirect()->route('concert.show')->with('success', 'تم تعديل الفعاليه!');
        } else {
            return redirect()->route('concert.show')->with('error', 'فشل تعديل الفعاليه');
        }
        // return redirect()->route('concert.show');

    }
    public function delete($id)
    {

        $result = $this->concert->delete($id);

        $Admin = User::where('role_id', 1)->where('email', 'Admin@admin.com')->first();
        // FacadesNotification::send()
        $user = auth()->user();
        Notification::send($Admin, new createparty($result->id, $user->name, $result->name, 'حذف حفله',$user->profile_photo_path));


        if ($result == true) {

            return redirect()->route('concert.show')->with('successdelete', 'تم حذف الفعاليه بنجاح!');

        } else {
            return redirect()->route('concert.show')->with('errordelete', 'فشل حذف الفعاليه.');

        }


    }

    public function search(Request $request)
    {
        $searchOption = $request->input('search_option');
        $searchValue = $request->input('search_value');
        // dd('aa');
        if (auth()->user()->role->name == "Manager") {

            // // dd($searchValue);
            // dd($searchOption);
            // echo $searchValue;
            $user = auth()->user()->id;



            if ($searchValue == 'all') {


                $results = $this->show();

                // return response()->json(['message'=>$results]);
            } else {   // Perform your dynamic search logic here and return the results
                $results = party::where(function ($query) use ($searchOption, $searchValue) {
                    $query->where($searchOption, 'like', '%' . $searchValue . '%')
                        ->orWhere($searchOption, 'like', $searchValue . '%');
                })
                    ->where('user_id', $user)
                    ->get();
            }


            // echo (json_encode($results));

            // return response()->json(['message'=>$results]);

        } else {
            if ($searchValue == 'all') {


                $results = $this->show();

                // return response()->json(['message'=>$results]);
            }
            else{
                $searchOption = $request->input('search_option');
                $searchValue = $request->input('search_value');
                // // dd($searchValue);
                // dd($searchOption);
                // echo $searchValue;
                // $user = auth()->user()->id;



          // Perform your dynamic search logic here and return the results
                    $results = party::where(function ($query) use ($searchOption, $searchValue) {
                        $query->where($searchOption, 'like', '%' . $searchValue . '%')
                            ->orWhere($searchOption, 'like', $searchValue . '%');
                    })
                        ->get();
                    // $result=$results->category;



            }


            // echo (json_encode($results));

            // return response()->json(['message'=>$results]);
        }
        return response()->json(['message' => $results]);


    }
}
