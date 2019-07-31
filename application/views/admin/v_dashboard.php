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
                        <div class="content-side content-side-full" >
                            <ul class="nav-main">
                                <li id="myDIV" class="btns">
                                    <a href="<?= base_url('Admin');?>" class="active" ><i class="fa fa-tachometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
								<li>
                                    <a href="<?= base_url('Desc');?>"  ><i class="fa fa-home" ></i><span class="sidebar-mini-hide">Description</span></a>
                                </li>
								<li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-calendar-check-o"></i><span class="sidebar-mini-hide">Schedule Management</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?= base_url('Admin/homeschedule');?>">Home Schedule</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Admin/detailschedule');?>">Detail Schedule</a>
                                        </li>
                                    </ul>
                                </li>
								<li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-file-text"></i><span class="sidebar-mini-hide">Form Management</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?= base_url('Admin/register');?>">Register</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('Admin/payment');?>">Payment</a>
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

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block text-center" href="javascript:void(0)">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    <div class="ribbon-box">750</div>
                                    <p class="mt-5">
                                        <i class="si si-envelope-open fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Messages</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block text-center" href="javascript:void(0)">
                                <div class="block-content bg-gd-primary">
                                    <p class="mt-5">
                                        <i class="si si-magnifier fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Search</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block text-center" href="be_pages_forum_categories.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                    <div class="ribbon-box">16</div>
                                    <p class="mt-5">
                                        <i class="si si-settings fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Settings</p>
                                </div>
                            </a>
                        </div>
                        
                        <!-- END Row #1 -->
                    </div>
                    <div class="row row-deck gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        <div class="col-xl-4">
                            <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('assetsadmin/img/desc.png');">
                                <div class="block-content block-sticky-options pt-100 bg-black-op">
                                    <div class="block-options block-options-left text-white">
                                        <div class="block-options-item">
                                            <i class="fa fa-forward text-white-op"></i>
                                        </div>
                                    </div>
                                    
                                    <h2 class="h3 font-w700 text-white mb-5">Description</h2>
                                    <h3 class="h5 text-white-op">Quick Access for Home Description</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('assetsadmin/img/schedule.jpg');">
                                <div class="block-content block-sticky-options pt-100 bg-primary-dark-op">
                                    <div class="block-options block-options-left text-white">
                                        <div class="block-options-item">
                                            <i class="fa fa-forward text-white-op"></i>
                                        </div>
                                    </div>
                                    
                                    <h2 class="h3 font-w700 text-white mb-5">Schedule</h2>
                                    <h3 class="h5 text-white-op">Quick Access for Detail Schedule</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('assetsadmin/img/form.jpg');">
                                <div class="block-content block-sticky-options pt-100 bg-primary-dark-op">
                                    <div class="block-options block-options-left text-white">
                                        <div class="block-options-item">
                                            <i class="fa fa-forward text-white-op"></i>
                                        </div>
                                    </div>
                                    
                                    <h2 class="h3 font-w700 text-white mb-5">Form</h2>
                                    <h3 class="h5 text-white-op">Quick Access for Register</h3>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #2 -->
                    </div>
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <div class="col-xl-8 d-flex align-items-stretch">
                            <div class="block block-themed block-mode-loading-inverse block-transparent bg-image w-100" style="background-image: url('assetsadmin/img/ticket2.jpg');">
                                <div class="block-header bg-black-op">
                                    <h3 class="block-title">
                                        Ticket Sales 
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content bg-black-op">
                                    <div class="pull-r-l">
                                        <!-- Lines Chart Container -->
                                        <div class="col-md-12 mb-15">
											<div id="bar-chart"></div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="block block-transparent bg-primary-dark d-flex align-items-center w-100">
                                <div class="block-content block-content-full">
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-book-open fa-2x text-success"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-success" data-toggle="countTo" data-speed="1000" data-to="750">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-success-light">Articles</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-wallet fa-2x text-danger"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-danger">$<span data-toggle="countTo" data-speed="1000" data-to="980">0</span></div>
                                        <div class="font-size-sm font-w600 text-uppercase text-danger-light">Earnings</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-envelope-open fa-2x text-warning"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-warning" data-toggle="countTo" data-speed="1000" data-to="38">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-warning-light">Messages</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-users fa-2x text-info"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-info" data-toggle="countTo" data-speed="1000" data-to="260">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-info-light">Online</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-drop fa-2x text-elegance"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="59">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-elegance-light">Themes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #3 -->
                    </div>
                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <!-- <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="#" target="_blank">ITS </a> &copy; <span class="js-year-copy">2019</span>
                    </div>
                </div>
            </footer> -->
            <!-- END Footer -->
        <!-- </div> -->
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

        <!-- Page JS Code -->
        <script src="<?= base_url();?>assetsadmin/js/pages/be_pages_dashboard.js"></script>
		<!-- <script src="<?= base_url();?>assetsadmin/js/pages/be_comp_charts.js"></script> -->
		
		<!-- Page JS Code -->
        <script src="<?= base_url();?>assetsadmin/js/pages/be_forms_plugins.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
		
		<script src="<?= base_url();?>assetsadmin/chart/highcharts.js"></script>
		<script src="<?= base_url();?>assetsadmin/chart/code/modules/series-label.js"></script>
		<script src="<?= base_url();?>assetsadmin/chart/code/modules/exporting.js"></script>
		<script src="<?= base_url();?>assetsadmin/chart/code/modules/export-data.js"></script>
		
		<script type="text/javascript">

Highcharts.chart('bar-chart', {

    title: {
        text: 'Penjualan Tiket',
		style: {
            color: '#fff',
        }
    },

    subtitle: {
        text: ''
    },
	

    yAxis: {
        title: {
            text: 'Number of Tickets'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2
        }
    },

    series: [{
        name: 'PERSONAL',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, {
        name: 'BUSINESS',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    },  {
		name: 'PREMIUM',
        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    },
	
	credits: {
        enabled: false
    }

});
		</script>
        
    </body>
</html>