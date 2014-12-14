<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<?php $this->load->view('slider'); ?>

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

<?php $this->load->view('featureProducts_view'); ?>



<div class="products-list">
    <div class="container">
        <h3><span>Apple<a class="viewmore" href="#"> <i class="icon-chevron-sign-right"></i></a> </span></h3>
        <ul class="thumbnails">
            <?php $i = 1;
            foreach ($products as $product) {
                ?>
    <?php if ($product->categoryName == "Apple" && $i <= 4) { ?>
                    <li class="span3">
                        <div class="thumbnail style1">
                            <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>" alt="Product"></a>
                            <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                            <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></p>                            
                            <a href="?id=<?php echo $product->productID; ?>" class="add_to_cart">Thêm vào giỏ</a>
                            <a href="#" class="add-list"><i class="icon-tasks"></i>So sánh</a><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="add-comp"><i class="icon-share-alt"></i>Xem chi tiết</a>
                        </div>
                    </li>
                    <?php
                    $i++;
                }
            }
            ?>   

        </ul>
    </div>
</div>



<div class="products-list">
    <div class="container">
        <h3><span>Samsung<a class="viewmore" href="#"> <i class="icon-chevron-sign-right"></i></a> </span></h3>
        <ul class="thumbnails">
<?php $i = 1;
foreach ($products as $product) {
    ?>
    <?php if ($product->categoryName == "Samsung" && $i <= 4) { ?>
                    <li class="span3">
                        <div class="thumbnail style1">
                            <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>" alt="Product"></a>
                            <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                            <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></p>
                            <a href="?id=<?php echo $product->productID; ?>" class="add_to_cart">Thêm vào giỏ</a>
                            <a href="#" class="add-list"><i class="icon-tasks"></i>So sánh</a><a href="#" class="add-comp"><i class="icon-share-alt"></i>Xem chi tiết</a>
                        </div>
                    </li>
        <?php
        $i++;
    }
}
?>   

        </ul>
    </div>
</div>


<div class="products-list">
    <div class="container">
        <h3><span>LG<a class="viewmore" href="#"> <i class="icon-chevron-sign-right"></i></a> </span></h3>
        <ul class="thumbnails">
            <?php $i = 1;
            foreach ($products as $product) {
                ?>
    <?php if ($product->categoryName == "LG" && $i <= 4) { ?>
                    <li class="span3">
                        <div class="thumbnail style1">
                            <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>" alt="Product"></a>
                            <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                            <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></p>                            
                            <a href="?id=<?php echo $product->productID; ?>" class="add_to_cart">Thêm vào giỏ</a>
                            <a href="#" class="add-list"><i class="icon-tasks"></i>So sánh</a><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="add-comp"><i class="icon-share-alt"></i>Xem chi tiết</a>
                        </div>
                    </li>
                    <?php
                    $i++;
                }
            }
            ?>   

        </ul>
    </div>
</div>


<div class="container">
    <div class="brands">
        <ul class="thumbnails">
            <li class="span2"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/brands/apple.png" alt="Logo" class="thumbnail"></a></li>
            <li class="span2"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/brands/canon.png" alt="Logo" class="thumbnail"></a></li>
            <li class="span2"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/brands/sony.png" alt="Logo" class="thumbnail"></a></li>
            <li class="span2"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/brands/microsoft.png" alt="Logo" class="thumbnail"></a></li>
            <li class="span2"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/brands/hp.png" alt="Logo" class="thumbnail"></a></li>
            <li class="span2"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/brands/samsung.png" alt="Logo" class="thumbnail"></a></li>
        </ul>
    </div>
</div>


<script>
    $("#is_exist").click(function (){
       alert('Sản phẩm đã có trong giỏ hàng!') ;
    });
</script>