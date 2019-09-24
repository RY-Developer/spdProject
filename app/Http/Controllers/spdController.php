<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ta_spd;

class spdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = ta_spd::where('nm_unit','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $data = ta_spd::paginate(10);
        }
        return view('spd.index', compact('data'));
    }
    
    
    public function create(Request $request)
    {
        ta_spd::create($request->all());
        return redirect('/spd')->with('success','Data success added!!');
        
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
        $spd = ta_spd::find($id);
        return view('spd.edit', ['spd'=>$spd]);
    }
    
    
    public function update(Request $request, $id)
    {
        $spd=ta_spd::find($id);
        $spd->update($request->all());
        return redirect('/spd')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $spd=ta_spd::find($id);
        $spd->delete($spd);
        return redirect('/spd')->with('success','Data Deleted!!');
    }
}
