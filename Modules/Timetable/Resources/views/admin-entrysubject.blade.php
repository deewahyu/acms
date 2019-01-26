@extends('timetable::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                
                <div class="card-header">
                <b>Timetable Admin</b> | Import Subject Data
                </div>
                    <div class="card-body">
                        <!-- Grey with black text -->
                        
                        <div class="container">
                            @if($message = Session::get('success'))
                                <div class="alert alert-info alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                                </div>
                            @endif
                            {!! Session::forget('success') !!}
                            
                            <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('/timetable/subjectimport') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="import_file" />
                                <button class="btn btn-primary">Import File</button>
                            </form>

                        </div>
                    </div>

                    <div class="card-footer">
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection