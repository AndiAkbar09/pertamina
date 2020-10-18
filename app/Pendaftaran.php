<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
     protected $table = 'pendaftarans';
     protected $guarded = [];

     public function temukanId()
     {
        $_id = 0;

        $id = Pendaftaran::where('user_id','like',1 )->orderBy('user_id');
        
        $id = $id->count();
         if($id == 0){
             $id = $_id."001";
         }else{
             $last = $id+1;
            
             $id ="$_id".str_pad($last, 3, '0', STR_PAD_LEFT);
    }

        // dd($id);
        return $id;
     }
}
