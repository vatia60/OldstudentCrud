<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
   public function index (){
       $students = Student::all();
       return view('index')->with('students', $students);
   }
   public function create (){
    return view('create');
   }
   public function edit ($id){
    $student = Student::find($id);
    return view('edit')->with('student', $student);
   }
   public function store (Request $request){
       //Check validation;
       $this->validate($request, [
           'name'            => 'required|string|max:10|min:4',
           'registration_id' => 'required|integer|max:20|min:4',
           'department'      => 'required|string',
           'details'         => 'nullable',
       ]);
       //Data insert here
       $student = new Student;
       $student->registration_id = $request->registration_id;
       $student->name = $request->name;
       $student->department = $request->department;
       $student->details = $request->details;
       $student->save();

       return redirect()->route('index');
   }
   public function update (Request $request, $id){
    //Data insert here
    $student = Student::find($id);
    $student->registration_id = $request->registration_id;
    $student->name = $request->name;
    $student->department = $request->department;
    $student->details = $request->details;
    $student->save();

    return redirect()->route('index');
}
    public function delete ($id){
        //Data insert here
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('index');
    }
}
