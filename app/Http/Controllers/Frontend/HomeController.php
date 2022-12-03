<?php

namespace App\Http\Controllers\Frontend;

use App\Models\HeroSection;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['heroSection'] = HeroSection::first();

        $data['skills'] = Skill::Where('status', 'Active')->get();

        $data['experience'] = Experience::first();

        $data['education'] = Education::first();

        return view('frontend.home', $data);
    }
}
