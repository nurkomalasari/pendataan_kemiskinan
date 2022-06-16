<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function index()
    {
        return view('village.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Village::orderBy('name', 'DESC')->get();

        return view('village.create', compact('data'));
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
            'district_id' => 'required',
            'name' => 'required',


        ]);
        $data = array(
            'district_id'     =>  $request->district_id,
            'name'     =>  $request->name,



        );
        Village::insert($data);
    }

    public function read()
    {

        $data = Village::orderBy('id', 'DESC')->get();;
        return view('village.read')->with([
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
        $data = Village::findOrFail($id);
        $dictrict = District::orderBy('name', 'DESC')->get();
        return view('regencies.edit')->with([
            'data' => $data,
            'dictrict$dictrict' => $dictrict

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
        $data = District::findOrFail($id);
        $data->regency_id = $request->regency_id;
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
        $data = Village::findOrFail($id);
        $data->delete();
    }
}
