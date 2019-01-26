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

                                    <form action="{{ url('/endproject/research/update') }}" method="POST" class="form-horizontal">
                                        {{ csrf_field() }}

                                    @foreach ($research as $research_detail)

                                        
                                        <div class="row">
                                            <div class="col-md-4 offset-md-0">
                                                <div class="form-group">
                                                    <label for="research_type">Research Type</label>
                                                    <select class="form-control" id="research_type" name="research_type" required autofocus>
                                                        <option>Seminar TE (PTE)</option>
                                                        <option>Tugas Akhir (TE)</option>
                                                        <option>Skripsi (PTE)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Title</label>

                                                    <div>
                                                        <textarea rows="2" type="text" id="title" name="title" class="form-control bg-light text-dark">{{ old ('$research_detail->title') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  

                                        <div class="row">
                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Proposed First Supervisor</label>
                                                    <div>
                                                        <input type="text"  value="{{ $research_detail->first_supervisor }}" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">Proposed Second Supervisor</label>

                                                    <div>
                                                        <input type="text" value="{{ $research_detail->second_supervisor }}" class="form-control bg-light text-dark">
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
                                                        <textarea rows="8" type="text" class="form-control bg-light text-dark">{{ $research_detail->schedule }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Method</label>

                                                    <div>
                                                        <textarea rows="8" type="text" class="form-control bg-light text-dark">{{ $research_detail->method }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
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