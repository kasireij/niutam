@extends('admin.admin_master')

@section('admin')


<div class="row">
  <div class="col-xl-4 col-12">
    <!-- Polar and Radar Chart -->
    <div class="card card-default">
      <div class="card-header justify-content-center">
        <h2>Attendance Overview</h2>
      </div>
      <div class="card-body pt-0">
        <ul class="nav nav-pills mb-5 mt-5 nav-style-fill nav-justified" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Weekly Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Monthly Overview</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <canvas id="polar"></canvas>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <canvas id="radar"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
            

  <div class="col-xl-4 col-12">
    <!-- Late Clock-ins Notification Table -->
    <div class="card card-default" data-scroll-height="550">
      <div class="card-header justify-content-between ">
        <h2>Late Clock-in Notifications</h2>
        <div>
            <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
            <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">
                  <li class="dropdown-item"><a  href="#">Action</a></li>
                  <li class="dropdown-item"><a  href="#">Another action</a></li>
                  <li class="dropdown-item"><a  href="#">Something else here</a></li>
                </ul>
            </div>
        </div>

      </div>
      <div class="card-body slim-scroll">
        <div class="media pb-3 align-items-center justify-content-between">
          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
            <i class="mdi mdi-calendar-blank font-size-20"></i>
          </div>
          <div class="media-body pr-3 ">
            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Late Clock-in</a>
            <p >Paul Murray has clocked-in</p>
          </div>
          <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 11 AM</span>
        </div>
        <div class="media py-3 align-items-center justify-content-between">
          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
            <i class="mdi mdi-calendar-blank font-size-20"></i>
          </div>
          <div class="media-body pr-3">
            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Late Clock-in</a>
            <p >John Kasirei has clocked-in</p>
          </div>
          <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10:30 AM</span>
        </div>
        <div class="media py-3 align-items-center justify-content-between">
          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
            <i class="mdi mdi-stack-exchange font-size-20"></i>
          </div>
          <div class="media-body pr-3">
            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Late Clock-in</a>
            <p >Anthony Tavatuna has clocked-in</p>
          </div>
          <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10:25 AM</span>
        </div>

        <div class="media py-3 align-items-center justify-content-between">
          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
            <i class="mdi mdi-calendar-blank font-size-20"></i>
          </div>
          <div class="media-body pr-3">
            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Late Clock-in</a>
            <p >Charles Pascal has clocked-in</p>
          </div>
          <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9:41 AM</span>
        </div>

        <div class="media py-3 align-items-center justify-content-between">
          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
            <i class="mdi mdi-calendar-blank font-size-20"></i>
          </div>
          <div class="media-body pr-3">
            <a class="mt-0 mb-1 font-size-15 text-dark" href="">Late Clock-in</a>
            <p >Lynette Gwaibo has clocked-in</p>
          </div>
          <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9:30 AM</span>
        </div>

        <div class="media py-3 align-items-center justify-content-between">
          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
            <i class="mdi mdi-calendar-blank font-size-20"></i>
          </div>
          <div class="media-body pr-3">
            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Late Clock-in</a>
            <p >Ari Taunao has clocked-in</p>
          </div>
          <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9:10 AM</span>
        </div>

        <div class="media py-3 align-items-center justify-content-between">
          <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
            <i class="mdi mdi-calendar-blank font-size-20"></i>
          </div>
          <div class="media-body pr-3">
            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Late Clock-in</a>
            <p >Enoch Kia has clocked-in</p>
          </div>
          <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
        </div>

      </div>
      <div class="mt-3"></div>
    </div>
  </div>

  <div class="col-xl-4 col-12">
        <!-- Early Clock-outs Notification Table -->
        <div class="card card-default" data-scroll-height="550">
          <div class="card-header justify-content-between ">
            <h2>Early Clock-out Notifications</h2>
            <div>
                <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                <div class="dropdown show d-inline-block widget-dropdown">
                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">
                      <li class="dropdown-item"><a  href="#">Action</a></li>
                      <li class="dropdown-item"><a  href="#">Another action</a></li>
                      <li class="dropdown-item"><a  href="#">Something else here</a></li>
                    </ul>
                  </div>
            </div>
          </div>
          <div class="card-body slim-scroll">
            <div class="media pb-3 align-items-center justify-content-between">
              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                <i class="mdi mdi-calendar-blank font-size-20"></i>
              </div>
              <div class="media-body pr-3 ">
                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Early Clock-out</a>
                <p >Paul Murray has clocked-out</p>
              </div>
              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 3:45 PM</span>
            </div>

            <div class="media py-3 align-items-center justify-content-between">
              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                <i class="mdi mdi-calendar-blank font-size-20"></i>
              </div>
              <div class="media-body pr-3">
                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Early Clock-out</a>
                <p >John Kasirei has clocked-out</p>
              </div>
              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 3:40 PM</span>
            </div>


            <div class="media py-3 align-items-center justify-content-between">
              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                <i class="mdi mdi-calendar-blank font-size-20"></i>
              </div>
              <div class="media-body pr-3">
                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Early Clock-out</a>
                <p >Anthony Tavatuna has clocked-out</p>
              </div>
              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 3:15 PM</span>
            </div>

            <div class="media py-3 align-items-center justify-content-between">
              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                <i class="mdi mdi-calendar-blank font-size-20"></i>
              </div>
              <div class="media-body pr-3">
                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Early Clock-out</a>
                <p >Charles Pascal has clocked-out</p>
              </div>
              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 3:05 PM</span>
            </div>

            <div class="media py-3 align-items-center justify-content-between">
              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                <i class="mdi mdi-calendar-blank font-size-20"></i>
              </div>
              <div class="media-body pr-3">
                <a class="mt-0 mb-1 font-size-15 text-dark" href="">Early Clock-out</a>
                <p >Lynette Gwaibo has clocked-out</p>
              </div>
              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 3:00 PM</span>
            </div>

            <div class="media py-3 align-items-center justify-content-between">
              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                <i class="mdi mdi-calendar-blank font-size-20"></i>
              </div>
              <div class="media-body pr-3">
                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Early Clock-out</a>
                <p >Ari Taunao has clocked-out</p>
              </div>
              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 2:45 PM</span>
            </div>

            <div class="media py-3 align-items-center justify-content-between">
              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                <i class="mdi mdi-calendar-blank font-size-20"></i>
              </div>
              <div class="media-body pr-3">
                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Early Clock-out</a>
                <p >Enoch Kia has clocked-out</p>
              </div>
              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 2:40 PM</span>
            </div>

          </div>
          <div class="mt-3"></div>
        </div>
  </div>
