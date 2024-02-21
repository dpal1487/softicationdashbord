<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function api()
    {
        return view('pages.Survey.api');
    }
    public function marketSurveyDashboard()
    {
        return view('pages.Survey.market-survey-dashboard');
    }
    public function marketSurveyPanel()
    {
        return view('pages.Survey.market-survey-panel');
    }
    public function marketSurveyProgramming()
    {
        return view('pages.Survey.market-survey-programming');
    }
}
