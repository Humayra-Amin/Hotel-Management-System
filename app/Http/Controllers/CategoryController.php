<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{
    


    public function show($id)
    {

        $categories=Category::where("id",$id)->firstOrfail();
        return view("admin.category.viewcategory")->with('categories',  $categories);       

    }



    public function index()
    {

        $categories = Category::all();
        return view("admin.category.categorylist")->with('categories',  $categories);
    
    }



    public function create()
    {
        return view("admin.category.addcategory");

    }



    public function update(Request $request,$id)
    {   
        $request->validate([
            'categoryname' => 'required|max:50'
,
        ]);


        $category = Category::find($id);
        $category->categoryname = $request->categoryname;
        $category->update();
        

        return redirect("admin/category")->with("success", "Category updated.");

    }


    
    public function edit($id)
    {

        $category=Category::where("id",$id)->firstOrfail();
        return view("admin.category.editcategory")->with('category',  $category);

    }



    public function store(Request $request)
    {

        $request->validate([
            'categoryname' => 'required|max:50|unique:categories',
        ]);
         
    
        $category = new Category();
        $category->categoryname = $request->categoryname;
    
        $category->save();
    
    
        return redirect("admin/category")->with("success", "Category added.");

    }



    public function delete(Request $request)
    {

        Category::destroy($request->id);
        return redirect()->back()->with('success','Record Successfully Deleted');

    }


} 
