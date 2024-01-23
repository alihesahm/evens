<?php

namespace App\Http\Controllers;

use App\Models\invite;
use App\Models\party;
// use App\Models\secuirity;
use App\Services\Secuirity\Secuirity;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Validation\ValidationException;

class secuirityController extends Controller
{

    protected $secuirity;
    public function __construct(Secuirity $secuirity)
    {

        $this->middleware(
            'auth:sanctum',
        );
        $this->secuirity = $secuirity;
    }


    public function show()
    {


        $secuirity = $this->secuirity->getall();
        if ($secuirity) {
            return view('Secuirity.Index', compact('secuirity'));

        }





    }
    public function create()
    {
        $userid = auth()->user()->id;
        // dd($userid);
        $partyuser = party::all()->where('user_id', '==', $userid);

        // dd($partyuser);
        // echo (json_encode($partyuser));

        return view('Secuirity.Add', compact('partyuser'));
    }

    public function store(Request $request)
    {

        $secuirity = $this->secuirity->store($request);

        if ($secuirity) {
            // $invite->delete();

            return redirect()->route('secuirity.show')->with('createdsyccess', 'تم انشاء الأمن بنجاح!');
        } else {
            return redirect()->route('secuirity.show')->with('errordelete', 'فشل حذف الأمن.');
        }



    }

    public function showdetails($id)
    {
        $secuirity = User::find($id);
        return view('Secuirity.Showdetails', compact('secuirity'));

    }
    public function edit($id)
    {

        $secuirity = User::find($id);
        return view('Secuirity.Edit', compact('secuirity'));

    }

    public function update(Request $request, $id)
    {
        $secuirity = $this->secuirity->update($request, $id);


        if ($secuirity) {
            return redirect()->route('secuirity.show')->with('success', 'تم تعديل الامن بنجاح');

        } else {
            return redirect()->route('secuirity.show')->with('error', 'فشل تعديل الأمن.');
        }







    }
    public function search(Request $request)
    { {
            $searchOption = $request->input('search_option');
            $searchValue = $request->input('search_value');
            $user_id = auth()->user()->id;


      
            if($searchValue == 'all'){


                $results=$this->show();

                // return response()->json(['message'=>$results]);
            } else {
                $results = User::where(function ($query) use ($searchOption, $searchValue) {
                    $query->where($searchOption, 'like', '%' . $searchValue . '%')
                        ->orWhere($searchOption, 'like', $searchValue . '%');
                })
                    ->where('role_id', 3)
                    ->where('manager_creator_id', $user_id)
                    ->get();
            }


            // echo (json_encode($results));

            return response()->json(['message' => $results]);
        }
    }
    public function delete($id)
    {

        $secuirity = User::find($id);


        if ($secuirity) {
            $secuirity->delete();

            return redirect()->route('secuirity.show')->with('successdelete', 'تم حذف الأمن بنجاح!');
        } else {
            return redirect()->route('secuirity.show')->with('errordelete', 'فشل حذف الأمن.');
        }
    }
    public function check()
    {

        return view('Secuirity.QRcheck');
    }

    public function checkqr($id)
    {
        $invite_id = invite::find($id);
        // DB::table('')

        if ($invite_id) {
            $party_id = $invite_id->party_id;
            $party = party::find($party_id);

            if ($party) {
                $user_id = $party->user_id;
                $security_id = $party->secuirity_id;

                $user = User::find($user_id);
                $userSecurity = User::find($security_id);

                $creator = $userSecurity->manager_creator_id;

                if (auth()->user()->id === $security_id && $creator == $user->id) {
                    if ($invite_id->status == 0) {
                        $invite_id->status = 1;
                        $invite_id->save();

                        return response()->json(['message' => 'تم التحقق من هذا الشخص ومسموح له بالدخول']);
                    }
                    return response()->json(['message' => 'هذا الشخص تم التححق منه من قبل وقد دخل ولا يمكن استخدام هذا الرمز مره اخرى رجاء ادخل رمز جديد']);


                }
                return response()->json(['message' => 'عذراً لست مخولاً بالقيام بعمليه الفحص لهذا الحفله']);
            }
            return response()->json(['message' => 'عذراً لم يتم العثور على هذا الحفله قد تكون غير موجوده او انتهت بالفعل']);

        }

        return response()->json(['message' => 'لا يوجد اي دعوه بهذا الرمز']);

        // if($usersecuirity == auth()->user()->id){
        //     return response()->json(['message' => 'true']);
        // };
        return response()->json(['message' => 'false']);


        // $party_id=party::find($)


    }
    public function x()
    {
        return response()->json(['message' => 'hello']);

        // dd ('Hello');
    }
}
