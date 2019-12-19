<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wieldy - A fully responsive, HTML5 based admin template">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
    <!-- /meta tags -->
    <title>Email Guru - Email Marketing</title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- /site favicon -->

    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="{{URL::asset('v2/node_modules/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('v2/vendors/gaxon-icon/style.css')}}">
    <!-- /font icon Styles -->

    <!-- Perfect Scrollbar stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('v2/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Load Styles -->
    <link rel="stylesheet" href="{{URL::asset('v2/assets/css/lite-style-1.min.css')}}">
    <!-- /load styles -->

    <link href="{{URL::asset('v2/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

    @include('layouts._css')
    <style>
        .dt-customizer-toggle {
            display: none;
        }

        h1, h2, h3, h4, h5, h6, span, p, body {
            font-family: "NoirPro", sans-serif;
        }

    </style>

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
    <div class="dt-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
</div>
<!-- /loader -->

<!-- Root -->
<div class="dt-root">

    <!-- Header -->
    <header class="dt-header">

        <!-- Header container -->
        <div class="dt-header__container">

            <!-- Brand -->
            <div class="dt-brand">

                <!-- Brand tool -->
                <div class="dt-brand__tool" data-toggle="main-sidebar">
                    <i class="icon icon-xl icon-menu-fold d-none d-lg-inline-block"></i>
                    <i class="icon icon-xl icon-menu d-lg-none"></i>
                </div>
                <!-- /brand tool -->

                <!-- Brand logo -->

                <!-- /brand logo -->

            </div>
            <!-- /brand -->

            <!-- Header toolbar-->
            <div class="dt-header__toolbar">

                <!-- Search box -->

                <!-- /search box -->

                <!-- Header Menu Wrapper -->
                <div class="dt-nav-wrapper">
                    <!-- Header Menu -->
                    <ul class="dt-nav d-lg-none">
                        <li class="dt-nav__item dt-notification-search dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-search-new icon-fw icon-lg"></i> </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu">

                                <!-- Search Box -->
                                <form class="search-box right-side-icon">
                                    <input class="form-control form-control-lg" type="search" placeholder="Search in app...">
                                    <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i></button>
                                </form>
                                <!-- /search box -->

                            </div>
                            <!-- /dropdown option -->

                        </li>
                    </ul>
                    <!-- /header menu -->

                    <!-- Header Menu -->
                    <ul class="dt-nav d-lg-none">
                        <li class="dt-nav__item dt-notification dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-notification icon-fw dt-icon-alert"></i>
                            </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                <!-- Dropdown Menu Header -->
                                <div class="dropdown-menu-header">
                                    <h4 class="title">Notifications (9)</h4>

                                    <div class="ml-auto action-area">
                                        <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                                            <i class="icon icon-setting icon-lg text-light-gray"></i> </a>
                                    </div>
                                </div>
                                <!-- /dropdown menu header -->

                                <!-- Dropdown Menu Body -->
                                <div class="dropdown-menu-body ps-custom-scrollbar">

                                    <div class="h-auto">
                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body">
                    <span class="message">
                      <span class="user-name">Stella Johnson</span> and <span class="user-name">Chris Harris</span>
                      have birthdays today. Help them celebrate!
                    </span>
                    <span class="meta-date">8 hours ago</span>
                  </span>
                                            <!-- /media body -->

                                        </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body">
                    <span class="message">
                      <span class="user-name">Jonathan Madano</span> commented on your post.
                    </span>
                    <span class="meta-date">9 hours ago</span>
                  </span>
                                            <!-- /media body -->

                                        </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body">
                    <span class="message">
                      <span class="user-name">Chelsea Brown</span> sent a video recomendation.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-menu-right text-primary icon-fw mr-1"></i>
                      13 hours ago
                    </span>
                  </span>
                                            <!-- /media body -->

                                        </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body">
                    <span class="message">
                      <span class="user-name">Alex Dolgove</span> and <span class="user-name">Chris Harris</span>
                      like your post.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-like text-light-blue icon-fw mr-1"></i>
                      yesterday at 9:30
                    </span>
                  </span>
                                            <!-- /media body -->

                                        </a>
                                        <!-- /media -->
                                    </div>

                                </div>
                                <!-- /dropdown menu body -->

                                <!-- Dropdown Menu Footer -->
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)" class="card-link"> See All <i class="icon icon-arrow-right icon-fw"></i>
                                    </a>
                                </div>
                                <!-- /dropdown menu footer -->
                            </div>
                            <!-- /dropdown option -->

                        </li>

                        <li class="dt-nav__item dt-notification dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"> <i class="icon icon-chat-new icon-fw"></i> </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                                <!-- Dropdown Menu Header -->
                                <div class="dropdown-menu-header">
                                    <h4 class="title">Messages (6)</h4>

                                    <div class="ml-auto action-area">
                                        <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2" href="javascript:void(0)">
                                            <i class="icon icon-setting icon-lg text-light-gray"></i></a>
                                    </div>
                                </div>
                                <!-- /dropdown menu header -->

                                <!-- Dropdown Menu Body -->
                                <div class="dropdown-menu-body ps-custom-scrollbar">

                                    <div class="h-auto">

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body text-truncate">
                    <span class="user-name mb-1">Chris Mathew</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
                                            <!-- /media body -->

                                            <span class="action-area h-100 min-w-80 text-right">
                      <span class="meta-date mb-1">8 hours ago</span>
                                                <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                <!-- /toggle button -->
                    </span> </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body text-truncate">
                    <span class="user-name mb-1">Alia Joseph</span>
                    <span class="message text-light-gray text-truncate">
                      Alia Joseph just joined Messenger! Be the first to send a welcome message or sticker.
                    </span>
                  </span>
                                            <!-- /media body -->

                                            <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">9 hours ago</span>
                                                <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                <!-- /toggle button -->
                  </span> </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body text-truncate">
                    <span class="user-name mb-1">Joshua Brian</span>
                    <span class="message text-light-gray text-truncate">
                      Alex will explain you how to keep the HTML structure and all that.
                    </span>
                  </span>
                                            <!-- /media body -->

                                            <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">12 hours ago</span>
                                                <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                <!-- /toggle button -->
                  </span> </a>
                                        <!-- /media -->

                                        <!-- Media -->
                                        <a href="javascript:void(0)" class="media">

                                            <!-- Avatar -->
                                            <img class="dt-avatar mr-3" src="https://via.placeholder.com/150x150" alt="User">
                                            <!-- avatar -->

                                            <!-- Media Body -->
                                            <span class="media-body text-truncate">
                    <span class="user-name mb-1">Domnic Brown</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
                                            <!-- /media body -->

                                            <span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">yesterday</span>
                                                <!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-circle-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-circle icon-fw f-10 text-light-gray"></i></span>
                      </span>
                                                <!-- /toggle button -->
                  </span> </a>
                                        <!-- /media -->

                                    </div>

                                </div>
                                <!-- /dropdown menu body -->

                                <!-- Dropdown Menu Footer -->
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)" class="card-link"> See All <i class="icon icon-arrow-right icon-fw"></i>
                                    </a>
                                </div>
                                <!-- /dropdown menu footer -->
                            </div>
                            <!-- /dropdown option -->

                        </li>
                    </ul>
                    <!-- /header menu -->
                    <div class="dt-sidebar__notification  d-none d-lg-block">
                        <!-- Dropdown -->
                        <div class="dropdown mb-6" id="user-menu-dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dropdown-toggle dt-avatar-wrapper text-body"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="dt-avatar" src="https://via.placeholder.com/150x150" alt="Domnic Harris">
                                <span class="dt-avatar-info">
            <span class="dt-avatar-name">{{Auth::user()->customer->displayName()}}</span>
          </span> </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dt-avatar-wrapper flex-nowrap p-6 mt--5 bg-gradient-purple text-white rounded-top">
                                    <img class="dt-avatar" src="https://via.placeholder.com/150x150" alt="Domnic Harris">
                                    <span class="dt-avatar-info">
                  <span class="dt-avatar-name">{{Auth::user()->customer->displayName()}}</span>
{{--                  <span class="f-12">Administrator</span>--}}
                    </span>
                                </div>
                                <a class="dropdown-item" href="{{ action('AccountController@profile') }}"> <i
                                            class="icon icon-profile icon-fw mr-2 mr-sm-1"></i>Account</a>

                                <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-setting icon-fw mr-2 mr-sm-1"></i>Setting
                                </a>

                                <a class="dropdown-item" data-url="{{ action("AccountController@quotaLog") }}"> <i class="icon icon-data-display icon-fw mr-2
                                mr-sm-1"></i>Credits Used

                                    <a class="dropdown-item" href="{{ action('AccountController@subscription') }}"> <i class="icon icon-signup icon-fw mr-2
                                mr-sm-1"></i>Subscriptions

                                    <!-- <a class="dropdown-item" href="{{ action("AccountController@api") }}"> <i class="icon icon-edit icon-fw mr-2 mr-sm-1"></i>API -->
                                        <a class="dropdown-item" href="#"> <i class="icon icon-extensions icon-fw mr-2 mr-sm-1"></i>API

                                            <a class="dropdown-item" href="{{url('/logout')}}"> <i
                                                        class="icon icon-user-o icon-fw mr-2 mr-sm-1"></i>Logout
                                            </a>
                                        </a>
                                    </a>
                                </a>

                            </div>
                            <!-- /dropdown option -->

                        </div>
                    </div>

                    <!-- Header Menu -->
                    <ul class="dt-nav d-lg-none">
                        <li class="dt-nav__item dropdown">

                            <!-- Dropdown Link -->
                            <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="dt-avatar size-40" src="https://via.placeholder.com/150x150" alt="Domnic Harris">
                            </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user-o icon-fw mr-2 mr-sm-1"></i>Account
                                </a> <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-setting icon-fw mr-2 mr-sm-1"></i>Setting </a>
                                <a class="dropdown-item" href="{{ url("/logout") }}"> <i class="icon icon-edit icon-fw mr-2 mr-sm-1"></i>Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="dt-main">


        <!-- Sidebar -->
        <aside id="main-sidebar" class="dt-sidebar">
            <div class="dt-sidebar__container">
                <div style="text-align: center">
                    <img height="50px" width="120px"
                         src="https://carepharmaceuticals.com.au/wp-content/uploads/sites/19/2018/02/placeholder-600x400.png">
                    {{--                    <img height="50px" width="90px" src="http://mailchamp2.qubolt.com/setting/site_logo_small-ba6f7550077d33f61a6d41067de312fd.png">--}}
                </div>
                <!-- Sidebar Navigation -->
                <ul class="dt-side-nav">
                    @include('layouts.v2.menu')
                </ul>
                <!-- /sidebar navigation -->
            </div>
        </aside>
        <!-- /sidebar -->


        <!-- Site Content Wrapper -->
        <div class="dt-content-wrapper">

            <!-- Site Content -->
            <div class="dt-content">

            @yield('content')
            <!-- Grid -->

                <!-- /grid -->
            </div>
            <!-- /site content -->

            <!-- Footer -->
            <footer class="dt-footer">
                Copyright Email Guru © 2019
            </footer>
            <!-- /footer -->

        </div>
        <!-- /site content wrapper -->


    </main>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="{{URL::asset('v2/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{URL::asset('v2/node_modules/moment/moment.js')}}"></script>
<script src="{{URL::asset('v2/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="{{URL::asset('v2/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="{{URL::asset('v2/node_modules/masonry-layout/dist/masonry.pkgd.min.js')}}"></script>
<script src="{{URL::asset('v2/node_modules/sweetalert2/dist/sweetalert2.js')}}"></script>

<script src="{{URL::asset('v2/node_modules/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{URL::asset('v2/assets/js/script.js')}}"></script>
<script src="{{URL::asset('v2/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('v2/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('v2/assets/js/custom/data-table.js')}}"></script>
{{--<script src="{{URL::asset('v2/assets/js/script.js')}}"></script>--}}
<script>
    $('document').ready(function () {

        $('.tags_list_select').css('display','none')
        $('.list_select_box').css('display','none')

        $('.rec_choice').on('change',function () {
           var option=$(this).val();
           if(option=='a'){
               $('.tags_list_select').css('display','none')
               $('.list_select_box').css('display','block')
           }else{
               $('.list_select_box').css('display','none')
               $('.tags_list_select').css('display','block')
           }
        })
    })
</script>

@include('layouts._js')


</body>
</html>
