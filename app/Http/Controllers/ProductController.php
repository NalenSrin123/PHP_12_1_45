<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getAllProduct(){
        $products=Product::query()->orderBy('id','DESC')->get();
        return view('listProduct',compact('products'));
    }
    public function addProduct(Request $request){
        $input=$request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'stock'=>'required|numeric',
            'brand'=>'required',
            'color'=>'required',
            'description'=>'required'
        ]);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $fileName='AUTOCAR_'.rand(1,10000).'_'.$file->getClientOriginalName();
            $file->move('upload',$fileName);
            $input['image']='upload/'.$fileName;
        }else{
            $input['image']=$request->old_image;
        }
        $btn=$request->btn;
        if($btn=='Save'){
            $insert=Product::create($input); //insert data into table products
            if($insert){
                return redirect('/');
            }
        }else{
            $id=$request->id;
            $update=Product::query()->where('id',$id)->update($input);
            if($update){
                return redirect('/');
            }
        }

    }
}
