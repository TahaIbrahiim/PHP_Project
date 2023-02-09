<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    //
    public function index()
    {

        $user = User::orderBy('id', 'DESC')->simplePaginate(10);
        $previousUrl = $user->path() . '?' . $user->getPageName() . '=' . ($user->currentPage() - 1);
        $nextUrl = $user->path() . '?' . $user->getPageName() . '=' . ($user->currentPage() + 1);
        return view('user.index', ['user' => $user, 'previous' => $previousUrl, 'next' => $nextUrl]);
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', ['user' => $user]);
    }
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }
    public function update($id, Request $request)
    {

        $user = User::find($id);
        $user->update($request->except('_method', '_token'));
        User::where('id',$id)->update($request->except('_method', '_token'));
        return redirect()->route('user.index');
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        User::create($request->except('_token'));
        return redirect()->route('user.index');
    }
}
