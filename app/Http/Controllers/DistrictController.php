<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Regency;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    //

    public function index()
    {
        return view('districts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = District::orderBy('name', 'DESC')->get();

        return view('districts.create', compact('data'));
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
            'regency_id' => 'required',
            'name' => 'required',


        ]);
        $data = array(
            'regency_id'     =>  $request->regency_id,
            'name'     =>  $request->name,



        );
        District::insert($data);
    }

    public function read()
    {

        $data = District::orderBy('id', 'DESC')->get();;
        return view('districts.read')->with([
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
        $data = District::findOrFail($id);
        $regency = Regency::orderBy('name', 'DESC')->get();
        return view('regencies.edit')->with([
            'data' => $data,
            'regency' => $regency

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
        $data = District::findOrFail($id);
        $data->delete();
    }
}
