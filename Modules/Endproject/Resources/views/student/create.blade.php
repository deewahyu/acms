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
                    
                    <div class="container">

                        <div class="col-md-10 offset-md-1">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <!-- New Task Form -->
                                    <form action="{{ url('/endproject/student/store') }}" method="POST" class="form-horizontal">
                                        {{ csrf_field() }}

                                        <!-- Task Name -->
                                        <div class="form-group">
                                            <label for="task" class="col-sm-3 control-label">Field Study Code</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="field_code" id="field_code" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="task" class="col-sm-3 control-label">Student Number</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="student_number" id="student_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="task" class="col-sm-3 control-label">First Name</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="first_name" id="first_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="task" class="col-sm-3 control-label">Last Name</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="last_name" id="last_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="task" class="col-sm-3 control-label">Academic Supervisor</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="supervisor" id="supervisor" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="task" class="col-sm-3 control-label">Phone Number</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="phone_number" id="phone_number" class="form-control">
                                            </div>
                                        </div>

                                        <!-- Add Task Button -->
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                <b>Student Data</b> | Submission of Profile Data
                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection