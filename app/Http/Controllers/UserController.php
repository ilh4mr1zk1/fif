<?php

namespace App\Http\Controllers;
use App\Models\MyDb;
use App\Models\Location;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index () {
        return view('dashboard');
    }
    
    public function course () {
        return view('course');
    }
    
    public function ajaxRequestPost(Request $request) {

        $input = $request->all();
        // dd($input['data']);exit;
        $addLocation = new Location;
        $addLocation->latitude = $input['latitude'];
        $addLocation->longitude = $input['longitude'];
        $addLocation->data_record = $input['data'];
        $addLocation->save();

    }
    
    public function check () {
        $db = Location::all();

        return view('handler', ['data_location' => $db]);
    }

    public function simpan(Request $request)
    {   
        $add = new MyDb;   // valible and model name
        $add->Nama = $request->input('nama');
        $add->Email = $request->input('email');
        $add->Telpon = $request->input('telp');
        $add->Pesan = $request->input('pesan');
        $add->Kategori = $request->input('pilih');
       
        $add->save();

        return redirect()->route('firstPage')->with('success', 'Message Successfully Sending');

    }
}
