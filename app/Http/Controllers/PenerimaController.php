<?php

namespace App\Http\Controllers;
use App\Models\Penerima;
use Illuminate\Http\Request;

class penerimaController extends Controller
{
    public function index()
    {
        $penerima = Penerima::all();
        return view('penerima.index', compact(['penerima']));
    }
    public function create()
    {
        return view('penerima.create');
    }
    public function store(Request $request)
    {
        Penerima::create($request->except(['_token','submit']));
        return redirect('/penerima');
    }
    public function edit($id)
    {
        $penerima = Penerima::find($id);
        return view('penerima.edit',compact(['penerima']));
    }
    public function update($id, Request $request)
    {

        $penerima = Penerima::find($id);
        $penerima->update($request->except(['_token','submit']));
        return redirect('/penerima');
    }
    public function destroy($id)
    {
        $penerima = Penerima::find($id);
        $penerima->delete();
        return redirect('/penerima');

    }
}
