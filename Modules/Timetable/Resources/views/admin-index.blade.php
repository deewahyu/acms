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
                    
                </div>

                <div class="card-footer">
                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection