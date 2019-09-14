<div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="fname">First Name <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus placeholder="First Name"> 

                            <p class="error text-center alert alert-danger hidden"></p>

                        </div>
                    </div>
                </div>
            </div>
            <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="lname">Last Name <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus placeholder="Last Name"> 

                            <p class="error text-center alert alert-danger hidden"></p>

                        </div>
                    </div>
                </div>
            </div>
             <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="email">Email Address <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">
                             <p class="error text-center alert alert-danger hidden"></p>

                        </div>
                    </div>
                </div>
            </div>
            <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="role">Role <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group roles-group">
                        <div class="form-line">
                            <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" >
                            @foreach($roles as $id => $roles)
                                <option value="{{ $id }}">{{ $roles }}</option>
                               <!--  <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option> -->
                            @endforeach
                        </select>
                         <p class="error text-center alert alert-danger hidden"></p>

                        </div>
                    </div>
                </div>
            </div>
            <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="status">Status <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group status-group">
                        <div class="form-line">
                            <select id="status" name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <p class="error text-center alert alert-danger hidden"></p>

                        </div>
                    </div>
                </div>
            </div>
             <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="password">Password <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus placeholder="Password"> 

                            <p class="error text-center alert alert-danger hidden"></p>

                        </div>
                    </div>
                </div>
            </div>
             <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="phone">Phone Number <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus placeholder="Phone Number"> 

                            <p class="error text-center alert alert-danger hidden"></p>

                        </div>
                    </div>
                </div>
            </div>
             <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="university">University Name <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input id="university" type="text" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" name="university" value="{{ old('university') }}" required autofocus placeholder="University Name"> 

                            <p class="error text-center alert alert-danger hidden"></p>

                        </div>
                    </div>
                </div>
            </div>