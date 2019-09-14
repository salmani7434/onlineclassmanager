@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="text-right block-header">
        <a class="btn btn-success" href="{{ route("admin.course.index") }}">
               <i class="material-icons">keyboard_backspace</i>
                <span>Courses List</span>

        </a>
        

    </div>
     <!-- Add Course -->
    <div class="row clearfix">
                <div class="col-lg-10 col-lg-offset-1 col-md-offset-1 col-md-10 col-sm-10 col-xs-10">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD COURSE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Course Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Subject</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_2" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                               <div class="row clearfix" style="margin-top: 10px;">
                                 <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Choose Date</label>
                                  </div>
                                   <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div >
                                                <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Date start...">
                                                    </div>
                                                    <span class="input-group-addon">to</span>
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Date end...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                   <div class="row clearfix">
                                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Payment Option</label>
                                      </div>
                                       <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                               <div >
                                                <select class="form-control show-tick">
                                                    <option>Weekly</option>
                                                    <option>Per Entire Class</option>
                                                </select>
                                               </div>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="row clearfix">
                                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Payment Status</label>
                                      </div>
                                       <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                               <div >
                                                <select class="form-control show-tick">
                                                    <option>Active</option>
                                                    <option>Disable</option>
                                                </select>
                                               </div>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="row clearfix">
                                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password_2">Setup</label>
                                      </div>
                                       <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                               <div >
                                                <select class="form-control show-tick">
                                                    <option>Complete</option>
                                                    <option>Incomplete</option>
                                                </select>
                                               </div>
                                            </div>
                                        </div>
                                     </div>
                                  <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="checkbox" id="is_important" class="filled-in">
                                        <label for="is_important">Is Impotant</label>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" class="btn btn-lg btn-primary m-t-15 waves-effect">SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Add Course -->

  
</div>
  
<script>
    $( document ).ready(function() {
    console.log( "ready!" );
});
</script>
@endsection
