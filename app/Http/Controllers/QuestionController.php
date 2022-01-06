<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory
     */
    public function index($id)
    {
        Session::put('exam_id', $id);
        $questions = Question::with('Exam')->where('exam_id', $id)->get();
        return view('questions', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|Factory|\Illuminate\Contracts\View\View|Response
     */

    public function question1(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result1 = 1;
        }else{
            $result1 = 0;
        }
        Session::put('firstAnswer', $userAns);
        Session::put('result1', $result1);
        $status = 1;
        if(count($questions)===1){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question2(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result2 = 1;
        }else{
            $result2 = 0;
        }
        Session::put('secondAnswer', $userAns);
        Session::put('result2', $result2);
        $status = 2;
        if(count($questions)===2){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question3(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result3 = 1;
        }else{
            $result3 = 0;
        }
        Session::put('thirdAnswer', $userAns);
        Session::put('result3', $result3);
        $status =3 ;
        if(count($questions)===3){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question4(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result4 = 1;
        }else{
            $result4 = 0;
        }
        Session::put('forthAnswer', $userAns);
        Session::put('result4', $result4);
        $status = 4;

        if(count($questions)===4){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question5(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result5 = 1;
        }else{
            $result5 = 0;
        }
        Session::put('fifthAnswer', $userAns);
        Session::put('result5', $result5);
        $status = 5;
          if(count($questions)===5){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question6(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result6 = 1;
        }else{
            $result6 = 0;
        }
        Session::put('sixthAnswer', $userAns);
        Session::put('result6', $result6);
        $status = 6;
          if(count($questions)===6){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question7(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result7 = 1;
        }else{
            $result7 = 0;
        }
        Session::put('seventhAnswer', $userAns);
        Session::put('result7', $result7);
        $status = 7;
           if(count($questions)===7){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question8(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result8 = 1;
        }else{
            $result8 = 0;
        }
        Session::put('eighthAnswer', $userAns);
        Session::put('result8', $result8);
        $status = 8;
          if(count($questions)===8){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question9(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result9 = 1;
        }else{
            $result9 = 0;
        }
        Session::put('ninthAnswer', $userAns);
        Session::put('result9', $result9);
        $status = 9;
           if(count($questions)===9){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }
    public function question10(Request $request)
    {
        $userAns = $request->answer;
        $questions = Question::with('Exam')->where('exam_id',session::get('exam_id'))->get();
        if($userAns===$questions[0]->correct){
            $result10 = 1;
        }else{
            $result10 = 0;
        }
        Session::put('tenthAnswer', $userAns);
        Session::put('result10', $result10);
        $status = 10;
           if(count($questions)===10){
            return redirect(route('submit'));
        }

        return view ('questions',compact('status','questions'));

    }

    public function index2()
    {
        $questions= Question::all();
        $exams = Exam::all();
        return view('admin/questions', [
            'questions' => $questions,
            'exams'=>$exams
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * public function index2()
     * {
     * $categories = Category::all();
     * $exams = Exam::all();
     * return view('admin/categories', [
     * 'categories' => $categories,
     * 'exams'=>$exams
     * ]);
     * }
     *
     * /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
        $exams = Exam::all();
        return view('admin/create-ques',
            ['questions' => $questions,
                'exams'=>$exams
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {


        $question = new Question;
        $question->question = $request->question;
        $question->first = $request->first;
        $question->second = $request->second;
        $question->third= $request->third;
        $question->forth= $request->forth;
        $question->correct= $request->correct;
        $question->mark= $request->mark;
        $question->exam_id= $request->exam_id;
        $question->save();
        return redirect('showmanageques');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question =Question::find($id);
        $exams = Exam::all();
//        $exams = Exam::all();
        return view('admin/edit-ques',
            ['exams' => $exams,
                'question'=>$question
            ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'forth' => 'required',
            'correct' => 'required',
            'mark' => 'required',
            'exam_id' => 'required',
        ]);
        $question = Question::find($id);
        $question->question = $request->question;
        $question->first = $request->first;
        $question->second = $request->second;
        $question->third= $request->third;
        $question->forth= $request->forth;
        $question->correct= $request->correct;
        $question->mark= $request->mark;
        $question->exam_id= $request->exam_id;
        $question->save();
        return redirect()->route('ques-manage')
            ->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $question= Question::find($id);
        $question->delete();
        return redirect()->route('ques-manage');
    }
}
