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
                <li class="breadcrumb-item"><a href="orgNew.php">مركز العناية بالطالب </a></li>
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
                    <a href="orgRepotrs.php" class="list-group-item list-group-item-action">التقارير</a>
                    <a href="orgLetters.php" class="list-group-item list-group-item-action">الخطابات</a>
                    <a href="orgMeetingF.php" class="list-group-item list-group-item-action">الفعاليات</a>
                    <a href="orgP5.php" class="list-group-item list-group-item-action">الأدلة</a>
                    <a href="orgNew.php" class="list-group-item list-group-item-action list-group-item-dark">مركز العناية بالطالب</a>
                    <a href="homePage.php" class="list-group-item list-group-item-action ">خطة عمل المجموعات</a>
                </div>
            </div>

            <style>
                .form-container {
                    border: 1px solid #ddd;
                    padding: 20px;
                    border-radius: 10px;
                }

                input[type=radio] {
                    accent-color: #32724C;
                }

                input[type=checkbox] {
                    accent-color: #32724C;
                }
            </style>

            <div class="col-md-9" style="margin-bottom: 3rem !important;">
                <li class="list-group-item disabled" style="padding-right:13px; padding-top:10px;
                    background-color: #32724C; color: white; border-radius: 0px; border-color: black;
                    border-width: 2px;">مركز العناية بالطالب </li>
                <hr style="border-width: 2px; border-color: black;">

                <div class="container  form-container" method="post">
                    <form method="post" id="Form1" action="Newsubmit.php"> <!--onsubmit="event.preventDefault(); submitForm();"-->

                        <div class="row">
                            <div class="col-12 col-md-2">
                                <label for="university">اسم الجامعة:</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <select id="university" name="university" class="form-select form-control" style="font-size: 13px; text-align: center;">
                                    <option value="" disabled selected>جميع الجامعات</option>
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
                        <br>

                        <label style="margin-left: 10px; "> تتم العناية بالطالب داخل: </label>
                        <input type="radio" id="center" name="saType" value="1">
                        <label for="center" style="margin-left: 10px;">مركز</label>
                        <input type="radio" id="adminis" name="saType" value="2">
                        <label for="adminis" style="margin-left: 10px;">إدارة</label>
                        <input type="radio" id="unit" name="saType" value="3">
                        <label for="unit" style="margin-left: 10px;">وحدة</label>
                        <input type="radio" id="oth" name="saType" value="4">
                        <label for="oth" style="margin-left: 10px;">أخرى</label><br><br>

                        <label for="therpistNumber"> عدد الأخصائيين النفسيين: </label>
                        <input type="number" id="therpistNumber" name="therpistNumber" style="text-align: center; padding-right: 20px; width: 4cm; 
                             margin-right: 26px; border-radius: 5px; border: 1px solid #848484;" min="0">

                        <br><br>


                        <label for="socialNumber"> عدد الأخصائيين الاجتماعيين: </label>
                        <input type="number" id="socialNumber" name="socialNumber" style="text-align: center; padding-right: 20px; width: 4cm; 
                             margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-11">
                                        <button id="submitButton" class="btn" style="background-color: #58866b; border-radius: 0; font-size: 15px; color: white;">حفظ </button>
                                        <!-- Display a message when the form is submitted -->
                                        <div id="submitMessage1" style="display: none; margin-top: 13px; color: rgb(184, 27, 27); font-size: 14px; direction:rtl">تم الحفظ بنجاح!</div>
                                        <div id="wrongMessage1" style="display: none; margin-top: 13px; color: rgb(184, 27, 27); font-size: 14px; direction:rtl">أكمل جميع الحقول!</div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>


                </div>

                <div class="container  form-container" method="post" style="margin-top: 20px;">
                    <form method="post" id="Form2" action="monthly.php">
                        <h5>التقرير الشهري</h5><br>

                        <div class="row">
                            <div class="col-12 col-md-2">
                                <label for="university2">اسم الجامعة:</label>
                            </div>
                            <div class="col-12 col-md-4">
                                <select id="university2" name="university2" class="form-select form-control" style="font-size: 13px; text-align: center;">
                                    <option value="" disabled selected>جميع الجامعات</option>
                                    <option value="الجامعة الإسلامية بالمدينة المنورة">الجامعة الإسلامية بالمدينة المنورة</option>
                                    <option value="الجامعة السعودية الإلكترونية">الجامعة السعودية الإلكترونية</option>
                                    <option value="جامعة الإمام عبدالرحمن بن فيصل">جامعة الإمام عبدالرحمن بن فيصل</option>
                                    <option value="جامعة الإمام محمد بن سعود الإسلامية">جامعة الإمام محمد بن سعود الإسلامية</option>
                                    <option value="جامعة الأمير سطام بن عبدالعزيز">جامعة الأمير سطام بن عبدالعزيز</option>
                                    <option value="جامعة الأميرة نورة بنت عبدالرحمن">جامعة الأميرة نورة بنت عبدالرحمن</option>
                                    <option value="جامعة الباحة">جامعة الباحة</option>
                                    <option value="جامعة الجوف">جامعة الجوف</option>
                                    <option value="جامعة الحدود الشمالية">جامعة الحدود الشمالية</option>
                                    <option value="جامعة الطائف">جامعة الطائف</option>
                                    <option value="جامعة القصيم">جامعة القصيم</option>
                                    <option value="جامعة المجمعة">جامعة المجمعة</option>
                                    <option value="جامعة الملك خالد">جامعة الملك خالد</option>
                                    <option value="جامعة الملك سعود">جامعة الملك سعود</option>
                                    <option value="جامعة الملك سعود بن عبدالعزيز للعلوم الصحية">جامعة الملك سعود بن عبدالعزيز للعلوم الصحية</option>
                                    <option value="جامعة الملك عبدالعزيز">جامعة الملك عبدالعزيز</option>
                                    <option value="جامعة الملك فيصل">جامعة الملك فيصل</option>
                                    <option value="جامعة أم القرى">جامعة أم القرى</option>
                                    <option value="جامعة بيشة">جامعة بيشة</option>
                                    <option value="جامعة تبوك">جامعة تبوك</option>
                                    <option value="جامعة جازان">جامعة جازان</option>
                                    <option value="جامعة جدة">جامعة جدة</option>
                                    <option value="جامعة حائل">جامعة حائل</option>
                                    <option value="جامعة حفر الباطن">جامعة حفر الباطن</option>
                                    <option value="جامعة شقراء">جامعة شقراء</option>
                                    <option value="جامعة طيبة">جامعة طيبة</option>
                                    <option value="جامعة فهد بن سلطان">جامعة فهد بن سلطان</option>
                                    <option value="جامعة نجران">جامعة نجران</option>
                                    <option value="كليات الريان الأهلية">كليات الريان الأهلية</option>

                                </select>

                            </div>
                        </div>

                        <div class="row" style="margin-top:20px">
                            <div class="col-12 col-md-2">
                                <label for="month"> الشهر:</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <select id="month" name="month" class="form-select form-control" style="font-size: 13px; text-align: center;">
                                    <option value="placeholder" disabled selected hidden>اختر الشهر</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>

                            </div>
                        </div>
                        <br>

                        <label style="margin-left: 10px; ">الأنشطة المقدمة:</label>
                        <input type="checkbox" name="actType[]" value="1" id="session"> استشارات
                        <input type="checkbox" name="actType[]" value="2" id="cor"> دورات
                        <input type="checkbox" name="actType[]" value="3" id="lect"> محاضرات
                        <input type="checkbox" name="actType[]" value="4" id="other"> أخرى

                        <div id="sessionNum" style="display: none;">
                            <hr>
                            <label style="margin-left: 10px;">أنواع الاستشارات:</label>
                            <input type="radio" id="call" name="consultationType" value="هاتفية"> هاتفية
                            <input type="radio" id="inside" name="consultationType" value="حضورية"> حضورية
                            <input type="radio" id="both" name="consultationType" value="هاتفية وحضورية"> كلاهما
                            <br><br>
                            <div id="regular" style="display: none;">
                                <label for="consultationNumbers"> عدد الاستشارات: </label>
                                <input type="number" id="consultationNumbers" name="consultationNumbers" style="text-align: center; padding-right: 20px; width: 4cm; margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">
                                <br><br>

                                <label for="consultationUsers"> عدد المستفيدين: </label>
                                <input type="number" id="consultationUsers" name="consultationUsers" style="text-align: center; padding-right: 20px; width: 4cm; margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">
                            </div>
                            <div id="bothCon" style="display: none;">
                                <label for="phoneConsultation"> عدد الاستشارات الهاتفية: </label>
                                <input type="number" id="phoneConsultation" name="phoneConsultation" style="text-align: center; padding-right: 20px; width: 4cm; margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">
                                <br><br>

                                <label for="inPersonConsultation"> عدد الاستشارات الحضورية: </label>
                                <input type="number" id="inPersonConsultation" name="inPersonConsultation" style="text-align: center; padding-right: 20px; width: 4cm; margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">
                                <br><br>

                                <label for="consultationUsers"> عدد المستفيدين: </label>
                                <input type="number" id="consultationUsers" name="consultationUsers" style="text-align: center; padding-right: 20px; width: 4cm; margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">
                            </div>
                        </div>


                        <div id="courseNum" style="display: none;">
                            <hr>
                            <label for="courseNumbers"> عدد الدورات: </label>
                            <input type="number" id="courseNumbers" name="courseNumbers" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">
                            <br>

                            <label for="courseNames" style="text-align: center;">أسماء الدورات:</label>
                            <textarea id="courseNames" name="courseNames" style="text-align: center; padding-right: 20px; width: 4.5cm; height: 0.8cm;
                            margin-right: 10px; margin-top: 20px; border-radius: 5px; border: 1px solid #848484;"></textarea>
                            <br><br>

                            <label for="courseUsers"> عدد المستفيدين: </label>
                            <input type="number" id="courseUsers" name="courseUsers" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">

                        </div>




                        <div id="lecNum" style="display: none;">
                            <hr>
                            <label for="lectureNum"> عدد المحاضرات: </label>
                            <input type="number" id="lectureNum" name="lectureNum" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">

                            <br>

                            <label for="lectureLabels" style="text-align: center; ">عناوين المحاضرات:</label>
                            <textarea id="lectureLabels" name="lectureLabels" style="text-align: center; padding-right: 20px; width: 4.5cm; height: 0.8cm;
                            margin-right: 10px; margin-top: 20px; border-radius: 5px; border: 1px solid #848484;"></textarea>

                            <br><br>

                            <label for="lectureUsers"> عدد المستفيدين: </label>
                            <input type="number" id="lectureUsers" name="lectureUsers" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">
                        </div>


                        <div id="otherr" style="display: none;">
                            <hr>
                            <label for="otherAct" style="text-align: center;">اذكر الأنشطة:</label>
                            <textarea id="otherAct" name="otherAct" style="text-align: center; padding-right: 20px; width: 4.5cm; height: 0.8cm;
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;"></textarea>

                            <br><br>

                            <label for="otherUsers"> عدد المستفيدين: </label>
                            <input type="number" id="otherUsers" name="otherUsers" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" min="0">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">

                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-11" id="submit2" style="display: none; text-align: right;">
                                        <button id="submitButton2" class="btn" style="background-color: #58866b; border-radius: 0; font-size: 15px; color: white;">إرسال</button>
                                        <div id="submitMessage2" style="display: none; margin-top: 13px; color: rgb(184, 27, 27); font-size: 14px;">تم الحفظ بنجاح!</div>
                                        <div id="wrongMessage2" style="display: none; margin-top: 13px; color: rgb(184, 27, 27); font-size: 14px; direction:rtl">أكمل جميع الحقول!</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>

    <script src="Studentcare.js"></script>


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