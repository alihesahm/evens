<?php

namespace App\Http\Controllers;

use App\Models\invite;
use App\Models\party;
use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{

    public function __construct()
    {
        $this->middleware(
            'auth:sanctum',
        );
    }

    public function homepage()
    {
        if (auth()->user()->role_id == 2) {
            $email = auth()->user()->email;
            $myemail = session()->get('email', $email);
            $counter_currentpartyuser = party::all()->where('user_id', auth()->user()->id)->count();


            $counter_secuirity_current_user = User::all()->where('manager_creator_id', auth()->user()->id)->count();
            // $party=party::all()->where('user_id',auth()->user()->id);
            // dd($party);
            $user = auth()->user();

            // Load the parties with their invitations
            // $parties = party::all()->where('user_id',$user->id);
            // dd($parties);
            $inv = invite::all();
            // dd($parties);
            $parties = Party::where('user_id', $user->id)->get();
            $invitationCounts = [];
            $partyNames = [];
            $partyAttendeesCount = [];
            $partyabsentCount = [];

            foreach ($parties as $party) {
                // Access the party ID
                $partyId = $party->id;



                $inviteCount = Invite::where('party_id', $partyId)->count();

                $invitationCounts[$partyId] = $inviteCount;
                $partyNames[$partyId] = $party->name;

                $attendeesCount = Invite::where('party_id', $partyId)->where('status', 1)->count();

                $partyAttendeesCount[$partyId] = $attendeesCount;

                $absentCount = Invite::where('party_id', $partyId)->where('status', 0)->count();
                $partyabsentCount[$partyId] = $absentCount;


            }



            return view('homepage', compact(
                'myemail',
                'counter_currentpartyuser',
                'counter_secuirity_current_user',
                'invitationCounts',
                'partyNames',
                'partyAttendeesCount',
                'partyabsentCount'
            )
            );
        } else if (auth()->user()->role_id == 1) {
            $party = party::count();
            $invite = invite::count();
            $user = User::where('role_id', 2)->count();
            $excludedRoleIds = [1, 2];
            $secuirity = User::whereNotIn('role_id', $excludedRoleIds)->count();
            return view('homepage', compact('user', 'invite', 'party', 'secuirity'));


        } else {
            return view('homepage');
        }

    }
    public function show()
    {
        return view('Users.Index');
    }
    public function create()
    {
        return view('Users.Add');
    }
    public function showdetails($id)
    {
        return view('Users.Showdetails');

    }
    public function edit($id)
    {
        return view('Users.Edit');

    }
}
