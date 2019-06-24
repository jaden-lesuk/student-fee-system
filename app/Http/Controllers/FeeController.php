<?php

namespace App\Http\Controllers;
use App\Student;
use App\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeeController extends Controller
{
    public function allFees(){
        //read all cars
        $fees = Fee::all();
        return view('fee',['fees' => $fees]);
    }

    public function search(Request $request){
        $search = $request->get('search');
        $fees = DB::table('fees')->where('student_id', 'like', '%'.$search.'%')->paginate(5);
        return view('fee',['fees' => $fees]);
    }


    public function index(){
        return view('newfee');
    } 

    
    public function newFee(){
        $this->validate(request(), [
            'amount'=>'required',
            'student_id'=>'required',
            'registered_on'=>'required'
        ]);
     
        //$car = Car::where('id', request('id'))->firstOrFail();
     
        $fee = new Fee;
        $fee->amount = request('amount');
        $fee->student_id = request('student_id');
        $fee->registered_on = request('registered_on');
        // $review->car_id = $car->id;
        $fee->save();
     
        return view('newfee');
    } 
}
