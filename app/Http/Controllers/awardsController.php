<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skillaward;


class awardsController extends Controller
{
    //

    public function index()
    {
        $award = skillaward::all();
        return view('admin/section/award',
    [
        'award' => $award
    ]);
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'year' => 'required|string',
            'company' => 'required|string'
        ]);

        $addaward = skillaward::create($data);

        return redirect(route('awards.index'));
    }

    public function update(Request $request, skillaward $id)
    {
        $data = $request->validate([

            'year' => 'required|string',
            'company' => 'required|string'
        ]);

       $id->update($data);

        return redirect(route('awards.index'));
    }
}
