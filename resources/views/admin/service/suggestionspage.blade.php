@extends('admin.layout.layout')

@section('content')
    <main>


        <div class="container " style="margin-top: 50px;">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 pt-10 display-4" id="title">الأقتراحات</h1>

                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start -->
            <div class="row g-5">

                <!-- Right Side Start -->
                <div class="col-12 col-xl-12 col-xxl-12">
                    <!-- Reviews Start -->

                    <!-- Reviews End -->
                    @foreach ($suggestions as $suggest )
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-1 ">
                                <div class="row g-0 w-100">
                                    <div class="col pe-1">
                                         <h3> {{$suggest->user_name}}  </h3>
                                        <div class="text-medium text-alternate lh-1-25">
                                               {{$suggest->suggest}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- Content End -->
        </div>
    </main>
@endsection
