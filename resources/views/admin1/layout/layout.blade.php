<!DOCTYPE html>
<html lang="ar" dir="rtl" data-footer="true">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>VIST KSA</title>
    <meta name="description" content="Acorn elearning platform dashboard." />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="././img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="./img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="./img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="./img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="./img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="{{ url('/assest/admin2/img/favicon/favicon-196x196.png')}}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ url('/assest/admin2/img/favicon/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ url('/assest/admin2/img/favicon/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ url('/assest/admin2/img/favicon/favicon-16x16.png')}}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ url('/assest/admin2/img/favicon/favicon-128.png')}}" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ url('/assest/admin2/img/favicon/mstile-144x144.png')}}" />
    <meta name="msapplication-square70x70logo" content="{{ url('/assest/admin2/img/favicon/mstile-70x70.png')}}" />
    <meta name="msapplication-square150x150logo" content="{{ url('/assest/admin2/img/favicon/mstile-150x150.png')}}" />
    <meta name="msapplication-wide310x150logo" content="{{ url('/assest/admin2/img/favicon/mstile-310x150.png')}}" />
    <meta name="msapplication-square310x310logo" content="{{ url('/assest/admin2/img/favicon/mstile-310x310.png')}}" />
    @yield('css')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/assest/admin2/font/CS-Interface/style.css')}}" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="{{ url('/assest/admin2/css/vendor/bootstrap.rtl.min.css')}}" />
    <link rel="stylesheet" href="{{ url('/assest/admin2/css/vendor/OverlayScrollbars.min.css')}}" />

    <link rel="stylesheet" href="{{ url('/assest/admin2/css/vendor/glide.core.min.css')}}" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="{{ url('/assest/admin2/css/styles.css')}}" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="{{ url('/assest/admin2/css/main.css')}}" />
    <script src="{{ url('/assest/admin2/js/base/loader.js')}}"></script>
</head>

<body dir="rtl">
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                <div class="logo position-relative">
                    <h1>VIST KSA</h1>
                </div>
                <!-- Logo End -->

                <!-- Language Switch Start -->
                <!-- <div class="language-switch-container">
                    <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item"></a>
                        <a href="#" class="dropdown-item active">EN</a>
                        <a href="#" class="dropdown-item">ES</a>
                    </div>
                </div> -->
                <!-- Language Switch End -->


                <!-- Icons Menu Start -->
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                            <i data-acorn-icon="search" data-acorn-size="18"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="#" id="colorButton">
                            <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                            <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
                        </a>
                    </li>

                </ul>
                <!-- Icons Menu End -->

                <!-- Menu Start -->
                <div class="menu-container flex-grow-1">
                    <ul id="menu" class="menu">
                        <li>
                            <a href="#dashboards">
                                <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                                <span class="label">الرئيسية</span>
                            </a>
                        </li>
                        <li>
                            <a href="#pages" data-href="Pages.html">
                                <i data-acorn-icon="notebook-1" class="icon" data-acorn-size="18"></i>
                                <span class="label">العرض</span>
                            </a>
                            <ul id="pages">
                                <li>
                                    <a href="{{ route('create_serve')}}">
                                        <span class="label">أضافة عرض</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('start')}}">
                                        <span class="label">كل العروض </span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="{{ url('admin/logout')}}">
                                <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                                <span class="label">تسجيل الخروج</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <!-- Menu End -->

                <!-- Mobile Buttons Start -->
                <div class="mobile-buttons-container">
                    <!-- Scrollspy Mobile Button Start -->
                    <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                        <i data-acorn-icon="menu-dropdown"></i>
                    </a>
                    <!-- Scrollspy Mobile Button End -->

                    <!-- Scrollspy Mobile Dropdown Start -->
                    <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                    <!-- Scrollspy Mobile Dropdown End -->

                    <!-- Menu Button Start -->
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-acorn-icon="menu"></i>
                    </a>
                    <!-- Menu Button End -->
                </div>
                <!-- Mobile Buttons End -->
            </div>
            <div class="nav-shadow"></div>
        </div>

        <main>
            <div class="container">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        <div class="col-12 col-md-7">
                            <h1 class="mb-0 pb-0 display-4" id="title"> VIST KSA</h1>
                            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">

                            </nav>
                        </div>
                        <!-- Title End -->
                    </div>
                </div>
                <!-- Content Start -->
                @yield('content')
                <!-- Content End -->
            </div>
        </main>

    </div>


    <!-- Vendor Scripts Start -->
    <script src="{{ url('/assest/admin2/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/vendor/OverlayScrollbars.min.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/vendor/autoComplete.min.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/vendor/clamp.min.js')}}"></script>
    <script src="{{ url('/assest/admin2/icon/acorn-icons.js')}}"></script>
    <script src="{{ url('/assest/admin2/icon/acorn-icons-interface.js')}}"></script>
    <script src="{{ url('/assest/admin2/icon/acorn-icons-learning.js')}}"></script>

    <script src="{{ url('/assest/admin2/js/vendor/glide.min.js')}}"></script>

    <script src="{{ url('/assest/admin2/js/vendor/Chart.bundle.min.js')}}"></script>

    <script src="{{ url('/assest/admin2/js/vendor/jquery.barrating.min.js')}}"></script>

    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="{{ url('/assest/admin2/js/base/helpers.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/base/globals.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/base/nav.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/base/search.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/base/settings.js')}}"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->

    <script src="{{ url('/assest/admin2/js/cs/glide.custom.js')}}"></script>

    <script src="{{ url('/assest/admin2/js/cs/charts.extend.js')}}"></script>

    <script src="{{ url('/assest/admin2/js/pages/dashboard.elearning.js')}}"></script>

    <script src="{{ url('/assest/admin2/js/common.js')}}"></script>
    <script src="{{ url('/assest/admin2/js/scripts.js')}}"></script>
    <!-- Page Specific Scripts End -->
    @yield('js')
</body>

</html>
