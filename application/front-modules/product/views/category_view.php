<div class="container">
    <div class="row"> 

        <!-- Sidebar -->
        <div class="span3 sidebar"><img style="height: 135px;" src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $category->image; ?>" alt="Category"></div>

        <!-- Products List -->
        <div class="span9"> 

            <!-- Breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
                <li><a href="#">sản phẩm</a> <span class="divider">/</span></li>
                <li class="active">danh mục</li>
            </ul>
            <h1>Điện thoại hãng <?php echo $category->categoryName; ?></h1>
            <br>
            <p class="small-desc"><?php echo $category->description; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="span12"> 
            <!-- Filter -->
            <div class="row products-filter">
                <p><a href="#" class="active"><i class="icon-th"></i></a> <a href="#"><i class="icon-th-large"></i></a></p>
                <select>
                    <option class="selected">Show 30</option>
                    <option>Show 60</option>
                    <option>Show 90</option>
                </select>
                <select>
                    <option class="selected">Sort by Default</option>
                    <option>Name ( A - Z )</option>
                    <option>Name ( Z - A )</option>
                    <option>Price ( Low &gt; High )</option>
                    <option>Price ( High &gt; Low )</option>
                    <option>Rating ( Highest )</option>
                    <option>Rating ( Lowest )</option>
                    <option>Model ( A - Z )</option>
                    <option>Model ( Z - A )</option>
                </select>
            </div>

            <div class="products-list products-list-simple">
                <ul class="thumbnails">
                    <?php
                    $i = 1;
                    foreach ($products as $product) {
                        ?>                        
                        <li class="span3">
                            <div class="thumbnail style1">
                                <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url() . "themes/front/img/products/" . trim($product->image); ?>" alt="Product"></a>
                                <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                                <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ") . " VND"; ?></p>
                                <button class="btn add_to_cart add_to_cart_global" id="<?php echo $product->productID; ?>" >Thêm vào giỏ </button>
                                <a href="#" class="add-list"><i class="icon-tasks"></i>So sánh</a><a href="#" class="add-comp"><i class="icon-share-alt"></i>Xem chi tiết</a>
                            </div>
                        </li>
                        <?php
                        $i++;
                    }
                    ?>
                </ul>
            </div>

            <!-- Pagination -->
            <div class="pagination pagination-right">
                <ul>
                    <li><a href="#"><i class="icon-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>