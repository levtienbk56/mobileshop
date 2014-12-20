<div class="container">
    <div class="row"> 

        <!-- Sidebar -->
        

        <!-- Products List -->
        <div class="span9"> 
            <!-- Breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
                <li><a href="#">sản phẩm</a> <span class="divider">/</span></li>
                <li class="active">danh mục</li>
            </ul>
            <h1>Điện thoại tất cả các hãng</h1>
            <br>
            
        </div>
    </div>
    <div class="row">
        <div class="span12"> 
            <!-- Filter -->
            <div class="row products-filter">
                <form action="<?php echo base_url() ?>index.php/product/search_filter" method="get" name="form">
                    <!---------- theo hãng ----------------->
                    <select name ="category" onchange="search()" id="select-category" style="float: left; margin-left: 0px" >
                        <option class="selected" value="0">Hãng</option>
                        <option value="1">Apple</option>
                        <option value="2">Samsung</option>
                        <option value="3">Nokia</option>
                        <option value="4">LG</option>
                    </select>
                    <!---------- theo HĐH  ---------->
                    <select name="os" onchange="search()" id="select-os" style="float: left" form="form"  >
                        <option class="selected" value="">hệ điều hành</option>
                        <option value="android">Android</option>
                        <option value="ios">IOS</option>
                        <option value="winphone">Winphone</option>
                    </select>
                    <!---------- theo giá -------------->
                    <select name="price" onchange="search()" id="select-price" style="float: left">
                        <option class="selected" value="0">mức giá</option>
                        <option value="1">dưới 2 triệu</option>
                        <option value="2">2 đến 4 triệu</option>
                        <option value="3">4 đến 10 triệu</option>
                        <option value="4">trên 10 triệu</option>
                    </select>
                    <!------------ có wifi -------------->
                    <select name="wifi" onchange="search()" id="select-wifi" style="float: left">
                        <option class="selected" value="0">Wifi</option>
                        <option value="1">có wifi</option>
                        <option value="2">không wifi</option>
                    </select>
                    <!----------- có 3G ----------------->
                    <select name="_3g" onchange="search()" id="select-3g" style="float: left">
                        <option class="selected" value="0">3G</option>
                        <option value="1">có 3G</option>
                        <option value="2">không 3G</option>
                    </select>
                    
                    <!---------- sắp xếp theo giá --------->
                    <select name="order" onchange="search()" id="select-order">
                        <option class="selected" value="increase">Sort by Default</option>
                        <option value="increase">Price ( Low &gt; High )</option>
                        <option value="descrease">Price ( High &gt; Low )</option>
                    </select>

                </form>
            </div>

            <div class="products-list products-list-simple" id="category_product_list">
                <ul class="thumbnails">
                    <?php
                    $i = 1;
                    foreach ($products as $product) {
                        ?>                        
                        <li class="span3">
                            <div class="thumbnail style1">
                                <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url() . "themes/front/img/products/" . trim($product->image); ?>" alt="Product"></a>
                                <p><a class="hienthiten" href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                                <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ") . " VND"; ?></p>
                                <button class="btn add_to_cart add_to_cart_global" style="font-size: 12px;" id="<?php echo $product->productID; ?>" >Thêm vào giỏ </button>
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

<script type="text/javascript">
    function search() {        
        var select = document.getElementById("select-category");
        var category = select.options[select.selectedIndex].value;

        var select = document.getElementById("select-os");
        var os = select.options[select.selectedIndex].value;

        var select = document.getElementById("select-price");
        var price = select.options[select.selectedIndex].value;

        var select = document.getElementById("select-wifi");
        var wifi = select.options[select.selectedIndex].value;
        var select = document.getElementById("select-3g");
        var _3g = select.options[select.selectedIndex].value;

        var select = document.getElementById("select-order");
        var order = select.options[select.selectedIndex].value;

        var _url = '<?php echo base_url(); ?>index.php/product/search_filter';        
        $.ajax({
            url: _url,
            type: 'POST', //the way you want to send data to your URL
            data: {'category': category, 'os': os, 'price': price, 'wifi': wifi, '_3g': _3g, 'order': order},
            dataType: "text",
            success: function (data) {     
                //alert (data);
                //document.getElementById("category_product_list").innerHTML = data;
                $("#category_product_list").html(data);
                document.getElementById("category_name").innerHTML = "Lọc sản phẩm";
            }
        });
    }
</script>