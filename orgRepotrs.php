<?php session_start(); ?>
<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta name="description" content="المركز الوطني لتعزيز الصحة النفسية">
    <meta name="keywords" content="المركز الوطني لتعزيز الصحة النفسية, تطبيق قريبون,المساعدة النفسية الأولية, الاستشارات النفسية,ncmh, محتوي تثقيفي نفسي ,استشارات نفسية مجانية">

    <head>
        <title>المركز الوطني لتعزيز الصحة النفسية</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://ncmh.org.sa/ncmhTemplate/assets/nsa.png">
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://kit.fontawesome.com/c099210540.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://ncmh.org.sa/ncmhTemplate/css/styles.css">
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-KVBK6C67BV&amp;l=dataLayer&amp;cx=c"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.26.0/babel.min.js"></script>


    <style>
        .footerA {
            color: #1e5736;
        }

        .footerA:hover {
            color: #26b964;
        }

        .form-control {
            border: none;
            border: 2px solid green !important;
            border-radius: 2px;
        }

        #basic-addon1 {
            cursor: pointer;
        }

        .dropdown-item {
            overflow-x: hidden;
        }
    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136411509-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-136411509-1');
    </script>

<body style="background-image:url('https://ncmh.org.sa/ncmhTemplate/bgImages/background.svg') ;font-family: 'Tajawal', sans-serif; position: relative;">
    <header class="main-header">
        <div class="container-fluid h-100">
            <div class="row justify-content-between h-100 align-items-center main-header-items">
                <div class="col-12 col-md-12 col-lg-5 logos-container">
                    <div class="row">

                        <div class="col-12 col-md-2 col-lg-3" style="text-align: center;">
                            <a href="https://ncmh.org.sa">
                                <img class="app-logo" src="https://ncmh.org.sa/ncmhTemplate/assets/nsa.png" alt="logo">
                            </a>
                        </div>
                        <div class="col-12 col-md-7 col-lg-5 app-name">
                            <span style=" font-size: 12px; font-weight: bold; color: #245037;">المركز الوطني لتعزيز الصحة النفسية</span>
                            <span class="slogan">دليلك نحو صحة نفسية أفضل</span>
                        </div>
                        <div class="col-12 col-md-1 col-lg-1 m-auto">
                            <div class="vl"></div>
                        </div>
                        <div class="col-12 col-md-2 col-lg-2">
                            <img class="vision-logo" src="https://ncmh.org.sa/ncmhTemplate/assets/2030.png" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row align-items-center main-actions">
                        <div class="col-12  col-lg-5">
                            <div class="input-group">

                                <input type="text" class="form-control rounded-end " required placeholder="ابحث هنا" aria-label="Username" aria-describedby="basic-addon1" id="searchKey">
                                <span class="input-group-text rounded-start" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <a href="http://localhost:3000/login.php" class="btn btn-danger  align-items-center "><i class="fas fa-users nav-btn-icon"></i> تسجيل الخروج
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <header class="secondary-header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 col-md-8">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light h-100 py-0">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="https://ncmh.org.sa">الرئيسية</a>
                                    </li>

                                    <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                                            </li> -->

                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">من نحن </a>

                                        <ul class="dropdown-menu shadow dropdown-menu-dark">

                                            <li class="dropstart">

                                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" dir="ltr">المركز الوطني لتعزيز الصحة النفسية </a>
                                                <ul class="dropdown-menu dropdown-menu-dark shadow">
                                                    <li><a class="dropdown-item" href="https://ncmh.org.sa/view/16/3th">English</a></li>

                                                    <li><a class="dropdown-item" href="https://drive.google.com/file/d/1I7NYX4ksAShly399gjpa_HI8-5UWDFLA">الدليل التعريفي</a></li>


                                                </ul>
                                            </li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/6/2th">كلمة المدير العام</a></li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/7/2th">مجلس الإدارة</a></li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/33/2th">الهيكل التنظيمي</a></li>











                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                                            </li> -->

                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">مبادراتنا </a>

                                        <ul class="dropdown-menu shadow dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/8/2th">سفراء الصحة النفسية في بيئة العمل</a></li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/Better-Life">حياة أفضل</a></li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/11/2th">تطبيق قريبون</a></li>




                                            <li class="dropstart">

                                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" dir="ltr">المساعدة النفسية الأولية </a>
                                                <ul class="dropdown-menu dropdown-menu-dark shadow">
                                                    <li><a class="dropdown-item" href="https://ncmh.org.sa/view/18/3th">English</a></li>

                                                    <li><a class="dropdown-item" href="https://ncmh.org.sa/view/19/3th">بالعربية</a></li>


                                                </ul>
                                            </li>




                                            <li class="dropstart">

                                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" dir="ltr">جائزة المركز الوطني لتعزيز الصحة النفسية </a>
                                                <ul class="dropdown-menu dropdown-menu-dark shadow">
                                                    <li><a class="dropdown-item" href="https://ncmh.org.sa/view/13/3th">2019</a></li>

                                                    <li><a class="dropdown-item" href="https://ncmh.org.sa/view/14/3th">2020</a></li>

                                                    <li><a class="dropdown-item" href="https://ncmh.org.sa/view/20/3th">2022</a></li>


                                                </ul>
                                            </li>




                                            <li class="dropstart">

                                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" dir="ltr">دليلك للخدمات النفسية في منطقة الرياض </a>
                                                <ul class="dropdown-menu dropdown-menu-dark shadow">
                                                    <li><a class="dropdown-item" href="https://ncmh.org.sa/Institutions">الدليل الالكتروني </a></li>

                                                    <li><a class="dropdown-item" href="https://ncmh.org.sa/view/12/3th">الدليل الالكتروني النسخة الإنجليزية</a></li>


                                                </ul>
                                            </li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/35/2th">تعزيز الصحة النفسية في الجامعات ومراكز العناية بالطالب</a></li>




                                            <li class="dropstart">

                                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" dir="ltr">التعاون مع الجمعيات ومؤسسات المجتمع المدني </a>
                                                <ul class="dropdown-menu dropdown-menu-dark shadow">

                                                </ul>
                                            </li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/37/2th">تعزيز الصحة النفسية للمرأة</a></li>




                                            <li class="dropstart">

                                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" dir="ltr">أدلة الممارسات المهنية في مجال تعزيز الصحة النفسية </a>
                                                <ul class="dropdown-menu dropdown-menu-dark shadow">

                                                </ul>
                                            </li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/40/2th">تأهيل الفئات الأكثر عرضة</a></li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/42/2th">المجلس التنسيقي للجمعيات الصحية الخيرية في مجال الصحة النفسية</a></li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/43/2th">مفاهيم الصحة النفسية للأئمة والخطباء والدعاة</a></li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/44/2th">برنامج التعامل مع الضغوط</a></li>











                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                                            </li> -->

                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">أصدقاء الصحة النفسية </a>

                                        <ul class="dropdown-menu shadow dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/view/46/2th">تعريف</a></li>











                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                                            </li> -->

                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">الوعي النفسي </a>

                                        <ul class="dropdown-menu shadow dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/psychological-awareness/Infographics">الإنفوجرافيك </a></li>



                                            <li><a class="dropdown-item" href="https://ncmh.org.sa/psychological-awareness/Videos">المحتوى المرئي (فيديو) </a></li>











                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                                            </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="https://ncmh.org.sa/Publications">إصدارتنا </a>
                                    </li>

                                    <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                                            </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="https://ncmh.org.sa/Contact-us">إتصل بنا </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
                <div class="col-12 col-md-4 h-100 secondary-header-actions">
                    <button type="button" class="btn btn-success header-btn mobile-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="fas fa-bars btn-icon"></i>
                        <div>القائمة</div>
                    </button>
                </div>
            </div>
        </div>
    </header>





    <div class="container-fluid">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">القائمة الرئيسية</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body text-right">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://ncmh.org.sa">الرئيسية</a>
                    </li>







                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#aboutCollapse1" role="button" aria-expanded="false" aria-controls="aboutCollapse1">
                            من نحن
                        </a>


                        <div class="collapse" id="aboutCollapse1">
                            <div class="card card-body">

                                <a class="nav-link" href="https://ncmh.org.sa/Menu/4/2th">المركز الوطني لتعزيز الصحة النفسية <i style="transform: rotate(180deg);margin-right: 6px;" class="fas fa-angle-right"></i></a>
                                <!-- <a href="#">المركز الوطني لتعزيز الصحة النفسية</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/6/2th">كلمة المدير العام</a>
                                <!-- <a href="#">كلمة المدير العام</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/7/2th">مجلس الإدارة</a>
                                <!-- <a href="#">مجلس الإدارة</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/33/2th">الهيكل التنظيمي</a>
                                <!-- <a href="#">الهيكل التنظيمي</a> -->

                            </div>
                        </div>
                    </li>






                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#aboutCollapse2" role="button" aria-expanded="false" aria-controls="aboutCollapse2">
                            مبادراتنا
                        </a>


                        <div class="collapse" id="aboutCollapse2">
                            <div class="card card-body">

                                <a class="nav-link" href="https://ncmh.org.sa/view/8/2th">سفراء الصحة النفسية في بيئة العمل</a>
                                <!-- <a href="#">سفراء الصحة النفسية في بيئة العمل</a> -->
                                <a class="nav-link " aria-current="page" href="https://ncmh.org.sa/Better-Life">حياة أفضل</a>
                                <!-- <a href="#">حياة أفضل</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/11/2th">تطبيق قريبون</a>
                                <!-- <a href="#">تطبيق قريبون</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/Menu/13/2th">المساعدة النفسية الأولية <i style="transform: rotate(180deg);margin-right: 6px;" class="fas fa-angle-right"></i></a>
                                <!-- <a href="#">المساعدة النفسية الأولية</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/Menu/15/2th">جائزة المركز الوطني لتعزيز الصحة النفسية <i style="transform: rotate(180deg);margin-right: 6px;" class="fas fa-angle-right"></i></a>
                                <!-- <a href="#">جائزة المركز الوطني لتعزيز الصحة النفسية</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/Menu/16/2th">دليلك للخدمات النفسية في منطقة الرياض <i style="transform: rotate(180deg);margin-right: 6px;" class="fas fa-angle-right"></i></a>
                                <!-- <a href="#">دليلك للخدمات النفسية في منطقة الرياض</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/35/2th">تعزيز الصحة النفسية في الجامعات ومراكز العناية بالطالب</a>
                                <!-- <a href="#">تعزيز الصحة النفسية في الجامعات ومراكز العناية بالطالب</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/Menu/36/2th">التعاون مع الجمعيات ومؤسسات المجتمع المدني <i style="transform: rotate(180deg);margin-right: 6px;" class="fas fa-angle-right"></i></a>
                                <!-- <a href="#">التعاون مع الجمعيات ومؤسسات المجتمع المدني</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/37/2th">تعزيز الصحة النفسية للمرأة</a>
                                <!-- <a href="#">تعزيز الصحة النفسية للمرأة</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/Menu/39/2th">أدلة الممارسات المهنية في مجال تعزيز الصحة النفسية <i style="transform: rotate(180deg);margin-right: 6px;" class="fas fa-angle-right"></i></a>
                                <!-- <a href="#">أدلة الممارسات المهنية في مجال تعزيز الصحة النفسية</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/40/2th">تأهيل الفئات الأكثر عرضة</a>
                                <!-- <a href="#">تأهيل الفئات الأكثر عرضة</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/42/2th">المجلس التنسيقي للجمعيات الصحية الخيرية في مجال الصحة النفسية</a>
                                <!-- <a href="#">المجلس التنسيقي للجمعيات الصحية الخيرية في مجال الصحة النفسية</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/43/2th">مفاهيم الصحة النفسية للأئمة والخطباء والدعاة</a>
                                <!-- <a href="#">مفاهيم الصحة النفسية للأئمة والخطباء والدعاة</a> -->
                                <a class="nav-link" href="https://ncmh.org.sa/view/44/2th">برنامج التعامل مع الضغوط</a>
                                <!-- <a href="#">برنامج التعامل مع الضغوط</a> -->

                            </div>
                        </div>
                    </li>






                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#aboutCollapse3" role="button" aria-expanded="false" aria-controls="aboutCollapse3">
                            أصدقاء الصحة النفسية
                        </a>


                        <div class="collapse" id="aboutCollapse3">
                            <div class="card card-body">

                                <a class="nav-link" href="https://ncmh.org.sa/view/46/2th">تعريف</a>
                                <!-- <a href="#">تعريف</a> -->

                            </div>
                        </div>
                    </li>






                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#aboutCollapse4" role="button" aria-expanded="false" aria-controls="aboutCollapse4">
                            الوعي النفسي
                        </a>


                        <div class="collapse" id="aboutCollapse4">
                            <div class="card card-body">

                                <a class="nav-link " aria-current="page" href="https://ncmh.org.sa/psychological-awareness/Infographics">الإنفوجرافيك </a>
                                <!-- <a href="#">الإنفوجرافيك </a> -->
                                <a class="nav-link " aria-current="page" href="https://ncmh.org.sa/psychological-awareness/Videos">المحتوى المرئي (فيديو) </a>
                                <!-- <a href="#">المحتوى المرئي (فيديو) </a> -->

                            </div>
                        </div>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://ncmh.org.sa/Publications">إصدارتنا </a>
                    </li>





                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://ncmh.org.sa/Contact-us">إتصل بنا </a>
                    </li>






                </ul>

            </div>
        </div>
    </div>

    <div class="container-fluid breadcrumb-nav">
        <nav class="" style="font-size:15px;padding-right: 70px;--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="https://ncmh.org.sa">المركز الوطني لتعزيز الصحة النفسية</a></li>
                <li class="breadcrumb-item"><a href="#orgRepotrs.php">التقارير</a></li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 50px;">

            <div class="col-md">
                <div class="list-group">
                    <li class="list-group-item disabled" style="padding-right:13px; padding-top:10px;
                    background-color: #32724C; color: white; border-radius: 0px; border-color: black;
                    border-width: 2px;">الخدمات</li>
                    <a href="https://ncmh.org.sa/view/35/2th" class="list-group-item list-group-item-action">الرئيسية</a>
                    <a href="orgRepotrs.php" class="list-group-item list-group-item-action list-group-item-dark">التقارير</a>
                    <a href="orgLetters.php" class="list-group-item list-group-item-action">الخطابات</a>
                    <a href="orgMeetingF.php" class="list-group-item list-group-item-action">الفعاليات</a>
                    <a href="orgP5.php" class="list-group-item list-group-item-action">الأدلة</a>
                    <a href="orgNew.php" class="list-group-item list-group-item-action">مركز العناية بالطالب </a>
                    <a href="homePage.php" class="list-group-item list-group-item-action ">خطة عمل المجموعات</a>
                </div>
            </div>

            <div class="col-md-9" style="margin-bottom: 3rem !important;">
                <li class="list-group-item disabled" style="padding-right:13px; padding-top:10px;
                    background-color: #32724C; color: white; border-radius: 0px; border-color: black;
                    border-width: 2px;">التقارير</li>
                <hr style="border-width: 2px; border-color: black;">
                <style>
                    table td {
                        position: relative;
                    }

                    table td input {
                        position: absolute;
                        display: block;
                        top: 0;
                        left: 0;
                        margin: 0;
                        height: 100%;
                        width: 100%;
                        border: none;
                        padding: 10px;
                        box-sizing: border-box;
                    }

                    th {
                        height: 50px;
                        vertical-align: middle;
                        text-align: center;
                        background-color: 4F9097;
                    }
                </style>

                <script>
                    /*document.addEventListener("DOMContentLoaded", function() {
        // Auto-submit the form after a 3-second delay
        setTimeout(function() {
            document.getElementById("Form1").submit();
        }, 3000);
    });*/
                </script>

                <div id="resultsContainer"></div>

                <div class="table-responsive-md">
                    <form id="Form2" method="post" action="submit.php">
                        <table class="table table-bordered bg-white text-dark" style="font-family: 'Tajawal'; border-color: rgb(210, 210, 210); font-size: 14px; text-align: center; vertical-align: middle; " id="table1">
                            <tbody id="tableBodyReportTable">
                                <tr style="background-color:rgb(236, 234, 234);">
                                    <th colspan="4">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="university" style="padding-top: 15px; padding-bottom: 15px; text-align: center;"> نموذج متابعة إنجازات خطة عمل مجموعات تعزيز الصحة النفسية بجامعة: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <select id="university" name="university" class="form-select form-control" style="font-size: 13px; margin-top: 10px; padding: 8px 15px 8px 15px; text-align: center;">
                                                    <option value="placeholder">اختر جامعة</option>
                                                    <option value="1"> الجامعة الإسلامية بالمدينة المنورة </option>
                                                    <option value="2"> الجامعة السعودية الإلكترونية </option>
                                                    <option value="3"> الجامعة العربية المفتوحة</option>
                                                    <option value="4">جامعة الإمام عبدالرحمن بن فيصل </option>
                                                    <option value="5"> جامعة الإمام محمد بن سعود الإسلامية </option>
                                                    <option value="6"> جامعة الأمير سطام </option>
                                                    <option value="7"> جامعة الأميرة نورة </option>
                                                    <option value="8"> جامعة الباحة</option>
                                                    <option value="9"> جامعة الجوف </option>
                                                    <option value="10"> جامعة الحدود الشمالية </option>
                                                    <option value="11"> جامعة الطائف </option>
                                                    <option value="12"> جامعة القصيم </option>
                                                    <option value="13"> جامعة المجمعة </option>
                                                    <option value="14"> جامعة الملك خالد </option>
                                                    <option value="15"> جامعة الملك سعود </option>
                                                    <option value="16"> جامعة الملك سعود بن عبدالعزيز للعلوم الصحية </option>
                                                    <option value="17"> جامعة الملك عبدالعزيز </option>
                                                    <option value="18"> جامعة الملك فيصل </option>
                                                    <option value="19"> جامعة أم القرى </option>
                                                    <option value="20"> جامعة بيشة </option>
                                                    <option value="21"> جامعة تبوك </option>
                                                    <option value="22"> جامعة جازان </option>
                                                    <option value="23"> جامعة جدة </option>
                                                    <option value="24"> جامعة حائل </option>
                                                    <option value="25"> جامعة حفرالباطن </option>
                                                    <option value="26"> جامعة شقراء </option>
                                                    <option value="27"> جامعة طيبة </option>
                                                    <option value="28"> جامعة فهد بن سلطان </option>
                                                    <option value="29"> جامعة نجران </option>
                                                    <option value="30"> كليات الريان الأهلية </option>

                                                </select>
                                            </div>
                                        </div>
                                    </th>
                                </tr>


                                <tr>
                                    <th scope="row" style="background-color:rgb(236, 234, 234);">المشرف على المبادرة</th>
                                    <td>المركز الوطني لتعزيز الصحة النفسية</td>
                                    <th style="background-color:rgb(236, 234, 234); ">مسؤول المبادرة</th>
                                    <td> د.بسمة حلمي</td>
                                </tr>

                                <tr>
                                    <th scope="row" style="background-color:rgb(236, 234, 234);"><label for="date" style="direction: ltr;">تاريخ التقرير</label></th>
                                    <td><input type="text" id="date" name="date" style="text-align: center; direction: ltr;" placeholder="ادخل التاريخ" onfocus="(this.type= 'date')" onblur="(this.type='text')" required>
                                    </td>

                                    <th style="background-color:rgb(236, 234, 234);">
                                        <label for="stuNum">عدد طلاب الجامعة</label>
                                    </th>
                                    <td>
                                        <input type="number" id="stuNum" name="stuNum" style="text-align: center;" min="1" required>
                                    </td>

                                </tr>
                                <tr>
                                    <th style="background-color:rgb(236, 234, 234);">
                                        <label for="name">رئيس المجموعة</label>
                                    </th>
                                    <td>
                                        <input type="text" id="name" name="name" style="text-align: center;" required>
                                    </td>
                                    <th style="background-color:rgb(236, 234, 234);">
                                        <label for="actNum">مجموع الأنشطة:</label>
                                    </th>
                                    <td>
                                        <input type="number" readonly name="actNum" id="actNum" style="text-align:center;">
                                    </td>
                                    <script>
                                        $(document).ready(function() {
                                            // Function to calculate and update the total activities
                                            function updateTotalActivities() {
                                                var total = 0;
                                                $('input.actNum2').each(function() {
                                                    total += parseInt($(this).val()) || 0; // Add value of each input, or 0 if it's not a number
                                                });
                                                $('#actNum').val(total); // Update the value of the hidden input
                                            }

                                            // Listen for changes on 'actNum2' inputs and update total
                                            $(document).on('change', '.actNum2', function() {
                                                updateTotalActivities(); // Recalculate total whenever an input changes
                                            });

                                            updateTotalActivities(); // Initial calculation in case there are pre-filled values
                                        });
                                    </script>
                                </tr>
                            </tbody>
                        </table>

                        <div class="table-responsive-md"><!-- display: none;  -->
                            <table class="table table-bordered bg-white text-dark" style="font-size: 14px; font-family: 'Tajawal'; text-align: center; border-color: rgb(210, 210, 210); vertical-align: middle; " id="tableContainer">
                                <thead>
                                    <tr style="background-color:rgb(236, 234, 234);">
                                        <th><label>النشاط/المحور</label></th>
                                        <th><label>عدد الانشطة</label></th>
                                        <th><label>مسمى النشاط</label></th>
                                        <th><label style="padding-left: 20px; padding-right: 20px;">التاريخ</label></th>
                                        <th><label>عددالمستفيدين</label></th>
                                        <th><label>الجهات المشاركة</label></th>
                                    </tr>
                                </thead>

                                <tbody id="tableBody">
                                    <tr>
                                        <td>بناء الشخصية المتوازنة للطالب الجامعي
                                            <input type="hidden" name="actType[]" value="1">
                                        </td>
                                        <td>
                                            <input type="number" name="actNum2[]" class="actNum2" data-act-type="1" style="text-align:center; padding-right: 15px;" min="0" required>
                                        </td>
                                        <td>
                                            <textarea name="actName[]" class="actName" style="text-align: center; border: 0px solid;" rows="2" cols="20" required></textarea>
                                        </td>
                                        <td>
                                            <input type="text" name="actDate[]" class="actDate" style="text-align: center; padding: auto; margin:auto;" onfocus="this.type='date'" onblur="this.type='text'" required>
                                        </td>
                                        <td>
                                            <input type="number" name="UsersCount[]" class="UsersCount" style="text-align: center; padding-right: 20px;" min="1" required>
                                        </td>
                                        <td>
                                            <input type="text" name="actParti[]" class="actParti" style="text-align: center;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>تعزيز مفاهيم الصحة النفسية
                                            <input type="hidden" name="actType[]" value="2">
                                        </td>
                                        <td>
                                            <input type="number" name="actNum2[]" class="actNum2" data-act-type="2" style="text-align:center; padding-right: 15px;" min="0" required>
                                        </td>
                                        <td>
                                            <textarea name="actName[]" class="actName" style="text-align: center; border: 0px solid;" rows="2" cols="20" required></textarea>
                                        </td>
                                        <td>
                                            <input type="text" name="actDate[]" class="actDate" style="text-align: center; padding: auto; margin:auto;" onfocus="this.type='date'" onblur="this.type='text'" required>
                                        </td>
                                        <td>
                                            <input type="number" name="UsersCount[]" class="UsersCount" style="text-align: center; padding-right: 20px;" min="1" required>
                                        </td>
                                        <td>
                                            <input type="text" name="actParti[]" class="actParti" style="text-align: center;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>مركز العناية بالطالب
                                            <input type="hidden" name="actType[]" value="3">
                                        </td>
                                        <td>
                                            <input type="number" name="actNum2[]" class="actNum2" data-act-type="3" style="text-align:center; padding-right: 15px;" min="0" required>
                                        </td>
                                        <td>
                                            <textarea name="actName[]" class="actName" style="text-align: center; border: 0px solid;" rows="2" cols="20" required></textarea>
                                        </td>
                                        <td>
                                            <input type="text" name="actDate[]" class="actDate" style="text-align: center; padding: auto; margin:auto;" onfocus="this.type='date'" onblur="this.type='text'" required>
                                        </td>
                                        <td>
                                            <input type="number" name="UsersCount[]" class="UsersCount" style="text-align: center; padding-right: 20px;" min="1" required>
                                        </td>
                                        <td>
                                            <input type="text" name="actParti[]" class="actParti" style="text-align: center;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>مبادرات مجتمعية بمجال الصحة النفسية
                                            <input type="hidden" name="actType[]" value="4">
                                        </td>
                                        <td>
                                            <input type="number" name="actNum2[]" class="actNum2" data-act-type="4" style="text-align:center; padding-right: 15px;" min="0" required>
                                        </td>
                                        <td>
                                            <textarea name="actName[]" class="actName" style="text-align: center; border: 0px solid;" rows="2" cols="20" required></textarea>
                                        </td>
                                        <td>
                                            <input type="text" name="actDate[]" class="actDate" style="text-align: center; padding: auto; margin:auto;" onfocus="this.type='date'" onblur="this.type='text'" required>
                                        </td>
                                        <td>
                                            <input type="number" name="UsersCount[]" class="UsersCount" style="text-align: center; padding-right: 20px;" min="1" required>
                                        </td>
                                        <td>
                                            <input type="text" name="actParti[]" class="actParti" style="text-align: center;">
                                        </td>
                                    </tr>
                                    <td>الاهتمام بعوامل الخطورة داخل البيئة الجامعية
                                        <input type="hidden" name="actType[]" value="6">
                                    </td>
                                    <td>
                                        <input type="number" name="actNum2[]" class="actNum2" data-act-type="6" style="text-align:center; padding-right: 15px;" min="0" required>
                                    </td>
                                    <td>
                                        <textarea name="actName[]" class="actName" style="text-align: center; border: 0px solid;" rows="2" cols="20" required></textarea>
                                    </td>
                                    <td>
                                        <input type="text" name="actDate[]" class="actDate" style="text-align: center; padding: auto; margin:auto;" onfocus="this.type='date'" onblur="this.type='text'" required>
                                    </td>
                                    <td>
                                        <input type="number" name="UsersCount[]" class="UsersCount" style="text-align: center; padding-right: 20px;" min="1" required>
                                    </td>
                                    <td>
                                        <input type="text" name="actParti[]" class="actParti" style="text-align: center;">
                                    </td>
                                    </tr>
                                </tbody>

                            </table>
                            <table class="table table-bordered bg-white text-dark" style="font-size: 14px; font-family: 'Tajawal'; text-align: center; border-color: rgb(210, 210, 210); vertical-align: middle; " id="tableContainer">
                                <thead>
                                    <tr style="background-color:rgb(236, 234, 234);">
                                        <th><label>النشاط/المحور</label></th>
                                        <th><label>عدد الانشطة</label></th>
                                        <th><label>عنوان البحث</label></th>
                                        <th><label style="padding-left: 20px; padding-right: 20px;">التاريخ</label></th>
                                        <th><label style="padding-left: 8px; padding-right: 8px;">رابط البحث</label></th>
                                        <!--<th><label>خانة الزامية</label></th>-->
                                    </tr>
                                </thead>

                                <tbody id="tableBody1">



                                    <tr>
                                        <td>النشاط العلمي والبحثي بمجال الصحة النفسية
                                            <input type="hidden" name="actType[]" value="5">
                                        </td>
                                        <td>
                                            <input type="number" name="actNum2[]" class="actNum2" data-act-type="5" style="text-align:center; padding-right: 15px;" min="0" required>
                                        </td>
                                        <td>
                                            <textarea name="actName[]" class="actName" style="text-align: center; border: 0px solid;" rows="2" cols="20" required></textarea>
                                        </td>
                                        <td>
                                            <input type="text" name="actDate[]" class="actDate" style="text-align: center; padding: auto; " onfocus="this.type='date'" onblur="this.type='text'" required>
                                        </td>
                                        <td>
                                            <input type="text" name="actParti[]" class="actParti" style="text-align: center; padding-right: 20px;" required>
                                        </td>
                                        <!-- <td>
      <input type="text" name="actParti[]" class="actParti" style="text-align: center;">
    </td>-->
                                    </tr>

                                </tbody>

                            </table>


                            <div class="container" style="font-size: 15px; text-align: center; vertical-align: middle;" id="submitContainer">
                                <div class="row justify-content-between">

                                    <div class="col-md-4">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button id="submitButton" class="btn" style="background-color: #58866b; border-radius: 0; font-size: 15px; color: white;">حفظ</button>
                                            </div>
                                            <div id="submitMessage1" style="display:none; margin-top: 13px; color: rgb(184, 27, 27); font-size: 14px; direction:rtl">تم الحفظ بنجاح!</div>
                                            <div id="wrongMessage1" style="display:none; margin-top: 13px; color: rgb(184, 27, 27); font-size: 14px; direction:rtl">أكمل جميع الخانات!</div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>

            </div>
            <script src="Rrport.js"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </div>

    </div>


    <footer>
        <div class="container-fluid" style="background-color: #f3f3f3;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 footer-section">
                        <span class="footer-title">مبادرتنا</span>
                        <ul>
                            <li>

                                <a href="https://ncmh.org.sa/Better-Life" class="footerA">حياة أفضل</a>


                            </li>
                            <li>

                                <a href="https://ncmh.org.sa/view/10/2th" class="footerA">مركز اتصال تعزيز الصحة النفسية</a>


                            </li>
                            <li>

                                <a href="https://ncmh.org.sa/view/11/2th" class="footerA">تطبيق قريبون</a>


                            </li>
                            <li>

                                <a href="https://ncmh.org.sa/view/12/2th" class="footerA">الجمعية الوطنية للخدمات الإجتماعية (أجواد)</a>


                            </li>
                            <li>

                                <a href="https://ncmh.org.sa/view/14/2th" class="footerA">مشروع تعزيز الصحة النفسية من خلال لجان التنمية الاجتماعية</a>


                            </li>

                        </ul>
                    </div>
                    <div class="col-12 col-md-4 footer-section">
                        <span class="footer-title">روابط قد تهمك</span>
                        <ul>
                            <li>
                                <a target="_blank" href="https://www.moh.gov.sa/Pages/Default.aspx" class="footerA">وزارة الصحة </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.sfda.gov.sa/" class="footerA">الهيئة العامة للغذاء و الدواء</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://portal.cbahi.gov.sa/arabic/home" class="footerA">المركز السعودي للإعتماد المنشآت الصحية</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://shc.gov.sa/Arabic/Pages/default.aspx" class="footerA">المجلس الصحي السعودي</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.cchi.gov.sa/Pages/default.aspx" class="footerA">مجلس الضمان الصحي</a>

                            </li>
                            <li>
                                <a target="_blank" href="https://www.moh.gov.sa/Pages/Default.aspx" class="footerA">المنصة الوطنية الموحدة</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://ncmh.org.sa/privacy-policy" class="footerA"> سياسة الاستخدام و الخصوصية</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-12 col-md-4 footer-section">
                        <span class="footer-title">قائمتنا البريدية</span>
                        <p>استقبال آخر الأخبار إبق على تواصل معنا إشترك الآن و قم بإرسال البريد الإلكتروني الخاص بك.</p>
                        <form action="https://ncmh.org.sa/newsletter-register" method="post">
                            <input type="hidden" name="_token" value="qd8Tey2TbugT1LxbwroKvyBPFcSsf4o12K7x1aRy"> <input type="email" required="" class="form-control" name="email" id="" placeholder="أدخل البريد الآلكتروني">
                            <input class="btn btn-success" type="submit" value="اشتراك" style="float:left;margin:10px;">
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-8 py-2">
                    <span>جميع الحقوق محفوظة المركز الوطني لتعزيز الصحة النفسية © 2022</span>
                </div>
                <div class="col-12 col-md-4">
                    <div class="socials-list d-flex justify-content-around">
                        <a href="https://twitter.com/NCMH_SA" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <!--<a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>-->
                        <a href="https://www.instagram.com/ncmh_sa" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCPzEpEk8MfCAE90T4mZEJEQ/videos" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <!--<a href="https://www.snapchat.com/NCMH_SA" target="_blank"><i class="fab fa-snapchat-ghost"></i></a>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script>
        $('#basic-addon1').on('click', function() {
            var str = $("#searchKey").val();
            if (str == '') {
                Swal.fire(
                    'الرجاء كتابة كلمة البحث المفتاحية'
                )
            } else if (str != '') {
                window.location.href = 'https://ncmh.org.sa/Search/' + str;
            }
        });
    </script>
</body>

</html>