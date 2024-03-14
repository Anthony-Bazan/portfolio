<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;


class adminController extends Controller
{
    //

    public function index()
    {
        $home = home::all();

        return view('admin/index', [
            'home' =>$home
        ]);
    }

    public function update(Request $request, home $id)
    {
        $data = $request->validate([
            'name' =>'required|string',
            'role' => 'required|string',
            'description' => 'required|string'
        ]);

        $id->update($data);

        return redirect(route('admin.index'));
    }

   
}
