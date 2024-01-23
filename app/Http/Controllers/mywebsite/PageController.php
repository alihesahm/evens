<?php

namespace App\Http\Controllers\mywebsite;

use App\Http\Controllers\Controller;
use App\Models\invite;
use App\Models\party;
use App\Models\report;
use App\Models\secuirity;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // abort(404);
        $party = party::count();
        $invite = invite::count();
        $user = User::where('role_id', '<>', 3)->count();
        $excludedRoleIds = [1, 2];
        $secuirity = User::whereNotIn('role_id', $excludedRoleIds)->count();
        // $secuirity=secuirity::count();
        // dd($user);
        return view('landingpage.index', compact('user', 'invite', 'party', 'secuirity'));
    }

  public function questform(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:reports'],

            // 'country_id' => ['required'], // Add this line

        ]);

        $data = $request->all();

        // $img='';
        // $data['reciever_id']==0;
        if ($request->hasFile('image_path')) {

            // dd('there');

            // dd($request->image_path);
            $image = $request->image_path->store('image_report');

            $data['image_path'] = $image;
            // dd($data['image_path']);
        }


        // dd($data);

        $report = report::create($data);

        $report->type = 'quest';
        $admin=User::where('role_id',1)->where('email','Admin@admin.com')->first();
    //   dd($admin);
        // $admin_id=$admin->id;
        // $admin_id=User::find($admin);
        // dd($admin->id);

        // foreach($admin as $a){

        // }
        $report->reciever_id=$admin->id;
        // $report->save();
        // $data['type']='quest';
        // $report->type=$data['type'];
        $report->save();
        if ($report) {
            return redirect()->route('indexpage');
            // return response()->json([
            //     'status'=>'success',
            //     'message'=>"Your report has been submitted successfully!"
            //     ]);
        }
         else {
            return response()->json(['error' => 'Error in sending your message!']);
        }




    }
}
