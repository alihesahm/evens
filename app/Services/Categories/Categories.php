<?php

namespace App\Services\categories;
use App\Models\category;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class categories{



    public function getall(){
        $categories=category::all();
        return $categories;
    }






    public function store(Request $request){

        $categories=category::create($request->all());
        return $categories;
    }

    public function update(Request $request,$id){

        $category=category::find($id);
        $category->update($request->all());

        return $category;
    }
    public function categorydelete($id){
        $category=category::find($id);
        $category->delete();
        return $category;
    }


}
