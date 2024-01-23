<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ibrahim BarBouD">
    <title>تعديل حفله</title>
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
                {{-- <li>
                    <a >
                        <span>الصفحة الرئيسية</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>فواتير المشتريات</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >قائمة فواتير المشتريات</a></li>
                        <li><a >إنشاء فاتورة مشتريات</a></li>
                    </ul>
                </li>
                <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>فواتير المبيعات</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >قائمة فواتير المبيعات</a></li>
                        <li><a >إنشاء فاتورة مبيعات</a></li>
                    </ul>
                </li>
                <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>عروض الاسعار</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >قائمة عروض الاسعار</a></li>
                        <li><a >إنشاء عرض سعر</a></li>
                    </ul>
                </li>
                <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>المنتجات</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >قائمة المنتجات</a></li>
                        <li><a >إنشاء منتج</a></li>
                    </ul>
                </li>
                <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>الطلبات</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >قائمة الطلبات المكتملة</a></li>
                        <li><a >قائمة الطلبات الغير مكتملة</a></li>
                        <li><a >إنشاء طلب</a></li>
                    </ul>
                </li>
                <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>العملاء</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >قائمة العملاء</a></li>
                        <li><a >إنشاء عميل</a></li>
                    </ul>
                </li>
                <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>الموردين</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >قائمة الموردين</a></li>
                        <li><a >إنشاء مورد</a></li>
                    </ul>
                </li>
                <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>المستخدمين</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >قائمة المستخدمين</a></li>
                        <li><a >إنشاء مستخدم</a></li>
                    </ul>
                </li>
                <li class="nav-link" onclick="displayLink(this)">
                    <a >
                        <span>الاعدادات</span>
                    </a>
                    <ul class="hidden-list">
                        <li><a >معلومات المنشأة</a></li>
                        <li><a >الفئات</a></li>
                        <li><a href=".#">الضرائب</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
    <!--End Mobile Navigation-->
    <!--Start Wrapper-->
    <div class="wrapper">
        <!--Start Right Bar-->
        <ul class="navbar-nav right-bar" id="rightBar">
            <a  class="brand-logo">
                <img src="#" alt="NEEDS logo" title="NEEDS logo">
            </a>
            <div class="brand-content">
                <a  class="brand-link">
                    <i class="fa fa-eye"></i>
                    عرض صفحة المتجر
                </a>
            </div>
            <li class="nav-item active">
                <a href="{{route('index')}}">
                    <i class="fa fa-home fa-fw right-icon"></i>
                    <span>الصفحة الرئيسية</span>
                </a>
            </li>
            {{-- <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-file-invoice fa-fw right-icon"></i>
                    <span>فواتير المشتريات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a >قائمة فواتير المشتريات</a></li>
                    <li><a >إنشاء فاتورة مشتريات</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-file-invoice-dollar fa-fw right-icon"></i>
                    <span>فواتير المبيعات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a >قائمة فواتير المبيعات</a></li>
                    <li><a >إنشاء فاتورة مبيعات</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-layer-group fa-fw right-icon"></i>
                    <span>عروض الاسعار</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a >قائمة عروض الاسعار</a></li>
                    <li><a >إنشاء عرض سعر</a></li>
                </ul>
            </li> --}}
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
                    <li><a href="Users/index.html" >قائمة الادوار</a></li>
                    <li><a href="Users/addUser.html" >إنشاء دور</a></li>
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
                        <h6>تعديل الحفله</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>إضافة حفله جديده </h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>إضافة حفله جديد</h6>
                        </div>
                        <div class="content">
                            <form method="" action=""><!--Add Form Details Here-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم الحفله :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل اسم الحفله">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الهاتف :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل رقم الهاتف">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">الايميل :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="email" class="form-control" name="" placeholder="ادخل الايميل">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">عنوان العميل :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل عنوان العميل">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الجوال :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل رقم الجوال">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">ملاحظات :</label>
                                            <div class="col-sm-12">
                                                <textarea name="" class="form-control" rows="5" placeholder="ادخل ملاحظات للعميل"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button type="submit" class="btn"><i class="fa fa-plus"></i>حفظ</button>
                                </div>
                            </form>
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
