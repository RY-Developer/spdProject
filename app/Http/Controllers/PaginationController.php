<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\user;
use \App\ref_rek_5;

class PaginationController extends Controller
{
    public function index()
    {
        $users = user::paginate(5);
        return view('users.user', compact('users'));
        
        
        // $rek5 = ref_rek_5::paginate(5);
        // return view('rekening5.index', compact('rek5'));
    }
}
