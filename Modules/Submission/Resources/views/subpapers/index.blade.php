@extends('submission::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                
                <div class="card-body">
                    <!-- Grey with black text -->
                    @include('submission::layouts.insidenav')

                    <div>
                        <br>
                        <h3 class="text-left"><b>Paper Submission</b></h3>

                        Follow the instructions, step by step, and then use the "Submit" button at the bottom of the form. The required fields are marked by (*).
                        <br>
                     </div>   
                    
                </div>
                <div class="card-body">
                   
                    <div>
                        <h5 class="text-left">Author Information</h5>
                        For each of the authors please fill out the form below. Some items on the form are explained here:
                        <ul>
                        <li><b>Email address</b> will only be used for communication with the authors. It will not appear in public Web pages of this conference. The email address can be omitted for authors who are not corresponding. These authors will also have no access to the submission page.
                        </li>
                        <li><b>Web page</b> can be used on the conference Web pages, for example, for making the program. It should be a Web page of the author, not the Web page of her or his organization.
                        </li>
                        <li><b>Each author</b> marked as a corresponding author will receive email messages from the system about this submission. There must be at least one corresponding author.
                        </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                   
                <h2>Create A Product</h2><br  />
               
                    <form method="post">
                        <div class="row">
                            <div class="col-md-2">Last name</div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control-sm" name="name">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Last name</div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control-sm" name="price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Last name</div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control-sm" name="price">
                                </div>
                            </div>
                        </div>
                        
                    </form>
              
                   
               </div>
            </div>
        </div>
        
    </div>
</div>
@endsection