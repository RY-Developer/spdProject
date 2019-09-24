<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Ta_spd_rinc;

class spdRincianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = Ta_spd_rinc::where('nm_unit','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $data = Ta_spd_rinc::paginate(10);
        }
        return view('spdrincian.index', compact('data'));
    }
    
    
    public function create(Request $request)
    {
        Ta_spd_rinc::create($request->all());
        return redirect('/spdrincian')->with('success','Data success added!!');
        
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
        $spdrincian = Ta_spd_rinc::find($id);
        return view('spdrincian.edit', ['spdrincian'=>$spdrincian]);
    }
    
    
    public function update(Request $request, $id)
    {
        $spdrincian=Ta_spd_rinc::find($id);
        $spdrincian->update($request->all());
        return redirect('/spdrincian')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $spdrincian=Ta_spd_rinc::find($id);
        $spdrincian->delete($spdrincian);
        return redirect('/spdrincian')->with('success','Data Deleted!!');
    }
}
