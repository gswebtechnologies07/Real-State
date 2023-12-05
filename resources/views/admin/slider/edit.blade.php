@extends('admin.layout.layouts')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider Update </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Slider Update </li>
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
                            <h3 class="card-title">Slider Update </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="" action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <!--<div class="form-group col-6">-->
                                <!--    <label for="published">Choose published</label>-->
                                <!--    <select class="form-control" name="published" value="{{ $slider->published }}" id="publish">-->
                                <!--        <option value="home" @if($slider->published=='home') selected @endif>Home</option>-->
                                <!--        <option value="about" @if($slider->published=='about') selected @endif>About</option>-->
                                <!--        <option value="contact" @if($slider->published=='contact') selected @endif>Contact</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <div class="form-group col-6">
                                    <label for="title">Title</label>
                                    <input type="text" value="{{ $slider->title }}" name="title" class="form-control" id="title">
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Sub Title</label>
                                    <input type="text" value="{{ $slider->sub_title }}" name="sub_title" class="form-control" id="">
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Banner</label>
                                    <input type="file" name="img" id="" class="form-control" placeholder="Upload Image" aria-describedby="helpid">
                                    <input type="hidden" name="old_img" value="{{$slider->img}}">
                                    <img src="{{asset('public/images/slider/'.$slider->img)}}" width="100px" />
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary ">Update</button>
                            </div>
                            <style>
                                .form-group {
                                    float: left;
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