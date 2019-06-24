<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fee extends Model
{
    public function Student(){
        return $this->belongsTo('App\Student', 'id');
    }

    static function getTotalAmount() {
        // return $this->Student()->sum(DB::raw('amount'));
        // $fees = DB::table('fees')->where('student_id', 'like', '%'.$search.'%')
        $total= DB::table('fees')->sum('amount');
        return $total;
      }
}
