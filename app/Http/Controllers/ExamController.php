<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Exam;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index($id)
    {

        $exams   = Exam::with('Category')->where('category_id', $id)->get();
        $category= Category::find($id);
        return view('exams', compact('exams','category'));
    }
    public function index2()
    {
        $categories = Category::all();
        $exams = Exam::all();
        return view('admin/exams', [
            'categories' => $categories,
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
        $categories = Category::all();
        $exams = Exam::all();
        return view('admin/create-exam',
            ['categories' => $categories,
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

        $file = $request->img;
        $fileName = uniqid('', true) . '.' . $file->clientExtension();
        $file->move(public_path('images'),$fileName);
        $exam = new Exam;
        $exam->name = $request->name;
        $exam->desc = $request->desc;
        $exam->img = $fileName;
        $exam->time= $request->time;
        $exam->exam_mark= $request->exam_mark;
        $exam->category_id= $request->category_id;
        $exam->save();
        return redirect('showmanageexams');
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
        $exam =Exam::find($id);
        $categories = Category::all();
//        $exams = Exam::all();
        return view('admin/edit-exams',
            ['categories' => $categories,
                'exam'=>$exam
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
            'name' => 'required',
            'desc' => 'required',
            'img' => 'required',
        ]);
        $exam = Exam::find($id);
        $file = $request->img;
        $fileName = uniqid('', true) . '.' . $file->clientExtension();
        $file->move(public_path('images'),$fileName);
        $exam->name = $request->name;
        $exam->desc = $request->desc;
        $exam->img = $fileName;
        $exam->time= $request->time;
        $exam->exam_mark= $request->exam_mark;
        $exam->category_id= $request->category_id;
        $exam->save();
        return redirect()->route('exam-manage')
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
        $exam= Exam::find($id);
        $exam->delete();
        return redirect()->route('exam-manage');
    }
}
