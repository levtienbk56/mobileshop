<div class="container">
    <div class="row"> 
        <!-- Products List -->
        <div class="span9"> 

            <!-- Breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
                <li><a href="#">Tìm kiếm </a> <span class="divider">/</span></li>        
            </ul>
            <h1>Kết quả tìm kiếm</h1>       
            <p>Hiển thị dựa theo ...(danh mục, giá...)</p>
        </div>
    </div>
    <div class="row">
        <div class="span12"> 
            <!----------------- Filter ----------------->
            <div>
                <!---------- search filter ------------------->
                <form action="<?php echo base_url() ?>index.php/search/search_filter" method="get">
                    <select name="category">
                        <option value="0" selected>Thương hiệu</option>
                        <option value="1">IPhone</option>
                        <option value="2">Samsung</option>
                        <option value="3">Nokia</option>
                        <option value="4">LG</option>
                    </select>
                    <select name="price-range">
                        <option value="0" selected>Khoảng giá</option>
                        <option value="1">dưới 1 triệu</option>
                        <option value="2">từ 1 đến 3 triệu</option>
                        <option value="3">từ 3 đến 5 triệu</option>
                        <option value="4">từ 5 đến 10 triệu</option>
                        <option value="5">trên 10 triệu</option>
                    </select>
                    <input type="text" name="keyword" placeholder="từ khóa" style="height:30px">
                    <button type="submit" id="btn-search">Tìm kiếm</button>
                </form>
            </div>
            <div class="row products-filter">
<!--                <p><a href="#" class="active"><i class="icon-th"></i></a> <a href="#"><i class="icon-th-large"></i></a></p>-->

                <select>
                    <option class="selected">Show 30</option>
                    <option>Show 60</option>
                    <option>Show 90</option>
                </select>

                <!-------------- order by ---------------------->
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

                    <!--
                    <!-- Products Single Box 
                    <li class="span3" style="opacity: 1;">
                      <div class="thumbnail"><a href="#" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a>
                        <p><a href="#">iPhone 5 16GB Black</a></p>
                        <p class="price">€ 574</p>
                        <p class="rating"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star-half-empty"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>
                        <input type="button" value="Add to Cart" class="btn">
                        <a href="#" class="add-list"><i class="icon-star"></i>Wish List</a><a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a><span class="new">New</span></div>
                    </li>
                    
                    -->
                    <?php
                    foreach ($products as $key => $value) {
                        $id = $value["productID"];
                        $name = $value["name"];
                        $price = $value["price"];
                        $image = $value["image"];
                        ?>
                        <li class="span3" style="opacity: 1;">
                            <!--                            <div class="thumbnail">
                                                            <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $id; ?>" class="thumb">
                                                                <img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $image; ?>" alt="Product" style="width:150px;height:150px" ></a>
                                                            <p><a href="#"><?php echo $name; ?></a></p>
                                                            <p class="price"><?php echo $price; ?></p>
                                                            <p class="rating">
                                                                <i class="icon-star"><span>1</span></i>
                                                                <i class="icon-star"><span>2</span></i>
                                                                <i class="icon-star"><span>3</span></i>
                                                                <i class="icon-star"><span>4</span></i>
                                                                <i class="icon-star-empty"><span>5</span></i>
                                                            </p>
                                                            <input type="button" value="Add to Cart" class="btn">
                                                            <a href="#" class="add-list"><i class="icon-star"></i>Wish List</a>
                                                            <a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a>
                                                        </div>-->

                            <div class="thumbnail style1">
                                <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $id; ?>" class="thumb">
                                    <img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $image; ?>" alt="Product" ></a>
                                <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $id; ?>"><?php echo $name; ?></a></p>
                                <p class="price"><?php echo $price; ?></p>
                                <p class="rating">
                                    <i class="icon-star"><span>1</span></i>
                                    <i class="icon-star"><span>2</span></i>
                                    <i class="icon-star"><span>3</span></i>
                                    <i class="icon-star"><span>4</span></i>
                                    <i class="icon-star-empty"><span>5</span></i>
                                </p>
                                <a href="?id=<?php echo $id; ?>" class="add_to_cart">  Thêm vào giỏ</a>
                                <a href="#" class="add-list"><i class="icon-tasks"></i>So sánh</a>
                                <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $id; ?>" class="add-comp"><i class="icon-share-alt"></i>Xem chi tiết</a>
                            </div>
                        </li>
                        <?php
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