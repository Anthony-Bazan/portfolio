<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;


class skillController extends Controller
{
    //
    public function index()
    {
        $skill = skill::all();
        return view('admin/section/skill', [
            
            'skill' => $skill
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $newskill = skill::create($data);

        return redirect(route('skill.index'));
    }

    public function update(Request $request, skill $id)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $id->update($data);

        return redirect(route('skill.index'));

    }
}
