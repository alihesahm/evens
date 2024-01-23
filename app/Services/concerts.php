<?php
namespace App\Services;

use App\Models\category;
use App\Models\party;
use App\Models\User;
// use App\Services\concerts;
use Illuminate\Support\Facades\Notification;

use App\Notifications\createparty;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\Facades\Notification as FacadesNotification;

// use App\Models\party;
// use GuzzleHttp\Psr7\Request;
// use Illuminate\Http\Request;

class concerts
{
    public function getConcert($concertId)
    {
        return ['concert' => 'Some concert'];
    }

    public function showdetails($id){
        $result = [];
        $concertdetails = party::where('id', $id)->firstOrFail();
        $secuirity_id = $concertdetails->secuirity_id;
        $security_id_in_user_table = User::find($secuirity_id);
        $result['concertdetails']=party::where('id', $id)->firstOrFail();
        $result['secuirity_id']=$result['concertdetails']->secuirity_id;
        $result['security_id_in_user_table']= User::find([$result['secuirity_id']]);
        return $result;
    }

    public function createpage()
    {
        // dd('s');
        $result = [];

        if (auth()->user()->role_id == 2) {
            $category = Category::all();
            $currentuser = auth()->user();
            $user_id = auth()->user()->id;
            $user = User::find($user_id);

            $securityUsers = User::with('role')->where('manager_creator_id', $user_id)->get();

            $result['category'] = $category;
            $result['currentuser'] = $currentuser;
            $result['user_id'] = $user_id;
            $result['user'] = $user;
            $result['securityUsers'] = $securityUsers;
            return $result;

        }

        // else{
        //     return redirect()->back();
        // }


    }

    public function store(Request $request, $id)
    {
        // echo $id;
        // dd($request);
        if (auth()->user()->role_id == 2) {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                // 'startdate'=>'required|after:today',
                // 'enddate'=>'required|after:startdate',
                // 'location' => 'required',
                // 'user_id'=>'required'

            ]);
            // $data['user_id']=User::find($id);

            $data = $request->all();

            // dd('dd');
            // echo( $data['user_id']);


            // dd($request->category_id);
            $party = party::create([
                "name" => $data["name"],
                "description" => $data["description"],
                "startdate" => date("Y-m-d H:i", strtotime($data["startdate"])),
                'location' => $data['location'],
                'user_id' => $id,
                'secuirity_id' => $data['secuirity_id'] ?? 0,
                'category_id' => $request->category_id
            ]);
            // $Admin = User::where('role_id', 1)->get();
            // $user = auth()->user()->name;

            // foreach ($Admin as $adminUser) {
            //     Notification::send($adminUser, new createparty($party->id, $user));
            // }

            // $Admin=User::all()->where('role_id',1);
            // // FacadesNotification::send()
            // $user=auth()->user()->name;
            // Notification::send($new createparty($party->id,$user));
            $party->save();

            return $party;
        }
        else{
            abort(401);
        }


    }

    public function update(Request $request,$id)
    {
        $concert = party::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'startdate' => $request->startdate,
            'category_id' => $request->category_id,
            'secuirity_id' => $request->secuirity_id ?? 0,
        ]);
        return $concert;
    }
    public function delete($id)
    {
        $concert = Party::find($id);

        if ($concert) {
            $concert->delete();
            return $concert;
            // return redirect()->route('concert.show')->with('successdelete', 'تم حذف الحفله بنجاح!');
        }
        else{
            return $concert;
        }


    }
}
