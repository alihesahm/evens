<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use App\Services\Categories\Categories;


class CategoryController extends Controller
{
    //
    protected $categories;
    public function __construct(categories $category){
        $this->categories =$category;

    }
    public function index(){
        $Categories=$this -> categories -> getAll();

        if($Categories){
            return view('Categories.Index',compact('Categories'));
        }
        return redirect()->back();



        // dd($Categories);
    }

    public function create()
    {

        return view('Categories.Add');

    }
    public function store(Request $request){
        // dd('asa');


        $store=$this->categories->store($request);
        if($store)
        {


              return redirect()->route('category.show')->with('createdsyccess', 'تم انشاءصنف بنجاح!');;
        }
        else{
            return redirect()->route('category.show')->with('errordelete', 'فشل انشاء الصنف');
        }
        // $categories=category::create($request->all());
    }
    public function showdetails($id){
        $category=category::find($id);

        return view('Categories.Show',compact('category'));
    }
    public function edit($id){
        $category=category::find($id);

        return view('Categories.Edit',compact('category'));
    }
    public function update(Request $request,$id){

        $category=$this->categories->update($request,$id);
        if($category)
        {


              return redirect()->route('category.show')->with('createdsyccess', 'تم تعديل صنف بنجاح!');;
        }
        else{
            return redirect()->route('category.show')->with('errordelete', 'فشل تعديل الصنف');
        }

    }
    public function delete($id){
        $CategoryDelete=$this->categories->categorydelete($id);
        if ($CategoryDelete) {
            // $invite->delete();

            return redirect()->route('category.show')->with('successdelete', 'تم حذف الصنف بنجاح!');
        } else {
            return redirect()->route('category.show')->with('errordelete', 'فشل حذف الصنف.');
        }
    }
        public function search(Request $request){
        $searchOption = $request->input('search_option');
        $searchValue = $request->input('search_value');


        if($searchValue == 'all'){
            $results = $this->categories->getall();
        } else {
            $results = category::where(function ($query) use ($searchOption, $searchValue) {
                $query->where($searchOption, 'like', '%' . $searchValue . '%')
                      ->orWhere($searchOption, 'like', $searchValue . '%');
            })->get();
        }

        return response()->json(['message' => $results]);
    }
}

