<?php

namespace App\Http\Controllers;

use App\ref_sumber_dana;
use Illuminate\Http\Request;

class SumberDanaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = ref_sumber_dana::where('kd_sumber','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $data = ref_sumber_dana::paginate(10);
        }
        return view('sumber.index', compact('data'));
    }
    
    public function create(Request $request)
    {
        ref_sumber_dana::create($request->all());
        return redirect('/sumber')->with('success','Data success added!!');
        
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
        $sumber = ref_sumber_dana::find($id);
        return view('sumber.edit', ['sumber'=>$sumber]);
    }
    
    
    public function update(Request $request, $id)
    {
        $sumber=ref_sumber_dana::find($id);
        $sumber->update($request->all());
        return redirect('/sumber')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $urusan=ref_urusan::find($id);
        $urusan->delete($urusan);
        return redirect('/urusan')->with('success','Data Deleted!!');
    }
}
