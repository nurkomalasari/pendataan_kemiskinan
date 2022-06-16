<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class RegencyController extends Controller
{
    public function index()
    {
        return view('regencies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Province::orderBy('name', 'DESC')->get();

        return view('regencies.create', compact('data'));
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
            'provinces_id' => 'required',
            'name' => 'required',


        ]);
        $data = array(
            'provinces_id'     =>  $request->provinces_id,
            'name'     =>  $request->name,



        );
        Regency::insert($data);
    }

    public function read()
    {

        $data = Regency::orderBy('id', 'DESC')->get();;
        return view('regencies.read')->with([
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
        $data = Regency::findOrFail($id);
        $province = Province::orderBy('name', 'DESC')->get();
        return view('regencies.edit')->with([
            'data' => $data,
            'province' => $province

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
        $data = Regency::findOrFail($id);
        $data->province_id = $request->province_id;
        $data->name = $request->name;


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
        $data = Regency::findOrFail($id);
        $data->delete();
    }
}
