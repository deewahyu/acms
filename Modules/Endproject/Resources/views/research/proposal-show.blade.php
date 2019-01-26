@extends('endproject::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                
                <div class="card-header">
                <b>Research Data</b> | Show of Research Proposal
                </div>
                <div class="card-body">
                    <!-- Grey with black text -->
                    
                    <div class="container">

                        <div class="col-md-12 offset-md-0">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <!-- New Task Form -->
                                   
                                    @foreach ($student as $research_data)
                                    <div class="row">
                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Name</label>

                                                    <div>
                                                        <input type="text" value="{{ $research_data->first_name }} {{ $research_data->last_name }}"  class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">Code of Study Field</label>

                                                    <div>
                                                        <input type="text" value="{{ $research_data->field_code }}" class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">Student Number</label>

                                                    <div>
                                                        <input type="text" value="{{ $research_data->student_number }}" class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach ($research as $research_detail)

                                        @if ($research_detail->research_type == "STE")
                                            @php $research_detail->research_type = "Seminar TE (PTE)"
                                        @elseif ($research_detail->research_type == "TA")
                                            @php $research_detail->research_type = "Tugas AKhir (TE)"
                                        @else ($research_detail->research_type == "SK")
                                            @php $research_detail->research_type = "Skripsi (PTE)"
                                        @endif
                                        <div class="row">
                                            <div class="col-md-4 offset-md-0">
                                            <div class="form-group">
                                                    <label for="task" class="control-label">Research Type</label>

                                                    <div>
                                                        <input type="text" value="{{ $research_detail->research_type }}"  class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Title</label>

                                                    <div>
                                                        <textarea rows="2" type="text" class="form-control bg-light text-dark" readonly>{{ $research_detail->title }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  

                                        <div class="row">
                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Proposed First Supervisor</label>
                                                    <div>
                                                        <input type="text"  value="{{ $research_detail->first_supervisor }}" class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">Proposed Second Supervisor</label>

                                                    <div>
                                                        <input type="text" value="{{ $research_detail->second_supervisor }}" class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Aim</label>

                                                    <div>
                                                        <textarea rows="8" type="text" class="form-control bg-light text-dark" readonly>{{ $research_detail->aim }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                        

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Background</label>

                                                    <div>
                                                        <textarea rows="8" type="text" class="form-control bg-light text-dark" readonly>{{ $research_detail->background }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Originality</label>

                                                    <div>
                                                        <textarea rows="8" type="text" class="form-control bg-light text-dark" readonly>{{ $research_detail->originality }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Schedule</label>

                                                    <div>
                                                        <textarea rows="8" type="text" class="form-control bg-light text-dark" readonly>{{ $research_detail->schedule }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Method</label>

                                                    <div>
                                                        <textarea rows="8" type="text" class="form-control bg-light text-dark" readonly>{{ $research_detail->method }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <a class="btn btn-primary" href="{{ url ('/endproject/research/edit', $research_detail->id ) }}">Edit Proposal</a>
                                    <a class="btn btn-danger" href="{{ url ('/endproject/research/destroy', $research_detail->id ) }}">Delete Proposal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection