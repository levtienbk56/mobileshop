            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">


                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-dashboard"></i> <span>Danh mục quản trị</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Sản phẩm</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/index.php/products/products_list"><i class="fa fa-angle-double-right"></i>Danh sách sản phẩm</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php"><i class="fa fa-angle-double-right"></i>Danh muc</a></li>                                
                                <li><a href="<?php echo base_url(); ?>admin/index.php"><i class="fa fa-angle-double-right"></i> Đơn đặt hàng</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php"><i class="fa fa-angle-double-right"></i> Báo giá</a></li>
                                
                            </ul>
                        </li>

                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-dashboard"></i> <span>Giới thiệu</span>
                            </a>
                        </li>


                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-dashboard"></i> <span>Liên hệ</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-dashboard"></i> <span>Tin tức</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-dashboard"></i> <span>Phản hồi</span>
                            </a>
                        </li>


                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-dashboard"></i> <span>Hướng dẫn</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>admin/index.php/pages/widgets/">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/UI_general"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/UI_icons"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/UI_buttons"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/UI_sliders"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/UI_timeline"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/form_general"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/form_advanced"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/form_editors"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/tables_simple"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/tables_data"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/index.php/pages/mailbox">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/examples_invoice"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/examples_login"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/examples_register"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/examples_lockscreen"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/index.php/pages/examples_404"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>                        
                            </ul>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>