<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Dashboard | Intelligent Transport System Indonesia 2019</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url();?>assetsadmin/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url();?>assetsadmin/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url();?>assetsadmin/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

		<!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/select2/select2-bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assetsadmin/js/plugins/dropzonejs/min/dropzone.min.css">
		
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="<?= base_url();?>assetsadmin/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?= base_url();?>assetsadmin/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
		
		<!-- Custom -->
		 <link rel="stylesheet" id="css-main" href="<?= base_url();?>assetsadmin/css/style.css">
		 
		 
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                            <!-- Close Side Overlay -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Side Overlay -->

                            <!-- User Info -->
                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="<?= base_url();?>assetsadmin/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                            </div>
                            <!-- END User Info -->
                        </div>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="content-side">
                        <!-- Search -->
                        <div class="block pull-t pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <form action="be_pages_generic_search.html" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-secondary px-10">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Search -->

                        <!-- Mini Stats -->
                        <div class="block pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                                        <div class="font-size-h4">460</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                        <div class="font-size-h4">728</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                        <div class="font-size-h4">$7,860</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Mini Stats -->

                        <!-- Friends -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-users push">
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="<?= base_url();?>assetsadmin/img/avatars/avatar1.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Lori Moore
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="<?= base_url();?>assetsadmin/img/avatars/avatar10.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Jack Estrada
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="<?= base_url();?>assetsadmin/img/avatars/avatar3.jpg" alt="">
                                            <i class="fa fa-circle text-warning"></i> Betty Kelley
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="<?= base_url();?>assetsadmin/img/avatars/avatar16.jpg" alt="">
                                            <i class="fa fa-circle text-danger"></i> Jose Mills
                                            <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Friends -->

                        <!-- Activity -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="list list-activity">
                                    <li>
                                        <i class="si si-wallet text-success"></i>
                                        <div class="font-w600">+$29 New sale</div>
                                        <div>
                                            <a href="javascript:void(0)">Admin Template</a>
                                        </div>
                                        <div class="font-size-xs text-muted">5 min ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-close text-danger"></i>
                                        <div class="font-w600">Project removed</div>
                                        <div>
                                            <a href="javascript:void(0)">Best Icon Set</a>
                                        </div>
                                        <div class="font-size-xs text-muted">26 min ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-pencil text-info"></i>
                                        <div class="font-w600">You edited the file</div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-file-text-o"></i> Docs.doc
                                            </a>
                                        </div>
                                        <div class="font-size-xs text-muted">3 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-plus text-success"></i>
                                        <div class="font-w600">New user</div>
                                        <div>
                                            <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                        </div>
                                        <div class="font-size-xs text-muted">5 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-wrench text-warning"></i>
                                        <div class="font-w600">App v5.5 is available</div>
                                        <div>
                                            <a href="javascript:void(0)">Update now</a>
                                        </div>
                                        <div class="font-size-xs text-muted">8 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-user-follow text-pulse"></i>
                                        <div class="font-w600">+1 Friend Request</div>
                                        <div>
                                            <a href="javascript:void(0)">Accept</a>
                                        </div>
                                        <div class="font-size-xs text-muted">1 day ago</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Activity -->

                        <!-- Profile -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-name">Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-email">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password">New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                <i class="fa fa-refresh mr-5"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Profile -->

                        <!-- Settings -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Online Status</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Public Profile</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Notifications</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Auto updates</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">API Access</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">API Requests</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Settings -->
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index.html">
                                        <img src="<?= base_url();?>assetsadmin/img/logo-its-white.png" height="60">
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li>
                                    <a href="dashboard-real.html"><i class="fa fa-tachometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
								<li>
                                    <a href="description.html"><i class="fa fa-home"></i><span class="sidebar-mini-hide">Description</span></a>
                                </li>
								<li class="open">
                                    <a class="nav-submenu active" data-toggle="nav-submenu" href="#"><i class="fa fa-calendar-check-o"></i><span class="sidebar-mini-hide">Schedule Management</span></a>
                                    <ul>
                                        <li>
                                            <a href="home-schedule.html">Home Schedule</a>
                                        </li>
                                        <li>
                                            <a href="detail-schedule.html">Detail Schedule</a>
                                        </li>
                                    </ul>
                                </li>
								<li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-file-text"></i><span class="sidebar-mini-hide">Form Management</span></a>
                                    <ul>
                                        <li>
                                            <a href="register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="payment.html">Payment</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header" class="header-color">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <a class="img-link mr-5" href="#"> <!-- ganti foto profil -->
                                <img class="img-avatar img-avatar32" src="<?= base_url();?>assetsadmin/img/avatars/avatar15.jpg" alt="">
                            </a>
							<button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Widyawati Wijaya
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="profile.html">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->
						
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                    <i class="si si-note mr-5"></i> Invoices
                                </a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </span>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
					<h2 class="content-heading">Form Edit Page</h2>
					<div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
						<!-- Row #1 -->
                        <div class="col-12 col-xl-">
                            <div class="block block-rounded block-bordered block-link-shadow">
                                <div class="block-content block-content clearfix">
									<form action="#" method="post" enctype="multipart/form-data" onsubmit="return false;">
												
												<div class="form-group row">
													<label class="col-12" for="example-text-input">	ID Page</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="example-text-input" name="example-text-input" value="D12345" disabled>
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-12" for="example-text-input">Title</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="example-text-input" name="example-text-input" value="ITSWC 2019 POST CONFERENCE">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-12" for="example-text-input">Date</label>
													<div class="col-md-9">
														<input type="text" class="js-datepicker form-control" id="example-datepicker3" name="example-datepicker3" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="26-10-2019">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-12" for="example-text-input">Time</label>
													<div class="col-md-4">
														<input type="time" class="form-control" id="example-text-input" name="example-text-input" value="07:25">
													</div>
													<span>AM</span><span>PM</span>
													<div class="col-md-5">
														<input type="time" class="form-control" id="example-text-input" name="example-text-input" value="20:05">
													</div>
													<span>PM</span>
												</div>
												
												<div class="form-group row">
													<div class="col-md-9">
														<div class="block">
															<div class="block-header block-header-default">
																<h3 class="block-title">Content</h3>
																<div class="block-options">
																	<button type="button" class="btn-block-option">
																		<i class="si si-wrench"></i>
																	</button>
																</div>
															</div>
															<div class="block-content">
																<form action="be_forms_editors.html" method="post" onsubmit="return false;">
																	<div class="form-group row">
																		<div class="col-12">
																			<!-- CKEditor Container -->
																			<textarea id="js-ckeditor" name="ckeditor">
																				<ul>
																					<li>Air Transport SIN - CGK.</li>
																					<li>Experience Jakarta Public Transport.></li>
																					<li>Meet Official Government of Jakarta.</li>
																					<li>Air Transport CGK - DPS.</li>
																				</ul>
																			</textarea>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-12" for="example-text-input">Image (Recommended: 800 x 800 px)</label>
													<div class="col-9">
														<img class="img-avatar img-avatar m-5 border-img  no-radius" src="../assetsadmin/img/d1-1.png" alt="" height="100">
														<a href="#" class="text-danger m-20 font-size-h4"><i class="fa fa-trash"></i> </a>
														<input type="file" id="example-file-input" name="example-file-input">
													</div>
													<div class="col-9">
														<img class="img-avatar img-avatar m-5 border-img  no-radius" src="../assetsadmin/img/d1-3.png" alt="" height="100">
														<a href="#" class="text-danger m-20 font-size-h4"><i class="fa fa-trash"></i> </a>
														<input type="file" id="example-file-input" name="example-file-input">
													</div>
													<div class="col-9">
														<img class="img-avatar img-avatar m-5 border-img no-radius " src="../assetsadmin/img/d1-5.png" alt="" height="100">
														<a href="#" class="text-danger m-20 font-size-h4"><i class="fa fa-trash"></i> </a>
														<input type="file" id="example-file-input" name="example-file-input">
													</div>
													<div class="col-9">
														<img class="img-avatar img-avatar m-5 border-img no-radius" src="../assetsadmin/img/d1-6.png" alt="" height="100">
														<a href="#" class="text-danger m-20 font-size-h4"><i class="fa fa-trash"></i> </a>
														<input type="file" id="example-file-input" name="example-file-input">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-12" for="example-select">Status</label>
													<div class="col-md-6">
														<label class="css-control css-control-success css-switch">
															<input type="checkbox" class="css-control-input" checked="">
															<span class="css-control-indicator"></span> Active
														</label>
													</div>
												</div>
												
												<div class="form-group row">
													<div class="col-12">
														<button type="submit" class="btn btn-login"><a href="home-schedule.html">Save</a></button>
													</div>
												</div>
											</form>
                                </div>
                            </div>
                        </div>
						
                        <!-- END Row #1 -->
                    </div>
					
					
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="<?= base_url();?>assetsadmin/js/core/jquery.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/core/popper.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/core/bootstrap.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/core/jquery.appear.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/core/jquery.countTo.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/core/js.cookie.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?= base_url();?>assetsadmin/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/select2/select2.full.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/dropzonejs/min/dropzone.min.js"></script>
		
		<!-- Page JS Plugins -->
        <script src="<?= base_url();?>assetsadmin/js/plugins/ckeditor/ckeditor.js"></script>
        <script src="<?= base_url();?>assetsadmin/js/plugins/simplemde/js/simplemde.min.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (CKEditor + SimpleMDE plugins)
                Codebase.helpers(['ckeditor', 'simplemde']);
            });
        </script>

        <!-- Page JS Code -->
        <script src="<?= base_url();?>assetsadmin/js/pages/be_forms_plugins.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
		
        
    </body>
</html>