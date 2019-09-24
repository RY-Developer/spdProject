<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ref_program;

class RProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data = ref_program::where('ket_program','LIKE','%'.$request->cari. '%')->paginate(10);
        }else{
            $data = ref_program::paginate(10);
        }
        return view('program.index', compact('data'));
    }
    
    public function create(Request $request)
    {
        ref_program::create($request->all());
        return redirect('/program')->with('success','Data success added!!');
        
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
        $program = ref_program::find($id);
        return view('program.edit', ['program'=>$program]);
    }
    
    
    public function update(Request $request, $id)
    {
        $data=ref_program::find($id);
        $data->update($request->all());
        return redirect('/program')->with('success','Data success updated!!');
    }
    
    
    public function delete($id)
    {
        $data=ref_program::find($id);
        $data->delete($program);
        return redirect('/program')->with('success','Data Deleted!!');
    }
}