</div>

<div class="row">
  <div class="col-12"> 
  <!-- Recent Order Table -->
  <div class="card card-table-border-none" id="recent-orders">
    <div class="card-header justify-content-between">
      <h2>Recent Activities</h2>
      <div class="date-range-report ">
        <span></span>
      </div>
    </div>
    <div class="card-body pt-0 pb-5">
      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
        <thead>
          <tr>
            <th>Staff ID</th>
            <th>Staff Name</th>
            <th class="d-none d-md-table-cell">Department</th>
            <th class="d-none d-md-table-cell">Date</th>
            <th class="d-none d-md-table-cell">Activity</th>
            <th>Time</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td >2417</td>
            <td >
              <a class="text-dark" href="">John Kasirei</a>
            </td>
            <td class="d-none d-md-table-cell">ICT</td>
            <td class="d-none d-md-table-cell">Oct 20, 2021</td>
            <td>
              <span class="badge badge-success">Clock-in</span>
            </td>
            <td >
              <span>8:15 AM</span>
            </td>
            <td class="text-right">
              <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                  <li class="dropdown-item">
                    <a href="#">View</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#">Remove</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td >2454</td>
            <td >
              <a class="text-dark" href="">Enoch Kia</a>
            </td>
            <td class="d-none d-md-table-cell">HC</td>
            <td class="d-none d-md-table-cell">Oct 19, 2021</td>
            <td>
              <span class="badge badge-success">Clock-out</span>
            </td>
            <td >
              <span>4:15 PM</span>
            </td>
            <td class="text-right">
              <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                  <li class="dropdown-item">
                    <a href="#">View</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#">Remove</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td >1047</td>
            <td >
              <a class="text-dark" href="">Paul Murray</a>
            </td>
            <td class="d-none d-md-table-cell">ICT</td>
            <td class="d-none d-md-table-cell">Oct 20, 2021</td>
            <td>
              <span class="badge badge-success">Clock-in</span>
            </td>
            <td >
              <span>8:20 AM</span>
            </td>
            <td class="text-right">
              <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                  <li class="dropdown-item">
                    <a href="#">View</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#">Remove</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td >1034</td>
            <td >
              <a class="text-dark" href="">Anthony Tavatuna</a>
            </td>
            <td class="d-none d-md-table-cell">ICT</td>
            <td class="d-none d-md-table-cell">Oct 19, 2021</td>
            <td>
              <span class="badge badge-success">Clock-in</span>
            </td>
            <td >
              <span>8:20 AM</span>
            </td>
            <td class="text-right">
              <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                  <li class="dropdown-item">
                    <a href="#">View</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#">Remove</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td >1254</td>
            <td >
              <a class="text-dark" href="">Aivi Robinson</a>
            </td>
            <td class="d-none d-md-table-cell">GSR</td>
            <td class="d-none d-md-table-cell">Oct 20, 2018</td>
            <td>
              <span class="badge badge-success">Clock-in</span>
            </td>
            <td >
              <span>8:25 AM</span>
            </td>
            <td class="text-right">
              <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                  <li class="dropdown-item">
                    <a href="#">View</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#">Remove</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
  </div>
  </div>
</div>

@endsection