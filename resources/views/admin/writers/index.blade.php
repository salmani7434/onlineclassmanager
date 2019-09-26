@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="text-right block-header">
        <a class="btn btn-success" href="#" data-toggle="modal" data-target="#AddEditorsModal">
               <i class="material-icons">library_add</i>
                <span>Add Writer</span>

        </a>
        
    </div>
     <!-- Basic Examples -->
    <br><div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Writers
                    </h2>
                   
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
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
                            
                              <?php $roles_array = array();
                                  $roles_id_array = array();
                               ?>
                                @foreach($user->roles as $key => $item)
                                  <?php  array_push($roles_array ,$item->title ); 

                                    array_push($roles_id_array ,$item->id );
                                   ?>
                                @endforeach
                           
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
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
  
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
        <div id="message"></div>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow=""
                  aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    0%
                  </div>
                </div>
                <br />
                <div id="success1">

                </div>
          <form class="form-horizontal frmEditUser"  method="POST" enctype="multipart/form-data">
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

  <!-- End of Edit User Modal -->

   <!-- Add Course Modal -->
  <div class="modal fade" id="AddEditorsModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Customer</h4>
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
                                <input type="text" id="name" class="form-control">
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
                            <label for="password_2">Role</label>
                      </div>
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                            <div class="form-group">
                               <div >
                                <select class="form-control show-tick">
                                    <option>Admin</option>
                                    <option>Manager</option>
                                </select>
                               </div>
                            </div>
                        </div>
                     </div>

               <br><div class="row clearfix">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Suspended</label>
                      </div>
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                            <div class="form-group">
                               <div >
                                <select class="form-control show-tick">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
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
                        <label for="phone">Phone</label>
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                        <label for="name">Country</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                       <div class="form-group">
                               <div >
                                <select class="form-control show-tick">
                                   
                                    <option>Pakistan</option>
                                    <option>Keniya</option> 
                                    <option>England</option>
                                    <option>Australia</option>
                                </select>
                               </div>
                            </div>
                    </div>
                </div>
               <div class="row clearfix" style="margin-top: 10px;">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                        <label for="password_2">Created At</label>
                  </div>
                   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div >
                                <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Date">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                   <div class="row clearfix">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Reffered By</label>
                      </div>
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                            <div class="form-group">
                               <div >
                               <select class="form-control show-tick" data-live-search="true">
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                                    </select>
                               </div>
                            </div>
                        </div>
                         <br>
                         <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                <label for="points">Referral Points</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="points" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                         <br>
                         <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                <label for="university">University Name</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="university" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                     <br><div class="row clearfix">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Status</label>
                      </div>
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                            <div class="form-group">
                               <div >
                                <select class="form-control show-tick">
                                    <option>Active</option>
                                    <option>Disable</option>
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
</div>
  
<script>
    $( document ).ready(function() {
    console.log( "ready!" );
});
</script>
@endsection
