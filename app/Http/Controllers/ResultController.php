<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $res=    session('result1')+
            session('result2')+
            session('result3')+
            session('result4')+
            session('result5')+
            session('result6')+
            session('result7')+
            session('result8')+
            session('result9')+
            session('result10');
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        $result = new Result();
       $result->result =
            session('result1')+
            session('result2')+
            session('result3')+
            session('result4')+
            session('result5')+
            session('result6')+
            session('result7')+
            session('result8')+
            session('result9')+
            session('result10');
        $result->user_id = auth()->user()->id;
        $result->exam_id =session('exam_id') ;
        $result->save();

        return view('result',compact('questions','res'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
