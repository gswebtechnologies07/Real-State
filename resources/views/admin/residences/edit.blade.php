@extends('admin.layout.layouts')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Residence Update </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Residence Update </li>
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
                            <h3 class="card-title">Residence Update </h3>
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
                        <form class="" action="{{ route('residences.update',$residence->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group col-6">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ $residence->title }}" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Residence Image</label>
                                    <input type="file" name="image" id="" class="form-control" placeholder="Upload Image" aria-describedby="helpid">
                                    <input type="hidden" name="old_image" value="{{$residence->image}}">
                                    <img src="{{asset('public/images/residences/'.$residence->image)}}" width="100px" />
                                </div>
                                <div class="form-group col-6">
                                    <label for="desc">Description</label>
                                    <textarea class="form-control" name="desc" value="{{ $residence->desc }}" id="desc" rows="3">{{ $residence->desc}}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="card-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Update</button>
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