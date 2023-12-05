@extends('admin.layout.layouts')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Create Site Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Create Site Setting</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Site Setting</h3>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="setting" action="{{ route('setting.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group col-6">
                                    <label for="logo">Logo</label>
                                    <input type="file" name="logo" id="logo" class="form-control" placeholder="Upload Image" aria-describedby="helpid">
                                </div> 
                                <div class="form-group col-6">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" name="favicon" id="favicon" class="form-control" placeholder="Upload Image" aria-describedby="helpid">
                                </div> 
                                <div class="form-group col-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-6">
                                    <label for="phone">Phone No</label>
                                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}" id="phone" placeholder="Phone No">
                                </div>
                                <div class="form-group col-6">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{old('address')}}" id="address" placeholder="Address">
                                </div>
                                <div class="form-group col-6">
                                    <label for="copy_write">Copy Write</label>
                                    <input type="text" name="copy_write" class="form-control" value="{{old('address')}}" id="copy_write" placeholder="">
                                </div>
                                <div class="form-group col-6">
                                    <label for="desc">Description</label>
                                    <textarea class="form-control" name="desc" value="{{old('desc')}}" id="desc" rows="3"></textarea>
                                </div> 
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>
                            <style>
                                .form-group {
                                    float: left;
                                }

                                .form-control.error {
                                    border: 1px solid red !important;
                                }
                            </style>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection