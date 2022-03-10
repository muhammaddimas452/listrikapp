<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif;
use Alert;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarif = Tarif::all();
        return view('pelanggan.tarif', compact('tarif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarif = new Tarif;
        $tarif->daya = $request->daya;
        $tarif->tarifperkwh = $request->tarifperkwh;
        $tarif->save();
        return redirect()->route('tarif')->with('success', 'Data Angket Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarif = Tarif::where('id', $id)->first();
        return view('pelanggan.editTarif' , compact('tarif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarif = Tarif::where('id', $request->id)->first();
        $tarif->daya = $request->daya;
        $tarif->tarifperkwh = $request->tarifperkwh;
        $tarif->save();
        return redirect()->route('tarif')->with('success', 'Data Siswa Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteData($id)
    {
        $tarif = Tarif::where('id', $id)->first();
        if($tarif->delete()){
            Alert::success('Congrats', 'You\'ve Successfully Registered');
        }else{
            return redirect()->route('tarif');
        }
        
    }

    public function destroy($id)
    {
        $tarif = Tarif::where('id', $id)->first();
        if($tarif){
            if($tarif->delete()){
                return redirect()->route('tarif');
            }else{
                return abort('404');
            }
        }else{
            return abort('404');
        }
    }
}
