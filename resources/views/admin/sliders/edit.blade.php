@extends('admin.admin_master')

@section('admin')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif 

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-3">
                <div class="p-0 position-relative mt-n4 mx-3">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-primary text-capitalize ps-3">Edit Slider</h6>
                    </div> 
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="p-4">
                        <form action="{{ url('slider/update/'.$sliders->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ $sliders->image }}"> 
                            <div class="col-12 col-md-6 text-left mb-3">
                                <label class="form-label">Slider Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $sliders->title }}">

                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 text-left mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="{{ $sliders->description }}">{{ $sliders->description }}</textarea>
                                {{-- <input type="textarea" name="description" class="form-control" value="{{ $sliders->description }}"> --}}

                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 text-left mb-3">
                                <label class="form-label">Slider Image</label>
                                <input type="file" name="image" class="form-control" value="{{ $sliders->image }}">

                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 text-left mb-3">
                                <label class="form-label">Button Text</label>
                                <input type="text" name="buttontext" class="form-control" value="{{ $sliders->buttontext }}">

                                @error('buttontext')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 text-left mb-3">
                                <label class="form-label">Button Link</label>
                                <input type="text" name="buttonlink" class="form-control" value="{{ $sliders->buttonlink }}">

                                @error('buttonlink')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                                <button type="submit" class="btn btn-primary btn-default" href="{{ route('admin.slider') }}">Back</button>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection