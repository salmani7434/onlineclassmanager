@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.permission.title_singular') }}
    </div>

    <div class="body">
        <form action="{{ route('admin.permissions.update', [$permission->id]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="input-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <div class="form-line">
                     <label for="title">{{ trans('cruds.permission.fields.title') }}*</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($permission) ? $permission->title : '') }}" required>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.permission.fields.title_helper') }}
                    </p>
                </div>
               
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection