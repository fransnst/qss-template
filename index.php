<!doctype html>
<html lang="en">

<head>
    <title>qss -home </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="assets/images/icon-color.svg" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/animate-css/vivify.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/site.min.css">

</head>

<body class="theme-cyan font-montserrat">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <nav class="navbar top-navbar">
            <div class="container-fluid">

                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="index.html"><img src="assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"></a>
                        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="p_social"><a href="page-social.html" class="social icon-menu" title="News">Home</a></li>
                        <li class="p_news"><a href="page-news.html" class="news icon-menu" title="News">Profile</a></li>
                        <li class="p_blog"><a href="page-blog.html" class="blog icon-menu" title="Blog">Settings</a></li>
                        <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="Mega Menu">About</a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot bg-azura">4</span>
                            </a>
                            <ul class="dropdown-menu feeds_widget vivify fadeIn">
                                <li class="header blue">You have 4 New Notifications</li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left bg-red"><i class="fa fa-check"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">9:10 AM</small></h4>
                                            <small>WE have fix all Design bug with Responsive</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-info">New User <small class="float-right text-muted">9:15 AM</small></h4>
                                            <small>I feel great! Thanks team</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">Server Warning <small class="float-right text-muted">9:17 AM</small></h4>
                                            <small>Your connection is not private</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-success">2 New Feedback <small class="float-right text-muted">9:22 AM</small></h4>
                                            <small>It will give a smart finishing to your site</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </nav>
        <div id="megamenu" class="megamenu particles_js">
            <a href="javascript:void(0);" class="megamenu_toggle btn btn-danger"><i class="icon-close"></i></a>
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mega-card">
                            <h6 class="title">General Settings</h6>
                            <ul class="setting-list list-unstyled mb-0">
                                <li>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                    <span>Anyone follow me</span>
                                </li>
                                <li>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <span>Email Redirect</span>
                                </li>
                                <li>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <span>Notifications</span>
                                </li>
                                <li>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                    <span>Auto Updates</span>
                                </li>
                                <li>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    <span>Offline</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mega-card">
                            <h6 class="title">Quick Link</h6>
                            <ul class="guick_link">
                                <li><a href="javascript:void(0);" title="">Home</a></li>
                                <li><a href="javascript:void(0);" title="">About Us</a></li>
                                <li><a href="javascript:void(0);" title="">FAQs</a></li>
                                <li><a href="javascript:void(0);" title="">Privacy Policy</a></li>
                                <li><a href="javascript:void(0);" title="">Sitemap</a></li>
                                <li><a href="javascript:void(0);" title="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mega-card">
                            <h6 class="title">Contact Us</h6>
                            <form>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="input-group mb-2">
                                    <textarea type="text" class="form-control" placeholder="Message" rows="2"></textarea>
                                </div>
                                <button type="button" class="btn btn-primary btn-round">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="mega-card">
                            <h6 class="title">Image Gallery</h6>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="assets/images/image-gallery/7.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/images/image-gallery/8.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="assets/images/image-gallery/9.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="card mt-4">
                        <div class="header">
                            <h2>FAQs</h2>
                            <ul class="header-dropdown dropdown">
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="accordion" id="accordion-faqs">
                                <div>
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-faqs" aria-expanded="true" aria-controls="collapseOne">
                                                Q: How to use SCSS variables to build custom color <span class="float-right badge  badge-primary">23</span>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne-faqs" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faqs">
                                        <div class="body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo-faqs" aria-expanded="false" aria-controls="collapseTwo">
                                                Q: Four questions to ask about your DevOps strategy <span class="float-right badge  badge-success">8</span>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo-faqs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faqs">
                                        <div class="body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree-faqs" aria-expanded="false" aria-controls="collapseThree">
                                                Q: A comparison of microservices and functional programming concepts <span class="float-right badge  badge-danger">13</span>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree-faqs" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faqs">
                                        <div class="body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js"></div>
        </div>

        <div id="left-sidebar" class="sidebar">
            <div class="navbar-brand">
                <a href="index.html"><img src="assets/images/icon-color.svg" alt="QSS Logo" class="img-fluid logo"><span>support system</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="assets/images/user.png" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <h6>Frans</h6>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li><a href="index2.html"><i class="icon-speedometer"></i><span>Home</span></a></li>
                        <li class="header">Work</li>
                        <li>
                            <a href="#" class="has-arrow"><i class="icon-book-open"></i><span>Tickets</span></a>
                            <ul>
                                <li><a href="app-contact.html">All Tickets</a></li>
                                <li><a href="app-contact.html">Ticket this Month</a></li>
                                <li><a href="app-contact2.html">My Tickets</a></li>
                                <li><a href="app-contact2.html">Team Tickets</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><i class="icon-book-open"></i><span>Tasks</span></a>
                            <ul>
                                <li><a href="app-contact2.html">Task to Respond</a></li>
                                <li><a href="app-contact.html">Task Today</a></li>
                                <li><a href="app-contact.html">Daily Task</a></li>
                            </ul>
                        </li>
                        <li class="header">General</li>
                        <li><a href="index2.html"><i class="icon-speedometer"></i><span>Broadcast</span></a></li>
                        <li><a href="index2.html"><i class="icon-speedometer"></i><span>Calendar</span></a></li>
                        <li><a href="index3.html"><i class="icon-diamond"></i><span>Crypto Coin</span></a></li>
                        <li class="header">Utilities</li>
                        <li>
                            <a href="#" class="has-arrow"><i class="icon-book-open"></i><span>People</span></a>
                            <ul>
                                <li><a href="app-contact2.html">Manage People</a></li>
                                <li><a href="app-contact.html">Manage User</a></li>
                                <li><a href="app-contact.html">User Role Access</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><i class="icon-book-open"></i><span>Menu</span></a>
                            <ul>
                                <li><a href="app-contact2.html">Menu Role Access</a></li>
                                <li><a href="app-contact.html">Menu Maintenance</a></li>
                                <li><a href="app-contact.html">Menu by User</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><i class="icon-book-open"></i><span>Settings</span></a>
                            <ul>
                                <li><a href="app-contact2.html">Edit Profile</a></li>
                                <li><a href="app-contact.html">Master Parameter</a></li>
                                <li><a href="app-contact.html">Change Password</a></li>
                                <li><a href="app-contact.html">Menu Maintenance</a></li>
                                <li><a href="app-contact.html">Menu by User</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12">
                            <h1>Dashboard</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">QSS</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php
                // include('stater.php');
                include('dashboard.php');
                ?>
            </div>
        </div>

    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>