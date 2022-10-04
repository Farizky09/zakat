<?php

namespace App\Http\Controllers;
use App\Models\Amil;
use Illuminate\Http\Request;

class AmilController extends Controller
{
    public function index()
    {
        $amil = Amil::all();
        return view('amil.index', compact(['amil']));
    }
    public function create()
    {
        return view('amil.create');
    }
    public function store(Request $request)
    {
        Amil::create($request->except(['_token','submit']));
        return redirect('/amil');
    }
    public function edit($id)
    {
        $amil = Amil::find($id);
        return view('amil.edit',compact(['amil']));
    }
    public function update($id, Request $request)
    {

        $amil = Amil::find($id);
        $amil->update($request->except(['_token','submit']));
        return redirect('/amil');
    }
    public function destroy($id)
    {
        $amil = Amil::find($id);
        $amil->delete();
        return redirect('/amil');

    }
}
