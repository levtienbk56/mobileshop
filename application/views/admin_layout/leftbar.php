            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
     
                    <ul class="sidebar-menu">


                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-dashboard"></i> <span>Danh mục quản trị</span>
                            </a>
                        </li>                        
                        <li class="active">                            
                            <a href="<?php echo base_url(); ?>admin/index.php/products/products_list"><i class="fa fa-tasks"></i>Danh sách sản phẩm</a>
                        </li>
                        <li class="active">                            
                            <a href="<?php echo base_url(); ?>admin/index.php/products/categories"><i class="fa  fa-folder-open"></i>Danh muc</a>
                        </li>
                        <li class="active">                            
                            <a href="<?php echo base_url(); ?>admin/index.php/products/suppliers"><i class="fa   fa-toggle-up"></i>Nhà cung cấp</a>
                        </li>
                        <li class="active">                            
                            <a href="<?php echo base_url(); ?>admin/index.php/products/orders"><i class="fa fa-shopping-cart"></i>Đơn đặt hàng</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-info"></i> <span>Giới thiệu</span>
                            </a>
                        </li>
                                         
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin/index.php/feedback">
                                <i class="fa fa-envelope-o"></i> <span>Phản hồi</span>
                            </a>
                        </li>
                                  
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-question-circle"></i> <span>Hướng dẫn</span>
                            </a>
                        </li>
                        <?php if($this->session->userdata('roleid')==1){ ?>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin">
                                <i class="fa fa-user"></i> <span>Quản trị thành viên</span>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
