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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


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

                                    <!-- <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                                            </li> -->



                                    <!-- 
    
                                        <li class="nav-item dropdown ">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                data-bs-auto-close="outside">الأقسام</a>
                                            <ul class="dropdown-menu shadow dropdown-menu-dark">
                                                <li><a class="dropdown-item" href="#">1</a></li>
                                                <li><a class="dropdown-item" href="#">2</a></li>
                                                <li class="dropstart">
                                                    <a href="#" class="dropdown-item dropdown-toggle"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                        dir="ltr">3</a>
                                                    <ul class="dropdown-menu dropdown-menu-dark shadow">
                                                        <li><a class="dropdown-item" href="">3.1</a></li>
    
                                                        <li class="dropstart">
                                                            <a href="#" dir="ltr" class="dropdown-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"
                                                                data-bs-auto-close="outside">3.2</a>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-dark dropdown-submenu shadow">
                                                                <li><a class="dropdown-item" href="">3.2.1</a></li>
                                                                <li class="dropstart">
                                                                    <a href="#" dir="ltr"
                                                                        class="dropdown-item dropdown-toggle"
                                                                        data-bs-toggle="dropdown">3.2.2</a>
                                                                    <ul
                                                                        class="dropdown-menu dropdown-menu-dark dropdown-submenu shadow">
                                                                        <li><a class="dropdown-item" href="">3.2.2.1</a>
                                                                        </li>
    
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">3.3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">....</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown ">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                data-bs-auto-close="outside">خدماتنا</a>
                                            <ul class="dropdown-menu shadow dropdown-menu-dark">
                                                <li><a class="dropdown-item" href="#">1</a></li>
                                                <li><a class="dropdown-item" href="#">2</a></li>
                                                <li class="dropstart">
                                                    <a href="#" class="dropdown-item dropdown-toggle"
                                                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                        dir="ltr">3</a>
                                                    <ul class="dropdown-menu dropdown-menu-dark shadow">
                                                        <li><a class="dropdown-item" href="">3.1</a></li>
    
                                                        <li class="dropstart">
                                                            <a href="#" dir="ltr" class="dropdown-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"
                                                                data-bs-auto-close="outside">3.2</a>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-dark dropdown-submenu shadow">
                                                                <li><a class="dropdown-item" href="">3.2.1</a></li>
                                                                <li class="dropstart">
                                                                    <a href="#" dir="ltr"
                                                                        class="dropdown-item dropdown-toggle"
                                                                        data-bs-toggle="dropdown">3.2.2</a>
                                                                    <ul
                                                                        class="dropdown-menu dropdown-menu-dark dropdown-submenu shadow">
                                                                        <li><a class="dropdown-item" href="">3.2.2.1</a>
                                                                        </li>
    
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">3.3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">....</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">إصدارات المركز الوطني</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">ألبوم الصور</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">اتصل بنا</a>
                                        </li> -->
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
                    <!--<button type="button" class="btn btn-success header-btn">-->
                    <!--    <i class="fas fa-cog btn-icon"></i>-->
                    <!--    <div>الاعدادات</div>-->
                    <!--</button>-->
                    <!-- <button type="button" class="btn btn-success header-btn">
                            <i class="fas fa-map-marker-alt btn-icon"></i>
                            <div>الخريطة</div>
                        </button> -->
                    <!-- <button type="button" class="btn btn-success header-btn">
                            <i class="fas fa-user-alt btn-icon"></i>
                            <div>الحساب الشخصي</div>
                        </button> -->
                    <!-- <button type="button" class="btn btn-success header-btn">
                            <i class="fas fa-headset btn-icon"></i>
                            <div>اطلب استشارة</div>
                        </button> -->
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
                <li class="breadcrumb-item"><a href="orgLetters.php">الخطابات</a></li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 50px; margin-bottom:10px;">

            <div class="col-md">
                <div class="list-group">
                    <li class="list-group-item disabled" style="padding-right:13px; padding-top:10px;
                    background-color: #32724C; color: white; border-radius: 0px; border-color: black;
                    border-width: 2px;">الخدمات</li>
                    <a href="https://ncmh.org.sa/view/35/2th" class="list-group-item list-group-item-action">الرئيسية</a>
                    <a href="orgRepotrs.php" class="list-group-item list-group-item-action">التقارير</a>
                    <a href="orgLetters.php" class="list-group-item list-group-item-action list-group-item-dark">الخطابات</a>
                    <a href="orgMeetingF.php" class="list-group-item list-group-item-action">الفعاليات</a>
                    <a href="orgP5.php" class="list-group-item list-group-item-action">الأدلة</a>
                    <a href="orgNew.php" class="list-group-item list-group-item-action">مركز العناية بالطالب</a>
                    <a href="homePage.php" class="list-group-item list-group-item-action ">خطة عمل المجموعات</a>
                </div>
            </div>

            <div class="col-md-9" style="margin-bottom: 3rem !important;">
                <li class="list-group-item disabled" style="padding-right:13px; padding-top:10px;
                    background-color: #32724C; color: white; border-radius: 0px; border-color: black;
                    border-width: 2px;">الخطابات</li>
                <hr style="border-width: 2px; border-color: black;">

                <style>
                    .file-upload-btn {
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                    }

                    .file-upload-btn i {
                        font-size: 24px;
                        margin-top: 0px;
                    }

                    .file-upload-input {
                        display: none;
                    }

                    .row-container {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                    }

                    .preview {
                        margin-top: 10px;
                    }

                    .preview object,
                    .preview iframe {
                        width: 100%;
                        height: 678px;
                        margin-top: 20px;
                    }

                    .preview p {
                        margin: 20px;
                    }

                    .form-container {
                        border: 1px solid #ddd;
                        padding: 20px;
                        border-radius: 10px;
                    }
                </style>

                <div class="container form-container" style="margin-bottom: 30px;">
                    <div class="container">
                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-12 col-md-2">
                                <label for="university">اسم الجامعة:</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <form id="universityForm" method="post">
                                    <select id="university" name="university" class="form-select form-control" style="font-size: 13px; text-align: center;" onchange="showFileUpload()">
                                        <option value="0" disabled selected hidden>اختر جامعة</option>
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
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div id="fileUploadRow" style="display: none;">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="fileUpload">تحميل الخطاب: </label>
                                </div>
                                <div class="col-md-6">
                                    <form id="uploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="file" name="fileUpload" id="fileUpload">
                                                <input type="hidden" name="universityId" id="universityId">
                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-10">
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="col-md-11">
                                                        <button type="submit" name="submit" id="submitBtn" class="btn" style="background-color: #58866b; border-radius: 0; font-size: 15px; color: white;">حفظ </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showFileUpload() {
            var selectedUniversityId = document.getElementById('university').value;
            var fileUploadRow = document.getElementById('fileUploadRow');
            if (selectedUniversityId !== '0') {
                fileUploadRow.style.display = 'block';
                document.getElementById('universityId').value = selectedUniversityId;
            } else {
                fileUploadRow.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Check if the URL contains an error query parameter
            const urlParams = new URLSearchParams(window.location.search);
            const errorParam = urlParams.get('error');
            const successParam = urlParams.get('success');

            // If success parameter is present, show the notification
            if (successParam === '1') {
                alert('تم الحفظ بنجاح!');
            }

            // If error parameter is present, show the notification
            if (errorParam === '1') {
                alert('لم يتم اختيار الملف');
            }

            // Event listener for the submit button
            document.getElementById('submit').addEventListener('click', submitForm);
        });

        async function submitForm(event) {
            event.preventDefault(); // Prevent the default form submission
            const formData = new FormData(document.getElementById('uploadForm'));

            const response = await fetch('upload.php', {
                method: 'POST',
                body: formData,
            });
        }
    </script>

    <!--

 function showFileUpload() {
        var selectedUniversityId = document.getElementById('university').value;
        var fileUploadRow = document.getElementById('fileUploadRow');
        if (selectedUniversityId !== '0') {
            fileUploadRow.style.display = 'block';
            document.getElementById('universityId').value = selectedUniversityId;
        } else {
            fileUploadRow.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('universityForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission
            submitForm(e); // Pass the event object to submitForm function
        });

        const formElements = document.getElementById('universityForm').elements;
        for (let element of formElements) {
            element.addEventListener('change', clearMessages1);
        }
    });

    async function submitForm(event) {
        try {
            const formData = new FormData(document.getElementById('universityForm'));

            const response = await fetch('upload.php', {
                method: 'POST',
                body: formData,
            });

            // Check if the response is successful
            if (!response.ok) {
                throw new Error('Network response was not ok.');
            }

            // Parse JSON response
            const data = await response.json();

            // Check status in the response
            if (data.status === 'success') {
                document.getElementById('submitMessage1').style.display = 'block';
                var form = document.getElementById('universityForm');
                for (var i = 0; i < form.elements.length; i++) {
                        form.elements[i].disabled = true;
                    }
            } else {
                // If not successful, show error message
                document.getElementById('wrongMessage1').style.display = 'block';
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }

    function clearMessages1() {
        document.getElementById('submitMessage1').style.display = 'none';
        document.getElementById('wrongMessage1').style.display = 'none';
    }
 -->



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