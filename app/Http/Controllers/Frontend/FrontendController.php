<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Backend\Product;
use App\Models\Backend\Gallary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function slidershow(){
        $data = Product::all();
        if(Auth::user()){
            $stat = True;
        }
        else{
            $stat = False;
        }

        return view('frontend.home',compact("data","stat"));
    }


    public function single($id){
        $prod = Product::find($id);
        $gals = Gallary::where('item_id',$id)->get();


        return view('frontend.pages.single-product',compact('prod','gals'));
    }
}
