@extends('admin.admin_master')

@section('admin')


<div class="row">

  <div class="col-xl-4 col-12">
    <!-- Late Clock-ins Notification Table -->
    <div class="card card-default" data-scroll-height="550">
      <div class="card-header justify-content-between ">
        <h2>Forms</h2>
        <div>
            <div>
              <a class="btn btn-outline-primary btn-sm mb-0" href="{{ route('forms') }}">View All</a>
            </div>
        </div>
      </div>
      <div class="card-body p-3 pb-0">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
              <h6 class="mb-1 text-dark font-weight-medium text-sm">NSPL Web Content Update Form</h6>
              <span class="text-xs">February 2, 2022</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
              </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex flex-column">
            <h6 class="mb-1 text-dark font-weight-medium text-sm">Niusky Recreational Leave Travel Request Form</h6>
            <span class="text-xs">February 2, 2022</span>
            </div>
            <div class="d-flex align-items-center text-sm">
              <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
            </div>
        </li> 
        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
          <div class="d-flex flex-column">
          <h6 class="mb-1 text-dark font-weight-medium text-sm">Payment Requisition Form</h6>
          <span class="text-xs">February 2, 2022</span>
          </div>
          <div class="d-flex align-items-center text-sm">
            <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
          </div>
      </li> 
      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
        <div class="d-flex flex-column">
        <h6 class="mb-1 text-dark font-weight-medium text-sm">Duty Travel Acquittal Form</h6>
        <span class="text-xs">February 2, 2022</span>
        </div>
        <div class="d-flex align-items-center text-sm">
          <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
        </div>
    </li>                   
        </ul>
      </div>
      <div class="mt-3"></div>
    </div>
  </div>
            

  <div class="col-xl-4 col-12">
    <!-- Late Clock-ins Notification Table -->
    <div class="card card-default" data-scroll-height="550">
      <div class="card-header justify-content-between ">
        <h2>Circulars</h2>
        <div>
            <div>
              <a class="btn btn-outline-primary btn-sm mb-0" href="{{ route('forms') }}">View All</a>
            </div>
        </div>
      </div>
      <div class="card-body p-3 pb-0">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
              <h6 class="mb-1 text-dark font-weight-medium text-sm">Administrative Circular No.13-2021</h6>
              <span class="text-xs">February 2, 2022</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
              </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex flex-column">
            <h6 class="mb-1 text-dark font-weight-medium text-sm">Administrative Circular No.12-2021</h6>
            <span class="text-xs">February 2, 2022</span>
            </div>
            <div class="d-flex align-items-center text-sm">
              <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
            </div>
        </li> 
        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
          <div class="d-flex flex-column">
          <h6 class="mb-1 text-dark font-weight-medium text-sm">Administrative Circular No.11-2021</h6>
          <span class="text-xs">February 2, 2022</span>
          </div>
          <div class="d-flex align-items-center text-sm">
            <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
          </div>
      </li> 
      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
        <div class="d-flex flex-column">
        <h6 class="mb-1 text-dark font-weight-medium text-sm">Administrative Circular No.10-2021</h6>
        <span class="text-xs">February 2, 2022</span>
        </div>
        <div class="d-flex align-items-center text-sm">
          <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
        </div>
    </li>                   
        </ul>
      </div>
      <div class="mt-3"></div>
    </div>
  </div>

  <div class="col-xl-4 col-12">
    <!-- Late Clock-ins Notification Table -->
    <div class="card card-default" data-scroll-height="550">
      <div class="card-header justify-content-between ">
        <h2>Policies</h2>
        <div>
            <div>
              <a class="btn btn-outline-primary btn-sm mb-0" href="{{ route('forms') }}">View All</a>
            </div>
        </div>
      </div>
      <div class="card-body p-3 pb-0">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
              <h6 class="mb-1 text-dark font-weight-medium text-sm">NSPL COVID-19 WORKPLACE POLICY</h6>
              <span class="text-xs">February 2, 2022</span>
              </div>
              <div class="d-flex align-items-center text-sm">
              <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
              </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex flex-column">
            <h6 class="mb-1 text-dark font-weight-medium text-sm">Medical Insurance Policy User Guide 2020-21</h6>
            <span class="text-xs">February 2, 2022</span>
            </div>
            <div class="d-flex align-items-center text-sm">
              <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
            </div>
        </li> 
        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
          <div class="d-flex flex-column">
          <h6 class="mb-1 text-dark font-weight-medium text-sm">Some Company Policy</h6>
          <span class="text-xs">February 2, 2022</span>
          </div>
          <div class="d-flex align-items-center text-sm">
            <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
          </div>
      </li> 
      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
        <div class="d-flex flex-column">
        <h6 class="mb-1 text-dark font-weight-medium text-sm">Another Company Policy</h6>
        <span class="text-xs">February 2, 2022</span>
        </div>
        <div class="d-flex align-items-center text-sm">
          <button class="btn btn-link text-grey text-b mb-0 px-0 ms-4"><i class=" mdi mdi-24px mdi-file-download"></i></button>
        </div>
    </li>                   
        </ul>
      </div>
      <div class="mt-3"></div>
    </div>
  </div>

</div> {{-- End Row  --}}



@endsection