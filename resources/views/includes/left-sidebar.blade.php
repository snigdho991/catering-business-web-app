<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
        @if(Auth::check())
            <ul class="metismenu list-unstyled" id="side-menu">

                @if(Auth::user()->hasRole('Manager'))
                    <li class="menu-title" key="t-menu">Quick Menu</li>
                        <li>
                            <a href="{{ route('manager.dashboard') }}" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-calendar">Dashboard</span>
                            </a>
                        </li>
                
                    <li class="menu-title" key="t-apps">Service Type Tools</li>
                        <li>
                            <a href="{{ route('all.service.types') }}" class="waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-calendar">Service Types List</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('add.service.type') }}" class="waves-effect">
                                <i class="bx bx-task"></i>
                                <span key="t-calendar">Add Service Type</span>
                            </a>
                        </li>

                    <li class="menu-title" key="t-apps">Service Tools</li>
                        <li>
                            <a href="{{ route('all.services') }}" class="waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-calendar">Services List</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('add.service') }}" class="waves-effect">
                                <i class="bx bx-task"></i>
                                <span key="t-calendar">Add Service</span>
                            </a>
                        </li>

                    <li class="menu-title" key="t-apps">Manage Events</li>   
                        <li>
                            <a href="{{ route('manager.not.assigned') }}" class="waves-effect">
                                <i class="bx bx-shield-quarter"></i>
                                <span key="t-calendar">Not Assigned</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('manager.ongoing') }}" class="waves-effect">
                                <i class="bx bx-fast-forward-circle"></i>
                                <span key="t-calendar">Ongoing Events</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('manager.completed') }}" class="waves-effect">
                                <i class="bx bx-calendar-check"></i>
                                <span key="t-calendar">Completed Events</span>
                            </a>
                        </li>

                    <li class="menu-title" key="t-apps">Employee Tools</li>
                        <li>
                            <a href="{{ route('all.employees') }}" class="waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-calendar">Employees List</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('add.employee') }}" class="waves-effect">
                                <i class="bx bx-task"></i>
                                <span key="t-calendar">Add Employee</span>
                            </a>
                        </li>
                    <li class="menu-title" key="t-apps">Theme Tools</li>
                        <li>
                            <a href="{{ route('theme.add.layout') }}" class="waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-calendar">Add Theme Layout</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('theme.layout.list') }}" class="waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-calendar">Layout List</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('theme.add.item') }}" class="waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-calendar">Add Theme Item</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('theme.item.list') }}" class="waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-calendar">Item List</span>
                            </a>
                        </li>

                    <li class="menu-title" key="t-menu">Chat System</li>
                        <li>
                            <a href="{{ route('inbox') }}" class="waves-effect">
                                <i class="bx bx-envelope"></i>
                                <span key="t-calendar">Inbox</span>
                            </a>
                        </li>
                
                @elseif(Auth::user()->hasRole('Employee'))
                    <li class="menu-title" key="t-menu">Quick Menu</li>
                        <li>
                            <a href="{{ route('employee.dashboard') }}" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-calendar">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('change.status') }}" class="waves-effect">
                                <i class="bx bx-sticker"></i>
                                <span key="t-calendar">Change Status</span>
                            </a>
                        </li>

                        <li class="menu-title" key="t-apps">My Events</li>   
                            
                            <li>
                                <a href="{{ route('employee.ongoing') }}" class="waves-effect">
                                    <i class="bx bx-fast-forward-circle"></i>
                                    <span key="t-calendar">Assigned/Ongoing</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('employee.completed') }}" class="waves-effect">
                                    <i class="bx bx-calendar-check"></i>
                                    <span key="t-calendar">Completed Events</span>
                                </a>
                            </li>
                @elseif(Auth::user()->hasRole('Customer'))
                        <li class="menu-title" key="t-menu">Quick Menu</li>
                            <li>
                                <a href="{{ route('customer.dashboard') }}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-calendar">Dashboard</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ route('event.book') }}" class="waves-effect">
                                    <i class="bx bx-calendar-event"></i>
                                    <span key="t-calendar">Book A Event</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('event.available') }}" class="waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-calendar">Events Bookable</span>
                                </a>
                            </li>

                        <li class="menu-title" key="t-apps">My Events</li>   
                            <li>
                                <a href="{{ route('customer.not.assigned') }}" class="waves-effect">
                                    <i class="bx bx-shield-quarter"></i>
                                    <span key="t-calendar">Not Assigned</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('customer.ongoing') }}" class="waves-effect">
                                    <i class="bx bx-fast-forward-circle"></i>
                                    <span key="t-calendar">Ongoing Events</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('customer.completed') }}" class="waves-effect">
                                    <i class="bx bx-calendar-check"></i>
                                    <span key="t-calendar">Completed Events</span>
                                </a>
                            </li>

                        <li class="menu-title" key="t-menu">Chat System</li>
                            <li>
                                <a href="{{ route('inbox') }}" class="waves-effect">
                                    <i class="bx bx-chat"></i>
                                    <span key="t-calendar">Contact Manager</span>
                                </a>
                            </li>
                @endif

                    <li class="menu-title" key="t-apps">Profile Tools</li>
                        
                        <li>
                            <a href="{{ url('/user/profile') }}" class="waves-effect">
                                <i class="bx bx-news"></i>
                                <span key="t-calendar">Update @if(Auth::user()->hasRole('Manager')) Credentials @elseif(Auth::user()->hasRole('Employee')) Profile @endif</span>
                            </a>
                        </li>
            </ul>
            
        @endif
        </div>
        <!-- Sidebar -->
    </div>
    
</div>