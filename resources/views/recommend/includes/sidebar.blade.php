<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="/assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <!-- text-->
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
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
                {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="app-calendar.html">Calendar</a></li>
                        <li><a href="app-chat.html">Chat app</a></li>
                        <li><a href="app-ticket.html">Support Ticket</a></li>
                        <li><a href="app-contact.html">Contact / Employee</a></li>
                        <li><a href="app-contact2.html">Contact Grid</a></li>
                        <li><a href="app-contact-detail.html">Contact Detail</a></li>
                    </ul>
                </li> --}}
              
                <li class="nav-small-cap">--- RECOMMENDOR</li>
                <li> <a class="waves-effect waves-dark" href="{{ route('recommend.index') }}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">My Analytics</span></a></li>
                @if ( auth()->user()->isAdmin() )
                <li> <a class="waves-effect waves-dark" href="{{ route('recommends.all') }}" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">All users Recommends</span></a></li>
                @endif
                <li> <a class="waves-effect waves-dark" href="{{ route('recommend.create') }}" aria-expanded="false"><i class="fa fa-circle-o text-info"></i><span class="hide-menu">Do Recommend</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>