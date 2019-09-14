@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="header">
        <strong>{{ trans('global.show') }} {{ trans('cruds.user.title') }}</strong>
    </div>

    <div class="body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            First Name
                        </th>
                        <td>
                            {{ $user->fname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Last Name
                        </th>
                        <td>
                            {{ $user->lname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            Roles
                        </th>
                        <td>
                            @foreach($user->roles as $id => $roles)
                                <span class="label label-info label-many">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Phone Number
                        </th>
                        <td>
                            {{ $user->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            University Name
                        </th>
                        <td>
                            {{ $user->university }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Status
                        </th>
                        <td>
                            <span class="{{ $user->status ? 'badge bg-green' : 'badge bg-red' }}">{{ $user->status ? 'Active' : 'Inactive' }}</span> 
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection