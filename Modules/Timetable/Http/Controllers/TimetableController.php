<?php

namespace Modules\Timetable\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Timetable\Imports\TimetableImport;
use Modules\Timetable\Imports\SubjectImport;
use Modules\Timetable\Imports\TeacherImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Modules\Timetable\Entities\Timetable;
use Modules\Timetable\Entities\Faculty;
use PDF;
use App;
class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $timetable = Timetable::whereacademic_year('2018/2019-2')->get();
        $faculties = Faculty::orderby('username')->get();
        return view('timetable::admin-index', compact('timetable', 'faculties'));
    }

    public function entryTimetable()
    {
        return view('timetable::admin-entrytimetable');
    }
    public function entrySubject()
    {
        return view('timetable::admin-entrysubject');
    }

    public function entryTeacher()
    {
        return view('timetable::admin-entryteacher');
    }

    public function viewProdi()
    {
        $timetable = Timetable::whereacademic_year('2018/2019-2')->get();
        $faculties = Faculty::orderby('username')->get();
        return view('timetable::viewprodi', compact('timetable', 'faculties'));
    }
    public function viewDosen()
    {
        $timetable = Timetable::whereacademic_year('2018/2019-2')->get();
        $faculties = Faculty::orderby('username')->get();
        return view('timetable::viewprodi', compact('timetable', 'faculties'));
    }
    public function viewKelas()
    {
        $timetable = Timetable::whereacademic_year('2018/2019-2')->get();
        $faculties = Faculty::orderby('username')->get();
        return view('timetable::viewprodi', compact('timetable', 'faculties'));
    }
    public function viewSiak()
    {
        $timetable = Timetable::whereacademic_year('2018/2019-2')->get();
        $faculties = Faculty::orderby('username')->get();
        return view('timetable::viewsiak', compact('timetable', 'faculties'));
    }

    public function printSK(){
        return view('timetable::print-sk');
    }
    public function goPrintSK(Request $request)
    {
        $timetable = Timetable::orderby('subject_code')->get();
        $faculties = Faculty::orderby('username')->get();

        //$pdf = App::make('dompdf.wrapper');
        //$pdf->loadHTML('timetable::viewsiak');
        //return $pdf->stream();

        //$pdf = PDF::loadView('timetable::viewsiak', $timetable);
        //return $pdf->download('SK.pdf');

        $data = ['timetable' => $timetable, 'faculties' => $faculties];
        $pdf = PDF::loadView('timetable::printsk', $data)->setPaper('a4', 'landscape');
  
        return $pdf->stream('SK Mengajar 2018/2019-2.pdf');

        //return view('timetable::viewsiak', compact('timetable', 'faculties'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('timetable::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('timetable::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('timetable::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    public function fetImport(Request $request)
    {
        Excel::import(new TimetableImport, $request->import_file);
        
        return redirect('/timetable')->with('success', 'All good!');
    }

    public function subjectImport(Request $request)
    {
        Excel::import(new SubjectImport, $request->import_file);
        
        return redirect('/timetable')->with('success', 'All good!');
    }

    public function teacherImport(Request $request)
    {
    }
}
