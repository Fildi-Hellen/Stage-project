<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentExport;
use Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
      return view ('students.index')->with('students', $students);
     //return view('printstudent')->with('students', $students);;
    }
     public function prnpriview()
     {
           $students = Student::all();
           return view('students')->with('students', $students);;
     }
    // public function exportIntoExcel()
    // {
    //    return Excel::download(new StudentExport,'studentlist.xlsx');

    // }
        //  public function indexSorting()
        // {
        //     $student = Student::sortable()->paginate(5);

        //     return view('students.index-sorting')->with('students', $student);
        //  }
        // public function indexFiltering(Request $request)
        // {
        //     $filter = $request->query('filter');
        
        //     if (!empty($filter)) {
        //         $students = Student::sortable()
        //             ->where('students.name', 'like', '%'.$filter.'%')
        //             ->paginate(5);
        //     } else {
        //         $students = Student::sortable()
        //             ->paginate(5);
        //     }
        
        //     return view('students.index-filtering')->with('students', $students)->with('filter', $filter);
        // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cne)
    {
        $student = Student::find($cne);
        return view('students.show')->with('students', $student);
    }

    // public function s1()
    // { 
    //     $students = Student::all();
    //     $students= $students->filter(function($item){
    //         return $item->inscription1=='s1';
    //         });
    //     return view('students.index')->with('students', $students);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cne)
    {
        $student = Student::find($cne);
        return view('students.edit')->with('students', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cne)
    {
        $student = Student::find($cne);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cne)
    {
        Student::destroy($cne);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
