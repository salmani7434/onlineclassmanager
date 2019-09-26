@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="text-right block-header">
        <a class="btn btn-success" href="#" data-toggle="modal" data-target="#AddCourseModal">
               <i class="material-icons">library_add</i>
                <span>{{ trans('global.add') }} {{ trans('cruds.course.title_singular') }}</span>

        </a>
        
    </div>
     <!-- Basic Examples -->
    <br><div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Courses
                    </h2>
                    <div id="messageMain"></div>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Added By</th>
                                    <th>Course Name</th>
                                    <th>Topics</th>
                                    <th>Subject</th>
                                    <th>Important</th>
                                    <th>Objectives</th>
                                    <th>Start Date</th>
                                    <th>Completion Date</th>
                                    <th>Setup</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Added By</th>
                                    <th>Course Name</th>
                                    <th>Topics</th>
                                    <th>Subject</th>
                                    <th>Important</th>
                                    <th>Objectives</th>
                                    <th>Start Date</th>
                                    <th>Completion Date</th>
                                    <th>Setup</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody id="courses">
                               @foreach($courses as $course)
                                <tr  data-entry-id="{{ $course->id }}" id="course_{{ $course->id ?? '' }}" valign="middle">
                                    <td><a href="{{ route('admin.course.show', $course->id) }}"><strong>{{$course->id}}</strong></a></td>
                                    <td> 
                                        @foreach($course->users as $key => $item)
                                         
                                            <span class="badge bg-orange">{{ $item->fname." ".$item->lname }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{$course->name}}</td>
                                    <td>
                                       @if(count($course->topics) > 0)
                                            @foreach($course->topics as $key => $item)
                                              
                                                <span class="badge bg-blue">{{ $item->title }}</span>
                                            @endforeach
                                        @else
                                            <span class="badge bg-red">Not Added</span>

                                        @endif
                                    </td>

                                    
                                    <td>{{$course->subject}}</td>
                                    <td><span class="{{$course->is_important ? 'badge bg-green' : 'badge bg-red'}}">{{$course->is_important ? 'YES' : 'NO'}} </span></td>
                                    <td>{{$course->course_objectives}}</td>
                                    <td>{{$course->start_date}}</td>
                                    <td>{{$course->completion_date}}</td>
                                    <td><span class="{{$course->setup ? 'badge bg-green' : 'badge bg-red'}}">{{$course->setup ? 'Complete' : 'Incomplete'}}</span></td>
                                    <td style="text-align: center;"> 
                                       <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                     <a class="waves-effect waves-block EditCourseModalBtn"  href="#" data-toggle="modal" data-target="#EditCourseModal" style="margin-bottom: 5px" data-id="{{ $course->id ?? '' }}" data-name="{{ $course->name ?? '' }}" data-slug="{{ $course->slug ?? '' }}" data-subject="{{ $course->subject ?? '' }}" data-important="{{$course->is_important}}" data-objectives="{{ $course->course_objectives ?? '' }}" data-start-date="{{ $course->start_date ?? '' }}" data-completion-date="{{ $course->completion_date ?? '' }}" data-setup="{{ $course->setup ?? '' }}">
                                                        {{ trans('global.edit') }}
                                                    </a>
                                                </li>
                                                <li>
                                                     <a class=" waves-effect waves-blockbtn-del btn-del"  style="margin-bottom: 5px" data-id="{{ $course->id ?? '' }}" >
                                                        Delete
                                                    </a>
                                                </li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block" data-toggle="modal" data-target="#AddProxyModal">Add Proxy</a></li>
                                               <li><a href="javascript:void(0);" class=" waves-effect waves-block" data-toggle="modal" data-target="#AddProfessorModal">Add Professor</a></li>

                                                <li><a href="#" class=" waves-effect waves-block" data-toggle="modal" data-target="#AddLoginsModal">Add Logins</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block" data-toggle="modal" data-target="#AddCommentsModal">Add Comments</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                                </tr>
                                @endforeach
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
  

   <!-- Add Course Modal -->
  <div class="modal fade" id="AddCourseModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Course</h4>
        </div>
        <div class="modal-body">
            <div id="message"></div>

          <form class="form-horizontal frmAddCourse">
                 @csrf
            
            @include('admin.courses.form')
                <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                        <button type="submit" class="btn btn-lg btn-primary m-t-15 waves-effec " id="btnAddCourse">SAVE</button>
                        <button type="button" class="btn btn-default m-t-15 btn-lg" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>    
    </div>
  </div>

  <!-- End of Add Course Modal -->


  <!-- Edit Course Modal -->
  <div class="modal fade" id="EditCourseModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add User</h4>
        </div>
        <div class="modal-body">
        <div id="message1"></div>

          <form class="form-horizontal frmEditCourse"  method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('admin.courses.form')
                
                <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                        <button type="submit" class="btn btn-danger"  id="btnEditCourse">
                            Save Changes
                        </button>
                        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </form>
        </div>
       <!--  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>

  <!-- End of Edit Course Modal -->
</div>
  
<script>
    $( document ).ready(function() {
    //get the input and UL list
var input = document.getElementById('filesToUpload');
var list = document.getElementById('fileList');

//empty list for now...
while (list.hasChildNodes()) {
    list.removeChild(ul.firstChild);
}

//for every file...
for (var x = 0; x < input.files.length; x++) {
    //add to list
    var li = document.createElement('li');
    li.innerHTML = 'File ' + (x + 1) + ':  ' + input.files[x].name;
    list.append(li);
}


});
</script>
<script>
  
    </script>
@endsection
