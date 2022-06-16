<?php

namespace App\Http\Controllers;

use App\Models\OpsiJawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class OpsiJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('opsiJawaban.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pertanyaan = Pertanyaan::all();
        return view('opsiJawaban.create', compact('pertanyaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pertanyaan' => 'required',
            'pilihan_jawaban' => 'required',
            'poin_jawaban' => 'required',




        ]);
        $data = array(
            'id_pertanyaan'     =>  $request->id_pertanyaan,
            'pilihan_jawaban'     =>  $request->pilihan_jawaban,
            'poin_jawaban'     =>  $request->poin_jawaban,



        );
        OpsiJawaban::insert($data);
    }

    public function read()
    {
        $pertanyaan = Pertanyaan::with(['opsiJawaban'])->get();
        $data = OpsiJawaban::orderBy('id', 'ASC')->get();;
        // dd($pertanyaan);
        return view('opsiJawaban.read')->with([
            'pertanyaan' => $pertanyaan

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
        $pertanyaan = Pertanyaan::all();
        $data = OpsiJawaban::findOrFail($id);
        return view('opsiJawaban.edit')->with([
            'data' => $data,
            'pertanyaan' => $pertanyaan


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
        $data = OpsiJawaban::findOrFail($id);
        $data->id_pertanyaan = $request->id_pertanyaan;
        $data->pilihan_jawaban = $request->pilihan_jawaban;
        $data->poin_jawaban = $request->poin_jawaban;



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
        $data = OpsiJawaban::findOrFail($id);
        $data->delete();
    }
}
