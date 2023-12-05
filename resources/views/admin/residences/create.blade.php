@extends('admin.layout.layouts')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Residence</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Residence</li>
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
                            <h3 class="card-title">Add Residence</h3>
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
                        <form class="" action="{{ route('residences.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <!--<div class="form-group col-6">-->
                                <!--    <label for="published">Choose published</label>-->
                                <!--    <select class="form-control" name="published" id="published">-->
                                <!--        <option value="home">Home</option>-->
                                <!--        <option value="about">About</option>-->
                                <!--        <option value="contact">Contact</option>-->
                                <!--        <option value="residences">Residences</option>-->
                                <!--        <option value="amenities">Amenities</option>-->
                                <!--        <option value="jersey-city">Jersey City</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <div class="form-group col-6">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{old('title')}}" id="title" placeholder="Title">
                                </div>
                                <div class="form-group col-6">
                                    <label for="image">Residence Image</label>
                                    <input type="file" name="image" id="image" class="form-control" placeholder="Upload Image" aria-describedby="helpid">
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