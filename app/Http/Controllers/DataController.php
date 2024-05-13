<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Device;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return Data::all();
    }

    public function store(Request $request)
    {
        $data = new Data;
        $data->device_id = $request->device_id;
        $data->data = $request->data;
        $data->save();

        if (Device::where('id', $request->device_id)->exists()) {
            $device = Device::find($request->device_id);
            $device->nilai = $request->data;
            $device->save();
        }

        return response()->json([
            "message" => "Data telah ditambahkan."
        ], 201);
    }

    public function show(string $id)
    {
        return Data::where('device_id', $id)->orderBy('created_at', 'DESC')->get();
    }

    public function web_show($id)
    {
        return view('device', [
            "title" => "data",
            "device" => Device::find($id),
            "data" => Data::where('device_id', $id)->orderBy('created_at', 'DESC')->get()
        ]);
    }
}
