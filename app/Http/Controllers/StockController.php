<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stock = Stock::all();
        return view('stock.index', compact(['stock']));
    }
    public function create()
    {
        return view('stock.create');
    }
    public function store(Request $request)
    {
        Stock::create($request->except(['_token','submit']));
        return redirect('/stock');
    }
    public function edit($id)
    {
        $stock = Stock::find($id);
        return view('stock.edit',compact(['stock']));
    }
    public function update($id, Request $request)
    {

        $stock = Stock::find($id);
        $stock->update($request->except(['_token','submit']));
        return redirect('/stock');
    }
    public function destroy($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        return redirect('/stock');

    }
}
