<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Category::all();
        $exams = Exam::all();
        return view('categories', [
            'categories' => $categories,
            'exams'=>$exams
        ]);
    }
    public function index2()
    {
        $categories = Category::all();
        $exams = Exam::all();
        return view('admin/categories', [
            'categories' => $categories,
            'exams'=>$exams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create-cat');
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
        $category = new Category;
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->img = $fileName;
        $category->save();
        return redirect('showmanagecategories');
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
        $category =Category::find($id);
        return view('admin/edit-cat',compact('category'));

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
        $categories = Category::find($id);
        $file = $request->img;
        $fileName = uniqid('', true) . '.' . $file->clientExtension();
        $file->move(public_path('images'),$fileName);
        $categories->name = $request->name;
        $categories->desc = $request->desc;
        $categories->img = $fileName;
        $categories->save();
        return redirect()->route('cat-manage')
            ->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect()->route('cat-manage');
    }
}
