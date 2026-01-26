<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index');
    }

    public function create()
    {
        return view('admin.unit.create');
    }

    public function store(Request $request)
    {
        Unit::newUnit($request);
        return back()->with('message', 'Unit create info successfully');
    }

    public function edit($id)
    {
        return view('admin.unit.edit');
    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {
        //
    }
}
