<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

public function index()
{
    $categories=  Category::all();
    $exams     =  Exam::    all();
    $questions =  Question::all();
    $results   =  Result::  all();
    $admins     =  User::    all()->where('role','admin');
    return view('admin/manage-admins', [
        'admins'   => $admins,
        'categories'   => $categories,
        'exams'   => $exams,
        'questions' => $questions,
        'results'=> $results
    ]);
}
public function index2()
{
    $categories=  Category::all();
    $exams     =  Exam::    all();
    $questions =  Question::all();
    $results   =  Result::  all();
    $admins    =  User::    all()->where('role','admin');
    $users     = User:: all()->where('role','user');
    return view('admin/index', [
        'admins'   => $admins,
        'categories'   => $categories,
        'exams'   => $exams,
        'questions' => $questions,
        'results'=> $results,
        'users'    =>$users,
    ]);
}
public function index3()
{
    $admins   = Admin::all();
    $users    = User::all();
    $posts    = Post::all();
    $follows  = Follow::all();
    $comments = Comment::all();
    return view('admin/pages-profile', [
        'admins' => $admins,
        'users' => $users,
        'posts' => $posts,
        'follows' => $follows,
        'comments'=> $comments
    ]);
}

/**
 * Show the form for creating a new resource.
 *
 * @return Application|Factory|View
 */
public function create()
{
    return view('admin/create-admin');
}

/**
 * Store a newly created resource in storage.
 *
 * @param Request $request
 * @return Application|RedirectResponse|Response|\Illuminate\Routing\Redirector
 */
public function store(Request $request)
{
    $password = Hash::make('password');
    $admin = new User;
    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->password = $password;
    $admin->role = $request->role;
    $admin->save();
    return redirect('admoon');
}
/**
 *
 * /**
 * Display the specified resource.
 *
 * @param Admin $admin
 * @return Response
 */
public function show(Admin $admin)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param $id
 * @return Application|Factory|View
 */
public function edit($id)
{
    $admin = User::find($id);
    return view('admin/edit-admin', compact('admin'));
}


/**
 * Update the specified resource in storage.
 *
 * @param Request $request
 * @param Admin $id
 * @return RedirectResponse
 */
public function update(Request $request , $id): RedirectResponse
{
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    $password = Hash::make('password');
    $admin = User::find($id);
    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->password = $password;
    $admin->role= $request->role;
    $admin->save();
    return redirect()->route('admoon.index')
        ->with('success','Company Has Been updated successfully');
}

/**
 * Remove the specified resource from storage.
 *
 * @param admin $id
 * @return RedirectResponse
 */
public function destroy($id): RedirectResponse
{
    $admin = User::find($id);
    $admin->delete();
    return redirect()->route('admoon.index');
}
}
