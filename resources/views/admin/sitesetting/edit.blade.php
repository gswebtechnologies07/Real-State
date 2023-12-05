@extends('admin.layout.layouts')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Site Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Site Setting</li>
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
                            <h3 class="card-title">Update Site Setting</h3>
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
                        <form class="setting" action="{{ route('setting.update',$setting->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group col-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ $setting->email }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" value="{{ $setting->phone }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" value="{{ $setting->address }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="copy_write">Copy Write</label>
                                    <input type="text" name="copy_write" value="{{ $setting->copy_write }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="desc">Description</label>
                                    <textarea class="form-control" name="desc" value="{{ $setting->desc }}" id="desc" rows="3">{{ $setting->desc}}</textarea>
                                </div>
                                <div class="form-group col-6">
                                    <label for="logo">logo</label>
                                    <input type="file" name="logo" id="logo" class="form-control">
                                    <input type="hidden" name="old_logo"  value="{{$setting->logo}}">
                                    <img src="{{asset('public/images/setting/'.$setting->logo)}}" width="100px" />
                                </div>
                                <div class="form-group col-6">
                                    <label for="favicon">logo</label>
                                    <input type="file" name="favicon" id="favicon" class="form-control">
                                    <input type="hidden" name="old_favicon"  value="{{$setting->favicon}}">
                                    <img src="{{asset('public/images/setting/'.$setting->favicon)}}" width="100px" />
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