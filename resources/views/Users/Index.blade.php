<!--<!DOCTYPE html>-->
<!--<html lang="ar">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--    <meta name="author" content="Ibrahim BarBouD">-->
<!--    <title>العملاء</title>-->
    <!--CSS file-->
<!--    <link href="../css/bootstrap.min.css" rel="stylesheet" />-->
<!--    <link href="../css/bootstrap-rtl.css" rel="stylesheet" />-->
<!--    <link href="../css/all.min.css" rel="stylesheet" />-->
<!--    <link href="../css/main.css" rel="stylesheet" />-->
    <!--Google font-->
<!--    <link rel="stylesheet" href="../css/Tajawalfont.css">-->
<!--</head>-->
<!--<body>-->
    <!--Start Mobile Navigation-->
<!--    <div class="mobile-nav" id="mobile-navigation">-->
<!--        <div class="close-nav">-->
<!--            <i class="fa fa-times" onclick="closeMobileNav()"></i>-->
<!--        </div>-->
<!--        <div class="list">-->
<!--            <ul class="navbar-nav">-->
<!--                <li>-->
<!--                    <a >-->
<!--                        <span>الصفحة الرئيسية</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                {{-- <li class="nav-link" onclick="displayLink(this)">-->
<!--                    <a >-->
<!--                        <span>فواتير المشتريات</span>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a >قائمة فواتير المشتريات</a></li>-->
<!--                        <li><a >إنشاء فاتورة مشتريات</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-link" onclick="displayLink(this)">-->
<!--                    <a >-->
<!--                        <span>فواتير المبيعات</span>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a >قائمة فواتير المبيعات</a></li>-->
<!--                        <li><a >إنشاء فاتورة مبيعات</a></li>-->
<!--                    </ul>-->
<!--                </li> --}}-->
<!--                <li class="nav-item" onclick="displayList(this)">-->
<!--                    <a >-->
<!--                        <i class="fa fa-layer-group fa-fw right-icon"></i>-->
<!--                        <span> الحفلات</span>-->
<!--                        <i class="fa fa-angle-left left-icon"></i>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a href="{{route('concert.show')}}" >قائمة  الحفلات</a></li>-->
<!--                        <li><a href="{{route('concert.create')}}" >إنشاء  حفله</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item" onclick="displayList(this)">-->
<!--                    <a >-->
<!--                        <i class="fab fa-product-hunt fa-fw right-icon"></i>-->
<!--                        <span>الدعوات</span>-->
<!--                        <i class="fa fa-angle-left left-icon"></i>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a href="{{route('invite.show')}}" >قائمة الدعوات</a></li>-->
<!--                        <li><a href="{{route('invite.create')}}" >إنشاء دعوه</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item" onclick="displayList(this)">-->
<!--                    <a >-->
<!--                        <i class="fa fa-shopping-bag fa-fw right-icon"></i>-->
<!--                        <span>الاصناف</span>-->
<!--                        <i class="fa fa-angle-left left-icon"></i>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a href="{{route('category.show')}}" >قائمه الاصناف  </a></li>-->
<!--                        <li><a href="{{route('category.create')}}" >اضافه صنف </a></li>-->
<!--                        {{-- <li><a href="Orders/add.html" >إنشاء طلب</a></li> --}}-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item" onclick="displayList(this)">-->
<!--                    <a >-->
<!--                        <i class="fa fa-users fa-fw right-icon"></i>-->
<!--                        <span>العملاء</span>-->
<!--                        <i class="fa fa-angle-left left-icon"></i>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a href="{{route('user.show')}}" >قائمة العملاء</a></li>-->
<!--                        <li><a href="{{route('user.create')}}" >إنشاء عميل</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item" onclick="displayList(this)">-->
<!--                    <a >-->
<!--                        <i class="fa fa-user-friends fa-fw right-icon"></i>-->
<!--                        <span>الامن</span>-->
<!--                        <i class="fa fa-angle-left left-icon"></i>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a href="{{route('secuirity.show')}}" >قائمة الامن</a></li>-->
<!--                        <li><a href="{{route('secuirity.create')}}" >إنشاء امن</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item" onclick="displayList(this)">-->
<!--                    <a >-->
<!--                        <i class="fa fa-user-circle fa-fw right-icon"></i>-->
<!--                        <span>الادوار</span>-->
<!--                        <i class="fa fa-angle-left left-icon"></i>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a href="{{route('roles.show')}}" >قائمة الادوار</a></li>-->
<!--                        <li><a href="{{route('roles.create')}}" >إنشاء دور</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item" onclick="displayList(this)">-->
<!--                    <a >-->
<!--                        <i class="fa fa-cog fa-fw right-icon"></i>-->
<!--                        <span>الاعدادات</span>-->
<!--                        <i class="fa fa-angle-left left-icon"></i>-->
<!--                    </a>-->
<!--                    <ul class="hidden-list">-->
<!--                        <li><a href="Settings/system-settings.html" >معلومات المنشأة</a></li>-->
<!--                        <li><a href="Settings/Category.html" >الفئات</a></li>-->
<!--                        <li><a href="Settings/Tax.html" >الضرائب</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
    <!--End Mobile Navigation-->
    <!--Start Wrapper-->
