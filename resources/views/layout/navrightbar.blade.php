<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="author" content="Ibrahim BarBouD"> --}}
    <title>فعاليات </title>

    <meta name="description"
        content="                       منصة إلكترونية متخصصة في إدارة حضور الفعاليات بشكل فعّال وسهل. نهدف
    إلى توفير تجربة مميزة للمستخدمين والمنظمين على حد سواء، ونقدم مجموعة من الميزات التي تسهم في
    تحسين عمليات التخطيط وإدارة الفعاليات.">
    <meta name="keywords" content="فعاليات ">
    <meta name="author" content="Abdulrahman Abdullah Bajaman">
    <!--CSS file-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> --}}
    <!--Google font-->
    <link rel="stylesheet" href="{{ asset('css/Tajawalfont.css') }}">
    <style>
        /* CSS used here will be applied after bootstrap.css */

        .dropdown {
            display: inline-block;
            margin-left: 20px;
            padding: 10px;
        }


        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

        * {
            padding: 0px;
            margin: 0px
        }





        .icon {
            cursor: pointer;
            margin-right: 50px;
            line-height: 60px
        }

        .icon span {
            background: #f00;
            padding: 7px;
            border-radius: 50%;
            color: #fff;
            vertical-align: top;
            margin-left: -25px
        }

        .icon img {
            display: inline-block;
            width: 26px;
            margin-top: 4px
        }

        .icon:hover {
            opacity: .7
        }

        .logo {
            flex: 1;
            margin-left: 50px;
            color: #eee;
            font-size: 20px;
            font-family: monospace
        }

        .notifications {
            width: 300px;
            height: 0px;
            opacity: 0;
            position: absolute;
            top: 63px;
            right: 62px;
            border-radius: 5px 0px 5px 5px;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }

        .notifications h2 {
            font-size: 14px;
            padding: 10px;
            border-bottom: 1px solid #eee;
            color: #999
        }

        .notifications h2 span {
            color: #f00
        }

        .notifications-item {
            display: flex;
            border-bottom: 1px solid #eee;
            padding: 6px 9px;
            margin-bottom: 0px;
            cursor: pointer
        }

        .notifications-item:hover {
            background-color: #eee
        }

        .notifications-item img {
            display: block;
            width: 50px;
            height: 50px;
            margin-right: 9px;
            border-radius: 50%;
            margin-top: 2px
        }

        .notifications-item .text h4 {
            color: #777;
            font-size: 16px;
            margin-top: 3px
        }

        .notifications-item .text p {
            color: #aaa;
            font-size: 12px
        }

        .glyphicon-bell {

            font-size: 1.5rem;
        }

        .notifications {
            min-width: 420px;
        }

        .notifications-wrapper {
            overflow: auto;
            max-height: 250px;
        }

        .menu-title {
            color: #ff7788;
            font-size: 1.5rem;
            display: inline-block;
        }

        .glyphicon-circle-arrow-right {
            margin-left: 10px;
        }


        .notification-heading,
        .notification-footer {
            padding: 2px 10px;
        }


        .dropdown-menu.divider {
            margin: 5px 0;
        }

        .item-title {

            font-size: 1.3rem;
            color: #000;

        }

        .notifications a.content {
            text-decoration: none;
            background: #ccc;

        }

        .notification-item {
            padding: 10px;
            margin: 5px;
            background: #ccc;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <div style="" class="mobile-nav" id="mobile-navigation">
        <div class="close-nav">
            <i class="fa fa-times" onclick="closeMobileNav()"></i>
        </div>
        <div class="list">
            <ul class="navbar-nav">
                <li class="nav-item" onclick="displayList(this)">
                    <a>
                        <i class="fa fa-layer-group fa-fw right-icon"></i>
                        <span> الفعاليات</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{ route('concert.show') }}">قائمة الفعاليات</a></li>
                        <li><a href="{{ route('concert.create') }}">إنشاء فعاليه</a></li>
                    </ul>
                </li>
                @if (auth()->user()->role->name == 'Manager')
                    <li class="nav-item" onclick="displayList(this)">
                        <a>
                            <i class="fab fa-product-hunt fa-fw right-icon"></i>
                            <span>الدعوات</span>
                            <i class="fa fa-angle-left left-icon"></i>
                        </a>
                        <ul class="hidden-list">
                            <li><a href="{{ route('invite.show') }}">قائمة الدعوات</a></li>
                            <li><a href="{{ route('invite.create') }}">إنشاء دعوه</a></li>
                        </ul>
                    </li>
                @endif


                @if (auth()->user()->role->name == 'Admin')
                    <li class="nav-item" onclick="displayList(this)">
                        <a>
                            <i class="fa fa-shopping-bag fa-fw right-icon"></i>
                            <span>الاصناف</span>
                            <i class="fa fa-angle-left left-icon"></i>
                        </a>
                        <ul class="hidden-list">
                            <li><a href="{{ route('category.show') }}">قائمه الاصناف </a></li>
                            <li><a href="{{ route('category.create') }}">اضافه صنف </a></li>
                            {{-- <li><a href="Orders/add.html" >إنشاء طلب</a></li> --}}
                        </ul>
                    </li>


                    <li class="nav-item" onclick="displayList(this)">
                        <a>
                            <i class="fa fa-users fa-fw right-icon"></i>
                            <span>العملاء</span>
                            <i class="fa fa-angle-left left-icon"></i>
                        </a>
                        <ul class="hidden-list">
                            <li><a href="{{ route('user.show') }}">قائمة العملاء</a></li>
                            <li><a href="{{ route('user.create') }}">إنشاء عميل</a></li>
                        </ul>
                    </li>
                @endif
                @if (auth()->user()->role->name == 'Manager')
                    <li class="nav-item" onclick="displayList(this)">
                        <a>
                            <i class="fa fa-user-friends fa-fw right-icon"></i>
                            <span>الامن</span>
                            <i class="fa fa-angle-left left-icon"></i>
                        </a>
                        <ul class="hidden-list">
                            <li><a href="{{ route('secuirity.show') }}">قائمة الامن</a></li>
                            <li><a href="{{ route('secuirity.create') }}">إنشاء امن</a></li>
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->role->name == 'Admin')
                    <li class="nav-item" onclick="displayList(this)">
                        <a>
                            <i class="fa fa-user-circle fa-fw right-icon"></i>
                            <span>الادوار</span>
                            <i class="fa fa-angle-left left-icon"></i>
                        </a>
                        <ul class="hidden-list">
                            <li><a href="{{ route('roles.show') }}">قائمة الادوار</a></li>
                            <li><a href="{{ route('roles.create') }}">إنشاء دور</a></li>
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->role->name == 'Admin')
                    <li class="nav-item" onclick="displayList(this)">
                        <a>
                            <i class="fa fa-cog fa-fw right-icon"></i>
                            <span>الاعدادات</span>
                            <i class="fa fa-angle-left left-icon"></i>
                        </a>

                        <ul class="hidden-list">
                            <li><a href="{{ route('admin.show') }}"> الادمن</a></li>
                            {{-- <li  onclick="displayList(this)">
                            <a>
                                <span>الادوار</span>

                            </a>
                            <ul class="hidden-list">
                                <li><a href="{{ route('roles.show') }}">قائمة الادوار</a></li>
                                <li><a href="{{ route('roles.create') }}">إنشاء دور</a></li>
                            </ul>
                        </li> --}}
                            <li><a href="{{ route('reports.show') }}">الشكاوي والتقارير</a></li>
                            <li><a href="{{ route('notifications.show') }}">الاشعارات</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="wrapper">

        <!--Start Right Bar-->
        <ul class="navbar-nav right-bar" id="rightBar">
            <a class="brand-logo">
            </a>
            <div class="brand-content">
                <a class="brand-link">
                    <i class="">
                        <img style="width:50px;height:30px"
                            src="{{ asset('img/WhatsApp_Image_2024-01-08_at_1.23.44_PM-removebg.png') }}"
                            alt=" فعاليات  لوقو" title=" فعاليات  لوقو">
                    </i>
                    فعاليات 
                </a>

            </div>
            <li class="nav-item active">
                <a href="{{ route('index') }}">
                    <i class="fa fa-home fa-fw right-icon"></i>
                    <span>الصفحة الرئيسية</span>
                </a>
            </li>


            @if (Auth()->user()->role->name != 'Secuirity')
                <li class="nav-item" onclick="displayList(this)">
                    <a>
                        <i class="fa fa-layer-group fa-fw right-icon"></i>
                        <span> الفعاليات</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>

                    <ul class="hidden-list">
                        <li><a href="{{ route('concert.show') }}">قائمة الفعاليات</a></li>
                        <li><a href="{{ route('concert.create') }}">إنشاء فعاليه</a></li>
                    </ul>
                </li>
                {{-- @else --}}
            @endif

            @if (auth()->user()->role->name == 'Manager')
                <li class="nav-item" onclick="displayList(this)">
                    <a>
                        <i class="fab fa-product-hunt fa-fw right-icon"></i>
                        <span>الدعوات</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{ route('invite.show') }}">قائمة الدعوات</a></li>
                        <li><a href="{{ route('invite.create') }}">إنشاء دعوه</a></li>
                    </ul>
                </li>
                {{-- @else --}}
            @endif


            @if (auth()->user()->role->name == 'Admin')
                <li class="nav-item" onclick="displayList(this)">
                    <a>
                        <i class="fa fa-shopping-bag fa-fw right-icon"></i>
                        <span>الاصناف</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{ route('category.show') }}">قائمه الاصناف </a></li>
                        <li><a href="{{ route('category.create') }}">اضافه صنف </a></li>
                        {{-- <li><a href="Orders/add.html" >إنشاء طلب</a></li> --}}
                    </ul>
                </li>
                {{-- @else --}}
            @endif



            @if (auth()->user()->role->name == 'Admin')
                <li class="nav-item" onclick="displayList(this)">
                    <a>
                        <i class="fa fa-users fa-fw right-icon"></i>
                        <span>العملاء</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{ route('user.show') }}">قائمة العملاء</a></li>
                        <li><a href="{{ route('user.create') }}">إنشاء عميل</a></li>
                    </ul>
                </li>
                {{-- @else --}}
            @endif

            @if (auth()->user()->role->name == 'Manager')
                <li class="nav-item" onclick="displayList(this)">
                    <a>
                        <i class="fa fa-user-friends fa-fw right-icon"></i>
                        <span>الامن</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{ route('secuirity.show') }}">قائمة الامن</a></li>
                        <li><a href="{{ route('secuirity.create') }}">إنشاء امن</a></li>
                    </ul>
                </li>
            @endif


            @if (auth()->user()->role->name == 'Admin' && auth()->user()->email == 'Admin@admin.com')
                <li class="nav-item" onclick="displayList(this)">
                    <a>
                        <i class="fa fa-user-circle fa-fw right-icon"></i>
                        <span>الادوار</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{ route('roles.show') }}">قائمة الادوار</a></li>
                        <li><a href="{{ route('roles.create') }}">إنشاء دور</a></li>
                    </ul>
                </li>
                {{-- @else --}}
            @endif

            @if (auth()->user()->role->name == 'Secuirity')
                <li class="nav-item" onclick="displayList(this)">
                    <a>
                        <i class="fa fa-user-circle fa-fw right-icon"></i>
                        <span>فحص</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{ route('secuiriy.qrcode.check') }}"> فتح الكام</a></li>
                        {{-- <li><a href="{{ route('roles.create') }}">إنشاء دور</a></li> --}}
                    </ul>
                </li>
            @endif

             @if (auth()->user()->role->name == 'Admin')


            <li class="nav-item" onclick="displayList(this)">
                <a>
                    <i class="fa fa-cog fa-fw right-icon"></i>
                    <span>الاعدادات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>

                <ul class="hidden-list">
                    @if (auth()->user()->role->name == 'Admin' && auth()->user()->email == 'Admin@admin.com')
                        <li><a href="{{ route('admin.show') }}"> الادمن</a></li>
                        {{-- <li  onclick="displayList(this)">
                            <a>
                                <span>الادوار</span>

                            </a>
                            <ul class="hidden-list">
                                <li><a href="{{ route('roles.show') }}">قائمة الادوار</a></li>
                                <li><a href="{{ route('roles.create') }}">إنشاء دور</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ route('notifications.show') }}">الاشعارات</a></li>
                    @endif

       
                        <li><a href="{{ route('reports.show') }}">الشكاوي والتقارير</a></li>
                 

                </ul>
           
            </li>
                    @endif

        </ul>
        <!--End Right Bar-->
        <!--Start Content Wrapper-->
        <div class="content-wrapper">
            <!--Start Top Bar-->
            <div class="top-bar">
                <div class="right-content">

                    <i class="fa fa-bars" onclick="showMobileNav()"></i>

                    <h3> فعاليات 

                    </h3>

                    {{-- <i>
                    <img style="width:50px;height:50px" src="{{asset('img/WhatsApp_Image_2024-01-08_at_1.23.44_PM-removebg.png')}}" alt=" فعاليات  لوقو" title=" فعاليات  لوقو">

                </i> --}}

                    <!--Put The name of the Store Here!-->

                </div>
                <div style="display: flex;align-items:center" class="left-content">
                    <ul style="display:none ;" class="dropdown">
                        <li></li>
                        <li></li>
                    </ul>
                    @if (auth()->user()->role->name == 'Admin')


                        <div style="position:absolute !important;    transform: translate3d(39px, 3px, 278px);
                        "
                            class="dropdown">
                            <i
                                style="color: #44A686;
                            position: absolute;
                            bottom: 5px;
                            z-index=10000;
                            font-size: 13px;">{{ auth()->user()->unreadNotifications->count() }}</i>


                            <a id="dLabel" role="button" data-toggle="dropdown" data-target="#"
                                href="/page.html">

                                <i style="color:#8C5DA6" class="fa fa-bell">

                                </i>
                            </a>

                            <ul style="width: 250px;font-size: 14px !important" class="dropdown-menu">

                                <div style="font-size: 14px !important;" class="notification-heading">
                                    <h4 style="font-size: 16px; color: black;" class="menu-title">الاشعارات </h4>
                                    <a href="{{ route('notifications.readall') }}"
                                        style="color: black; font-size: 16px;    margin-right: 83px;"
                                        class="menu-title pull-right"> قراءه الكل</a>
                                </div>


                                @foreach (auth()->user()->unreadNotifications as $notification)
                                    {{-- <li class="divider"></li> --}}
                                    <a class="ReadOneNotification" href="{{ route('partynotifiy.show', $notification->id) }}">
                                        <div class="notifications-item">

                                            @if ($notification->data['image_path'] && file_exists(public_path('storage/' . $notification->data['image_path'])))
                                                <img src="{{ asset('storage/' . $notification->data['image_path']) }}"
                                                    alt="img">
                                            @else
                                                <img src="{{ asset('img/WhatsApp_Image_2024-01-16_at_1.55.45_PM-removebg-preview.png') }}"
                                                    alt="img">
                                            @endif

                                            <div class="text">
                                                <h4>{{ $notification->data['user_creator'] }}</h4>
                                                <p>{{ $notification->data['user_creator'] }} قام ب
                                                    {{ $notification->data['title'] }}
                                                    ({{ $notification->data['name'] }}) </p>
                                                <p></p>
                                                <small class="item-info">{{ $notification->created_at }}</small>
                                                {{-- <small>{{ $notification->data['name'] }}</small> --}}

                                            </div>
                                        </div>
                                    </a>
                                @endforeach



                                {{-- <li class="divider"></li> --}}
                                {{-- <div class="notification-footer">
                                    <h4 class="menu-title">View all<i
                                            class="glyphicon glyphicon-circle-arrow-right"></i></h4>
                                </div> --}}
                            </ul>

                        </div>
                        {{-- <i style="margin-left: 10px" class="fa fa-bell "></i> --}}
                    @endif



                    <h6 id="userInfo" onclick="showUserLinks()">


                        <i class="fa fa-user"></i>
                        @if (auth()->check() && auth()->user()->role && auth()->user()->role->name == 'admin')
                            {{-- User has a role and the role name is 'admin' --}}
                            <span>Welcome, admin!</span>
                        @else
                            {{-- User doesn't have a role or the role name is not 'admin' --}}
                            <span> مرحباً {{ auth()->user()->name }}</span>
                        @endif <i class="fa fa-angle-down"></i>
                    </h6>
                    <div id="userLinks" class="shadow">
                        <ul>
                            {{-- <img src="{{asset('storage/')}}" alt=""> --}}

                            <li><a href="{{ route('profile.show') }}"><i class="fa fa-user"></i>تعديل الملف
                                    الشخصي</a></li>
                            {{-- <li><a ><i class="fa fa-user"></i></a></li> --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li>
                                    <i class="fa fa-sign-out-alt"></i>

                                    <input style="background-color: white;border:none" type="submit" name=""
                                        id="" value="تسجيل الخروج">

                                    {{-- <i class="fa fa-sign-out-alt"></i> تسجيل خروج --}}

                                    </a>


                                </li>
                            </form>


                        </ul>
                    </div>

                </div>

            </div>

            @yield('content')

            <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
            <script src="{{ asset('js/popper.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            {{-- <script src="../sweetalert/dist/sweetalert.min.js"></script> --}}
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script>
                $(document).ready(function() {




                    var down = false;

                    $('#bell').click(function(e) {

                        var color = $(this).text();
                        if (down) {

                            $('#box').css('height', '0px');
                            $('#box').css('opacity', '0');
                            down = false;
                        } else {

                            $('#box').css('height', 'auto');
                            $('#box').css('opacity', '1');
                            down = true;

                        }

                    });

                });

                function confirmDelete(deleteUrl) {
                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: 'لن تتمكن من التراجع عن هذا الإجراء!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'نعم، احذفه!',
                        cancelButtonText: 'إلغاء'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = deleteUrl;
                        }
                    });
                }
                $(document).ready(function() {
                    setTimeout(function() {

                        $('#createdsyccess, #errordelete').fadeOut()

                        $('#success-alert, #error-alert').fadeOut()
                        $('#successdelete, #faildelete').fadeOut()
                    }, 2000);
                });
            </script>
</body>

</html>
