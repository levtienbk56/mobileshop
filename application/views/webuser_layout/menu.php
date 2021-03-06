<!-- Main Navbar -->
<div class="navbar-cont" >
    <div class="container">
        <div class="row">
            <div class="span12" id="thuhep">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse"><i class="icon-align-justify"></i></a>
                            <div class="nav-collapse collapse navbar-responsive-collapse">
                                <ul class="nav">
                                    <li class="single-link"><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
                                    <li class="single-link"><a href="<?php echo base_url(); ?>index.php/about">Giới thiệu</a></li>
                                    <li class="dropdown">
                                        <a href="<?php echo base_url(); ?>index.php/product/view_all" class="dropdown-toggle" >Sản Phẩm<i class="icon-angle-down"></i></a> 
                                        <!-- Dropdown Navbar -->
                                        <?php
                                        $this->load->model("product_model");
                                        $categories = $this->product_model->getCategories();
                                        ?>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($categories as $category){ 
                                                $link = base_url()."index.php/product/view_category/".$category->categoryID;
                                             ?>
                                            <li><a class="category_css" href="<?php echo $link; ?>"><?php echo trim($category->categoryName); ?></a></li>
                                            <?php } ?>                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hướng dẫn<i class="icon-angle-down"></i></a> 
                                        <!-- Dropdown Navbar -->
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Hướng dẫn các bước đặt hàng</a></li>
                                            <li><a href="#">Chinh sách bảo hành</a></li>                                  
                                            <li><a href="#">Cách đánh giá cấu hình điện thoại</a></li>                                                                  
                                        </ul>
                                    </li>
                                    <li class="single-link"><a href="<?php echo base_url(); ?>index.php/product/xem_bao_gia">Xem báo giá</a></li>
                                    <li class="single-link"><a href="<?php echo base_url(); ?>index.php/post">Tin tức</a></li>
                                    <li class="single-link"><a href="<?php echo base_url(); ?>index.php/feedback">Gửi phản hồi</a></li>
                                    <li class="single-link"><a href="<?php echo base_url(); ?>index.php/contact">Thông tin liên hệ</a></li>
                                    <li class="single-link chenthem"><a href="<?php echo base_url(); ?>index.php/#"></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="bordered">
