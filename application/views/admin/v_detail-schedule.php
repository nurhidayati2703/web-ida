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
                                    <a href="<?=base_url('Admin');?>"><i class="fa fa-tachometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
								<li>
                                    <a href="<?= base_url('Admin/desc');?>"><i class="fa fa-home"></i><span class="sidebar-mini-hide">Description</span></a>
                                </li>
								<li class="open">
                                    <a class="nav-submenu active" data-toggle="nav-submenu" href="#"><i class="fa fa-calendar-check-o"></i><span class="sidebar-mini-hide">Schedule Management</span></a>
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
                                            <a href="<?= base_url('Admin/payment');?>   ">Payment</a>
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
					<h2 class="content-heading" style="padding-top: 0;">Detail Schedule</h2>
					
					<!-- Table Head Default -->
                    <div class="block">
                        <div class="block-content clearfix">
							<div class="col-12 text-right">
								<button type="button" class="btn btn-primary min-width-125 mb-10">
									<a href="add-schedule.html" class="text-white"> Add schedule</a>
								</button>
							</div>
							<div class="row clearfix">
								<div class="col-sm-12 col-md-6">
									<div class="dataTables_length" id="example_length">
										<span>Show   
											<select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm" style="width: 10%;margin: 0 5px;">
												<option value="10">10</option>
												<option value="25">25</option>
											</select>   entries
										</span>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 text-right">
									<div id="example_filter" class="dataTables_filter">
										<label>Search :</label>
										<input type="search" class="form-control form-control-sm" placeholder="Serial Number" aria-controls="example" style="float: right;width: 50%;margin: 0 15px;">
									</div>
								</div>
							</div>
							<br><table class="table table-vcenter">
                                <thead class="thead-default">
                                    <tr>
                                        <th class="text-center" style="width: 50px;border-radius:4px 0 0 4px;">#</th>
                                        <th style="width: 10%;">ID</th>
                                        <th style="width: 10%;">Category</th>
                                        <th style="width: 10%;">Time</th>
                                        <th style="width: 10%;">Title</th>
                                        <th style="width: 10%;">Location</th>
                                        <th style="width: 30%;">Content</th>
                                        <th style="width: 20%;">Image</th>
                                        <th class="d-none d-sm-table-cell" style="width: 10%;">Status</th>
                                        <th class="text-center" style="width: 100px;border-radius:0 4px 4px 0;">Action</th>
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <tr>
                                        <th class="text-center" scope="row">1</th>
                                        <td>12345</td>
										<td>DAY 1</td>
                                        <td>07:25 AM - 20:05 PM</td>
                                        <td>Flight from SIN to CGK</td>
                                        <td>Jakarta</td>
                                        <td>
											Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pa..
										</td>
                                        <td>
											<img class="img-avatar img-avatar m-5 border-img no-radius" src="../assetsadmin/img/d1-1.png" alt="">
										</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success mr-5 mb-5 no-radius2" data-toggle="tooltip" title="Edit">
													<a href="edit-detail-schedule.html" class="text-white"><i class="fa fa-pencil"></i> </a>
												</button>
												<button type="button" class="btn btn-danger mr-5 mb-5 no-radius2" data-toggle="tooltip" title="Delete">
													<a href="#" class="text-white"><i class="fa fa-trash"></i> </a>
												</button>
                                            </div>
                                        </td>
                                    </tr>
									
									<tr>
                                        <th class="text-center" scope="row">1</th>
                                        <td>12345</td>
										<td>DAY 1</td>
                                        <td>07:25 AM - 20:05 PM</td>
                                        <td>Flight from SIN to CGK</td>
                                        <td>Jakarta</td>
                                        <td>
											Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pa..
										</td>
                                        <td>
											<img class="img-avatar img-avatar m-5 border-img no-radius" src="../assetsadmin/img/d1-1.png" alt="">
										</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success mr-5 mb-5 no-radius2" data-toggle="tooltip" title="Edit">
													<a href="edit-detail-schedule.html" class="text-white"><i class="fa fa-pencil"></i> </a>
												</button>
												<button type="button" class="btn btn-danger mr-5 mb-5 no-radius2" data-toggle="tooltip" title="Delete">
													<a href="#" class="text-white"><i class="fa fa-trash"></i> </a>
												</button>
                                            </div>
                                        </td>
                                    </tr>
									
                                    
                                </tbody>
                            </table>
							<nav aria-label="Page navigation">
                                <ul class="pagination float-right">
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">3</a>
                                    </li>
									<li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">..</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
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
		
        
    </body>
</html>