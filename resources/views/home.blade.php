@extends('layouts.admin')
@section('content')
 <div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
     
     @can('customer_access')
     <a href="{{url('/admin/customer')}}" >
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect"  style="cursor: pointer;">

                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                
                    <div class="content">
                        <div class="text">CUSTOMERS</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
           		
            </div>
        </div>
    </a>
    @endcan
     @can('writer_access')
    <a href="{{url('/admin/writer')}}">
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red hover-expand-effect"  style="cursor: pointer;">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">WRITERS</div>
                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        </a>
    @endcan
     @can('editor_access')
    <a href="{{url('/admin/editor')}}">
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-green hover-expand-effect"  style="cursor: pointer;">
            <div class="icon">
                <i class="material-icons">person_add</i>
            </div>
            <div class="content">
                <div class="text">EDITORS</div>
                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
</a>
@endcan
 @can('course_access')
    <a href="{{url('/admin/course')}}">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect"  style="cursor: pointer;">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">COURSES</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">125</div>
                </div>
            </div>
        </div>
    </a>
    @endcan
    </div>
    <!-- #END# Widgets -->
    
   

    <!-- Urgent Tasks -->
<br><div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Urgent Tasks
                </h2>
               
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Task Name</th>
                                <th>Course</th>
                                <th>Topic</th>
                                <th>Task Type</th>
                                <th>File</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Completion Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Task Name</th>
                                <th>Course</th>
                                <th>Topic</th>
                                <th>Task Type</th>
                                <th>File</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Completion Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                           
                            <tr>
                                <td>1</td>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>Dummy</td>
                                <td><i class="fas fa-paperclip"></i> attachement1.docx</td>
                                <td>2011/02/03</td>
                                <th><span class="badge bg-green">Completed</span></th>
                                 <td>2011/02/03</td>
                            </tr>
                             <tr>
                                <td>2</td>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>Dummy</td>
                                <td><i class="fas fa-paperclip"></i> attachement1.docx</td>
                                <td>2011/02/03</td>
                                <th><span class="badge bg-red">Not Completed</span></th>
                                 <td>2011/02/03</td>
                            </tr>
                             <tr>
                                <td>3</td>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>Dummy</td>
                                <td><i class="fas fa-paperclip"></i> attachement1.docx</td>
                                <td>2011/02/03</td>
                                <th><span class="badge bg-green">Completed</span></th>
                                 <td>2011/02/03</td>
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
<!-- #END# Urgent Task -->

  
</div>
@endsection
@section('scripts')
@parent

@endsection