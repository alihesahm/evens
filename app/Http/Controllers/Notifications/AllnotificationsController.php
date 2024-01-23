<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Controllers\Controller;
use App\Models\party;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllnotificationsController extends Controller
{


    public function read($id)
    {
        // dd($id);


        // $party=party::find($id);
        // $Getid = DB::table('notifications')->where('data->party_id', $id)->get();

        // $Getid = DB::table('notifications')->where('id', $id)->get();
        // dd($Getid);

        // Update 'read_at' column
        // Update 'read_at' column
        // Update 'read_at' column
        DB::table('notifications')->where('id', $id)->update(['read_at' => now()]);

        // Retrieve notification data
        $notification = DB::table('notifications')->where('id', $id)->first();

        // Initialize an array to store the values
        $notificationArray = [];



        // $notificationArray['party_name'] = $partyDetails ? $partyDetails->name : null;
        // Access and store each column in the array
        // dd($notification);
        $notificationArray['id'] = $notification->id;

        $notificationArray['type'] = $notification->type;
        $notificationArray['notifiable_type'] = $notification->notifiable_type;
        $notificationArray['notifiable_id'] = $notification->notifiable_id;
        $notificationArray['data'] = json_decode($notification->data, true); // Decode as an associative array
        $notificationArray['read_at'] = $notification->read_at;
        $notificationArray['created_at'] = $notification->created_at;
        $notificationArray['updated_at'] = $notification->updated_at;

        // Access data properties
        $notificationArray['party_id'] = $notificationArray['data']['party_id'] ?? null;
        $partyDetails = party::where('id', $notificationArray['party_id'])->first();
        $notificationArray['party_name'] = $partyDetails ? $partyDetails->name : null;

        $notificationArray['user_creator'] = $notificationArray['data']['user_creator'] ?? null;
        $notificationArray['name'] = $notificationArray['data']['name'] ?? null;
        $notificationArray['title'] = $notificationArray['data']['title'] ?? null;

        // Store the decoded data separately if needed
        $decodedData = json_decode($notification->data);

        // Add the decoded data to the array
        $notificationArray['data'] = $decodedData;
        // dd($notificationArray['data']);

        // You can use $notificationArray



        //  dd($notifi);
        //  $details=json_decode($notification->data);


        //  $array=$details;

        //  dd($ss->title);



        return view('Notifications.details', compact('notificationArray'));




        // dd($Getid);




        // dd($Getid);



    }
    public function showall()
    {

        if (auth()->user()->role->name == "Admin") {
            $notifications = DB::table('notifications')->get()->toArray();


            $notifi = [];
            foreach ($notifications as $notification) {
                $decodedData = json_decode($notification->data);
                // dd($notification->id);
                $partyDetails = party::where('id', $decodedData->party_id)->first();



                $decodedData->party_name = $partyDetails ? $partyDetails->name : null;
                $decodedData->read_at = $notification->read_at;
                $decodedData->id = $notification->id;

                $notifi[] = $decodedData;
            }

        } else {
            return redirect()->back();

        }







        return view('Notifications.show', compact('notifi'));

    }

    public function readall()
    {
        $Admin = User::where('role_id', 1)->where('email', 'Admin@admin.com')->first();

        foreach ($Admin->unreadNotifications as $notification) {
            $notification->markAsRead();
            // $notification->delete();
        }
        return redirect()->back();

    }
    public function delete($id)
    {
        // dd($id);
        // dd($id);
        // dd($id);
        // $notification = DB::table('notifications')->where('id', $id)->first();
        $notification = DB::table('notifications')->where('id', $id)->first();

        // if ($notification) {
        //     return redirect()->back();
        // } else {
        //     // Notification not found
        //     // Handle the case when the notification with the specified ID does not exist


        // }
        if ($notification) {

            DB::table('notifications')->where('id', $id)->delete();

            return redirect()->route('notifications.show')->with('successdelete', 'تم حذف الاشعار بنجاح !');
        } else {
            return redirect()->route('notifications.show')->with('errordelete', 'فشل حذف الاشعار.');
        }
        // dd($notification);
        // $notification->data->delete();
        // $data = json_decode($notification);
        // dd()



        // dd($notification);



        // dd($notification);

        // if ($notification) {
        //     $data = json_decode($notification->data);
        //     // dd($data->party_id);

        //     // dd($data->party_id);
        //     $notification=$data->party_id;
        //     // dd($notification);
        //     // $notification->data->party_id->delete();
        //     $notifications=DB::table('notifications')->where();
        //     dd($notifications);
        //     // $notification->delete();
        //     // $party_id = $data->party_id;
        //     // $notification['party_id']=$party_id;
        //     // $notification['$party_id']->delete();
        // } else {
        //     // Notification with the specified party_id not found
        //     // }

        // }
    }
}
