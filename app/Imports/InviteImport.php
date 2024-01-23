<?php

namespace App\Imports;

use App\Models\invite;
use App\Models\party;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InviteImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $x=$row['party_name'];
        // dd($x);
        $user=auth()->user()->id;
        // dd(auth()->user()->id);
        $party=party::where('name',$x)->where('user_id',$user)->first();
        return new invite([
            'name'=>$row['name'],
            'email'=>$row['email'],
            'phone_number'=>$row['phone_number'],
            'party_id'=>$party->id,
            'status'=>0
        ]);
    }
}
