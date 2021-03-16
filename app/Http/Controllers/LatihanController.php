<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Latihan;

class LatihanController extends Controller
{
    public function index()
    {
        $data = Latihan::get();
        // dd($data);
        return view ('data' , compact('data')); 
    }

    public function addData()
    {
        return view('addData');
    }

    public function saveData(Request $request)
    {
        $data = new Latihan;
        $data->nama_murid = $request->nama_murid;
        $data->status_murid = $request->status_murid;
        $data->nilai_tugas = $request->nilai_tugas;
        $data->nilai_pts = $request->nilai_pts;
        $data->nilai_uas = $request->nilai_uas;
        $data->save();
        return redirect('/latihan');
    }
    public function editData($id)
    {
        $data = Latihan::where('id', $id)->first(); 
        return view('editData', compact('data'));
    }
    public function updateData(Request $request)
    {
        $data = Latihan::where('id', $request->id)->first();
        $data->nama_murid = $request->nama_murid;
        $data->status_murid = $request->status_murid;
        $data->nilai_tugas = $request->nilai_tugas;
        $data->nilai_pts = $request->nilai_pts;
        $data->nilai_uas = $request->nilai_uas;
        $data->save();
        return redirect('/latihan');
    }
    public function deleteData($id)
    {
       $data = Latihan::where('id',$id)->first();
       $data->delete();
       return redirect('/latihan');
    }
}
