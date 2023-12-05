@extends('admin.layout.layouts')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Create Availability</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"> Create Availability</li>
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
                            <h3 class="card-title">Create Availability</h3>
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
                        <form class="setting" action="{{ route('availability.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group col-6">
                                    <label for="room_title">Room Title</label>
                                    <input type="text" name="room_title" class="form-control" value="{{old('room_title')}}" id="room_title" placeholder="Room Title">
                                </div>
                                <div class="form-group col-6">
                                    <label for="room_no">Room No</label>
                                    <input type="text" name="room_no" class="form-control" value="{{old('room_no')}}" id="room_no" placeholder="Room No">
                                </div>
                                <div class="form-group col-6">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{old('price')}}" id="price" placeholder="Price">
                                </div>
                                <div class="form-group col-6">
                                    <label for="offer_price"> Offer Price</label>
                                    <input type="text" name="offer_price" class="form-control" value="{{old('offer_price')}}" id="offer_price" placeholder="Offer Price">
                                </div>
                                <div class="form-group col-6">
                                    <label for="bedroom_details">Bedroom Details</label>
                                    <textarea class="form-control" name="bedroom_details" value="{{old('bedroom_details')}}" id="bedroom_details" rows="3"></textarea>
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