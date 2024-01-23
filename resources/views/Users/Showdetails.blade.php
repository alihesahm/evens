<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ibrahim BarBouD">
    <title>العملاء</title>
    <!--CSS file-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap-rtl.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    <!--Google font-->
    <link rel="stylesheet" href="{{asset('css/Tajawalfont.css')}}">
</head>
<body>
    <!--Start Mobile Navigation-->
    <div class="mobile-nav" id="mobile-navigation">
        <div class="close-nav">
            <i class="fa fa-times" onclick="closeMobileNav()"></i>
        </div>
        <div class="list">
            <ul class="navbar-nav">
                <li>
                    <a href="{{route('index')}}">
                        <span>الصفحة الرئيسية</span>
                    </a>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fa fa-layer-group fa-fw right-icon"></i>
                        <span> الحفلات</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{route('concert.show')}}" >قائمة  الحفلات</a></li>
                        <li><a href="{{route('concert.create')}}" >إنشاء  حفله</a></li>
                    </ul>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fab fa-product-hunt fa-fw right-icon"></i>
                        <span>الدعوات</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{route('invite.show')}}" >قائمة الدعوات</a></li>
                        <li><a href="{{route('invite.create')}}" >إنشاء دعوه</a></li>
                    </ul>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fa fa-shopping-bag fa-fw right-icon"></i>
                        <span>الاصناف</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{route('category.show')}}" >قائمه الاصناف  </a></li>
                        <li><a href="{{route('category.create')}}" >اضافه صنف </a></li>
                        {{-- <li><a href="Orders/add.html" >إنشاء طلب</a></li> --}}
                    </ul>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fa fa-users fa-fw right-icon"></i>
                        <span>العملاء</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{route('user.show')}}" >قائمة العملاء</a></li>
                        <li><a href="{{route('user.create')}}" >إنشاء عميل</a></li>
                    </ul>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fa fa-user-friends fa-fw right-icon"></i>
                        <span>الامن</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{route('secuirity.show')}}" >قائمة الامن</a></li>
                        <li><a href="{{route('secuirity.create')}}" >إنشاء امن</a></li>
                    </ul>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fa fa-user-circle fa-fw right-icon"></i>
                        <span>الادوار</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="{{route('roles.show')}}" >قائمة الادوار</a></li>
                        <li><a href="{{route('roles.create')}}" >إنشاء دور</a></li>
                    </ul>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fa fa-cog fa-fw right-icon"></i>
                        <span>الاعدادات</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="Settings/system-settings.html" >معلومات المنشأة</a></li>
                        <li><a href="Settings/Category.html" >الفئات</a></li>
                        <li><a href="Settings/Tax.html" >الضرائب</a></li>
                    </ul>
                </li>
              {{-- @if(Auth::check()) --}}
            </ul>
        </div>
    </div>
    <!--End Mobile Navigation-->
    <!--Start Wrapper-->
    <div class="wrapper">
        <!--Start Right Bar-->
        <ul class="navbar-nav right-bar" id="rightBar">
            <a  class="brand-logo">
                <img src="#" alt="حفلات سوفت" title="NEEDS logo">
            </a>
            <div class="brand-content">
                <a  class="brand-link">
                    <i class="fa fa-eye"></i>
                   حفلات سوفت
                </a>
            </div>
            <li class="nav-item active">
                <a href="index.html">
                    <i class="fa fa-home fa-fw right-icon"></i>
                    <span>الصفحة الرئيسية</span>
                </a>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-layer-group fa-fw right-icon"></i>
                    <span> الحفلات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="{{ route('concert.show') }}" >قائمة الحفلات</a></li>
                    <li><a href="{{ route('concert.create') }}" >إنشاء حفله</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fab fa-product-hunt fa-fw right-icon"></i>
                    <span>الدعوات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="{{ route('invite.show') }}" >قائمة الدعوات</a></li>
                    <li><a href="{{ route('invite.create') }}" >إنشاء دعوه</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-shopping-bag fa-fw right-icon"></i>
                    <span>الاصناف</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="{{ route('category.show') }}" >قائمه الاصناف </a></li>
                    <li><a href="{{ route('category.create') }}" >اضافه صنف </a></li>
                    {{-- <li><a href="Orders/add.html" >إنشاء طلب</a></li> --}}
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-users fa-fw right-icon"></i>
                    <span>العملاء</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="{{ route('user.show') }}">قائمة العملاء</a></li>
                    <li><a href="{{ route('user.create') }}">إنشاء عميل</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-user-friends fa-fw right-icon"></i>
                    <span>الامن</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="{{ route('secuirity.show') }}" >قائمة الامن</a></li>
                    <li><a href="{{ route('secuirity.create') }}" >إنشاء امن</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-user-circle fa-fw right-icon"></i>
                    <span>الادوار</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="{{ route('roles.show') }}" >قائمة الادوار</a></li>
                    <li><a href="{{ route('roles.create') }}" >إنشاء دور</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-cog fa-fw right-icon"></i>
                    <span>الاعدادات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="Settings/system-settings.html" >معلومات المنشأة</a></li>
                    <li><a href="Settings/Category.html" >الفئات</a></li>
                    <li><a href="Settings/Tax.html" >الضرائب</a></li>
                </ul>
            </li>
        </ul>
        <!--End Right Bar-->
        <!--Start Content Wrapper-->
        <div class="content-wrapper">
            <!--Start Top Bar-->
            <div class="top-bar">
                <div class="right-content">
                    <i class="fa fa-bars" onclick="showMobileNav()"></i>
                    <h3> حفلات سوفت </h3><!--Put The name of the Store Here!-->
                </div>
                <div class="left-content">
                    <h6 id="userInfo" onclick="showUserLinks()">
                        <i class="fa fa-user"></i>
                        <span> عبدالرحمن </span>
                        <i class="fa fa-angle-down"></i>
                    </h6>
                    <div id="userLinks" class="shadow">
                        <ul>
                            <li><a ><i class="fa fa-user"></i>تعديل الملف الشخصي</a></li>
                            <li><a ><i class="fa fa-sign-out-alt"></i>تسجيل خروج</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Top Bar-->
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>العملاء</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>عرض العميل</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>أصيل محسن</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>عرض العميل</h6>
                        </div>
                        <div class="content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">اسم العميل :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label"> أصيل محسن</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">رقم التلفون :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">0559390668</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">الايميل :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">ASEEL@gmail.com</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">عنوان العميل :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">المكلا - المتضررين</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">رقم الجوال :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">0559390668</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-sm-12 col-form-label">ملاحظات :</span>
                                            <span class="col-sm-12 col-form-label" style="max-width: fit-content;">لايوجد ملاحظات</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-operation">
                                    <a  class="btn"><i class="fa fa-edit"></i>تعديل العميل</a>
                                    <a  class="delete-btn btn" onclick="return confirm('هل انت متأكد')"><i class="fa fa-edit"></i>حذف العميل</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Content-->
        </div>
        <!--End Content Wrapper-->
    </div>
    <!--End Wrapper-->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
