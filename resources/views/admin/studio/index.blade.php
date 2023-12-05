@extends('admin.layout.layouts')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Studio</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Studio</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title"> Add Chemist</h3> -->
                            <button class="btn btn-primary"><a href="{{ route('studio.create')}}">Studio</a></button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="cmspages" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th>Serial.No</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>   
                                    @foreach($studio as $stud)          
                                    <tr>
                                        <td>{{ $stud->id }}</td>
                                        <td>{{ $stud->title }}</td>
                                        <td><img src="{{asset('public/images/studio/'.$stud->image)}}" width="50px"/></td>
                                        <td class="td"><a title="Edit" href="{{ route('studio.edit',$stud->id) }}" class="btn btn-sm btn-primary ">
                                                <i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{ route('studio.delete',$stud->id) }}">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button onclick="return confirm('DELETE this Studio ?')" type="submit" class="btn btn-sm btn-danger "><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<style>
    .td{
        display: flex;
    }
    .td a{
        margin-right: 10px;
    }
</style>
@endsection