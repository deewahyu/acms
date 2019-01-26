@extends('endproject::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                <b>Student Data</b> | Edit of Profile Data
                </div>
                <div class="card-body">
                    <!-- Grey with black text -->

                    
                    @foreach ($student as $student)
                        <div class="col-md-10 offset-md-1">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                <form action="{{ url('/endproject/student/update', $student->username) }}" method="POST" class="form-horizontal">
                                        {{ csrf_field() }}
                                    <!-- New Task Form -->
                                        <div class="row">
                                            <div class="col-md-3 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Field Study Code</label>

                                                    <div>
                                                        <input type="text" value="{{$student->field_code}}" name="field_code" id="field_code" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">Student Number</label>

                                                    <div>
                                                        <input type="text" value="{{$student->student_number}}" name="student_number" id="student_number" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 offset-md-0">
                                                    <div class="form-group">
                                                    <label for="task" class="control-label">First Name</label>

                                                    <div>
                                                        <input type="text" value ="{{$student->first_name}}" name="first_name" id="first_name" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label ">Last Name</label>

                                                    <div>
                                                        <input type="text" value ="{{$student->last_name}}" name="last_name" id="last_name" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Supervisor</label>

                                                    <div>
                                                        <input type="text" value ="{{$student->supervisor}}" name="supervisor" id="supervisor" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label ">Phone Number</label>

                                                    <div>
                                                        <input type="text" value ="{{$student->phone_number}}" name="phone_number" id="phone_number" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <td>{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}</td>
                                            <td>&nbsp;</td>
                                            <td><a class="btn btn-danger" href="{{ url ('/endproject/student') }}"><i class="fa fa-btn"></i>Cancel</a></td>
                                        </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="card-footer">
                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection