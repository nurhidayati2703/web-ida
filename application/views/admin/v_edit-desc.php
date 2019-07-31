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
                                    <a href="<?= base_url('Admin');?>"  ><i class="fa fa-tachometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
								<li>
                                    <a href="<?= base_url('Desc');?>" class="active" ><i class="fa fa-home"></i><span class="sidebar-mini-hide">Description</span></a>
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
					<h2 class="content-heading">Form Edit Page</h2>
					<div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
						<!-- Row #1 -->
                        <div class="col-12 col-xl">
                            <div class="block block-rounded block-bordered block-link-shadow">
                                <div class="block-content block-content clearfix">
                                    <form action="<?= base_url('desc/update/0') ?>" method="post" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="id_desc" required id="id_desc">
                                    
												<div class="form-group row">
													<label class="col-12" for="example-text-input">Title</label>
													<div class="col-md-9">
                                                        <input type="text" class="form-control" id="title" name="title" value="<?= $desc['title'];?>">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-12" for="example-text-input">Sub Title</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="sub-title" name="sub-title" value="<?= $desc['sub_title'];?>">
													</div>
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
                                                                            <textarea id="js-ckeditor" name="content">
                                                                                <?= $desc['content'];?>
																			</textarea>
																		</div>
																	</div>
															
															</div>
														</div>
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-12" for="example-text-input">Image (Recommended: 556 x 712 px)</label>
													<div class="col-9">
														<img class="img-avatar img-avatar m-5 border-img  no-radius" src="<?= base_url();?>assets/img/podium3.jpg" alt="" height="250">
														<a href="#" class="text-danger ml-20 font-size-h4"><i class="fa fa-trash"></i> </a>
													</div>
													<div class="col-9">
														<label class="custom-file">
															<input type="file" id="example-file-input" name="example-file-input">
															<span class="custom-file-control"></span>
														</label>
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
                                                        <input type="submit" name="submit" class="btn btn-primary float-left" value="Save">
                                                    <!-- <button type="submit" value="" class="btn btn-primary float-left"> Save </button> -->
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
		
        
    </body>
</html>