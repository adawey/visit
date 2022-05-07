@extends('admin.layout.layout')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>أضافه خدمة</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Validation</li> --}}
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
                    <!-- jquery validation -->
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="upload-image-form" action='{{ route('saveuser') }}' method='POST'
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">الإسم</label>
                                    <input type="text" name="name"  value='{{old('name')}}'  class="form-control" id="name"
                                        placeholder="أدخل الاسم">

                                </div>
                                <div class="form-group">
                                    <label for="name">الايميل</label>
                                    <input type="email" name="email"  value='{{old('email')}}'  class="form-control" id="email"
                                        placeholder="أدخل الايميل">

                                </div>
                                <div class="form-group">
                                    <label for="name">الباسورد</label>
                                    <input type="password" name="password"    class="form-control" id="password"
                                        placeholder="أدخل الباسورد">

                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@stop



