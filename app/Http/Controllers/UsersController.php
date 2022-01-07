<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $users = User::all();
        return view('pages.userManagement.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('pages.userManagement.edit')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.userManagement.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $admin = false;

        if (filter_has_var(INPUT_POST, 'admin')) {
            $admin = true;
        }

        $user->name = $request->name;
        $user->admin = $admin;
        $user->save();
        return redirect()->route('accounts.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        //
    }
}
