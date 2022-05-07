@extends('admin.layout.layout')

@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        {{--  <h3 class="card-title">DataTable with default features</h3>  --}}
                        @if (session()->has('success'))
                        <div class="alert alert-success mt-5 " role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table style="table-layout:fixed;width:100%;" id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>الإسم</th>
                                    <th>المنطقة</th>
                                    {{-- <th>الوصف</th> --}}
                                    <th>الرابط</th>
                                    {{-- <th>الصورة</th> --}}
                                    <th>مسح</th>
                                    <th>تعديل</th>
                                    <th>تفاصيل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($services)
                                    @foreach ($services as $service)
                                            <tr>
                                                <td>{{$service->name}}</td>
                                                <td>@foreach ($regions as $region)
                                                   @if ( $region->id== $service->region_id)
                                                       {{$region->name_ar}}
                                                   @endif
                                                @endforeach</td>


                                                {{-- <td>{{$service->description}}</td> --}}
                                                <td><a href="{{$service->link}}">{{$service->link}}</a></td>
                                                {{-- <td>
                                                    <img height="100px" width="100px" src="{{$service->image?url('/').'/images/offer/'.$service->image :'https://via.placeholder.com/100'}}" alt="" class="img-responsive img-rounded"></td>
                                                                --}}
                                                <td>
                                                    <form method="post" action="{{route('destroy_serve', $service->id)}}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">مسح</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form method="get" action="{{route('edit_serve',$service->id)}}" enctype="multipart/form-data">
                                                        <button type="submit" class="btn btn-success">تعديل</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <a class='btn btn-primary' href="{{ route('serviceId',$service->id)}}" > عرض </a>
                                                </td>

                                            </tr>
                                    @endforeach
                                @endif
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@stop
