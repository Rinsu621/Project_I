<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands=Brand::all();
        return view('brands.index')->with(compact('brands'));
    }
    public function create()
    {
        return view('brands.create');
    }
    public function store(Request $request)
    {
        Brand::create([
            'name'=>$request->name,
        ]);
        return redirect('/brand');
    }
    public function destroy($id)
    {
        Brand::findOrFail($id)->delete();
        return redirect('/brand');
    }
    public function editPage()
    {
        return view('brands.edit');
    }
    public function edit($id)
    {
        $brand= Brand::findOrFail($id);
        return view('brands.edit')->with(compact('brand'));
    }

public function update(Request $request, $id)
{
    Brand::findOrFail($id)->update([
        'name'=>$request->name,
    ]);
    return redirect('/brand');
}
}