<!--    <div class="wrapper">-->
        <!--Start Right Bar-->
<!--        <ul class="navbar-nav right-bar" id="rightBar">-->
<!--            <a  class="brand-logo">-->
<!--                <img src="../img/Logo.svg" alt="Matjary-logo" title="matjary logo">-->
<!--            </a>-->
<!--            <div class="brand-content">-->
<!--                <a href="{{route('index')}}" class="brand-link">-->
<!--                    <i class="fa fa-eye"></i>-->
<!--                    عرض صفحة المتجر-->
<!--                </a>-->
<!--            </div>-->
<!--            <li class="nav-item active">-->
<!--                <a href="{{route('index')}}">-->
<!--                    <i class="fa fa-home fa-fw right-icon"></i>-->
<!--                    <span>الصفحة الرئيسية</span>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="nav-item" onclick="displayList(this)">-->
<!--                <a >-->
<!--                    <i class="fa fa-layer-group fa-fw right-icon"></i>-->
<!--                    <span> الحفلات</span>-->
<!--                    <i class="fa fa-angle-left left-icon"></i>-->
<!--                </a>-->
<!--                <ul class="hidden-list">-->
<!--                    <li><a href="{{route('concert.show')}}" >قائمة  الحفلات</a></li>-->
<!--                    <li><a href="{{route('concert.create')}}" >إنشاء  حفله</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="nav-item" onclick="displayList(this)">-->
<!--                <a >-->
<!--                    <i class="fab fa-product-hunt fa-fw right-icon"></i>-->
<!--                    <span>الدعوات</span>-->
<!--                    <i class="fa fa-angle-left left-icon"></i>-->
<!--                </a>-->
<!--                <ul class="hidden-list">-->
<!--                    <li><a href="{{route('invite.show')}}" >قائمة الدعوات</a></li>-->
<!--                    <li><a href="{{route('invite.create')}}" >إنشاء دعوه</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="nav-item" onclick="displayList(this)">-->
<!--                <a >-->
<!--                    <i class="fa fa-shopping-bag fa-fw right-icon"></i>-->
<!--                    <span>الاصناف</span>-->
<!--                    <i class="fa fa-angle-left left-icon"></i>-->
<!--                </a>-->
<!--                <ul class="hidden-list">-->
<!--                    <li><a href="{{route('category.show')}}" >قائمه الاصناف  </a></li>-->
<!--                    <li><a href="{{route('category.create')}}" >اضافه صنف </a></li>-->
<!--                    {{-- <li><a href="Orders/add.html" >إنشاء طلب</a></li> --}}-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="nav-item" onclick="displayList(this)">-->
<!--                <a >-->
<!--                    <i class="fa fa-users fa-fw right-icon"></i>-->
<!--                    <span>العملاء</span>-->
<!--                    <i class="fa fa-angle-left left-icon"></i>-->
<!--                </a>-->
<!--                <ul class="hidden-list">-->
<!--                    <li><a href="{{route('user.show')}}" >قائمة العملاء</a></li>-->
<!--                    <li><a href="{{route('user.create')}}" >إنشاء عميل</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="nav-item" onclick="displayList(this)">-->
<!--                <a >-->
<!--                    <i class="fa fa-user-friends fa-fw right-icon"></i>-->
<!--                    <span>الامن</span>-->
<!--                    <i class="fa fa-angle-left left-icon"></i>-->
<!--                </a>-->
<!--                <ul class="hidden-list">-->
<!--                    <li><a href="{{route('secuirity.show')}}" >قائمة الامن</a></li>-->
<!--                    <li><a href="{{route('secuirity.create')}}" >إنشاء امن</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="nav-item" onclick="displayList(this)">-->
<!--                <a >-->
<!--                    <i class="fa fa-user-circle fa-fw right-icon"></i>-->
<!--                    <span>الادوار</span>-->
<!--                    <i class="fa fa-angle-left left-icon"></i>-->
<!--                </a>-->
<!--                <ul class="hidden-list">-->
<!--                    <li><a href="{{route('roles.show')}}" >قائمة الادوار</a></li>-->
<!--                    <li><a href="{{route('roles.create')}}" >إنشاء دور</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="nav-item" onclick="displayList(this)">-->
<!--                <a >-->
<!--                    <i class="fa fa-cog fa-fw right-icon"></i>-->
<!--                    <span>الاعدادات</span>-->
<!--                    <i class="fa fa-angle-left left-icon"></i>-->
<!--                </a>-->
<!--                <ul class="hidden-list">-->
<!--                    <li><a href="Settings/system-settings.html" >معلومات المنشأة</a></li>-->
<!--                    <li><a href="Settings/Category.html" >الفئات</a></li>-->
<!--                    <li><a href="Settings/Tax.html" >الضرائب</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
        <!--End Right Bar-->
        <!--Start Content Wrapper-->
