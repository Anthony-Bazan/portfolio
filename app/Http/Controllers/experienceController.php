<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\experience;

class experienceController extends Controller
{
    //
    
    public function index()
    {
        $experience = experience::all();
        return view('admin/section/experience',([

            'experience' =>$experience
        ]));
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            
            'role' => 'required|string',
            'company' => 'required|string',
            'year'=> 'required|string',
            'service'=> 'required|string',
            'description' => 'required|string'
        ]);

        $addexperience = experience::create($data);

        return redirect(route('experience.index'));
    }

    public function update(Request $request, experience $id)
    {
        $data = $request->validate([
            
            'role' => 'required|string',
            'company' => 'required|string',
            'year'=> 'required|string',
            'service'=> 'required|string',
            'description' => 'required|string'
        ]);

       $id->update($data);

        return redirect(route('experience.index'));
    }
}