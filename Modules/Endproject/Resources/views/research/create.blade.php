@extends('endproject::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                
                <div class="card-header">
                <b>Research Data</b> | Submission of Research Proposal
                </div>
                <div class="card-body">
                    <!-- Grey with black text -->
                    
                    <div class="container">

                        <div class="col-md-12 offset-md-0">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <!-- New Task Form -->
                                    @foreach ($student as $student_data)
                                    <div class="row">
                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Name</label>

                                                    <div>
                                                        <input type="text" value="{{ $student_data->first_name }} {{ $student_data->last_name }}"  class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">Code of Study Field</label>

                                                    <div>
                                                        <input type="text" value="{{ $student_data->field_code }}" class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">Student Number</label>

                                                    <div>
                                                        <input type="text" value="{{ $student_data->student_number }}" class="form-control bg-light text-dark" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <form action="{{ url('/endproject/research/store') }}" method="POST" class="form-horizontal">
                                        {{ csrf_field() }}

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
                                                <div class="form-group @if ($errors->has('title')) has-error @endif">
                                                    <label for="task" class="control-label ">Title </label>

                                                    <div>
                                                        <textarea rows="2" type="text" name="title" id="title" value="Research title"  class="form-control"></textarea>
                                                    </div>
                                                    @if ($errors->has('title')) <h7 class="text-danger">{{ $errors->first('title') }}</h7> @endif
                                                </div>
                                            </div>
                                        </div>  

                                        <div class="row">
                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group @if ($errors->has('first_supervisor')) has-error @endif">
                                                    <label for="task" class="control-label">Proposed First Supervisor</label>
                                                    <div>
                                                        <input type="text"  name="first_supervisor" id="first_supervisor" class="form-control">
                                                    </div>
                                                    @if ($errors->has('first_supervisor')) <h7 class="text-danger">{{ $errors->first('first_supervisor') }}</h7> @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group @if ($errors->has('second_supervisor')) has-error @endif">
                                                <label for="task" class="control-label">Proposed Second Supervisor</label>
                                                    <div>
                                                        <input type="text" name="second_supervisor" hint="only for Skripsi and Tugas Akhir" id="second_supervisor" class="form-control">
                                                    </div>
                                                    @if ($errors->has('second_supervisor')) <h7 class="text-danger">{{ $errors->first('second_supervisor') }}</h7> @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group @if ($errors->has('aim')) has-error @endif">
                                                    <label for="task" class="control-label">Aim</label>

                                                    <div>
                                                        <textarea rows="8" type="text" name="aim" id="aim"  class="form-control"></textarea>
                                                    </div>
                                                    @if ($errors->has('aim')) <h7 class="text-danger">{{ $errors->first('aim') }}</h7> @endif
                                                </div>
                                            </div>
                                        </div> 

                                        

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group @if ($errors->has('background')) has-error @endif">
                                                    <label for="task" class="control-label">Background</label>

                                                    <div>
                                                        <textarea rows="8" type="text" name="background" id="background"  class="form-control"></textarea>
                                                    </div>
                                                    @if ($errors->has('background')) <h7 class="text-danger">{{ $errors->first('background') }}</h7> @endif


                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group @if ($errors->has('originality')) has-error @endif">
                                                    <label for="task" class="control-label">Originality</label>

                                                    <div>
                                                        <textarea rows="8" type="text" name="originality" id="originality"  class="form-control"></textarea>
                                                    </div>
                                                    @if ($errors->has('originality')) <h7 class="text-danger">{{ $errors->first('originality') }}</h7> @endif
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group @if ($errors->has('schedule')) has-error @endif">
                                                    <label for="task" class="control-label">Schedule</label>

                                                    <div>
                                                        <textarea rows="8" type="text" name="schedule" id="schedule"  class="form-control"></textarea>
                                                    </div>
                                                    @if ($errors->has('schedule')) <h7 class="text-danger">{{ $errors->first('schedule') }}</h7> @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 offset-md-0">
                                                <div class="form-group @if ($errors->has('method')) has-error @endif">
                                                    <label for="task" class="control-label">Method</label>

                                                    <div>
                                                        <textarea rows="8" type="text" name="method" id="method"  class="form-control"></textarea>
                                                    </div>
                                                    @if ($errors->has('method')) <h7 class="text-danger">{{ $errors->first('method') }}</h7> @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-6">
                                                        <button type="submit" class="btn btn-primary">
                                                            Submit
                                                        </button>
                                                    </div>
                                            </div>
                                        </div>

                                        <!-- Add Task Button -->
                                        
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