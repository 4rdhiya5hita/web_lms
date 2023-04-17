<?php

namespace App\Http\Controllers;

use App\Models\LaundryPlant;
use Illuminate\Http\Request;
use App\Models\LinenCenterDetail;
use RealRashid\SweetAlert\Facades\Alert;

class LaundryPlantController extends Controller
{
    public function index()
    {
        $data = LaundryPlant::all();

        return view('menu_linen/laundry_plant/index', compact('data'));
    }
    //blabla

    public function create()
    {
        $linen_center = LinenCenterDetail::all();
        return view('menu_linen/laundry_plant/create', compact('linen_center'));
    }

    public function create_save(Request $request)
    {
        // dd($request);
        $value = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'linen_center' => 'required',
        ]);

        // $data = Driver::create($value);

        $linen_center_id = LinenCenterDetail::where('id', '=', $request->linen_center)->first();
        // dd($linen_center_id);

        LaundryPlant::create([
            // 'id' => Str::uuid(),
            'id_linen_center' => $request->linen_center,
            'name' => $request->name,
            'code' => $request->code,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'linen_center' => $linen_center_id->name,
            'description' => $request->description,
        ]);

        Alert::success('Congrats', 'Data Berhasil Disimpan');
        return redirect()->back();
    }

    public function update($id)
    {
        // dd($id);
        $data = LaundryPlant::find($id);
        // $laundry_plant = LaundryPlant::where('id', '=', $data->id)->first();
        $linen_center = LinenCenterDetail::all();
        return view('menu_linen/laundry_plant/update', compact('linen_center', 'data'));
    }

    public function update_save(Request $request, $id)
    {

        // dd($request);
        $value = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'linen_center' => 'required',
            'description' => 'required',
        ]);

        $data = LaundryPlant::find($id);
        $linen_center = LinenCenterDetail::where('id', '=', $data->id_linen_center)->first();
        //dd($linen_center);

        $data->id_linen_center = $request->linen_center;
        $data->name = $request->name;
        $data->code = $request->code;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->linen_center = $linen_center->name;
        $data->description = $request->description;
        $data->save();

        Alert::success('Congrats', 'Data Berhasil Diupdate');
        return redirect()->back();
    }

    public function delete($id)
    {
        // dd($id);
        LaundryPlant::find($id)->delete();

        Alert::success('Congrats', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function read($id)
    {
        $data = LaundryPlant::find($id);
        return view('menu_linen/laundry_plant/read', compact('data'));
    }
}
