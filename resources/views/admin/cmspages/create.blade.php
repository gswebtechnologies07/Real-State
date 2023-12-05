@extends('admin.layout.layouts')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create CMS Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create CMS Page</li>
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
                            <h3 class="card-title">Create CMS Page</h3>
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
                        <form class="" action="{{ route('cmspage.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group col-6">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                </div>
                                <div class="form-group col-6">
                                    <label for="banner_img">Banner Image</label>
                                    <input type="file" name="banner_img" id="banner_img" class="form-control" placeholder="Upload Image" aria-describedby="helpid">
                                </div>
                                <div class="form-group col-6">
                                    <label for="banner_title">Banner Title</label>
                                    <input type="text" name="banner_title" value="{{ old('banner_title')}}" class="form-control" id="banner_title" placeholder="Enter Banner Title">
                                </div>
                                <div class="form-group col-6">
                                    <label for="banner_tag_line">Banner Tag Line</label>
                                    <input type="text" name="banner_tag_line" value="{{ old('banner_tag_line')}}" class="form-control" id="banner_tag_line" placeholder="Enter Banner Tag Line">
                                </div>
                                <div class="form-group col-6">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter Meta Title">
                                </div>
                                <div class="form-group col-6">
                                    <label for="meta_desc">Meta Description</label>
                                    <input type="text" name="meta_desc" class="form-control" id="meta_desc" placeholder="Enter Meta Description">
                                </div>
                                <div class="form-group col-6">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" placeholder="Enter Meta Keyword">
                                </div>
                                <div class="form-group col-6">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea class="form-control" name="desc" id="summernote" rows="3"></textarea>
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