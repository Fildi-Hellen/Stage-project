<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


// class StudentExport implements FromCollection,WithHeadings
// { public function headings():array{
    
//     return[


//         'cin',
//          'nomprenom', 
//          'sexe',
//          'datenaiss',
//          'inscription1',
//          'inscription2',
//          'licence',
//          'datelicence',
//          'DEUG',
//          'dateDEUG',
//          'anneeinsc',
//          'situation',
//          'lieuNaiss'
//     ];


// }
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     // return Student::all();
    //     return collect(student::getstudent());
    // }
// }
