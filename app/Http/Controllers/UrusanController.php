<?php

namespace App\Http\Controllers;

use App\ref_urusan;
use Illuminate\Http\Request;

class UrusanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $urusan = ref_urusan::where('nm_urusan','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $urusan = ref_urusan::paginate(10);
        }
        return view('urusan.index', compact('urusan'));
    }
    
    public function create(Request $request)
    {
        ref_urusan::create($request->all());
        return redirect('/urusan')->with('success','Data success added!!');
        
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
        $urusan = ref_urusan::find($id);
        return view('urusan.edit', ['urusan'=>$urusan]);
    }
    
    
    public function update(Request $request, $id)
    {
        $urusan=ref_urusan::find($id);
        $urusan->update($request->all());
        return redirect('/urusan')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $urusan=ref_urusan::find($id);
        $urusan->delete($urusan);
        return redirect('/urusan')->with('success','Data Deleted!!');
    }
}
