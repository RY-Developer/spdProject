<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ref_sub_unit;

class RsunitController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = ref_sub_unit::where('nm_sub_unit','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $data = ref_sub_unit::paginate(10);
        }
        return view('subunit.index', compact('data'));
    }
    
    public function create(Request $request)
    {
        ref_sub_unit::create($request->all());
        return redirect('/subunit')->with('success','Data success added!!');
        
    }
    
    public function store(Request $request)
    {
        //
    }
    
    
    public function show($id)
    {
        //
    }
    
    
    public function edit($id)
    {
        $subunit = ref_sub_unit::find($id);
        return view('subunit.edit', ['subunit'=>$subunit]);
    }
    
    
    public function update(Request $request, $id)
    {
        $data=ref_sub_unit::find($id);
        $data->update($request->all());
        return redirect('/subunit')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $data=ref_sub_unit::find($id);
        $data->delete($subunit);
        return redirect('/subunit')->with('success','Data Deleted!!');
    }
}
