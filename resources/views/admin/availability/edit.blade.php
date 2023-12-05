@extends('admin.layout.layouts')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Availability</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Availability</li>
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
                            <h3 class="card-title">Update Availability</h3>
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
                        <form class="setting" action="{{ route('availability.update',$availability->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group col-6">
                                    <label for="room_title">Room Title</label>
                                    <input type="text" name="room_title" value="{{ $availability->room_title }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="room_no">Room No</label>
                                    <input type="text" name="room_no" value="{{ $availability->room_no }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" value="{{ $availability->price }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="offer_price">Offer Price</label>
                                    <input type="text" name="offer_price" value="{{ $availability->offer_price }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="bedroom_details">Description</label>
                                    <textarea class="form-control" name="bedroom_details" value="{{ $availability->bedroom_details }}" id="bedroom_details" rows="3">{{ $availability->bedroom_details}}</textarea>
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