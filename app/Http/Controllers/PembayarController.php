<?php

namespace App\Http\Controllers;
use App\Models\Pembayar;
use Illuminate\Http\Request;

class PembayarController extends Controller
{
    public function index()
    {
        $pembayar = Pembayar::all();
        return view('pembayar.index', compact(['pembayar']));
    }
    public function create()
    {
        return view('pembayar.create');
    }
    public function store(Request $request)
    {
        Pembayar::create($request->except(['_token','submit']));
        return redirect('/pembayar');
    }
    public function edit($id)
    {
        $pembayar = Pembayar::find($id);
        return view('pembayar.edit',compact(['pembayar']));
    }
    public function update($id, Request $request)
    {

        $pembayar = Pembayar::find($id);
        $pembayar->update($request->except(['_token','submit']));
        return redirect('/pembayar');
    }
    public function destroy($id)
    {
        $pembayar = Pembayar::find($id);
        $pembayar->delete();
        return redirect('/pembayar');

    }
}
