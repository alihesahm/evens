<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Http\Request;
// use App\Services\Role\Roles;
// use App\Services\Role\Role;
use App\Services\Roless\myrole;
// use Laravel\Jetstream\Rules\Role as RulesRole;

class RoleController extends Controller
{
    protected $roles;
    public function __construct(myrole $role){
        $this->roles = $role;

    }

    public function show(){
        $roles=$this->roles->getall();
        if($roles){
            return view('roles.Index',compact('roles'));

        }
        abort(404);
    }
    public function create(){
        return view('roles.Add');
    }

    public function store(Request $request){
        // dd($request);
        $roles=$this->roles->store($request);
        if($roles){
            return redirect()->route('roles.show')->with('createdsyccess','تم اضافه دور جديد');
        }
    }
    public function showdetails($id){
        $role=$this->roles->showdetails($id);
        if($role){
                    return view('roles.Show',compact('role'));
        }



    }
    public function edit($id){
        $role=role::find($id);
        return view('roles.Edit',compact('role'));

    }
    public function update(Request $request,$id){
        $role=$this->roles->update($request,$id);
        if ($role) {


            return redirect()->route('roles.show')->with('success', 'تم تعديل الدور بنجاح!');
        } else {
            return redirect()->route('roles.show')->with('error', 'فشل حذف الدور.');
        }


    }

    public function delete($id){
        $role=$this->roles->DeleteRole($id);
        if ($role) {
            // $invite->delete();

            return redirect()->route('roles.show')->with('successdelete', 'تم حذف الدور بنجاح!');
        } else {
            return redirect()->route('roles.show')->with('errordelete', 'فشل حذف الدور.');
        }
        // return view('invites.Edit');

    }

  public function search(Request $request){
    $searchOption = $request->input('search_option');
    $searchValue = $request->input('search_value');

    if($searchValue == ''){
        $results = $this->roles->getall();
    } else {
        $results = Role::where(function ($query) use ($searchOption, $searchValue) {
            $query->where($searchOption, 'like', '%' . $searchValue . '%')
                  ->orWhere($searchOption, 'like', $searchValue . '%');
        })->get();
    }

    return response()->json(['message' => $results]);
}

}
