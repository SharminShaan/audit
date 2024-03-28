
@extends('backend.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Who We Are </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item active">Who-We-Are </li>
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
        <div class=" col-lx-12 col-lg-12 col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Who We Are </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('whoweare.update')}}" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-xl-6">
                    <div class="card-body">
                        <div class="form-group">
                          <label for="subheading">Sub Heading</label>
                          <input type="text" class="form-control" id="subheading" name="subheading" value="{{$whoweare->subheading}}">
                        </div>
                        <div class="form-group">
                            <label for="heading">Heading </label>
                            <input type="text" class="form-control" id="heading" name="heading">
                          </div>
                        <div class="form-group">
                          <label for="paragraph">paragraph</label>
                          <input type="text" class="form-control" id="paragraph" name="paragraph">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Who We Are Image </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image1" name="image1">
                                <label class="custom-file-label" for="image1" >Choose file</label>
                              </div>
                            </div>
                          </div>

                          <img src="{{asset('backendsite/images/homepage/'.$whoweare->image1)}}" width="200px"alt="Slider Image">
                          <div class="form-group">
                            <label for="exampleInputFile">Who We Are Image Two </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image2" name="image2">
                                <label class="custom-file-label" for="image2" >Choose file</label>
                              </div>
                            </div>
                          </div>


                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="list1">List Text 1</label>
                        <input type="text" class="form-control" id="list1" name="list1" >
                      </div>
                      <div class="form-group">
                        <label for="list2">List Text 2</label>
                        <input type="text" class="form-control" id="list2" name="list2" >
                      </div>
                      <div class="form-group">
                        <label for="list3">List Text 3</label>
                        <input type="text" class="form-control" id="list3" name="list3" >
                      </div>
                      <div class="form-group">
                        <label for="list4">List Text 4</label>
                        <input type="text" class="form-control" id="list4" name="list4" >
                      </div>
                      <div class="form-group">
                        <label for="bottomparagraph">Bottom Paragraph</label>
                        <input type="text" class="form-control" id="bottomparagraph" name="bottomparagraph" >
                      </div>
                      <div class="form-group">
                        <label for="yearsparagraph">Years</label>
                        <input type="text" class="form-control" id="yearsparagraph" name="yearsparagraph" >
                      </div>
                      <div class="form-group">
                        <label for="years">Years Text</label>
                        <input type="number" class="form-control" id="years" name="years" >
                      </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
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
