<?php

namespace Modules\Endproject\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use Modules\Endproject\Entities\Student;

class EndprojectController extends Controller
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

        if ($user->isStudent()) {
            $student = Student::whereusername($user->name)->get();

            if ($student->isEmpty())
                return redirect ('/endproject/student/create');
            else
                return view('endproject::student-index');
        } elseif ($user->isLecturer()) {
            return view('endproject::lecturer-index');
        } elseif ($user->isKbk()) {
            return view('endproject::kbk-index');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('endproject::create');
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
        return view('endproject::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('endproject::edit');
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
}
