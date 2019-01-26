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

@extends('management::layouts.app')

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
                                <form action="{{ url('/management/printyudisium') }}" method="POST" target="blank" class="form-horizontal">
                                        {{ csrf_field() }}
                                    <!-- New Task Form -->
                                        <div class="row">
                                            <div class="col-md-3 offset-md-0">
                                                <div class="form-group">
                                                    <label for="task" class="control-label">Kode Periode Sidang</label>

                                                    <div>
                                                        <input type="text" name="defense_id" id="defense_id" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">Program Studi</label>

                                                    <div>
                                                        <input type="text" name="academic_program" id="academic_program" class="form-control bg-light text-dark">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 offset-md-0">
                                                <div class="form-group">
                                                <label for="task" class="control-label">&nbsp;</label>

                                                    <div>
                                                    <button type="submit" class="btn btn-primary">
                                                            Export to PDF
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
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