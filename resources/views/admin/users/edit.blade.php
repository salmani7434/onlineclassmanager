@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="body">
        <form action="{{ route('admin.users.update', [$user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="fname">First Name <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <div class="form-line">
                            <input type="text" id="fname" name="fname" class="form-control" value="{{ old('fname', isset($user) ? $user->fname : '') }}" required>
                            @if($errors->has('fname'))
                                <p class="help-block">
                                    {{ $errors->first('fname') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.name_helper') }}
                            </p>
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
                            <input type="text" id="lname" name="lname" class="form-control" value="{{ old('lname', isset($user) ? $user->lname : '') }}" required>
                            @if($errors->has('lname'))
                                <p class="help-block">
                                    {{ $errors->first('lname') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.name_helper') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
              <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="email">Email Address <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <div class="form-line">
                           <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                            @if($errors->has('email'))
                                <p class="help-block">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.email_helper') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="password">Password <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <div class="form-line">
                             <input type="password" id="password" name="password" class="form-control" required>
                            @if($errors->has('password'))
                                <p class="help-block">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.password_helper') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="role">Role <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                        <div class="form-line">
                             <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                            @foreach($roles as $id => $roles)
                                <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('roles'))
                            <p class="help-block">
                                {{ $errors->first('roles') }}
                            </p>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.user.fields.roles_helper') }}
                        </p>
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
                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone', isset($user) ? $user->phone : '') }}" required  placeholder="Phone Number"> 

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
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
                            <input id="university" type="text" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" name="university" value="{{ old('university', isset($user) ? $user->university : '') }}" required  placeholder="University Name"> 

                            @if ($errors->has('university'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('university') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
             <br><div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                    <label for="status">Status <span class="col-red">*</span></label>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <select id="status" name="status" class="form-control">
                                <option  value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        @if($errors->has('status'))
                            <p class="help-block">
                                {{ $errors->first('status') }}
                            </p>
                        @endif
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection