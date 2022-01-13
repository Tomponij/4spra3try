<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $fields = Field::all();
        return view('pages.dashboard.fields.index')->with(compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('pages.dashboard.fields.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'fieldName' => 'required',
        ]);
        $field = new Field();
        $field->name = $request->fieldName;
        $field->save();

        return redirect()->route('fields.index');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $field = Field::findOrFail($id);
        return view('pages.dashboard.fields.edit')->with(compact('field'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $field = Field::findOrFail($id);
        return view('pages.dashboard.fields.edit')->with(compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required'
        ]);
        $field = Field::findOrFail($id);

        $field->name = $request->name;
        $field->save();

        return redirect()->route('fields.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        Field::destroy($id);
        return redirect()->route('fields.index');
    }
}
