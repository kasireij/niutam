@extends('admin.admin_master')

@section('admin')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-3">
                <div class="p-0 position-relative mt-n4 mx-3">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-primary text-capitalize ps-3">Manage Sliders</h6>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('add.slider') }}"> <button class="btn btn-primary">Add Slider</button></a>
                    </div> 
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Slider Title</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i =1)
                            @foreach ($sliders as $slider)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $slider->title }}</h6>                                        
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center text-sm">
                                        <p class="text-xs text-secondary mb-0">{{ $slider->description }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center text-sm">
                                        <img src="{{ asset($slider->image) }}" style="height: 40px; width:70px;">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center text-sm">
                                        <a href="{{ url('slider/edit/'.$slider->id) }}"><button class="btn btn-primary btn-default">Edit</button></a>
                                        <button href="{{ url('slider/delete/'.$slider->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach                           
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection