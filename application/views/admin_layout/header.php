    <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                ABC Mobile Shop
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Các phản hồi-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">5</span>
                            </a>                            
                        </li>
                        <!-- don dat hang moi -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="label label-warning">10</span>
                            </a>                            
                        </li>
                  
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Phan Huy<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Phan Huy
                                        <small> Quản trị đơn hàng</small>
                                    </p>
                                </li>                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Thay đổi</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url(); ?>admin/index.php/login/do_logout" class="btn btn-default btn-flat">Đăng thoát</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    