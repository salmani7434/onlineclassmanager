<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="{{url('admin')}}" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <?php  
        $name = Route::currentRouteName();
        $uri = Request::path();

            if($name == 'admin.course.show'){
             ?>
                  <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <li class="nav-item">
                    <a href="#" class="nav-link course-material-link">

                        </i>
                        <p>
                            <span>Course Material</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link nav-dropdown-toggle course-topic-link" href="#">
                        <i class="fa-fw fas fa-tasks">

                        </i>
                        <p>
                            <span>Topic 1</span>
                            <i class="right fa fa-fw fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                       
                            <li class="nav-item">
                                <a href="" class="nav-link topic-task-link">
                                     &nbsp;&nbsp;&nbsp;
                                    <p>
                                        --<span>Task 1</span>
                                    </p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a href="" class="nav-link topic-task-link">
                                 &nbsp;&nbsp;&nbsp;
                                <p>
                                    --<span>Task 2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link topic-task-link">
                                 &nbsp;&nbsp;&nbsp;
                                <p>
                                    --<span>Task 3</span>
                                </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link nav-dropdown-toggle course-topic-link" href="#">
                        <i class="fa-fw fas fa-tasks">

                        </i>
                        <p>
                            <span>Topic 2</span>
                            <i class="right fa fa-fw fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                       
                            <li class="nav-item">
                                <a href="" class="nav-link topic-task-link">
                                     &nbsp;&nbsp;&nbsp;

                                    
                                    <p>
                                        --<span>Task 1</span>
                                    </p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a href="" class="nav-link topic-task-link">
                                 &nbsp;&nbsp;&nbsp;

                               
                                <p>
                                    --<span>Task 2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link topic-task-link">
                                &nbsp;&nbsp;&nbsp;
                                <p>
                                    --<span>Task 3</span>
                                </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link nav-dropdown-toggle course-topic-link" href="#">
                        <i class="fa-fw fas fa-tasks">

                        </i>
                        <p>
                            <span>Topic 3</span>
                            <i class="right fa fa-fw fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                       
                            <li class="nav-item">
                                <a href="" class="nav-link topic-task-link">
                                     &nbsp;&nbsp;&nbsp;
                                    <p>
                                        --<span>Task 1</span>
                                    </p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a href="" class="nav-link topic-task-link">
                                 &nbsp;&nbsp;&nbsp;
                                <p>
                                    --<span>Task 2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link topic-task-link">
                                 &nbsp;&nbsp;&nbsp;
                                <p>
                                    --<span>Task 3</span>
                                </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">

                            </i>
                            <span>{{ trans('global.logout') }}</span>
                        </p>
                    </a>
                </li>
            
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

             <?php
            }
            else {
        ?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-user">

                            </i>
                            <span>{{ trans('global.profile') }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-tachometer-alt">

                            </i>
                            <span>{{ trans('global.dashboard') }}</span>
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-users">

                            </i>
                            <p>
                                <span>{{ trans('cruds.userManagement.title') }}</span>
                                <i class="right fa fa-fw fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                           
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fa-fw fas fa-user">

                                        </i>
                                        <p>
                                            <span>{{ trans('cruds.user.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            <li class="nav-item">
                                <a href="" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <p>
                                        <span>Customers</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <p>
                                        <span>Writers</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <p>
                                        <span>Editors</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                 <li class="nav-item">
                    <a href="{{ route("admin.course.index") }}" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-tachometer-alt">

                            </i>
                            <span>{{ trans('global.course') }}</span>
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-tachometer-alt">

                            </i>
                            <span>{{ trans('global.activity_stream') }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-envelope">

                            </i>
                            <span>{{ trans('global.messages') }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa fa-credit-card ">

                            </i>
                            <span>{{ trans('global.payment') }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <p>
                            <i class="fas fa-fw  fa-retweet">

                            </i>
                            <span>{{ trans('global.referrals') }}</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <p>
                            <i class="fas fa-fw fa-cogs">

                            </i>
                            <span>{{ trans('global.settings') }}</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt">

                            </i>
                            <span>{{ trans('global.logout') }}</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        <?php } ?>
    </div>
    <!-- /.sidebar -->
</aside>