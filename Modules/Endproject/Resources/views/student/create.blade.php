@extends('endproject::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                
                <div class="card-header">
                <b>Student Data</b> | Submission of Profile Data
                </div>
                <div class="card-body">
                    <!-- Grey with black text -->

                    
                        <div class="col-md-10 offset-md-1">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                <form action="{{ url('/endproject/student/store') }}" method="POST" class="form-horizontal">
                                        {{ csrf_field() }}
                                    <!-- New Task Form -->
                                        <div class="row">
                                            <div class="col-md-3 offset-md-0">
                                                <div class="form-group @if ($errors->has('field_code')) has-error @endif">
                                                    <label for="task" class="control-label">Field Study Code</label>

                                                    <div>
                                                        <input type="text" name="field_code" id="field_code" class="form-control bg-light text-dark">
                                                    </div>
                                                    @if ($errors->has('field_code')) <h7 class="text-danger">{{ $errors->first('field_code') }}</h7> @endif
                                                </div>
                                            </div>

                                            <div class="col-md-4 offset-md-0">
                                                <div class="form-group @if ($errors->has('student_number')) has-error @endif">
                                                <label for="task" class="control-label">Student Number</label>

                                                    <div>
                                                        <input type="text" name="student_number" id="student_number" class="form-control bg-light text-dark">
                                                    </div>
                                                    @if ($errors->has('student_number')) <h7 class="text-danger">{{ $errors->first('student_number') }}</h7> @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 offset-md-0">
                                                    <div class="form-group">
                                                    <label for="task" class="control-label">First Name</label>

                                                    <div>
                                                        <input type="text"  name="first_name" id="first_name" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label ">Last Name</label>

                                                    <div>
                                                        <input type="text" name="last_name" id="last_name" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Supervisor</label>

                                                    <div>
                                                        <input type="text" name="supervisor" id="supervisor" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label ">Phone Number</label>

                                                    <div>
                                                        <input type="text" name="phone_number" id="phone_number" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <td>{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}</td>
                                            <td>&nbsp;</td>
                                        </div>
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