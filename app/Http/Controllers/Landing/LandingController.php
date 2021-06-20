<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Cleaners;
use App\Helpers\Tokenizer;
use App\Helpers\Stopwords;
use App\Helpers\Stemming;
use App\Models\Joblist;

class LandingController extends Controller
{
    public function index()
    {
        return view('interfaces.landing.index');
    }

    public function results(Request $request)
    {
        $jobs = Joblist::all();

        // preprocess query
        $queryTerms = self::preprocessing($request->search);

        //preprocess jobs
        $jobsTerms = array();
        foreach($jobs as $job)
        {
            //preprocess company name
            $companyName = self::preprocessing($job->company_name);

            //preprocess job name
            $jobName = self::preprocessing($job->job_name);

            //preprocess category
            $category = self::preprocessing($job->category);

            //preprocess description
            $description = self::preprocessing($job->description);

            //preprocess address
            $address = self::preprocessing($job->address);

            //combine into one result for each job
            $jobsTerms[] = array_merge($companyName, $jobName, $category, $description, $address);
        }

        dd($jobsTerms);
        
        // return view('interfaces.landing.result')
        //     ->withJobs($jobs);
    }

    protected static function preprocessing($sentences)
    {
        //bersihkan tanda baca ganti dengan spasi
        $tempSentences = Cleaners::cleanText($sentences);

        //standarkan teks ke huruf kecil
        $tempSentences = strtolower(trim($tempSentences));

        //tokenizer teks
        $tempSentences = Tokenizer::get($tempSentences);

        //hapus stopwords yang terkandung pada teks
        $tempSentences = Stopwords::remove($tempSentences);

        //lakukan stemming
        $preprocessedWord = array();
        foreach($tempSentences as $sentence)
        {
            $preprocessedWord[] = Stemming::get($sentence);
        }
        
        return $preprocessedWord;
    }
}
