@extends('admin.layout.layouts')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Admin Details</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Admin Details</h3>
                        </div>
                        <!-- /.card-header -->
                        @if(Session::has('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error:</strong>{{ Session::get('error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(Session::has('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success:</strong>{{ Session::get('success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- form start -->
                        <form method="post" action="{{ url('admin/update-details')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="admin_email">Email address</label>
                                    <input class="form-control" id="admin_email" value="{{Auth::guard('admin')->user()->email}}" readonly="" style="background-color:#666;">
                                </div>
                                <div class="form-group">
                                    <label for="admin_name">Name</label>
                                    <input type="text" class="form-control" name="admin_name" id="admin_name" value="{{Auth::guard('admin')->user()->name}}" placeholder="Name"><span id="verifyCurrentPwd"></span>
                                </div>
                                <div class="form-group">
                                    <label for="admin_mobile">Mobile</label>
                                    <input type="text" class="form-control" value="{{Auth::guard('admin')->user()->mobile}}" name="admin_mobile" id="admin_mobile" placeholder="Mobile">
                                </div>
                                <div class="form-group">
                                    <label for="admin_mobile">Image</label>
                                    <input type="file" class="form-control" name="admin_image" id="admin_image" placeholder="image">
                                    @if(!empty(Auth::guard('admin')->user()->image))
                                    <a target="_blank" href="{{ url('public/admin/images/photos/'.Auth::guard('admin')->user()->image)}}">View Photo</a>
                                    <input type="hidden" name="current_image" value="{{ Auth::guard('admin')->user()->image }}">
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection