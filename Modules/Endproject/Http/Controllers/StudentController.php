<?php

namespace Modules\Endproject\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use Modules\Endproject\Entities\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        $user = Auth::user();

        if ($user == null){
            return redirect('/login');
        }

        $student = Student::whereusername($user->name)->get();
        return view('endproject::student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('endproject::student.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        //$student = '';
        $student = Student::whereusername($user->name)->get();
        if ($student->isEmpty()){
            $studenData = new Student;
            $studenData->username = $user->name;
            $studenData->field_code = $request->field_code;
            $studenData->student_number = $request->student_number;
            $studenData->first_name = $request->first_name;
            $studenData->last_name = $request->last_name;
            $studenData->supervisor = $request->supervisor;
            $studenData->phone_number = $request->phone_number;
            $studenData->save();

           // Session::flash('message', 'Successfully submit student data!');
            return redirect('/endproject');
        }
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('endproject::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($username)
    {

        $student = Student::whereusername($username)->get();
        return view('endproject::student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $username)
    {
        $studenData = Student::whereusername($username);
        $studenData->update([
            'field_code' => $request->field_code,
            'student_number' => $request->student_number,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'supervisor' => $request->supervisor,
            'phone_number' => $request->phone_number
        ]);
        
        return redirect('/endproject/student');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
