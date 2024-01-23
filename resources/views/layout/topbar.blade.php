 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Ibrahim BarBouD">
        <title>حفلات سوفت</title>
        <!--CSS file-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
        <!--Google font-->
        <link rel="stylesheet" href="{{ asset('css/Tajawalfont.css') }}">
    </head>
<body>
    {{-- @section('sidebar')

@show --}}


    @section('nav')
    <div class="top-bar">
        <div class="right-content">
            <i class="fa fa-bars" onclick="showMobileNav()"></i>
            <h3> حفلات سوفت </h3><!--Put The name of the Store Here!-->
        </div>
        <div class="left-content">
            <h6 id="userInfo" onclick="showUserLinks()">
                <i class="fa fa-user"></i>
                <span>مرحبا{{ $myemail ?? 'no user' }} </span>
                <i class="fa fa-angle-down"></i>
            </h6>
            <div id="userLinks" class="shadow">
                <ul>
                    <li><a><i class="fa fa-user"></i>تعديل الملف الشخصي</a></li>
                    {{-- <li><a ><i class="fa fa-user"></i></a></li> --}}
                    <form action="{{ route('logout') }}" method="POST">
                     @csrf
                        <li>
                                                                                                    <i class="fa fa-sign-out-alt"></i>

                            <input style="background-color: white;border:none" type="submit" name="" id="" value="تسجيل الخروج">

                                                                {{-- <i class="fa fa-sign-out-alt"></i> تسجيل خروج --}}

                            </a>


                        </li>
                    </form>


                </ul>
            </div>
        </div>
    </div>
    @show
    <div class="container">
        @yield('content')
    </div>
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
