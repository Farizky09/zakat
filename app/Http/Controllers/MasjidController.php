<?php

namespace App\Http\Controllers;
use App\Models\Masjid;
use Illuminate\Http\Request;

class masjidController extends Controller
{
    public function index()
    {
        $masjid = Masjid::all();
        return view('masjid.index', compact(['masjid']));
    }
    public function create()
    {
        return view('masjid.create');
    }
    public function store(Request $request)
    {
        Masjid::create($request->except(['_token','submit']));
        return redirect('/masjid');
    }
    public function edit($id)
    {
        $masjid = Masjid::find($id);
        return view('masjid.edit',compact(['masjid']));
    }
    public function update($id, Request $request)
    {

        $masjid = Masjid::find($id);
        $masjid->update($request->except(['_token','submit']));
        return redirect('/masjid');
    }
    public function destroy($id)
    {
        $masjid = Masjid::find($id);
        $masjid->delete();
        return redirect('/masjid');

    }
}
