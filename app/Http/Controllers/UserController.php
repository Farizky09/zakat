<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Amil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function index()
{
    $user = Auth::user();
return view ('home',['user' =>$user]);
}
public function tampil()
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
