@extends('admin.layouts.lay')
@section('title', 'home')
@section('css')

    <link rel="stylesheet" href="{{ url('assest/admin/cust.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @if (session()->has('success'))
                        <div class="alert alert-success mt-5 " role="alert">
                            {{ session()->get('success') }}
                        </div>

                    @endif
                    <section class="info">

                    </section>
                    <div class="col-12" style="text-align:center">
                        <h1 class="headrs">مرحبا بك ايها الادمن العملاق : </h1>
                        <h3>لم تطلق ذرعا للوصول الى هذا اليوم صحيح !!

                            <br> نعم لقد وصت تهانينا ...
                        </h3>

                        <section class="cards-wrapper">

                            <div class="card-grid-space">
                                <a class="card"
                                    style="--bg-img: url(https://i.pinimg.com/originals/53/27/e2/5327e26c52589cba47e3702c6b78658a.jpg)">
                                    <div>
                                        <div class="tags">
                                            <div class="tag">PUBG</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-grid-space">
                                <a class="card"
                                    style="--bg-img: url('https://images7.alphacoders.com/109/1098639.jpg')">
                                    <div>
                                        <div class="tags">
                                            <div class="tag">FREE FIRE</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-grid-space">
                                <a class="card"
                                    style="--bg-img: url('https://upload.kabasakalonline.com/kabasakal/ilan/2020-08/bigo-live-200-elmas-646024-2020-08-13-19-1.jpg')">
                                    <div>
                                        <div class="tags">
                                            <div class="tag">BIGO LIVE</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-grid-space">
                                <a class="card"
                                    style="--bg-img: url('https://w0.peakpx.com/wallpaper/533/877/HD-wallpaper-lkee-likee-music-video.jpg')">
                                    <div>
                                        <div class="tags">
                                            <div class="tag"> LIKEE</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-grid-space">
                                <a class="card"
                                    style="--bg-img: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkgJg2rd6mPnurdWBwKraEtkqUWkgu3A38asUj9DtwZG49Sh0etMZJs8vxu5-krGmeppc&usqp=CAU')">
                                    <div>
                                        <div class="tags">
                                            <div class="tag"> JAWAKER</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-grid-space">
                                <a class="card"
                                    style="--bg-img: url('https://wallpaperbat.com/img/638388-tiktok-wallpaper.jpg')">
                                    <div>
                                        <div class="tags">
                                            <div class="tag">TIK TOK</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </section>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>

    </div>
@endsection
@section('js')

    <script src="{{ url('assest/admin/cust.css') }}"></script>


@endsection
