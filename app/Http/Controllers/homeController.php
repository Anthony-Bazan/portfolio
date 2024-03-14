<?php

namespace App\Http\Controllers;
use App\Models\home;
use App\Models\about;
use App\Models\education;
use App\Models\edudescription;
use App\Models\skill;
use App\Models\skillaward;
use App\Models\experience;
use App\Models\awardlist;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //

    public function index()
    {
        $home = home::all();
        $about =about::all();
        $education =education::all();
        $edudescription =edudescription::all();
        $skill =skill::all();
        $skillaward =skillaward::all();
        $experience =experience::all();
        $awardlist = awardlist::all();

        return view('landingpage/index',[

            'home'   =>         $home,
            'about'  =>         $about,
            'education'  =>     $education,
            'edudescription' => $edudescription,
            'skill'  =>         $skill,
            'skillaward'  =>    $skillaward,
            'experience'   =>   $experience,
            'awardlist' => $awardlist
        ]);
    } 
}
