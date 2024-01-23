<div class="mobile-nav" id="mobile-navigation">
    <div class="close-nav">
        <i class="fa fa-times" onclick="closeMobileNav()"></i>
    </div>
    <div class="list">
        <ul class="navbar-nav">
            <li class="nav-item" onclick="displayList(this)">
                <a>
                    <i class="fa fa-layer-group fa-fw right-icon"></i>
                    <span> الحفلات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="{{ route('concert.show') }}">قائمة الحفلات</a></li>
                    <li><a href="{{ route('concert.create') }}">إنشاء حفله</a></li>
                </ul>
            </li>
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

            @if (auth()->user()->role_id == 1)
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
            @endif

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
            <li class="nav-item" onclick="displayList(this)">
                <a>
                    <i class="fa fa-cog fa-fw right-icon"></i>
                    <span>الاعدادات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>
                <ul class="hidden-list">
                    <li><a href="Settings/system-settings.html">معلومات المنشأة</a></li>
                    <li><a href="Settings/Category.html">الفئات</a></li>
                    <li><a href="Settings/Tax.html">الضرائب</a></li>
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
        <a class="brand-logo">
            <img src="#" alt=" حفلات سوفت لوقو" title=" حفلات سوفت لوقو">
        </a>
        <div class="brand-content">
            <a class="brand-link">
                <i class="fa fa-eye"></i>
                حفلات سوفت
            </a>
        </div>
        <li class="nav-item active">
            <a href="{{ route('index') }}">
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
        </li> --}}

        @if (Auth()->user()->role_id == 2)
            <li class="nav-item" onclick="displayList(this)">
                <a>
                    <i class="fa fa-layer-group fa-fw right-icon"></i>
                    <span> الحفلات</span>
                    <i class="fa fa-angle-left left-icon"></i>
                </a>

                <ul class="hidden-list">
                    <li><a href="{{ route('concert.show') }}">قائمة الحفلات</a></li>
                    <li><a href="{{ route('concert.create') }}">إنشاء حفله</a></li>
                </ul>
            </li>
            {{-- @else --}}
        @endif

        @if (auth()->user()->role_id == 2)
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


        @if (auth()->user()->role_id == 1)
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



        @if (auth()->user()->role_id == 1)
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

        @if (auth()->user()->role_id == 2)
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


        @if (auth()->user()->role_id == 1)
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
        <li class="nav-item" onclick="displayList(this)">
            <a>
                <i class="fa fa-user-circle fa-fw right-icon"></i>
                <span>فحص</span>
                <i class="fa fa-angle-left left-icon"></i>
            </a>
            <ul class="hidden-list">
                <li><a href="{{ route('secuiriy.qrcode.check') }}"> فتح الكام</a></li>
                <li><a href="{{ route('roles.create') }}">إنشاء دور</a></li>
            </ul>
        </li>

        <li class="nav-item" onclick="displayList(this)">
            <a>
                <i class="fa fa-cog fa-fw right-icon"></i>
                <span>الاعدادات</span>
                <i class="fa fa-angle-left left-icon"></i>
            </a>
            <ul class="hidden-list">
                <li><a href="Settings/system-settings.html">معلومات المنشأة</a></li>
                <li><a href="Settings/Category.html">الفئات</a></li>
                <li><a href="Settings/Tax.html">الضرائب</a></li>
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
                        <li><a><i class="fa fa-user"></i>تعديل الملف الشخصي</a></li>
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
