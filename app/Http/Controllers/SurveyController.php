<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function survey(Request $request)
    {
        var_dump($request->all()); exit;
        return view('survey.form');
    }
}
