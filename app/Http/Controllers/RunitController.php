<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ref_unit;

class RunitController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = ref_unit::where('nm_unit','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $data = ref_unit::paginate(10);
        }
        return view('unit.index', compact('data'));
    }
    
    public function create(Request $request)
    {
        ref_unit::create($request->all());
        return redirect('/unit')->with('success','Data success added!!');
        
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
        $data = ref_unit::find($id);
        return view('unit.edit', ['data'=>$data]);
    }
    
    
    public function update(Request $request, $id)
    {
        $data=ref_unit::find($id);
        $data->update($request->all());
        return redirect('/unit')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $data=ref_unit::find($id);
        $data->delete($data);
        return redirect('/unit')->with('success','Data Deleted!!');
    }
}
