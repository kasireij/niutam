@extends('admin.admin_master')

@section('admin')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-3">
                <div class="p-0 position-relative mt-n4 mx-3">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Create Slider</h6>
                    </div> 
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="p-4">
                        <form action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">Slider Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">Slider Image</label>
                                <input type="file" name="image" class="form-control" >
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">Button Text</label>
                                <input type="text" name="buttontext" class="form-control">
                            </div>
                            <div class="input-group input-group-outline mb-4">
                                <label class="form-label">Button Link</label>
                                <input type="text" name="buttonlink" class="form-control">
                            </div>
                            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection