<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    public function getKYC()
    {
        return view('kyc.kyc');
    }
    public function getFaq()
    {
        return view('faq.faq');
    }
    public function getBlog()
    {
        return view('blog.blog');
    }
    public function getCareers()
    {
        return view('careers.careers');
    }
    public function getTerms_Conditions()
    {
        return view('terms_conditions.terms_conditions');
    }
}
