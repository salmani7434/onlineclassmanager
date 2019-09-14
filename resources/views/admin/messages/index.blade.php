@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="text-right block-header">
        <!-- <a class="btn btn-success" href="#" data-toggle="modal" data-target="#AddCourseModal">
               <i class="material-icons">library_add</i>
                <span>Add Messages</span>

        </a> -->
        
    </div>
     <!-- Basic Examples -->
    <br><div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Messages
                    </h2>
                   
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Message</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Message</th>
                                    <th width="100">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                               
                                <tr>
                                    <td>1</td>
                                    <td>Olivia Liang Support Engineer </td>
                                    <td> 
                                        <a href="javascript:void(0);" class="btn btn-primary waves-effect">Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-danger waves-effect" >Delete</a>        
                                    </td>
                                </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Olivia Liang Support Engineer </td>
                                    <td> 
                                        <a href="javascript:void(0);" class="btn btn-primary waves-effect">Edit</a>
                                        <a href="javascript:void(0);" class="btn btn-danger waves-effect" >Delete</a>        
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>


                        <!-- Add Logins Modal -->
                        <div id="AddLoginsModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Logins</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal">

                                     <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="login_url">Login URL</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="url" id="login_url" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="username">User Name</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="username" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="password" id="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <br><div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Security Question</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                               <div >
                                                <select class="form-control">
                                                    <option>Pakistan</option>
                                                    <option>Keniya</option> 
                                                    <option>England</option>
                                                    <option>Australia</option>
                                                </select>
                                               </div>
                                            </div>
                                    </div>
                                </div>
                                  
                                    <br><div class="row clearfix">
                                        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                                            <button type="button" class="btn btn-lg btn-primary m-t-15 waves-effect">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>




                        <!-- Add Proxy Modal -->
                        <div id="AddProxyModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Proxy</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal">

                                     <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="proxy">Proxy</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="url" id="proxy" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="location">Location</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="location" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                  
                                  
                                    <br><div class="row clearfix">
                                        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                                            <button type="button" class="btn btn-lg btn-primary m-t-15 waves-effect">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>



                        <!-- Add Professor Modal -->
                        <div id="AddProfessorModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Professor</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal">

                                     <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="url" id="name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="email" id="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="tel" id="phone" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                  
                                  
                                    <br><div class="row clearfix">
                                        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                                            <button type="button" class="btn btn-lg btn-primary m-t-15 waves-effect">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                          <!-- Add Comments Modal -->

                        <div id="AddCommentsModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Comments</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal">

                                     <br><div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="comment">Comment</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="comment" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                  
                                    <br><div class="row clearfix">
                                        <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                                            <button type="button" class="btn btn-lg btn-primary m-t-15 waves-effect">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
  

   <!-- Add Message Modal -->
  <div class="modal fade" id="AddCourseModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Course</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
                <br><div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                        <label for="email_address_2">Course Name</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="email_address_2" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                        <label for="password_2">Subject</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="password_2" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
               
               <div class="row clearfix" style="margin-top: 10px;">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                        <label for="password_2">Choose Date</label>
                  </div>
                   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
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
                   <br><div class="row clearfix">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Payment Option</label>
                      </div>
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
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
                     <br><div class="row clearfix">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Payment Status</label>
                      </div>
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
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
                     <br><div class="row clearfix">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Setup</label>
                      </div>
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
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
                  <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4  col-sm-offset-4 col-xs-offset-5">
                        <input type="checkbox" id="is_important" class="filled-in">
                        <label for="is_important">Is Impotant</label>
                    </div>
                </div>
                <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                        <button type="button" class="btn btn-lg btn-primary m-t-15 waves-effect">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
  
<script>
    $( document ).ready(function() {
   
});
</script>
@endsection
