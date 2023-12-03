<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Category;


class Sitecontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function dashboard(){
        return view('dashboard/navigator');
    }
    public function category(){
        return view('dashboard/pages/category');
    }
    public function package(){
        $category_list=Category::all();
        return view('dashboard/pages/package',compact('category_list'));
        
    }
    public function packagelist(){
        $package_list=Package::all();
       
        return view('dashboard/pages/packagelist',compact('package_list'));
    }
    
    public function addCategory(request $request){
       
        $insert_category=new Category;
        $insert_category->category=$request->input('category');
        try{
            $existingCategory = Category::where('category', $insert_category->category)->first();
            if(!$existingCategory) {
                $insert_category->save();
                return redirect()->back()->with('success', 'Category saved successfully!');
                
            }
            else{
                return redirect()->back()->with('error', 'Category already exists!');
            }
           
        }
        
        catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong!');
        }
        
       
         
        
    }
    public function addPackage(request $request){
    //    dd($request->all());
       $imageName=time().'.'.$request->image->extension();
       $request->image->move(public_path('images'),$imageName);
      
       $package=new Package;
       $package->category=$request->input('category');
       $package->price=$request->input('price');
       $package->details=$request->input('details');
       $package->image=$imageName;
       
    
       try{
           $package->save();
           return redirect()->back()->with('success', 'Package saved successfully!');
       }
       catch(Exception $e){
           return redirect()->back()->with('error', 'Something went wrong!');
       }
    }
}
