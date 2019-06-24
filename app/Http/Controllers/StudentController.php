<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function allStudents(){
        //read all cars
        $students = Student::all();
        return view('allstudents',['students' => $students]);
    }

    public function particularstudent($id){
        //read a particular car identified by id
        $students = Student::find($id);
    }

    public function index(){
        return view('newstudent');
    }     

    public function newStudent(){
        //create a new Car
        $this->validate(request(),[
            'name' => 'required',
        ]);
     
        $student= new Student;
    
        $student->name = request('name');
        $student->save();
     
        return view('newstudent');
    }
}
