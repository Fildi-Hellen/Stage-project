<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\DB;


class Student extends Model
{    
    // use Sortable;

    public $sortable = ['cin', 'nomprenom', 'sexe','datenaiss','inscription1','inscription2','licence','datelicence','DEUG','dateDEUG','anneeinsc','situation','lieuNaiss'];

    protected $table = 'students';
    protected $primaryKey = 'cne';
    protected $fillable = ['cne','cin', 'nomprenom', 'sexe','datenaiss','inscription1','inscription2','licence','datelicence','DEUG','dateDEUG','anneeinsc','situation','lieuNaiss'];


    // public static function getstudent()
    // {

    //  $record=DB::table('students')->select('cin', 'nomprenom', 'sexe','datenaiss','inscription1','inscription2','licence','datelicence','DEUG','dateDEUG','anneeinsc','situation','lieuNaiss')->get()->toArray();
    //  return $record;

    // }




   
}

