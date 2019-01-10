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
                    <h3 class="text-center"><b> (Paper Submission) </b></hh3>

                    
                    Author Information
                    For each of the authors please fill out the form below. Some items on the form are explained here:
                    Email address will only be used for communication with the authors. It will not appear in public Web pages of this conference. The email address can be omitted for authors who are not corresponding. These authors will also have no access to the submission page.
                    Web page can be used on the conference Web pages, for example, for making the program. It should be a Web page of the author, not the Web page of her or his organization.
                    Each author marked as a corresponding author will receive email messages from the system about this submission. There must be at least one corresponding author.
                        
                </div>

            </div>
        </div>
        
    </div>
</div>
@endsection