@extends('backend.layouts.master')
@section('title', 'Create-affiliation')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Clients </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">All Clients</li>
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
                <div class=" col-lx-10 col-lg-10 col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Client</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{ route('affiliation.store') }}" method="Post" enctype="multipart/form-data">
                            @csrf

                            <br>

                            <div class="form-group">
                                <label  class="form-label">Parent Category</label>
                                <select name="category_id"  required>

                                    @foreach ($category as $cat )
                                        <option selected value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Client Category</label>
                                <select name="subcats_id" id="" required>


                                    @foreach ($datas as $data )
                                        <option value="{{ $data->id }}">{{ $data->sub_cat_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="long_description">Paragraph</label>
                                <textarea class="form-control" name="long_description" id="long_description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Link</label>
                                <input type="text" class="form-control" name="link">
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <button type="Submit" class="btn btn-primary">Submit</button>

                        </form>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection
