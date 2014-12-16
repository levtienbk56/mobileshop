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
                    <select name="category" style="width:130px">
                        <option value="0" selected>Thương hiệu</option>
                        <option value="1">IPhone</option>
                        <option value="2">Samsung</option>
                        <option value="3">Nokia</option>
                        <option value="4">LG</option>
                    </select>
                    <select name="price-range" style="width:130px">
                        <option value="0" selected>Khoảng giá</option>
                        <option value="1">dưới 1 triệu</option>
                        <option value="2">từ 1 đến 3 triệu</option>
                        <option value="3">từ 3 đến 5 triệu</option>
                        <option value="4">từ 5 đến 10 triệu</option>
                        <option value="5">trên 10 triệu</option>
                    </select>
                    <select name="os" style="width:130px">
                        <option value="" selected>Hệ Điều Hành</option>
                        <option value="android">android</option>
                        <option value="ios">IOS</option>
                        <option value="windows">windows phone</option>
                    </select>
                    <select name="screen-size" style="width:130px">
                        <option value="0" selected>Màn hình</option>
                        <option value="1">dưới 4"</option>
                        <option value="2">4" đến 5"</option>
                        <option value="3">trên 5"</option>
                    </select>
                    Wifi<input type="checkbox" name="wifi" value="true" checked style="width:50px; margin-bottom: 10px">
                    3G<input type="checkbox" name="_3g" value="true" checked style="width:50px; margin-bottom: 10px">
                    2 SIM<input type="checkbox" name="_2sim" value="true" style="width:50px; margin-bottom: 10px">

                    <input type="text" name="keyword" placeholder="từ khóa" style="width:150px;height:30px">

                    <button type="submit" id="btn-search" style="margin-bottom: 10px">Tìm kiếm</button>
                </form>
            </div>
            <div class="row products-filter">
                <select onchange="jsSort()" id="sortByPrice">
                    <option value="2" class="selected">Sort by Default</option>
                    <option value="1">Price ( Low &gt; High )</option>
                    <option value="2">Price ( High &gt; Low )</option>
                </select>

            </div>
            <div class="products-list products-list-simple">
                <ul class="thumbnails">
                    <?php
                    foreach ($products as $key => $value) {
                        $id = $value["productID"];
                        $name = $value["name"];
                        $price = $value["price"];
                        $image = $value["image"];
                        ?>
                        <li class="span3" style="opacity: 1;">
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


<script>
    function sortDescrease($a, $b) {
        return $a['price'] - $b['price'];
    }

    function sortIncrease($a, $b) {
        return $b['price'] - $a['price'];
    }
    function jsSort() {
        var x = document.getElementById("sortByPrice").value;
        if (x == 2) {
            usort($products, 'sortDescrease');
        } else {
            usort($products, 'sortIncrease');
        }
    }
    $('#products-list products-list-simple').load(doccument.URL + ' #products-list products-list-simple');

   
</script>




