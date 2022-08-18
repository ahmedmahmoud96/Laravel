<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Dotenv\Validator;
use Illuminate\Http\Request;

class TesDBController extends Controller
{
    public function index(){
        $users=Offer::select()->get();
        return view('tesDB.index',compact('users'));
    }


    public function create(){
        return view('tesDB.create');
    }

    public function store(Request $request){

        $rols=$this->getRols();
        $mass=$this->getMass();

        $validate=\Illuminate\Support\Facades\Validator::make($request->all(),$rols,$mass);

        if($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput($request->all());
        }

        else{
            //      Insert To DB

        Offer::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'detils'=>$request->detils,
        ]);

        return redirect()->route('off.index')->with('Succ','تم اضافة البيانات بنجاح');
        }


    }

    protected function getRols(){
      return  $rols=[
            'name'=>'required|unique:offers,name|max:255',
            'price'=>'required|max:255|numeric',
            'detils'=>'required|max:255',
        ];
    }

    protected function getMass(){
        return  $mass=[
            'name.required'=>'الاسم مطلوب',
            'price.required'=>'السعر مطلوب',
            'price.numeric'=>'رقم',

        ];
    }

}
