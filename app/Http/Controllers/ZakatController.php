<?php

namespace App\Http\Controllers;
use App\Models\Zakat;
use Illuminate\Http\Request;

class zakatController extends Controller
{
    public function index()
    {
        $zakat = Zakat::all();
        return view('zakat.index', compact(['zakat']));
    }
    public function create()
    {
        return view('zakat.create');
    }
    public function store(Request $request)
    {
        Zakat::create($request->except(['_token','submit']));
        return redirect('/zakat');
    }
    public function edit($id)
    {
        $zakat = Zakat::find($id);
        return view('zakat.edit',compact(['zakat']));
    }
    public function update($id, Request $request)
    {

        $zakat = Zakat::find($id);
        $zakat->update($request->except(['_token','submit']));
        return redirect('/zakat');
    }
    public function destroy($id)
    {
        $zakat = Zakat::find($id);
        $zakat->delete();
        return redirect('/zakat');

    }
}
