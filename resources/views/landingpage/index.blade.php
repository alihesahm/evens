<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>فعاليات </title>

    <meta name="description" content="                       منصة إلكترونية متخصصة في إدارة حضور الفعاليات بشكل فعّال وسهل. نهدف
    إلى توفير تجربة مميزة للمستخدمين والمنظمين على حد سواء، ونقدم مجموعة من الميزات التي تسهم في
    تحسين عمليات التخطيط وإدارة الفعاليات.">
    <meta name="keywords" content="فعاليات ">
    <meta name="author" content="Abdulrahman Abdullah Bajaman">

    <!-- Favicons -->
    <link href="{{asset('img/WhatsApp_Image_2024-01-08_at_1.23.44_PM-removebg.png')}}" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        #imgbackground{
            background-image: url('assets/img/team/Abdulrahman.jpeg');
            background-position: center;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            width: 100%;
            height: 552px


        }
          #hero{
            background-image: url('assets/img/1705265495037.jpg');
            background-position: center;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            width: 100%;
            height: 552px
        }
    </style>
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="container-fluid d-flex align-items-center justify-content-between">

            <div class="d-flex">
                <a id="auth" name='auth' class="text-secondary" href="{{ route('login') }}">تسجيل الدخول</a>

                <a id="auth" name='auth' class="ms-3 text-secondary"
                    href="{{ route('registerform') }}">تسجيل</a>

            </div>




            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#" class="active">الصفحه الرئيسيه</a></li>
                    <li><a href="#">حولنا</a></li>
                    <li><a href="#">خدماتنا</a></li>
                    <li><a href="#">الفريق</a></li>

                    <li><a href="#">تواصل بنا</a></li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->
            <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>فعاليات </h1>
                {{-- <span>.</span> --}}
            </a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- Hero Section - Home Page -->
        <section id="hero" class="hero">

            <!--<img src="{{ asset('assets/img/beautiful-wide-shot-breathtaking-fireworks-night-sky-during-holidays-city.jpg') }}"-->
            <!--    alt="" data-aos="fade-in">-->

            <div class="container">
                <div class="row">
                    <div id="About" class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">مرحباً بك في فعاليات </h2>
                        <p data-aos="fade-up" data-aos-delay="200">.منصة إلكترونية متخصصة في إدارة حضور الفعاليات بشكل
                            فعّال وسهل</p>
                    </div>
                    {{-- <div class="col-lg-5">
                        <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" class="btn btn-primary" value="Sign up">
                        </form>
                    </div> --}}
                </div>
            </div>

        </section><!-- End Hero Section -->

        <!-- Clients Section - Home Page -->
        {{-- <section id="clients" class="clients">

            <div class="container-fluid" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- End Clients Section --> --}}

        <!-- About Section - Home Page -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div style="direction:rtl" class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h3 style="font-size:1.75rem;color:black;" style="color:black">حولنا</h3>
                        <h2>فعاليات </h2>
                        <p>
                            نحن

                            منصة إلكترونية متخصصة في إدارة حضور الفعاليات بشكل فعّال وسهل. نهدف
                            إلى توفير تجربة مميزة للمستخدمين والمنظمين على حد سواء، ونقدم مجموعة من الميزات التي تسهم في
                            تحسين عمليات التخطيط وإدارة الفعاليات. </p>
                        {{-- <a href="#" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a> --}}
                    </div>

                    <div class="col-xl-7">

                        <div id="Service" class="row gy-4 icon-boxes">
                            <h3 class="text-center">خدماتنا</h3>

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-buildings"></i>
                                    <h3>سهولة التسجيل والمشاركة
                                    </h3>
                                    <p>يتيح موقع فعاليات  للمشتركين تسجيل حضورهم بسهولة عبر واجهة مستخدم بسيطة ومستندة
                                        إلى تقنيات حديثة.

                                    </p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard-pulse"></i>
                                    <h3>إدارة فعّالة للفعاليات </h3>
                                    <p>يوفر الموقع أدوات قوية لمنظمي الفعاليات لإدارة الفعاليات بشكل فعّال،بدءًا من إنشاء
                                        الفعالية وصولاً إلى متابعة حضورالضيوف.

                                    </p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-command"></i>
                                    <h3>نظام تذاكر آمن</h3>
                                    <p>يتيح موقع فعاليات  توفير نظام تذاكر آمن وموثوق به، مما يسهم في تسهيل عملية
                                        ادارة الحضور.

                                    </p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h3>تقارير وإحصائيات </h3>
                                    <p>يوفر نظام فعاليات  تقارير وإحصائيات تفصيلية حول حضور الفعاليات، مما يساعد
                                        المنظمين في فهم أداء الفعاليات وتحسينها .

                                    </p>
                                </div>
                            </div> <!-- End Icon Box -->

                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- Stats Section - Home Page -->
        <section  id="stats" class="stats">

            {{-- <img  src="{{asset('assets/img/business-people-casual-meeting.jpg')}}" alt="" data-aos="fade-in"> --}}

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $user }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>العملاء</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $party }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>الفعاليات</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $invite }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>المدعويين</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $secuirity }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>الأمن</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- End Stats Section -->




        <!-- Contact Section - Home Page -->
        <section id="contact" class="contact">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>تواصل بنا</h2>
                <p>يمكنك التواصل معنا </p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>العنوان</h3>
                                    <p>اليمن-حضرموت-المكلا-بويش</p>
                                    <p>حي السموح</p>
                                    {{-- <p>New York, NY 535022</p> --}}
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>اتصل بنا</h3>
                                    <p>+96773087640</p>
                                    <p>+967714735955</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>البريد الالكتروني</h3>
                                    <p>abdo99669@gmail.com</p>
                                    <p>bajamanabdo@gmail.com</p>
                                    {{-- <p>contact@example.com</p> --}}
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>اوقات الدوام</h3>
                                    <p>من السبت الى الخميس</p>
                                    <p>من الثامنه صباحاً وحتى الخامسه عصراً</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
              <form action="{{route('quest.report')}}" method="post"  data-aos="fade-up"
                            data-aos-delay="200" enctype="multipart/form-data">
                            @csrf
                            @error('email')
                            @if($message != 'The email has already been taken.')
                              <span style="color: #f44336; font-size: 10px;" class="">هذا الايميل غير صالح  </span>
                            @else
                              <span class="text-red-500 ms-auto">هذا الايميل مستخدم.</span>
                            @endif
                          @enderror
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input required type="text" name="name" class="form-control"
                                        placeholder="ادخل اسمك" required>
                                </div>


                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="البريد الالكتروني" required>
                                </div>

                                <div class="image"> <span><i aria-hidden="true" class="bi-addres myicon"></i></span>
                                    <input type="file" name="image_path" placeholder="الصوره"    />

                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="title" placeholder="العنوان"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="description" rows="6" placeholder="الرساله" required></textarea>
                                </div>

                                <div class="col-md-12 text-end">
                                    {{-- <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div> --}}

                                    <button class="contact php-email-form" type="submit">ارسل رساله</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>فعاليات </span>
                    </a>
                    <p>منصة الكترونيه لاداره حضور الفعاليات</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>روابط</h4>
                    <ul>
                        <li><a href="#">الصفحه الرئيسيه</a></li>
                        <li><a href="#About">حولنا</a></li>
                        <li><a href="#Service">خدماتنا</a></li>
                        <li><a href="#team">الفريق</a></li>
                        <li><a href="#Contact">تواصل بنا</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>خدماتنا</h4>
                    <ul>
                        <li><a href="#">سهولة التسجيل والمشاركة
                            </a></li>
                        <li><a href="#">إدارة فعّالة للفعاليات
                        </a></li>
                        <li><a href="#">نظام تذاكر آمن
                        </a></li>
                        <li><a href="#">تقارير وإحصائيات
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p> <span>حقوق النشر محفوظه &copy;</span> <strong class="px-1">فعاليات </strong> <span></span>
            </p>
            <div class="credits">

                تم التصميم بواسطه
               <strong><a
                    href="https://www.instagram.com/da7m.bj/?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D">عبدالرحمن
                    باجعمان</a></strong>
            </div>
        </div>

    </footer><!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
