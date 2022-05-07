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
                                    <th>الايميل</th>
                                    <th>مسح</th>

                                    {{-- <th>تفاصيل</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users)
                                  @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>


                                                <td>

                                                    <form method="post" action="{{route('destroyuser', $user->id)}}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">مسح</button>
                                                    </form>
                                                </td>

                                                {{-- <td>
                                                    <a class='btn btn-primary' href="{{ route('showuser',$user->id)}}" > عرض </a>
                                                </td> --}}

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
