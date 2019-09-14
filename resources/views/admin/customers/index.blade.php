@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="text-right block-header">
        <a class="btn btn-success" href="#" data-toggle="modal" data-target="#AddCustomerModal">
               <i class="material-icons">library_add</i>
                <span>Add Customer</span>

        </a>
        
    </div>
     <!-- Basic Examples -->
    <br><div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Customers
                    </h2>
                   
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Suspended</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Created At</th>
                                    <th>Referred By</th>
                                    <th>Referral Points</th>
                                    <th>University Name</th>
                          
                                    <th width="50">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Suspended</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Created At</th>
                                    <th>Referred By</th>
                                    <th>Referral Points</th>
                                    <th>University Name</th>
                                  
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                               
                                <tr>
                                    <td><a href="">1</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td> 
                                       <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                                </tr>
                                <tr>
                                    <td><a href="">2</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">4</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">5</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">6</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">7</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">8</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">9</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">10</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="">11</a></td>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                     <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>Olivia Liang</td>
                                    <td>
                                         <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
  

   <!-- Add Course Modal -->
  <div class="modal fade" id="AddCustomerModal" role="dialog">
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
