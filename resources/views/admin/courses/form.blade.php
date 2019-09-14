<br><div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
        <label for="name">Course Name</label>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="name"  name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Name " class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
            </div>
        </div>
    </div>
</div>
<br><div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
        <label for="subject">Subject</label>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="subject"  name="subject" value="{{ old('subject') }}" required  placeholder="Enter Subject" class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }}">
            </div>
        </div>
    </div>
</div>

<div class="row clearfix" style="margin-top: 15px;">
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
        <label for="date">Choose Date</label>
  </div>
   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
        <div class="form-group">
            <div >
                <div class="input-daterange input-group" id="bs_datepicker_range_container">
                    <div class="form-line">
                        <input type="text" id="start_date" name="start_date" class="form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" placeholder="Date start..." >
                    </div>
                    <span class="input-group-addon">Completion Date</span>
                    <div class="form-line">
                        <input type="text" id="completion_date" name="completion_date" class="form-control  {{ $errors->has('completion_date') ? ' is-invalid' : '' }}"  placeholder="Date end...">
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
   <div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
        <label for="course_objectives">Course Objectives</label>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="course_objectives"  name="course_objectives" value="{{ old('course_objectives') }}" required  placeholder="Enter Course Objectives" class="form-control {{ $errors->has('course_objectives') ? ' is-invalid' : '' }}">
            </div>
        </div>
    </div>
</div>
 <br><div class="row clearfix">
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
        <label for="setup">Setup</label>
  </div>
   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
        <div class="form-group setup_div">
           <div >
            <select class="form-control show-tick setup" name="setup" id="setup">
                <option value="1">Complete</option>
                <option value="0">Incomplete</option>
            </select>
           </div>
        </div>
    </div>
 </div>
 <input type="hidden" name="course_id" id="course_id">
 <br><div class="row clearfix">
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
        <label for="is_important">Is Important</label>
  </div>
   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
        <div class="form-group is_important_div">
           <div >
            <select class="form-control show-tick is_important" name="is_important" id="is_important">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
           </div>
        </div>
    </div>
 </div>