<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spec;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class SpecController extends Controller
{
    public function index()
    {
        $specs=Spec::all();
        return view('spec.index')->with(compact('specs'));
    }
    public function create()
    {
        $brands= Brand::all();
        return view('spec.create')->with(compact('brands'));
    }
    public function store(Request $request)
    {
        $image=$request->image->store('public/images');

        Spec::create([
            'name'=>$request->name,
            'brand_id'=>$request->brand_id,
            'price'=>$request->price,
            'launch'=>$request->launch,
            'image'=>$image
        ]);
        return redirect('/spec');
    }
    public function destroy($id)
    {
        Spec::findOrFail($id)->delete();
        return redirect('/spec');
    }
    public function edit($id)
    {
        $brands=Brand::all();
        $spec=Spec::findOrFail($id);
        return view('spec.edit')->with(compact('spec','brands'));

    }

    public function update(Request $request,$id)
    {
        $update=[
            'name'=>$request->name,
            'brand_id'=>$request->brand_id,
            'price'=>$request->price,
            'launch'=>$request->launch,
        ];
        if($request->image)
        {
            $image=$request->image->store('images');
            $update['image']=$image;
        }
    Spec::findOrFail($id)->update($update);
    return redirect('/spec');

    }

}

        // $validator=Validator::make($request->all(),[
        //     'name'=>'required',
        //     'brand_id' => 'required',
        //     'price' => 'required',
        //     'launch' => 'nullable|date',
        //     'image' => 'required|image',
        // ]);
