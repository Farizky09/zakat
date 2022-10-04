<?php

namespace App\Http\Controllers;
use App\Models\Penerimaan;
use App\Models\Penerima;
use App\Models\Stock;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index()
    {
        $penerimaan = Penerimaan::join('penerima','penerima.id_penerima','=','penerimaan.id_penerima')->get();
        return view('penerimaan.index', compact(['penerimaan']));
    }
    public function create()
    {
        $penerima = Penerima::all();
        return view('penerimaan.create',compact(['penerima']));
    }
    public function store(Request $request)
    {
        if($request->pembayaran_uang > 0 && $request->pembayaran_beras == 0){
            $stok = Stock::first();
            if($stok->uang < $request->pembayaran_uang){
                return 'Stok untuk pembayaran uang tidak mencukupi';
            }
        $jml = $stok->uang - $request->pembayaran_uang;
        $stok->update([
            'uang' => $jml
        ]);
        }else if($request->pembayaran_beras > 0 && $request->pembayaran_uang == 0){

                $stok = Stock::first();
                if($stok->beras < $request->pembayaran_beras){
                    return 'Stok untuk pembayaran beras tidak mencukupi';
                }
            $jml = $stok->beras - $request->pembayaran_beras;
            $stok->update([
                'beras' => $jml
            ]);
        }else{
            $stok = Stock::first();
            if($stok->beras < $request->pembayaran_beras){
                return 'Stok untuk pembayaran beras tidak mencukupi';
            }
            if($stok->uang < $request->pembayaran_uang){
                return 'Stok untuk pembayaran uang tidak mencukupi';
            }
        $jmlBeras = $stok->beras - $request->pembayaran_beras;
        $jmlUang = $stok->uang - $request->pembayaran_uang;
        $stok->update([
            'beras' => $jmlBeras,
            'uang' => $jmlUang
        ]);
        }
        Penerimaan::create($request->except(['_token','submit']));
        return redirect('/penerimaan');
    }
    public function edit($id)
    {
        $penerimaan = Penerimaan::find($id);
        return view('penerimaan.edit',compact(['penerimaan']));
    }
    public function update($id, Request $request)
    {

        $penerimaan = Penerimaan::find($id);
        $penerimaan->update($request->except(['_token','submit']));
        return redirect('/penerimaan');
    }
    public function destroy($id)
    {
        $penerimaan = Penerimaan::find($id);
        $penerimaan->delete();
        return redirect('/penerimaan');

    }
}
