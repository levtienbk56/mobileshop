<div class="container">
    <div class="row"> 

        <!-- Sidebar Media Gallery -->
        <div class="span3">
            <ul class="media-gallery">
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $product->image; ?>" alt="Product"></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></li>
            </ul>
        </div>

        <!-- Products List -->
        <div class="span9"> 
            <!-- Breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
                <li><a href="#">Sản phẩm</a> <span class="divider">/</span></li>
                <li><a href="#"><?php echo $product->categoryName; ?></a> <span class="divider">/</span></li>
                <li class="active"><?php echo $product->name; ?></li>
            </ul>

            <h1><?php echo $product->name; ?></h1>

            <div class="nav nav-stacked product-info">
                <?php echo $product->shortInfo; ?>
            </div>

            <!-- Price -->
            <p class="main-price"><span><?php if ($product->saleOff > 0) echo number_format($product->price * (100+ $product->saleOff) / 100 * 1000000, 0, ".", $thousands_sep = ",") . "VND" ?></span> <strong><?php echo number_format($product->price * 1000000, 0, ".", $thousands_sep = ",") . "VND"; ?></strong></p>

            <!-- Add Buttons -->             
            <input type="button" value="Thêm vào giỏ hàng" class="btn btn-add-cart">
            <input type="text" placeholder="1" class="input-quantity">
            <span class="input-quantity-text">Số lượng</span>
            <div class="clearfix"></div>

            <div class="col-md-6">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">Mô tả</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">Thông số kỹ thuật</a></li>
                            <li><a href="#tab3primary" data-toggle="tab">Đánh giá</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1primary">
                                <?php echo $product->description; ?>
                            </div>
                            <div class="tab-pane fade" id="tab2primary">
                                <?php echo $product->configurationInfo; ?>
                            </div>
                            <div class="tab-pane fade" id="tab3primary">
                                <div class="accordion-inner">
                                    <ul class="unstyled">
                                        <li> <strong>John Doe</strong>
                                            <p class="main-rating review"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star-half-empty"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>
                                            <em>May 15th, 2013</em>
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table.</p>
                                        </li>
                                        <li> <strong>John Doe</strong>
                                            <p class="main-rating review"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star-half-empty"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>
                                            <em>May 15th, 2013</em>
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table.</p>
                                        </li>
                                        <li> <strong>John Doe</strong>
                                            <p class="main-rating review"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star-half-empty"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>
                                            <em>May 15th, 2013</em>
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table.</p>
                                        </li>
                                    </ul>

                                    <!-- Write Review -->
                                    <h5>Write a Review</h5>
                                    <form action="write-review" class="write-review">
                                        <fieldset>
                                            <input type="text" placeholder="Name">
                                            <textarea rows="5" placeholder="Message"></textarea>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                            <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                                            <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
                                            <input type="submit" value="Send">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

