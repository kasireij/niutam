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
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">Attendance</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                                    
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                      aria-expanded="false" aria-controls="icons">
                      <span class="nav-text">Staff</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="icons">
                      <div class="sub-menu">
                        
                        <li >
                          <a href="">All Staff Attendance</a>
                        </li>

                        <li >
                          <a href="">Late Clock-ins</a>
                        </li>
                        
                        <li >
                          <a href="">Early Clock-outs</a>
                        </li>
                        
                      </div>
                    </ul>
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
          

          

          
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                aria-expanded="false" aria-controls="documentation">
                <i class="mdi mdi-book-open-page-variant"></i>
                <span class="nav-text">Documentation</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="documentation"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                    
                      <li class="section-title">
                        Getting Started
                      </li> 
                    
                      <li >
                        <a class="sidenav-item-link" href="">
                          <span class="nav-text">About NiuTAM</span>
                          
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