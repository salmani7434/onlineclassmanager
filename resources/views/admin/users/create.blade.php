@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="header">
        <h3>{{ trans('global.create') }} {{ trans('cruds.user.title_singular') }}</h3>
    </div>

    <div class="body">
        <form action="{{ route("admin.users.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('fname') ? 'has-error' : '' }}">
                <label for="fname">First Name*</label>
                <div class="form-line">
                     <input type="text" id="fname" name="fname" class="form-control" value="{{ old('fname', isset($user) ? $user->fname : '') }}" required>
                </div>
               
                @if($errors->has('fname'))
                    <p class="help-block">
                        {{ $errors->first('fname') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('fname') ? 'has-error' : '' }}">
                <label for="lname">Last Name*</label>
                <div class="form-line">
                     <input type="text" id="lname" name="lname" class="form-control" value="{{ old('lname', isset($user) ? $user->lname : '') }}" required>
                </div>
               
                @if($errors->has('lname'))
                    <p class="help-block">
                        {{ $errors->first('lname') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.user.fields.email') }}*</label>
                <div class="form-line">
                     <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                </div>
               
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                <div class="form-line">
                     <input type="password" id="password" name="password" class="form-control" required>
                </div>
               
                @if($errors->has('password'))
                    <p class="help-block">
                        {{ $errors->first('password') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.password_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
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
             <div class="form-group {{ $errors->has('fname') ? 'has-error' : '' }}">
                <label for="phone">Phone Number*</label>
                <div class="form-line">
                     <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($user) ? $user->phone : '') }}" required>
                </div>
               
                @if($errors->has('phone'))
                    <p class="help-block">
                        {{ $errors->first('phone') }}
                    </p>
                @endif
                
            </div>
             <div class="form-group {{ $errors->has('fname') ? 'has-error' : '' }}">
                <label for="university">University Name*</label>
                <div class="form-line">
                     <input type="text" id="university" name="university" class="form-control" value="{{ old('university', isset($user) ? $user->university : '') }}" required>
                </div>
               
                @if($errors->has('university'))
                    <p class="help-block">
                        {{ $errors->first('university') }}
                    </p>
                @endif
                
            </div>
             <div class="form-group {{ $errors->has('fname') ? 'has-error' : '' }}">
                <label for="status">Status*</label>
                <div class="form-line">
                     <select id="status" name="status" class="form-control">
                         <option value="1">Active</option>
                         <option value="0">Inactive</option>
                     </select>
                </div>
               
                @if($errors->has('status'))
                    <p class="help-block">
                        {{ $errors->first('status') }}
                    </p>
                @endif
                
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection