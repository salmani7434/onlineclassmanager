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
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow=""
                  aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    0%
                  </div>
                </div>
                <br />
                <div id="success">

                </div>
              <div id="taskmessage"></div>

              <form class="form-horizontal frmAddTask"  enctype="multipart/form-data" method="post">
                      {{ csrf_field() }}
                  <div class="row clearfix">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                      <label for="title">Task Title</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                     <div class="form-group">
                          <div class="form-line">
                            <input id="title" type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus placeholder="Enter Task Title"> 
                             @if($errors->has('title'))
                              <p class="help-block">
                                  {{ $errors->first('title') }}
                              </p>
                          @endif
                         
                          </div>
                        </div>
                  </div>
              </div>
                  <br><div class="row clearfix">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                      <label for="type">Task Type</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                     <div class="form-group">
                          <div class="form-line">
                            <input id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ old('type') }}" required  placeholder="Enter Task Type"> 
                             @if($errors->has('type'))
                              <p class="help-block">
                                  {{ $errors->first('type') }}
                              </p>
                          @endif
                         
                          </div>
                        </div>
                  </div>
              </div>
                
                   <br><div class="row clearfix">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                          <label for="filename">File</label>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                
                                  <input name="filename[]" id="filename" class="form-control {{ $errors->has('filename') ? ' is-invalid' : '' }}" type="file" multiple="multiple" value="{{ old('filename') }}" required  placeholder="Choose Files"/> 
                                  @if($errors->has('filename'))
                                    <p class="help-block">
                                        {{ $errors->first('filename') }}
                                    </p>
                                @endif    
                                </div>
                          </div>
                      </div>
                  </div>
                <br><div class="row clearfix" style="margin-top: 10px;">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                        <label for="due_date">Choose Dates</label>
                  </div>
                   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                         <div class="form-group">
                          <div >
                              <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                  <div class="form-line">
                                      <input type="text" id="due_date" name="due_date" class="form-control {{ $errors->has('due_date') ? ' is-invalid' : '' }}" placeholder="Due Date..." >
                                  </div>
                                  <span class="input-group-addon">Completion Date</span>
                                  <div class="form-line">
                                      <input type="text" id="completion_date" name="completion_date" class="form-control  {{ $errors->has('completion_date') ? ' is-invalid' : '' }}"  placeholder="Completion Date...">
                                      @if($errors->has('completion_date'))
                                            <p class="help-block">
                                                {{ $errors->first('completion_date') }}
                                            </p>
                                        @endif
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                 </div>
                    
                  <br><div class="row clearfix">
                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                          <label for="is_completed">Is Completed</label>
                    </div>
                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                          <div class="form-group is_completed_div">
                             <div >
                              <select class="form-control show-tick is_completed" name="is_completed" id="is_completed">
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                              </select>
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
                            <input type="text" class="form-control  {{$errors->has('instruction') ? ' is-invalid' : '' }}"  placeholder="Enter Instruction" id="instruction" name="instruction" value="{{ old('instruction') }}">
                            @if($errors->has('instruction'))
                                <p class="help-block">
                                    {{ $errors->first('instruction') }}
                                </p>
                            @endif
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
                            <input type="text" placeholder=""  name="tags[]" id="tags" data-role="tagsinput" value="" value="{{ old('tags') }}">
                            @if($errors->has('tags'))
                                <p class="help-block">
                                    {{ $errors->first('tags') }}
                                </p>
                            @endif
                          </div>
                        </div>
                  </div>
              </div>
               <br><div class="row clearfix">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                      <label for="amount">Amount</label>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                     <div class="form-group">
                          <div class="form-line">
                              <input id="amount" type="text" class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" value="{{ old('amount') }}" required  placeholder="Enter Task Amount"> 
                             @if($errors->has('amount'))
                              <p class="help-block">
                                  {{ $errors->first('amount') }}
                              </p>
                          @endif                          
                        </div>
                        </div>
                  </div>
              </div>
                    
                  <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                       <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}">
                         <input type="hidden" name="topic_id" id="topic_id_hidden" value="">

                        <button type="submit" class="btn btn-lg btn-primary m-t-15 waves-effec " id="btnAddTask">SAVE</button>
                        <button type="button" class="btn btn-default m-t-15 btn-lg" data-dismiss="modal">Close</button>

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
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow=""
                  aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    0%
                  </div>
                </div>
                <br />
                <div id="success">

                </div>
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
                            <input id="topictitle" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus placeholder="Enter Topic Title"> 
                             @if($errors->has('title'))
                              <p class="help-block">
                                  {{ $errors->first('title') }}
                              </p>
                          @endif
                         
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
      <div class="modal-dialog" style="width: 60% !important;">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Course Material</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" enctype="multipart/form-data">

                   <br><div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                      <label for="file_name">Description</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                     <div class="form-group">
                          <div class="form-line">
                              <textarea name="content" id="editor">
                            </textarea>
                           
                          </div>
                        </div>
                  </div>
              </div>
                  <br><div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                      <label for="file_name">Select Files</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                     <div class="form-group">
                          <div class="form-line">
                              <input name="filesToUpload[]" id="filesToUpload" class="form-control" type="file" multiple="" />

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
           
          </div>

        </div>
      </div>
  
</div>


@endsection

