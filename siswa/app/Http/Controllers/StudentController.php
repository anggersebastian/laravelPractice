<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;

class StudentController extends Controller
{
    public function index(){
		
		$students = Students::Paginate(4);
    	return view('welcome', compact('students'));
    }

    public function create(){
    	return view('create');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'nama' => 'required',
    		'kelas' => 'required',
    		'alamat' => 'required',
    		'phone' => 'required'

    	]);

    $student = new Students;
    	$student->nama = $request->nama;
    	$student->kelas = $request->kelas;
    	$student->alamat = $request->alamat;
    	$student->phone = $request->phone;
    	$student->save();
    	return redirect(route('home'))->with('successMsg', 'Student Successfully Added');
    }

    public function edit($siswaId){
    	$student = Students::find($siswaId);
    	return view('edit',compact('student'));
    }

    public function update(request $request, $id){
    	$this->validate($request,[
    		'nama' => 'required',
    		'kelas' => 'required',
    		'alamat' => 'required',
    		'phone' => 'required'

    	]);

    $student = Students::find($id);
    	$student->nama = $request->nama;
    	$student->kelas = $request->kelas;
    	$student->alamat = $request->alamat;
    	$student->phone = $request->phone;
    	$student->save();
    	return redirect(route('home'))->with('successMsg', 'Student Successfully Updated');

    }

    public function delete($id){
    	Students::find($id)->delete();
    	// $siswa = Students::find($id);
    	// $siswa->delete();
    	
    	return redirect(route('home'))->with('deleteMsg', 'Student Deleted Successfully');

    }
    
}
