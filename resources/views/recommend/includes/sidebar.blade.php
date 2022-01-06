<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="\images\image1.jpg" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="{{route('users.show',auth()->user())}}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <!-- text-->
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="{{route('users.edit',auth()->user())}}" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                       
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      <i class="fa fa-power-off"></i>
                         {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">--- PERSONAL</li>

                <li> <a class="waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
                </li>
                @if (auth()->user()->role == 1)

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('users.index')}}">All Users</a></li>
                        <li><a href="{{route('users.create')}}">Create User</a></li>
                    </ul>
                </li>
                    
                @endif
                
              
                <li class="nav-small-cap">--- RECOMMENDOR</li>
                <li> <a class="waves-effect waves-dark" href="{{ route('recommend.index') }}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">My Analytics</span></a></li>
                {{-- <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Reports</span></a></li> --}}
                <li> <a class="waves-effect waves-dark" href="{{ route('recommend.create') }}" aria-expanded="false"><i class="fa fa-circle-o text-info"></i><span class="hide-menu">Do Recommend</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>