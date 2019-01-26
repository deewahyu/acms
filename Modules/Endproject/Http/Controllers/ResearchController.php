<?php

namespace Modules\Endproject\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Auth;
use Modules\Endproject\Entities\Research;
use Modules\Endproject\Entities\Student;
use Carbon\Carbon;
use Modules\Endproject\Http\Requests\CreateResearchProposalRequest;


class ResearchController extends Controller
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
            $research = Research::whereusername($user->name)->get();

            if ($research->isEmpty())
                
                return view('endproject::research.student-nodata');
            else{
                return view('endproject::research.student-index', compact('research'));
            }

                
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
        $user = Auth::user();

        if ($user == null){
            return redirect('/login');
        }
        $student = Student::whereusername($user->name)->get();
        return view('endproject::research.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    //public function store(Request $request)
    public function store(CreateResearchProposalRequest $request)
    {

        $validated = $request->validated();
        

        
        

        if ($request->research_type == "Seminar TE (PTE)"){
            $research_type = "STE";
        } else if($request->research_type == "Tugas Akhir (TE)"){
            $research_type = "TA";
        }else if ($request->research_type == "Skripsi (PTE)"){
            $research_type = "SK";
        }

        $user = Auth::user();
        $username = $user->name;
        if (Carbon::now()->month < 10){
            $month = '0'.Carbon::now()->month;
        }
        $yearAndMonth = Carbon::now()->year.$month;
        $proposalCounting = Research::where('research_type', '=', $research_type, 'and', 'submission_period', '=', $yearAndMonth)->count();
        //echo $proposalCounting;
        if ($proposalCounting < 10){
            $proposalCounting = '0'.strval((int)$proposalCounting+1);
        } else{
            $proposalCounting = strval((int)$proposalCounting+1);
        }

        $research_id =  $yearAndMonth .'-' . $research_type.$proposalCounting;

        $proposal = Research::where('username', '=', $username,  'and', 'research_type', '=', $request->researchType, 'and', 'status', '=', 'created')->count();
        if ($proposal < 4){
            $proposalData = new Research;
            $proposalData->username = $username;
            $proposalData->research_id = $research_id;
            $proposalData->title = $request->title;
            $proposalData->aim = $request->aim;
            $proposalData->background = $request->background;
            $proposalData->originality = $request->originality;
            $proposalData->schedule = $request->schedule;
            $proposalData->originality = $request->method;
            $proposalData->milestone = 'proposal';
            $proposalData->status = 'created';
            $proposalData->research_type = $research_type;
            $proposalData->submission_period = $yearAndMonth;
            $proposalData->first_supervisor = $request->first_supervisor;
            $proposalData->second_supervisor = $request->second_supervisor;
            $proposalData->save();
            
            //return 0;
        }
        return redirect('/endproject/research');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {

        $user = Auth::user();

        if ($user == null){
            return redirect('/login');
        }
        $student = Student::whereusername($user->name)->get();

        $research = Research::whereid($id)->get();
        return view('endproject::research.proposal-show', compact('research','student'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        if ($user == null){
            return redirect('/login');
        }
        $student = Student::whereusername($user->name)->get();

        $research = Research::whereid($id)->get();
        return view('endproject::research.proposal-edit', compact('research','student'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(CreateResearchProposalRequest $request)
    {
        //$validated = $request->validated();

        if ($request->research_type == "Seminar TE (PTE)"){
            $research_type = "STE";
        } else if($request->research_type == "Tugas Akhir (TE)"){
            $research_type = "TA";
        }else if ($request->research_type == "Skripsi (PTE)"){
            $research_type = "SK";
        }

        //echo $request;
        $proposalData = Proposal::where('research_id', '=', $request->research_id);
        
        $proposalData->update([

            'research_type' => $request->researchType,
            'title' => $request->title,
            'aim' => $request->aim,
            'background' => $request->background,
            'originality' => $request->method,
            'schedule' => $request->schedule,
            'method' => $request->method,
            'proposed_first_supervisor' => $request->proposed_first_supervisor,
            'proposed_second_supervisor' => $request->proposed_second_supervisor
        ]);
        
        //return 0;
        return redirect('/endproject/research');

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $research = Research::whereid($id)->delete();
        return redirect('/endproject/research');
    }
}
