@extends('submission::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                
                <div class="card-body">
                    <!-- Grey with black text -->
                    
                    @include('submission::layouts.insidenav')

                    </br>

                    <div class="container"> 
                        <div class="col-md-111 offset-md-0">
                            <div class="card">
                                <div class="card-body">
                                    <h3> <b>Welcome to Writing Clinic Program </b></h3>
                                    </br>
                                    <h5>
                                    <p>Writing Clinic is a defined program to coach and guide attendance to have a good ability on publishing scholarly manuscript </p>
                                  
                                    Training materials:
                                    <ul>
                                        <li>Literature search</li>
                                        <li>Reference manager</li>
                                        <li>Self editing</li>
                                    </ul>
                                 
                                    Mentors:
                                    <ul>
                                        <li>Dr. Ade Gaffar Abdullah, M.Si.</li>
                                        <li>Dandhi Kuswardhan, Ph.D.</li>
                                        <li>Didin Wahyudin, Ph.D.</li>
                                        <li>Iwan Kustiawan, Ph.D.</li>
                                    </ul>

                                    Follow this link for reservation
                                    </br>
                                    Poster could be download here
                                 
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
