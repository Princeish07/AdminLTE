<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;


class Projectviewcontroller extends Controller
{
    public function show()
    {
        $data=project::all()->toArray();
        // dd($data);
        $sno=0;
        return view('pages.show',compact('data'));
    }
}
