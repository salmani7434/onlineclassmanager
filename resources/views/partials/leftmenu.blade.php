 
 <!-- <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{url('/admin/profile')}}"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            
                            <li><a href="{{ url('/logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu" style="overflow-y: scroll; height:90%;">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <?php  
                    $name = Route::currentRouteName();
                    $uri = Request::path();
                    if($name == 'admin.course.show'){

                     ?>
                     <div class="course-material-navs">
                    <li class="{{ Route::currentRouteName() == 'admin.course.show' ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="course-material-link">
                            <i class="material-icons">book</i>
                            <span>{{$course->name}} Material</span>
                        </a>
                    </li>

                     @foreach($course->topics as $key => $item)
                        <li class="">

                            <a href="javascript:void(0);" class="menu-toggle course-topic-link">
                                <i class="material-icons">assignment_turned_in</i>
                                <span>{{$item->title}}</span>
                            </a>
                            <ul class="ml-menu">

                               
                                <li class="">
                                    <a href="javascript:void(0);" class="topic-task-link">
                                        <span>Task 2</span>
                                    </a>
                                    
                                </li>
                                <li class="">
                                    <a href="javascript:void(0);" class="topic-task-link">
                                        <span>Task 3</span>
                                    </a>
                                    
                                </li>
                            </ul>
                        </li>
                        @endforeach
                  
                      
                     
                </div>
                     <?php }
                     else { ?>
                    <li class="{{ Request::path() == 'admin' ? 'active' : '' }}">
                        <a href="{{url('/admin')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashbaord</span>
                        </a>
                    </li>

                    
                    <!--  <li class=" @if (($name == 'admin.permissions.index') || ($name == 'admin.permissions.show') || ($name == 'admin.permissions.edit')  || ($name == 'admin.permissions.create') ) active   @endif " >
                        <a href="{{ route('admin.permissions.index') }}">
                             <i class="material-icons">accessible</i>
                            <span>{{ trans('cruds.permission.title') }}</span>
                            <!-- <i class="material-icons">accessible_fo</i>
                                <span>{{ trans('cruds.permission.title') }}</span> -->
                            
                        <!-- </a>
                    </li> -->
                    @can('user_management_access')
                    <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') || request()->is('admin/customer') || request()->is('admin/customer/*') || request()->is('admin/writer') || request()->is('admin/writer/*') || request()->is('admin/editor') || request()->is('admin/editor/*') || request()->is('admin/roles') || request()->is('admin/roles/*') || request()->is('admin/users') || request()->is('admin/users/*')  ? 'active' : '' }}" >

                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">supervisor_account</i>
                            <span>{{ trans('cruds.userManagement.title') }}</span>
                        </a>
                        <ul class="ml-menu">
                            @can('permission_access')
                                <li class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.permissions.index') }}" >
                                        <span>{{ trans('cruds.permission.title') }}</span>
                                    </a>
                                </li>
                            @endcan
                             @can('role_access')
                                <li  class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.roles.index') }}">
                                        <span>{{ trans('cruds.role.title') }}</span>
                                        
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <a href="{{ route("admin.users.index") }}" >
                                            <span>{{ trans('cruds.user.title') }}</span>
                                        
                                    </a>
                                </li>
                            @endcan
                            @can('customer_access')
                            <li class="{{ Request::path() == 'admin/customer' ? 'active' : '' }}" >
                                <a href="{{url('/admin/customer')}}">
                                    <span>Customers</span>
                                </a>
                                
                            </li>
                            @endcan
                            @can('writer_access')
                            <li class="{{ Request::path() == 'admin/writer' ? 'active' : '' }}">
                                <a href="{{url('/admin/writer')}}">
                                    <span>Writers</span>
                                </a>
                                
                            </li>
                            @endcan
                            @can('editor_access')
                            <li class="{{ Request::path() == 'admin/editor' ? 'active' : '' }}">
                                <a href="{{url('/admin/editor')}}">
                                    <span>Editors</span>
                                </a>
                                
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    <li class="{{ Request::path() == 'admin/course' ? 'active' : '' }}">
                        <a href="{{url('/admin/course')}}">
                            <i class="material-icons">library_books</i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li class="{{ Request::path() == 'admin/activity_stream' ? 'active' : '' }}">
                        <a href="{{url('/admin/activity_stream')}}">
                            <i class="material-icons">local_activity</i>
                            <span>Activity Stream</span>
                        </a>
                    </li>
                    <li class="{{ Request::path() == 'admin/message' ? 'active' : '' }}">
                        <a href="{{url('/admin/message')}}">
                            <i class="material-icons">message</i>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li class="{{ Request::path() == 'admin/notifications' ? 'active' : '' }}">
                        <a href="{{url('/admin/notifications')}}">
                            <i class="material-icons">notification_important</i>
                            <span>Notifictions</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('/admin/course')}}">
                            <i class="material-icons">money</i>
                            <span>Payment</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('/admin/course')}}">
                            <i class="material-icons">settings_applications</i>
                            <span>Settings</span>
                        </a>
                    </li>
                    
                <?php  }?>
                   <li class="header">ACTION</li>
                    <li>
                        <a href="{{ url('/logout') }}">
                            <i class="material-icons col-red">donut_large</i>
                            <span>{{ trans('global.logout') }}</span>
                        </a>


                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
        </aside>
        <!-- #END# Left Sidebar --> -->