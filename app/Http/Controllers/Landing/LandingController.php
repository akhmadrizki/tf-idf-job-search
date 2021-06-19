<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Joblist;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('interfaces.landing.index');
    }

    public function results()
    {
        $jobs = Joblist::latest()->paginate(10);
        return view('interfaces.landing.result')
            ->withJobs($jobs);
    }
}