<!--        <div class="content-wrapper">-->
            <!--Start Top Bar-->
<!--            <div class="top-bar">-->
<!--                <div class="right-content">-->
<!--                    <i class="fa fa-bars" onclick="showMobileNav()"></i>-->
<!--                    <h3> حفلات </h3><!--Put The name of the Store Here!-->-->
<!--                </div>-->
<!--                <div class="left-content">-->
<!--                    <h6 id="userInfo" onclick="showUserLinks()">-->
<!--                        <i class="fa fa-user"></i>-->
<!--                        <span> عبدالرحمن </span>-->
<!--                        <i class="fa fa-angle-down"></i>-->
<!--                    </h6>-->
<!--                    <div id="userLinks" class="shadow">-->
<!--                        <ul>-->
<!--                            <li><a ><i class="fa fa-user"></i>تعديل الملف الشخصي</a></li>-->
<!--                            <li><a ><i class="fa fa-sign-out-alt"></i>تسجيل خروج</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!--End Top Bar-->
            <!--Start Page Content-->
<!--            <div class="page-content">-->
<!--                <div class="container-fluid">-->
<!--                    <div class="page-title">-->
<!--                        <i class="fa fa-users"></i>-->
<!--                        <h6>العملاء</h6>-->
<!--                        <i class="fa fa-angle-left"></i>-->
<!--                        <h6>قائمة العملاء</h6>-->
<!--                    </div>-->
<!--                    <div class="page-info shadow">-->
<!--                        <div class="title">-->
<!--                            <i class="fa fa-users"></i>-->
<!--                            <h6>قائمة العملاء</h6>-->
<!--                        </div>-->
<!--                        <div class="content">-->
<!--                            <div class="before-table">-->
<!--                                <div class="add-button">-->
<!--                                    <a class="btn" href="{{route('user.create')}}">-->
<!--                                        <i class="fa fa-plus"></i>-->
<!--                                        اضف عميل جديد-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="search-form">-->
<!--                                    <form action="" method=""><!--Add Form Details Here-->-->
<!--                                        <select class="custom-select mr-sm-2" name="">-->
<!--                                            <option selected="">بحث بحسب</option>-->
<!--                                            <option value="">اسم العميل</option>-->
<!--                                        </select>-->
<!--                                        <input type="text" class="form-control" name="">-->
<!--                                        <input type="submit" class="btn ml-sm-2" value="بحث">-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="table-info">-->
<!--                                <table class="table">-->
<!--                                    <thead>-->
<!--                                        <tr>-->
<!--                                            <th>#</th>-->
<!--                                            <th>اسم العميل</th>-->
<!--                                            <th>رقم الهاتف</th>-->
<!--                                            <th>رقم الجوال</th>-->
<!--                                            <th>البريد الالكتروني</th>-->
<!--                                            <th>عمليات</th>-->
<!--                                        </tr>-->
<!--                                    </thead>-->
<!--                                    <tbody>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a href="{{route('user.show')}}"><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a href="{{route('user.showdetails',['id'=>1])}}"><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr>-->
<!--                                            <td>1</td>-->
<!--                                            <td>عبدالرحمن باجعمان</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>0502622135</td>-->
<!--                                            <td>moh@gmail.com</td>-->
<!--                                            <td>-->
<!--                                                <a ><i class="fa fa-eye fa-fw op"></i></a>-->
<!--                                                <a ><i class="fa fa-edit fa-fw op"></i></a>-->
<!--                                                <a   onclick="return confirm('هل انت متأكد')"><i class="fa fa-trash fa-fw op"></i></a>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    </tbody>-->
<!--                                </table>-->
<!--                            </div>-->
<!--                            <div class="pagin"><!--Put Pagination ASP CORE Here-->-->
<!--                                <nav aria-label="Page navigation example">-->
<!--                                    <ul class="pagination">-->
<!--                                        <li class="page-item"><a class="page-link" >Previous</a></li>-->
<!--                                        <li class="page-item"><a class="page-link" >1</a></li>-->
<!--                                        <li class="page-item"><a class="page-link" >2</a></li>-->
<!--                                        <li class="page-item"><a class="page-link" >3</a></li>-->
<!--                                        <li class="page-item"><a class="page-link" >Next</a></li>-->
<!--                                    </ul>-->
<!--                                </nav>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!--End Page Content-->
<!--        </div>-->
        <!--End Content Wrapper-->
<!--    </div>-->
    <!--End Wrapper-->
<!--    <script src="../js/jquery-3.4.1.min.js"></script>-->
<!--    <script src="../js/popper.min.js"></script>-->
<!--    <script src="../js/bootstrap.min.js"></script>-->
<!--    <script src="../js/main.js"></script>-->
<!--</body>-->
<!--</html>-->
