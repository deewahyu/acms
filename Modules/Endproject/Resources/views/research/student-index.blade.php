@extends('endproject::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                
                <div class="card-header">
                <b>Research Data</b> | List of Proposal
                </div>
                    <div class="card-body">
                        <!-- Grey with black text -->
                        
                        <div class="container">

                        @php ($counter=0)
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th style="width: 5%"> No.</th>
                                <th style="width: 17%" >ID</th>
                                <th style="width: 53%" > title</th>
                                <th style="width: 10%"> Type</th>
                                <th style="width: 5%"> </th>
                                <th style="width: 5%"> </th>
                                <th style="width: 5%"> </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($research as $research)
                                    @php ($counter = $counter+1)
                                    <tr>
                                        <td style="width: 2%" class="text-right">{{ $counter }}.</td>
                                        <td style="width: 17%" class="text-left">{{ $research->research_id }}</td>
                                        <td style="width: 53%" class="text-left">
                                            <a href="{{ url('/endproject/research/show', $research->id) }}">{{$research->title}}</a>
                                        </td>
                                        <td style="width: 10%" class="text-left">{{ $research->research_type }}</td>
                                        @if ($research->status == "submitted")
                                        <td style="width: 5%">Submitted</td>
                                        <td></td>
                                        <td></td>

                                        @else

                                                <td style="width: 5%"><a href="{{ url('/endproject/research/create', $research->id) }}">Submit</a></td>
                                                <td style="width: 5%"><a href="{{ url('/endproject/research/edit', $research->id) }}">Edit</a></td>
                                                <td style="width: 5%"><a href="{{ url('/endproject/research/destroy', $research->id) }}">Delete</a></td>
                                         @endif
                                        
                                        
                                        

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-primary" href="{{ url ('/endproject/research/create') }}"><i class="fa fa-btn"></i>Write Another</a>
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