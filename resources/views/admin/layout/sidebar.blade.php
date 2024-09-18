 <!-- Left Sidebar Start -->
 <div class="app-sidebar-menu">
     <div class="h-100" data-simplebar>

         <!--- Sidemenu -->
         <div id="sidebar-menu">

             <div class="logo-box">
                 <a class='logo logo-light' href='{{ route('home') }}'>
                     <span class="logo-sm">
                         <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                     </span>
                     <span class="logo-lg">
                         <img src="{{ asset('assets/img/image 10.png') }}" alt="" height="60">
                     </span>
                 </a>
                 <a class='logo logo-dark' href='{{ route('home') }}'>
                     <span class="logo-sm">
                         <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                     </span>
                     <span class="logo-lg">
                         <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="24">
                     </span>
                 </a>
             </div>

             <ul id="side-menu">

                 <li class="menu-title">Menu</li>

                 <li>
                     <a href='{{ route('admin.dashboard') }}'>
                         <i data-feather="home"></i>
                         {{-- <span class="badge bg-success rounded-pill float-end">9+</span> --}}
                         <span> Dashboard </span>
                     </a>
                 </li>

                 <li class="menu-title">Pages</li>
                 @if (auth()->user()->hasRole('admin'))
                     <li
                         class="{{ request()->routeIs(['users.*', 'roles.*', 'permission.*']) ? 'menuitem-active' : '' }}">
                         <a href="#sidebarExpages" data-bs-toggle="collapse">
                             <i data-feather="file-text"></i>
                             <span> Admin </span>
                             <span class="menu-arrow"></span>
                         </a>
                         <div class="collapse {{ request()->routeIs(['users.*', 'roles.*', 'permission.*']) ? 'show' : '' }}"
                             id="sidebarExpages">
                             <ul class="nav-second-level">
                                 {{-- <li class="{{ request()->routeIs('permission.*') ? 'menuitem-active' : '' }}">
                                         <a href='{{ route('permission.index') }}'>Permmision</a>
                                     </li>
                                     <li class="{{ request()->routeIs('roles.*') ? 'menuitem-active' : '' }}">
                                         <a href='{{ route('roles.index') }}'>Roles</a>
                                     </li> --}}
                                 <li class="{{ request()->routeIs('users.*') ? 'menuitem-active' : '' }}">
                                     <a href='{{ route('users.index') }}'>User Management</a>
                                 </li>

                             </ul>
                         </div>
                     </li>
                 @endif
                 <li class="{{ request()->routeIs('agents.*') ? 'menuitem-active' : '' }}">
                     <a href='{{ route('agents.index') }}'>
                         <i data-feather="book-open"></i>
                         <span> Agents </span>
                     </a>
                 </li>
                 <li class="{{ request()->routeIs('amenities.*') ? 'menuitem-active' : '' }}">
                     <a href='{{ route('amenities.index') }}'>
                         <i data-feather="book-open"></i>
                         <span> Amenities </span>
                     </a>
                 </li>
                 <li class="{{ request()->routeIs('master-plans.*') ? 'menuitem-active' : '' }}">
                     <a href='{{ route('master-plans.index') }}'>
                         <i data-feather="book-open"></i>
                         <span> Master plans </span>
                     </a>
                 </li>
                 <li class="{{ request()->routeIs('locations.*') ? 'menuitem-active' : '' }}">
                     <a href='{{ route('locations.index') }}'>
                         <i data-feather="book-open"></i>
                         <span> Locations</span>
                     </a>
                 </li>
                 <li class="{{ request()->routeIs('developers.*') ? 'menuitem-active' : '' }}">
                     <a href='{{ route('developers.index') }}'>
                         <i data-feather="book-open"></i>
                         <span> Developers </span>
                     </a>
                 </li>
                 <li class="{{ request()->routeIs('agentproperty.*') ? 'menuitem-active' : '' }}">
                     <a href='{{ route('agentproperty.index') }}'>
                         <i data-feather="book-open"></i>
                         <span> Agent's Properties </span>
                     </a>
                 </li>
                 <li class="{{ request()->routeIs('developer_properties.*') ? 'menuitem-active' : '' }}">
                     <a href='{{ route('developer_properties.index') }}'>
                         <i data-feather="book-open"></i>
                         <span> Dev's Properties </span>
                     </a>
                 </li>
                 <li>
                     <a href='{{ route('logout') }}' class="text-danger ">
                         <i data-feather="log-out"></i>
                         <span> Logout </span>
                     </a>
                 </li>
             </ul>

         </div>
         <!-- End Sidebar -->

         <div class="clearfix"></div>

     </div>
 </div>
 <!-- Left Sidebar End -->
