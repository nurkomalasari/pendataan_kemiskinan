<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\User;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function formUser()
    {
        return view('user.index');
    }
    public function create()
    {
        $districts = District::where('regency_id', '3212')->get();
        $village = Village::all();
        return view('user.create')->with([
            'districts' => $districts,
            'village' => $village,
        ]);
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'kecamatan' => 'required',
            'desa' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $user = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'image' => $request->image

        );
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        User::insert($user);
    }

    public function editeUser(Request $request, $id)
    {

        $data = User::findOrFail($id);
        $data->name      = $request->name;
        $data->email     = $request->email;
        $data->password  = Hash::make($request['password']);
        $data->kecamatan = $request->kecamatan;
        $data->desa      = $request->desa;
        $data->image      = $request->image;

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $data->save();
    }
    public function read()
    {
        $data = User::orderBy('id', 'DESC')->get();;
        return view('user.read')->with([
            'data' => $data
        ]);
    }

    public function show($id)
    {
        $districts = District::where('regency_id', '3212')->get();
        $village = Village::all();
        $item = User::findOrFail($id);


        return view('user.edit')->with([
            'item' => $item,
            'districts' => $districts,
            'village' => $village,
        ]);
    }

    public function getdesa(Request $request)
    {
        $district = $request->kecamatan;
        $village = Village::where('district_id', $district)->get();

        foreach ($village as $item) {
            echo "<option value='$item->id'>$item->name</option>";
        }
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
    }
}
