<!doctype html>
<html lang="ar" dir="rtl">

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


        .swal2-styled.swal2-confirm {
            background-color: #14442d;
        }

        .swal2-container.swal2-center>.swal2-popup {
            background-image: url('https://ncmh.org.sa/ncmhTemplate/bgImages/background.svg');
        }

        .infographic-container {
            height: 450px !important;
        }

        .topics-list {
            height: 392px;
        }

        .topic-card {
            padding: 10px;
            border-radius: 10px;
            box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
            transition: box-shadow 0.3s ease-in-out;
            background: white;
        }

        .header a {
            color: #0f3620;
            text-decoration: none;
            font-size: 20px;
            transition: width 2s, height 4s;
        }

        .header a:hover {
            color: #1D9150;
            font-size: 20px;
            opacity: 0.7;
            text-decoration: none;
        }

        .carousel-item {
            max-height: 500px !important;
            height: auto;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body style="background-image:url('https://ncmh.org.sa/ncmhTemplate/bgImages/background.svg') ;font-family: 'Tajawal', sans-serif;">
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
                            <a href="https://ncmh.org.sa/login" class="btn btn-success  align-items-center "><i class="fas fa-users nav-btn-icon"></i> تسجيل الدخول
                            </a>
                            <!-- <span class="vl"></span>
                            <select class="form-select lang-select mx-2" aria-label="Default select example"
                                style="display: inline;">
                                <option selected value="ar">العربية</option>
                                <option value="en">English</option>
                            </select> -->
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />


    <div class="container-fluid breadcrumb-nav">
        <nav class="" style="font-size:15px;padding-right: 70px;--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="https://ncmh.org.sa">المركز الوطني لتعزيز الصحة النفسية</a></li>
                <li class="breadcrumb-item"><a href="orgMeetingF.php">الفعاليات</a></li>
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
                    <a href="orgMeetingF.php" class="list-group-item list-group-item-action list-group-item-dark">الفعاليات</a>
                    <a href="orgP5.php" class="list-group-item list-group-item-action">الأدلة</a>
                    <a href="orgNew.php" class="list-group-item list-group-item-action">مركز العناية بالطالب </a>
                    <a href="homePage.php" class="list-group-item list-group-item-action ">خطة عمل المجموعات</a>
                </div>
            </div>

            <div class="col-md-9" style="margin-bottom: 3rem !important;">
                <li class="list-group-item disabled" style="padding-right:13px; padding-top:10px;
                    background-color: #32724C; color: white; border-radius: 0px; border-color: black;
                    border-width: 2px;">الفعاليات</li>
                <hr style="border-width: 2px; border-color: black;">
                <div class="container1" style="padding-top: 10px;">
                    <div id='calendar'></div>
                </div>


                <div id='calendar'></div>
                <!-- Event Details Modal -->
                <div id="eventDetailsModal" style="display: none;">
                    <br>
                    <br>
                    <h3>تفاصيل الحدث</h3>
                    <form id="eventDetailsForm" method="post" action="insert_event.php">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-12 col-md-2">
                                <label for="university">اسم الجامعة:</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <select id="university" name="university" class="form-select form-control" style="font-size: 13px; text-align: center;" required>
                                    <option value="" disabled selected>جميع الجامعات</option>
                                    <option value="الجامعة الإسلامية بالمدينة المنورة">الجامعة الإسلامية بالمدينة المنورة</option>
                                    <option value="الجامعة السعودية الإلكترونية">الجامعة السعودية الإلكترونية</option>
                                    <option value="الجامعة العربية المفتوحة">الجامعة العربية المفتوحة</option>
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
                        <label for="eventTitle">الحدث:</label>
                        <input type="text" id="eventTitle" name="eventTitle" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" required><br><br>
                        <label for="eventStartDate">بداية اليوم:</label>
                        <input type="date" id="eventStartDate" name="eventStartDate" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" required>
                        <label for="eventStartTime">بداية الوقت:</label>
                        <input type="time" id="eventStartTime" name="eventStartTime" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" required><br><br>
                        <label for="eventEndDate">نهاية اليوم:</label>
                        <input type="date" id="eventEndDate" name="eventEndDate" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" required>
                        <label for="eventEndTime">نهاية الوقت:</label>
                        <input type="time" id="eventEndTime" name="eventEndTime" style="text-align: center; padding-right: 20px; width: 4cm; 
                            margin-right: 10px; border-radius: 5px; border: 1px solid #848484;" required><br><br>
                        <button type="submit" class="btn" name="send" style="background-color: #58866b; border-radius: 0; font-size: 15px; color: white;">حفظ</button>
                    </form>
                </div>
                <script>
                    $(document).ready(function() {
                        var SITEURL = "https://ncmh.org.sa";

                        var calendar = $('#calendar').fullCalendar({
                            editable: true,
                            displayEventTime: true,
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month,agendaWeek,agendaDay'
                            },
                            events: 'fetch_events.php', // Path to PHP script that fetches events from the database
                            selectable: true,
                            selectHelper: true,
                            select: function(start, end, allDay) {
                                openEventDetailsModal(start, end);
                            },
                            eventRender: function(event, element) {
                                // Check if the event object has the required properties
                                if (event.title && event.university) {
                                    // Creating a new line for readability in the event's display
                                    var newDescription =
                                        $('<div/>')
                                        .text('الجامعة: ' + event.university)
                                        .append('<br/>')
                                        .append('البدء: ' + moment(event.start).format('HH:mm'))
                                        .append('<br/>')
                                        .append('الانتهاء: ' + moment(event.end).format('HH:mm'));

                                    // Append the new description to the element's existing content
                                    element.find('.fc-content').append(newDescription);
                                }
                            }
                        });

                        $('#eventDetailsForm').submit(function(e) {
                            e.preventDefault();
                            var university = $('#university').val();
                            var eventTitle = $('#eventTitle').val();
                            var eventStartDate = $('#eventStartDate').val();
                            var eventStartTime = $('#eventStartTime').val();
                            var eventEndDate = $('#eventEndDate').val();
                            var eventEndTime = $('#eventEndTime').val();

                            closeEventDetailsModal();

                            var newEvent = {
                                title: eventTitle,
                                start: eventStartDate + ' ' + eventStartTime,
                                end: eventEndDate + ' ' + eventEndTime
                            };

                            calendar.fullCalendar('renderEvent', newEvent, true);

                            $.ajax({
                                url: 'insert_event.php',
                                data: {
                                    university: university,
                                    eventTitle: eventTitle,
                                    eventStartDate: eventStartDate,
                                    eventStartTime: eventStartTime,
                                    eventEndDate: eventEndDate,
                                    eventEndTime: eventEndTime
                                },
                                type: "POST",
                                success: function(response) {
                                    displayMessage("تمت إضافة الحدث بنجاح");
                                },
                                error: function(xhr, status, error) {
                                    console.error(xhr.responseText);
                                }
                            });

                            $('#university').val('');
                            $('#eventTitle').val('');
                            $('#eventStartDate').val('');
                            $('#eventStartTime').val('');
                            $('#eventEndDate').val('');
                            $('#eventEndTime').val('');
                        });


                        function openEventDetailsModal(start, end) {
                            $('#eventStartDate').val(start.format('YYYY-MM-DD'));
                            $('#eventEndDate').val(end.format('YYYY-MM-DD'));
                            $('#eventDetailsModal').show();
                        }

                        function closeEventDetailsModal() {
                            $('#eventDetailsModal').hide();
                        }
                    });
                </script>




            </div>

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
                            <input type="hidden" name="_token" value="xz4LmgsYRlvuaiUJkrLMC9MT1WyZ9nKOS9KBNBz6"> <input type="email" required class="form-control" name="email" id="" placeholder="أدخل البريد الآلكتروني">
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
                        <a href="https://twitter.com/NCMH_SA" target="_blank"><i class="fab fa-twitter"></i></a>
                        <!--<a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>-->
                        <a href="https://www.instagram.com/ncmh_sa" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCPzEpEk8MfCAE90T4mZEJEQ/videos" target="_blank"><i class="fab fa-youtube"></i></a>
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