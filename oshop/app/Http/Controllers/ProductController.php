<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function addproduct(Request $req){
        $product = new product();
        $product->proname = $req->proname;
        $product->price = $req->price;

        if(Input::hasFile('img')){
            echo 'Uploaded';
            $file = Input::file('img');
            $file->move(public_path().'/uploads', $file->getClientOriginalName());

            $product->img = $file->getClientOriginalName();
        }
        $product->cateid = $req->cateid;
        $product->save();

        $data['data'] = category::all();
        if(count($data)>0){
            return view('addproduct', $data);
        }else{
            return view('addproduct');
        }
    }

    public function getproduct(){
        $product = product::all();
        $cate = category::all();
        $daylacate = 0;
        return view('product', compact('product', 'cate', 'daylacate'));
    }

    public function getbuyproduct(){
        $product = product::all();
        $cate = category::all();
        $daylacate = 0;
        return view('buyproduct', compact('product', 'cate', 'daylacate'));
    }


    public function editproduct(Request $req){
        $data = product::where('proid', $req->proid)->first();
        $cat = category::all();
        return view('editproduct', compact('data', 'cat'));
    }

    public function updateproduct(Request $req, $proid){
        try{
            $product = product::findOrFail($proid);
            $product->proname = $req['proname'];
            $product->price = $req['price'];

            if(Input::hasFile('img')){
                echo 'Uploaded';
                $file = Input::file('img');
                $file->move(public_path().'/uploads', $file->getClientOriginalName());

                $product->img = $file->getClientOriginalName();
            }
            $product->cateid = $req['cateid'];
            $product->save();

            return redirect()->route('getallproduct');

        }catch (ModelNotFoundException $ex){

        }
    }

    public function getByCate($cateid){
        $product = product::where('cateid',$cateid)->orderBy('proname', 'desc')->take(10)->get();
        $cate = category::all();
        $daylacate = 1;
        return view('product', compact('product','cate','daylacate'));
    }

    public function getByCateBuy($cateid){
        $product = product::where('cateid',$cateid)->orderBy('proname', 'desc')->take(10)->get();
        $cate = category::all();
        $daylacate = 1;
        return view('buyproduct', compact('product','cate','daylacate'));
    }
}
