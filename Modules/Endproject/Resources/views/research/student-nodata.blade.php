@extends('endproject::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                <b>Research Data</b> | Show of Research List
                </div>
                <div class="card-body">
                    You don't have a research data, please submit it!!  
                    <a href="{{ url ('/endproject/research/create') }}"><i></i>Create</a>
                </div>

                <div class="card-footer">
                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection