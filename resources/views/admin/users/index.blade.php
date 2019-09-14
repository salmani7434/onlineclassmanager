@extends('layouts.admin')
@section('content')
@can('user_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success AddUserModalBtn" href="#" data-toggle="modal" data-target="#AddUserModal">
                {{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="header">
       @if (session()->has('success'))
        <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            @if(is_array(session()->get('success')))
                    <ul>
                        @foreach (session()->get('success') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @else
                        {{ session()->get('success') }}
                    @endif
        </div>
         @endif
            
               <div id="messageMain"></div>

         <strong>{{ trans('cruds.user.title_singular') }} {{ trans('global.list') }} </strong>

    </div>

    <div class="body">
        <div class="table-responsive">
            <table class="usersTable table table-bordered table-striped table-hover js-basic-example datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        
                        <th>
                            {{ trans('cruds.user.fields.roles') }}
                        </th>
                        <th>
                            Phone Number
                        </th>
                        <th>
                            Univerty
                        </th>
                        <th>Status</th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody id="users">
                    @foreach($users as $key => $user)
                        <tr data-entry-id="{{ $user->id }}" id="user_{{ $user->id ?? '' }}">
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->fname ?? '' }}
                            </td>
                             <td>
                                {{ $user->lname ?? '' }}
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                              <?php $roles_array = array();
                                  $roles_id_array = array();
                               ?>
                                @foreach($user->roles as $key => $item)
                                  <?php  array_push($roles_array ,$item->title ); 

                                    array_push($roles_id_array ,$item->id );
                                   ?>
                                    <span class="badge badge-info">{{ $item->title }}</span>
                                @endforeach
                            </td>
                            <td> {{ $user->phone ?? '' }}</td>
                            <td> {{ $user->university ?? '' }}</td>
                            <td> <span class=" {{ $user->status ? 'badge bg-green': 'badge bg-red' }}"> {{ $user->status ? 'Active': 'Inactive' }}</span></td>
                            <td>

                                @can('user_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}" style="margin-bottom: 5px">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('user_edit')
                                <!-- <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}" style="margin-bottom: 5px">
                                        {{ trans('global.edit') }}
                                    </a>
 -->
                                    <a class="btn btn-xs btn-info EditUserModalBtn"  href="#" data-toggle="modal" data-target="#EditUserModal" style="margin-bottom: 5px" data-id="{{ $user->id ?? '' }}" data-fname="{{ $user->fname ?? '' }}" data-lname="{{ $user->lname ?? '' }}" data-email="{{ $user->email ?? '' }}" data-roles-id="<?php echo implode(',', $roles_id_array); ?>" data-roles="<?php echo implode(',', $roles_array); ?>" data-status="{{ $user->status ?? '' }}" data-phone="{{ $user->phone ?? '' }}" data-uni="{{ $user->university ?? '' }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('user_delete')
                                    <a class="btn btn-xs btn-danger btn-del"  style="margin-bottom: 5px" data-id="{{ $user->id ?? '' }}" data-fname="{{ $user->fname ?? '' }}" data-lname="{{ $user->lname ?? '' }}" data-email="{{ $user->email ?? '' }}" data-roles="<?php echo implode(',', $roles_array); ?>" data-status="{{ $user->status ?? '' }}" data-phone="{{ $user->phone ?? '' }}" data-uni="{{ $user->university ?? '' }}">
                                        Delete
                                    </a>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

   <!-- Add User Modal -->
  <div class="modal fade" id="AddUserModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add User</h4>
        </div>
        <div class="modal-body">
            <div id="message"></div>

          <form class="form-horizontal frmAdduser"  method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('admin.users.form');
                
                <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                        <button type="submit" class="btn btn-danger"  id="btnEditUser">
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

  <!-- End of Add User Modal -->


   <!-- Edit User Modal -->
  <div class="modal fade" id="EditUserModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add User</h4>
        </div>
        <div class="modal-body">
        <div id="message1"></div>

          <form class="form-horizontal frmEditUser"  method="POST" enctype="multipart/form-data">
            @csrf
            
            @include('admin.users.form');
                
                <br><div class="row clearfix">
                    <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                        <button type="submit" class="btn btn-danger"  id="btnEditUser">
                            {{ trans('global.save') }}
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

  <!-- End of Edit User Modal -->


</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection