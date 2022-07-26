<?php

namespace App\Http\Controllers;

use App\Exports\PendudukExport;
use App\Imports\PendudukImport;
use App\Models\District;
use App\Models\Penduduk;
use App\Models\Status;
use App\Models\Village;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penduduk.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::where('regency_id', '3212')->get();
        $village = Village::all();
        $status = Status::all();




        return view('penduduk.create')->with([
            'districts' => $districts,
            'village' => $village,
            'status' => $status



        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nik' => 'required',
            'kks' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'id_status' => 'required',
            'pekerjaan' => 'required',
            'district_id' => 'required',
            'village_id' => 'required',
            'alamat_lengkap' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',




        ]);
        $data = array(
            'nik'    =>  $request->nik,
            'kks'    =>  $request->kks,
            'nama'    =>  $request->nama,
            'tanggal_lahir'     =>  $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama'     =>  $request->agama,
            'id_status'     =>  $request->id_status,
            'pekerjaan'     =>  $request->pekerjaan,
            'district_id'     =>  $request->district_id,
            'village_id'     =>  $request->village_id,
            'alamat_lengkap'     =>  $request->alamat_lengkap,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,


        );


        Penduduk::insert($data);
    }

    public function read()
    {

        $data = Penduduk::orderBy('id', 'DESC')->get();;
        return view('penduduk.read')->with([
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $districts = District::where('regency_id', '3212')->get();
        $village = Village::all();
        $status = Status::all();
        $data = Penduduk::findOrFail($id);
        return view('penduduk.edit')->with([
            'data' => $data,
            'districts' => $districts,
            'village' => $village,
            'status' => $status
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Penduduk::findOrFail($id);
        $data->nik = $request->nik;
        $data->kks = $request->kks;
        $data->nama = $request->nama;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->id_status = $request->id_status;
        $data->pekerjaan = $request->pekerjaan;
        $data->district_id = $request->district_id;
        $data->village_id = $request->village_id;
        $data->alamat_lengkap = $request->alamat_lengkap;
        $data->longitude = $request->longitude;
        $data->latitude = $request->latitude;

        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Penduduk::findOrFail($id);
        $data->delete();
    }

    public function getdesa(Request $request)
    {
        $district = $request->district_id;
        $village = Village::where('district_id', $district)->get();

        foreach ($village as $item) {
            echo "<option value='$item->id'>$item->name</option>";
        }
    }

    public function importPenduduk(Request $request)
    {
        Excel::import(new PendudukImport(), $request->file('penduduk_import'));
        return redirect('/penduduk/index');
    }

    public function export()
    {
        return Excel::download(new PendudukExport, 'Penduduks.xlsx');
    }
}
