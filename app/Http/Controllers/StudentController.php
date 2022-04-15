<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data = Student::all();
        return view('datasiswa', compact('data'));
    }

    public function tambahsiswa(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
        
        Student::create($request->all());
        return redirect()->route('siswa')->with('success','Data Berhasil Di Tambahkan');
    }
    public function tampilkandata($id){
        $data = Student::find($id);
        return view('ubahdata',compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Student::find($id);
        $data->update($request->all());
        return redirect()->route('siswa')->with('success','Data Berhasil Di Ubah');

    }
    public function deletedata($id){
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success','Data Berhasil Di Hapus');

    }
}
