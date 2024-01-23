<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ibrahim BarBouD">
    <title>Matjary Dashboard</title>
    <!--CSS file-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-rtl.css" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <!--Google font-->
    <link rel="stylesheet" href="css/Tajawalfont.css">
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
                    <a href='{{route('index')}}'>
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
                        <li><a href="Quotations/index.html" >قائمة  الحفلات</a></li>
                        <li><a href="Quotations/add.html" >إنشاء  حفله</a></li>
                    </ul>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fab fa-product-hunt fa-fw right-icon"></i>
                        <span>الدعوات</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="Products/index.html" >قائمة الدعوات</a></li>
                        <li><a href="Products/add.html" >إنشاء دعوه</a></li>
                    </ul>
                </li>
                <li class="nav-item" onclick="displayList(this)">
                    <a >
                        <i class="fa fa-shopping-bag fa-fw right-icon"></i>
                        <span>الاصناف</span>
                        <i class="fa fa-angle-left left-icon"></i>
                    </a>
                    <ul class="hidden-list">
                        <li><a href="Orders/CompleteOrder.html" >قائمه الاصناف  </a></li>
                        <li><a href="Orders/UnCompleteOrder.html" >اضافه صنف </a></li>
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
                        <li><a href="Suppliers/index.html" >قائمة الامن</a></li>
                        <li><a href="Suppliers/add.html" >إنشاء امن</a></li>
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
        </div>
    </div>
    <!--End Mobile Navigation-->
    <!--Start Wrapper-->
    <div class="wrapper">
        <!--Start Right Bar-->
        <ul class="navbar-nav right-bar" id="rightBar">
            <a  class="brand-logo">
                <img src="#" alt="NEEDS Logo" title="NEEDS Logo">
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
                    <li><a href="Purchases_Invoice/index.html" >قائمة فواتير المشتريات</a></li>
                    <li><a href="Purchases_Invoice/add.html" >إنشاء فاتورة مشتريات</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-file-invoice-dollar fa-fw right-icon"></i>
                    <span>فواتير المبيعات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="Sales_Invoice/index.html" >قائمة فواتير المبيعات</a></li>
                    <li><a href="Sales_Invoice/add.html" >إنشاء فاتورة مبيعات</a></li>
                </ul>
            </li>--}}
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-layer-group fa-fw right-icon"></i>
                    <span> الحفلات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="Quotations/index.html" >قائمة  الحفلات</a></li>
                    <li><a href="Quotations/add.html" >إنشاء  حفله</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fab fa-product-hunt fa-fw right-icon"></i>
                    <span>الدعوات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="Products/index.html" >قائمة الدعوات</a></li>
                    <li><a href="Products/add.html" >إنشاء دعوه</a></li>
                </ul>
            </li>
            <li class="nav-item" onclick="displayList(this)">
                <a >
                    <i class="fa fa-shopping-bag fa-fw right-icon"></i>
                    <span>الاصناف</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="Orders/CompleteOrder.html" >قائمه الاصناف  </a></li>
                    <li><a href="Orders/UnCompleteOrder.html" >اضافه صنف </a></li>
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
                    <li><a href="Suppliers/index.html" >قائمة الامن</a></li>
                    <li><a href="Suppliers/add.html" >إنشاء امن</a></li>
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
                        <span>عبدالرحمن</span>
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
            <div class="container-fluid">
                <!--Start Main Dashboard-->
                <div class="main-dashboard">
                    <!--Start Statistics-->
                    <div class="statistics-date shadow" onclick="displayStatistics()">
                        <h3>الشهر الحالي</h3>
                        <i class="fa fa-angle-down"></i>
                    </div>
                    {{-- <div class="statistics-option shadow" id="st-option">
                        <ul>
                            <a ><li>الشهر الحالي</li></a>
                            <a ><li>الشهر الماضي</li></a>
                            <a ><li>اليوم</li></a>
                        </ul>
                    </div> --}}
                    <!--End Statistics-->
                    <!--Start Enterprise info-->
                    <div class="enterprise-info">
                        <div class="row justify-content-between text-center">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="content">
                                    <h5>احصائيات</h5>
                                    <h5>5</h5><!--Put the server variable Here-->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="content">
                                    <h5>احصائيات</h5>
                                    <h5>1</h5><!--Put the server variable Here-->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="content">
                                    <h5>احصائيات</h5>
                                    <h5>5</h5><!--Put the server variable Here-->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="content">
                                    <h5>احصائيات</h5>
                                    <h5>0</h5><!--Put the server variable Here-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Enterprise info-->
                    <!--Start New Order-->
                    <div class="row">
                        <div class="col-12">
                            <div class="new-order shadow">
                                <i class="fa fa-cart-plus icon"></i>
                                <h4> احصائيات</h4>
                                <div class="order-table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>الحفله</td>
                                                <td>العميل</td>
                                                <td>التاريخ</td>
                                                <td>الاجمالي</td>
                                                <td>الحالة</td>
                                                <td>عمليات</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>عبدالرحمن باجعمان</td>
                                                <td>2020/1/1</td>
                                                <td>1550 SR</td>
                                                <td>مكتمل</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>عبدالرحمن باجعمان</td>
                                                <td>2020/1/1</td>
                                                <td>1550 SR</td>
                                                <td>مكتمل</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>عبدالرحمن باجعمان</td>
                                                <td>2020/1/1</td>
                                                <td>1550 SR</td>
                                                <td>مكتمل</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End New Order-->
                    <!--Start Product-->
                    {{-- <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="new-order shadow">
                                <i class="fa fa-dollar-sign icon"></i>
                                <h4>المنتجات الاكثر مبيعا</h4>
                                <div class="order-table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>المنتج</td>
                                                <td>الاجمالي</td>
                                                <td>عمليات</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td> Product </td>
                                                <td>1550 SR</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product </td>
                                                <td>1550 SR</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product </td>
                                                <td>1550 SR</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-6 col-md-12">
                            <div class="new-order shadow">
                                <i class="fa fa-cart-arrow-down icon-danger"></i>
                                <h4>المنتجات التي قاربت على النفاذ</h4>
                                <div class="order-table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>المنتج</td>
                                                <td>الكمية</td>
                                                <td>عمليات</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product </td>
                                                <td>10</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Product </td>
                                                <td>10</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td> Product</td>
                                                <td>10</td>
                                                <td>
                                                    <a ><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a ><i class="fa fa-edit fa-fw op"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                    {{-- </div> --}}
                    <!--End Product-->
                </div>
                <!--End Main Dashboard-->
            </div>
            <!--End Page Content-->
        </div>
        <!--End Content Wrapper-->
    </div>
    <!--End Wrapper-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
