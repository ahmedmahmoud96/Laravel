<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('DB.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store()
//    {
//        Offer::create(['name'=>'ahmed','price'=>'غالي'	,'detils'=>'يا رب'	]);
//    }

    public function store(Request $request)
    {
        $massegs =$this->getMasseges();
        $rols =$this->getRols();
        $validated = Validator::make($request->all(),$rols,$massegs);
        if ($validated ->fails()){
            return redirect()->back()->withErrors($validated)->withInput($request->all());
        }
       Offer::create([
           'name'=>$request->name,
           'price'=>$request->price,
           'detils'=>$request->detils
       ]);

        return redirect()->back()->with(['succ'=>'تم اضافة العرض بنجاخ']);
    }

    protected function getMasseges(){
     return   $massegs=[
            'name.required'=>'الاسم مطلوب',
            'name.unique'=>'الاسم موجود',
        ];
    }

    protected function getRols(){
        return   $rols=[
            'name' => 'required|unique:offers,name|max:255',
            'price' => 'required|numeric',
            'detils' => 'required',
        ];
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
