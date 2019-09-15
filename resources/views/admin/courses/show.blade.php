@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="text-right block-header">
       <a class="btn bg-blue-grey waves-effect add-course-topics" data-toggle="modal" data-target="#AddTopicsModal"  style="display: none;">
               <i class="material-icons">assignment_turned_in</i>
                <span>Add Topics</span>

        </a>

         <a class="btn bg-indigo waves-effect add-course-material" data-toggle="modal" data-target="#AddCourseMaterialModal" style="display: none;">
               <i class="material-icons">book</i>
                <span>Add Course Material</span>

        </a>
         <a class="btn bg-orange waves-effect add-course-tasks" data-toggle="modal" data-target="#AddTaskModal" style="display: none;">
               <i class="material-icons">assignment_turned_in</i>
                <span>Add Task</span>

        </a>
         
    </div>
     <!-- Basic Examples -->
      <div class="row clearfix topic-task-section">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="card">
                  <div class="header">
                      <h2>
                          Course Material
                      </h2>
                      
                  </div>
                  <div class="body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>

                      <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Attachements</legend>
                        <div class="control-group">
                            <div class="container" >
                             <div class='element' id='div_1'>
                              <input type='file' value="123.pdf" placeholder='Choose file' id='txt_1' class="form-control" style="width: 30%;display: inline-block">&nbsp;<button class='add btn btn-primary'>Add</button>
                             </div>
                            </div>
                        </div>
                    </fieldset>
                     <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Solutions</legend>
                        <div class="control-group">
                            <div class="container" >
                             <div class='element' id='div_1'>
                              <input type='file' value="456.pdf" placeholder='Choose file' id='txt_1' class="form-control" style="width: 30%;display: inline-block">&nbsp;<button class='add btn btn-primary'>Add</button>
                             </div>
                            </div>
                        </div>
                    </fieldset>
                      <!-- <form class="">
                       <fieldset class="border p-2">
                         <legend  >Attachments</legend>
                         <div class="form-group">
                             <i class="fas fa-paperclip"></i> attachement1.docx <a href="">Remove</a>
                         </div>
                      </fieldset>
                     </form> -->

                  
                     <div style="margin-top: 10px">
                         <h6>Due Date : <span class="orange">14-Aug-2019 at 11:12:13PM</span></h6>
                         <h6>Maximum Points : <span class="orange">4.0</span></h6>
                     </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- #END# Basic Examples -->


       <!-- Add Task Modal -->
      <div id="AddTaskModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Task</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">
                  <br><div class="row clearfix">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                      <label for="task_name">Task Name</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                     <div class="form-group">
                          <div class="form-line">
                            <input type="text" class="form-control" name="task_name">
                          </div>
                        </div>
                  </div>
              </div>
                  <br><div class="row clearfix">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                      <label for="name">Task Type</label>
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
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                          <label for="file_id">File</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="file" id="file_id" class="form-control">
                              </div>
                          </div>
                      </div>
                  </div>
                <br><div class="row clearfix" style="margin-top: 10px;">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                        <label for="password_2">Due Date</label>
                  </div>
                   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Due Date">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                 </div>
                    
                    <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4  col-sm-offset-4 col-xs-offset-5">
                        <input type="checkbox" id="is_completed" class="filled-in">
                        <label for="is_completed">Is Completed</label>
                    </div>
                </div>
                <br><div class="row clearfix" style="margin-top: 10px;">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                        <label for="completion_date">Completion Date</label>
                  </div>
                   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Completion Date">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                 </div>
                 <br><div class="row clearfix">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                      <label for="instruction">Instruction</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                     <div class="form-group">
                          <div class="form-line">
                            <input type="text" class="form-control" name="instruction">
                          </div>
                        </div>
                  </div>
              </div>
              <br><div class="row clearfix">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                      <label for="tags">Tags</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                     <div class="form-group">
                          <div class="form-line">
                            <input type="text" placeholder=""  name="tags" id="tags" data-role="tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo" style="border: none !important;">
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

  <!-- Add Topic Modal -->
      <div id="AddTopicsModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Topic</h4>
            </div>
            <div class="modal-body">
                <div id="message"></div>

              <form class="form-horizontal frmAddTopic"  method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}

              <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}">
               <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="title">Topic Title <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus placeholder="Enter Topic Title"> 

                        </div>
                    </div>
                </div>
            </div>                
            <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                        <button type="submit" class="btn btn-lg btn-primary m-t-15 waves-effec " id="btnAddTopic">SAVE</button>
                        <button type="button" class="btn btn-default m-t-15 btn-lg" data-dismiss="modal">Close</button>

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
  


   <!-- Add Course Material Modal -->
      <div id="AddCourseMaterialModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Course Material</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" enctype="multipart/form-data">

                   <br><div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                      <label for="file_name">Description</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                     <div class="form-group">
                          <div class="form-line">
                              <textarea name="content" id="editor">
                            </textarea>
                           
                          </div>
                        </div>
                  </div>
              </div>
                  <br><div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                      <label for="file_name">Select Files</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                     <div class="form-group">
                          <div class="form-line">
                              <input name="filesToUpload[]" id="filesToUpload" class="form-control" type="file" multiple="" />

                          </div>
                        </div>
                  </div>
              </div>
                  
                    
                  <br><div class="row clearfix">
                      <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-5">
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


@endsection

