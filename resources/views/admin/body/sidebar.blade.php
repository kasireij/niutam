<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="{{ route('dashboard') }}">
          {{-- <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
          >
            <g fill="none" fill-rule="evenodd">
              <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
              />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg> --}}
          <span class="brand-name">NiuTAM Dashboard</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          

          
            <li  class="active" >
              <a class="sidenav-item-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> 
              </a>              
            </li>
          
          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                aria-expanded="false" aria-controls="ui-elements">
                <i class="mdi mdi-navigation"></i>
                <span class="nav-text">Navigation</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">                                    
                  <li >
                    <a class="sidenav-item-link" href="{{ route('home') }}">
                      <span class="nav-text">Home</span>                      
                    </a>
                  </li>
                  <li >
                    <a class="sidenav-item-link" href="{{ route('apps') }}">
                      <span class="nav-text">Apps</span>                      
                    </a>
                  </li>
                  <li >
                    <a class="sidenav-item-link" href="{{ route('directories') }}">
                      <span class="nav-text">Directories</span>                      
                    </a>
                  </li>
                </div>
              </ul>
            </li>

            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documents"
                aria-expanded="false" aria-controls="documents">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">Documents</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="documents"
                data-parent="#sidebar-menu">
                <div class="sub-menu">                                    
                    <li>
                      <a class="sidenav-item-link" href="{{ route('forms') }}">
                        <span class="nav-text">Forms</span>                      
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="{{ route('circulars') }}">
                        <span class="nav-text">Circulars</span>                      
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="{{ route('policies') }}">
                        <span class="nav-text">Policies</span>                      
                      </a>
                    </li>                    
                </div>
              </ul>
            </li>

            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#manage-portal"
                aria-expanded="false" aria-controls="manage-portal">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text text-xs">Portal Management</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="manage-portal"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li>
                    <a class="sidenav-item-link" href="{{ route('apps') }}">
                      <span class="nav-text">Manage Internal Apps</span>                      
                    </a>
                  </li>                                    
                    <li>
                      <a class="sidenav-item-link" href="{{ route('home') }}">
                        <span class="nav-text">Manage Circulars</span>                      
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="{{ route('home') }}">
                        <span class="nav-text">Manage Contact Directories</span>                      
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="{{ route('home') }}">
                        <span class="nav-text">Manage Forms</span>                      
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="{{ route('add.slider') }}">
                        <span class="nav-text">Manage Policies</span>                      
                      </a>
                    </li>
                    <li>
                      <a class="sidenav-item-link" href="{{ route('admin.slider') }}">
                        <span class="nav-text">Manage Sliders</span>                      
                      </a>
                    </li>                    
                </div>
              </ul>
            </li>

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Attendance Reports</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="pages"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                  
                  
                    
                      <li >
                        <a class="sidenav-item-link" href="">
                          <span class="nav-text">Staff Reports</span>                          
                        </a>
                      </li>

                      <li >
                        <a class="sidenav-item-link" href="">
                          <span class="nav-text">Department Reports</span>                          
                        </a>
                      </li>

                      <li >
                        <a class="sidenav-item-link" href="">
                          <span class="nav-text">Divisional Reports</span>                          
                        </a>
                      </li>     
                  
                </div>
              </ul>
            </li>

        </ul>

      </div>

      <hr class="separator" />

      
    </div>
  </aside>