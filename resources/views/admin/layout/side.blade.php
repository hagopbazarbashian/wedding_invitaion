<style>
   .dark .sidebar.sidebar-default .nav-link:not(.static-item):hover:not(.active):not([aria-expanded=true]){
      background: #68b7e2 !important;
      color:#fff !important;
   }
</style>
<aside class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all" id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
       <a href="{{ route('admin_home') }}" class="navbar-brand">
          <!--Logo start-->
          <img class="logo-normal" src="{{ asset('/assets/images/logo.png') }}" alt="#" />
          <img class="logo-normal logo-white" src="{{ asset('/assets/images/logo.png') }}" alt="#" />
          <img class="logo-full" src="{{ asset('/assets/images/logo.png') }}" alt="#" />
          <img class="logo-full logo-full-white" src="{{ asset('/assets/images/logo.png') }}" alt="#" />
          <!--logo End-->
       </a>
       <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
          <i class="chevron-right">
             <svg xmlns="http://www.w3.org/2000/svg" height="1.2rem" viewBox="0 0 512 512" fill="white">
                <path
                   d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"
                />
             </svg>
          </i>
          <i class="chevron-left">
             <svg xmlns="http://www.w3.org/2000/svg" height="1.2rem" viewBox="0 0 512 512" fill="white" transform="rotate(180)">
                <path
                   d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"
                />
             </svg>
          </i>
          
       </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
       <div class="sidebar-list">
          <!-- Sidebar Menu Start -->
          <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
             <li class="nav-item">
                 <a class="nav-link {{ request()->routeIs('admin_home') ? 'active' : '' }}" href="{{ route('admin_home') }}">
                  <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                      <i class="fas fa-home"></i> <!-- Font Awesome subscribe (rss) icon -->
                  </i>
                  <span class="item-name">Home</span>
               </a>
                {{-- <a class="nav-link {{ request()->routeIs('user-admin.index') ? 'active' : '' }}" href="{{ route('user-admin.index') }}">
                   <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                      <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z" fill="currentColor"></path>
                         <path
                            opacity="0.4"
                            d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                            fill="currentColor"
                         ></path>
                      </svg>
                   </i>
                   <span class="item-name">Users</span>
                </a> --}}
                <a class="nav-link {{ request()->routeIs('translate') ? 'active' : '' }}" href="{{ route('translate.index') }}">
                    <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                        <i class="fas fa-id-card"></i> <!-- Font Awesome card icon -->
                    </i>
                    <span class="item-name">Translate Syetem</span>
                </a>
                <a class="nav-link {{ request()->routeIs('category') ? 'active' : '' }}" href="{{ route('category.index') }}">
                    <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                        <i class="fas fa-list-alt"></i> <!-- Font Awesome subscribe (rss) icon -->
                    </i>
                    <span class="item-name">Category Syetem</span>
                </a>
                <a class="nav-link {{ request()->routeIs('template-all') ? 'active' : '' }}" href="{{ route('template-all.index') }}">
                  <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                      <i class="fas fa-file"></i> <!-- Font Awesome subscribe (rss) icon -->
                  </i>
                  <span class="item-name">Craete Template</span>
               </a>
                {{-- <a class="nav-link {{ request()->routeIs('create-acount.index') ? 'active' : '' }}" href="{{ route('create-acount.index') }}">
                    <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                        <i class="fas fa-plus"></i> <!-- Font Awesome subscribe (rss) icon -->
                    </i>
                    <span class="item-name">Create New acount</span>
                </a> --}}
                {{-- <a class="nav-link {{ request()->routeIs('create-acount.create') ? 'active' : '' }}" href="{{ route('create-acount.create') }}">
                    <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                        <i class="fas fa-eye"></i> <!-- Font Awesome subscribe (rss) icon -->
                    </i>
                    <span class="item-name">Show Admin Create User</span>
                </a> --}}
                {{-- <a class="nav-link {{ request()->routeIs('monthly_statistics') ? 'active' : '' }}" href="{{ route('monthly_statistics') }}">
                    <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                        <i class="fas fa-bar-chart"></i> <!-- Font Awesome subscribe (rss) icon -->
                    </i>
                    <span class="item-name">Monthly visitor</span>
                </a> --}}
                {{-- <a class="nav-link {{ request()->routeIs('activ_card') ? 'active' : '' }}" href="{{ route('activ_card') }}">
                    <i class="icon" data-bs-toggle="tooltip" title="User" data-bs-placement="right" aria-label="User" data-bs-original-title="User">
                        <i class="fas fa-id-card"></i> <!-- Font Awesome subscribe (rss) icon -->
                    </i>
                    <span class="item-name">Activ Card</span> 
                </a> --}}
                {{-- /////////// Own web Page Syetem --}}
                
             </li>  
          </ul>

          <!-- Sidebar Menu End -->
       </div>
    </div>
    <div class="sidebar-footer"></div>
 </aside>
