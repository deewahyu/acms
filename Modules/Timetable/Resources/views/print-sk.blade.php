<style>
.page-break {
    page-break-after: always;
}

.font-face {
    font-family: OptimusPrinceps;
    src: url('{{ public_path('fonts/OptimusPrinceps.tff') }}');
}

..bottom {
    border-bottom: 1px solid #ccc;
}

</style>

@extends('timetable::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-16 offset-md-0">
            <div class="card">
                <div class="card-header">
                <b>Timetable Data</b> | Show of Timetable
                </div>
                <div class="card-body">
                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('/timetable/goprintsk') }}" class="form-horizontal" method="post" enctype="multipart/form-data" target="blank">
                                {{ csrf_field() }}
                                
                                <div class="col-md-16 offset-md-0">
                                    <div class="form-group">
                                    <label for="teacher" class="control-label">Nama Dosen</label>

                                        <div>
                                                        <input type="text" name="teacher" id="teacher" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                <button class="btn btn-primary">Print</button>
                            </form>

                
                <div class="card-footer">
                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection