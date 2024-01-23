<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Admin\Admin;

class AdminController extends Controller
{
    protected $admin;

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;

    }

    public function show()
    {
        $Admins = $this->admin->getall();
        if ($Admins) {
            return view('Admins.Index', compact('Admins'));
        }
    }
    public function showdetails($id)
    {
        $admin = $this->admin->showdetails($id);
        if ($admin) {
            return view('Admins.Showdetails', compact('admin'));
        }
    }
    public function create()
    {
        return view('Admins.Add');
    }

    public function store(Request $request)
    {
        $Admin = $this->admin->store($request);

        if ($Admin) {
            // $invite->delete();

            return redirect()->route('admin.show')->with('createdsyccess', 'تم انشاء ادمن بنجاح!');
        } else {
            return redirect()->route('admin.show')->with('errordelete', 'فشل حذف الادمن.');
        }
    }

    public function edit($id)
    {
        $admin = User::find($id);
        if ($admin) {
            return view('Admins.Edit', compact('admin'));
        }
    }
    public function update(Request $request, $id)
    {
        $admin = $this->admin->update($request, $id);
        if ($admin) {
            return redirect()->route('admin.show')->with('success', 'تم تعديل الادمن بنجاح');

        } else {
            return redirect()->route('admin.show')->with('error', 'فشل تعديل الادمن.');
        }
    }

    public function delete($id){
        $admin=$this->admin->deleteAdmin($id);
        if ($admin) {
          ;

            return redirect()->route('admin.show')->with('successdelete', 'تم حذف الادمن بنجاح!');
        } else {
            return redirect()->route('admin.show')->with('errordelete', 'فشل حذف الادمن.');
        }
    }


    public function search(Request $request)
    {
        $searchOption = $request->input('search_option');
        $searchValue = $request->input('search_value');


        if ($searchValue == null) {


            $results = $this->admin->getall();

            // return response()->json(['message'=>$results]);
        } else {   // Perform your dynamic search logic here and return the results
            $results = User::where(function ($query) use ($searchOption, $searchValue) {
                $query->where($searchOption, 'like', '%' . $searchValue . '%')
                    ->orWhere($searchOption, 'like', $searchValue . '%');
            })
                ->where('role_id', 1)
                ->get();
        }


        // echo (json_encode($results));

        return response()->json(['message' => $results]);
    }


}
