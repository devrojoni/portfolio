<?php

namespace App\Http\Controllers\Frontend;

use App\Models\HeroSection;
use App\Models\AboutSection;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Project;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Social;

class HomeController extends Controller
{
    public function index()
    {
        $data['heroSection'] = HeroSection::first();

        $data['aboutSection'] = AboutSection::first();

        $data['skills'] = Skill::where('status', 'Active')->get();

        $data['experiences'] = Experience::where('status', 'Active')->get();

        $data['educations'] = Education::where('status', 'Active')->get();

        $data['services'] = Service::where('status', 'Active')->get();

        $data['teams'] = Team::where('status', 'Active')->get();

        $data['testimonials'] = Testimonial::where('status', 'Active')->get();

        $data['categories'] = Category::where('status', 'Active')->get();

        $data['projects'] = Project::where('status', 'Active')->get();

        $data['socials'] = Social::get();

        return view('frontend.home', $data);
    }
}
