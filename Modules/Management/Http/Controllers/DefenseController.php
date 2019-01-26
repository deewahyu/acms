<?php

namespace Modules\Management\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Management\Imports\GFormImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Modules\Endproject\Entities\Fieldcode;
use Modules\Endproject\Entities\Defense;
use PDF;
use App;

class DefenseController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function defenseGForm(Request $request)
    {
        Excel::import(new GFormImport, $request->import_file);
        return redirect('/management')->with('success', 'All good!');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function index()
    {

        return view('management::defense.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function viewImportDefenseGForm()
    {
        return view('management::defense.defense-gform');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function printYudisium(Request $request)
    {
        $listOfParticipants= Defense::wheredefense_id($request->defense_id)->whereacademic_program($request->academic_program)->orderby('name','asc')->get();
        //$listOfParticipants= Defense::wheredefense_id($request->defense_id)->orderby('name','asc')->get();
        $htmlTemplate="";
        //$htmlTemplate = "management::defense.defense-te-print";
        //dd($request->academic_program);
        $htmlTemplate = "management::defense.index";
        if ($request->academic_program == "TE"){
            $htmlTemplate = "management::defense.defense-te-print";
        }elseif($request->academic_program == "PTE"){
            $htmlTemplate = "management::defense.defense-pte-print";
        }elseif($request->academic_program == "D3"){
            $htmlTemplate = "management::defense.defense-d3-print";
        }
        $htmlTemplate = "management::defense.defense-te-print";
        //dd($listOfParticipants);
        $data = ['listOfParticipants' => $listOfParticipants];
        $pdf = PDF::loadView($htmlTemplate, $data)->setPaper('folio', 'landscape');
  
        return $pdf->stream('Lampiran SK Yudisium-'.$request->defense_id.' '.$request->academic_program.'pdf');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('management::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('management::edit');
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
