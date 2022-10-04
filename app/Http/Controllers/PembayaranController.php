<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\Pembayar;
use App\Models\Zakat;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PembayaranController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        if($user->role == 'amil'){
            $pembayaran = Pembayaran::join('zakat','zakat.id','=','pembayaran.id_zakat')
                            ->join('pembayar','pembayar.id','=','pembayaran.id_pembayar')
                            ->get();
            // return $pembayaran;
        }else{
            $pembayaran = Pembayaran::all();
        }
        return view('pembayaran.index', compact(['pembayaran']));
    }
    public function create()
    {
        //dropdown zakat
        $zakat = Zakat::all();
        //dropdown zakat
        return view('pembayaran.create', compact('zakat'));
    }
    public function store(Request $request)
    {

       if($request->pembayaran_beras == 0){
//pembayaran uang
           $jml= $request->pembayaran_uang*$request->jml_tanggungan;
           $me = Auth::user();

           $pembayar= Pembayar::create([
               'nama_pembayar' => $request->nama_pembayar,
               'nohp_pembayar' => $request->nohp_pembayar,
               'jk_pembayar' => $request->jk_pembayar,
               'alamat_pembayar' => $request->alamat_pembayar,
               'rt' => $request->rt,
               'rw' => $request->rw,
               'status' => $request->status
               ]);
           $pembayaran = Pembayaran::create([
           'id_zakat'=>$request->id_zakat,
           'id_amil'=>$me->id,
           'id_pembayar'=>$pembayar->id,
           'nohp_pembayar' => $request->nohp_pembayar,
           'jk_pembayar' => $request->jk_pembayar,
           'alamat_pembayar' => $request->alamat_pembayar,
           'rt' => $request->rt,
           'rw' => $request->rw,
           'status' => $request->status,
           'tgl_penyerahan'=>$request->tgl_penyerahan,
           'pembayaran_beras'=>0,
           'pembayaran_uang'=>$request->pembayaran_uang,
           'jml_tanggungan'=>$request->jml_tanggungan,
           'total_pembayaran'=>$jml,
           ]);
           $stock = Stock::first();
           $uang = $stock->uang + $jml;
           $updatedData = $stock->update([
               'beras' => $stock->beras,
               'uang' => $uang,
            ]);
        }else{
            // Pembayaran Beras
            $jml= $request->pembayaran_beras*$request->jml_tanggungan;
            $me = Auth::user();
            $pembayar= Pembayar::create([
                'nama_pembayar' => $request->nama_pembayar,
                'nohp_pembayar' => $request->nohp_pembayar,
               'jk_pembayar' => $request->jk_pembayar,
               'alamat_pembayar' => $request->alamat_pembayar,
               'rt' => $request->rt,
               'rw' => $request->rw,
               'status' => $request->status
               ]);
           $pembayaran = Pembayaran::create([
           'id_zakat'=>$request->id_zakat,
           'id_amil'=>$me->id,
           'id_pembayar'=>$pembayar->id,
           'nohp_pembayar' => $request->nohp_pembayar,
           'jk_pembayar' => $request->jk_pembayar,
           'alamat_pembayar' => $request->alamat_pembayar,
           'rt' => $request->rt,
           'rw' => $request->rw,
           'status' => $request->status,
           'tgl_penyerahan'=>$request->tgl_penyerahan,
           'pembayaran_beras'=>$request->pembayaran_beras,
           'pembayaran_uang'=>0,
           'jml_tanggungan'=>$request->jml_tanggungan,
           'total_pembayaran'=>$jml,
        ]);
        $stock = Stock::first();
           $beras = $stock->beras + $jml;
           $updatedData = $stock->update([
               'beras' => $beras,
               'uang' => $stock->uang,
            ]);
       }


       // return $request->all();
        // Pembayaran::create($request->except(['_token','submit']));
        return redirect('/pembayaran');
    }
    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.edit',compact(['pembayaran']));
    }
    public function update($id, Request $request)
    {

        $pembayaran = Pembayaran::find($id);
        $pembayaran->update($request->except(['_token','submit']));
        return redirect('/pembayaran');
    }
    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return redirect('/pembayaran');

    }
}
