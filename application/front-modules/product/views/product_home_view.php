<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<?php $this->load->view('slider'); ?>
<?php $this->load->view('featureProducts_view'); ?>
<?php $this->load->view('cartHome') ?>

<div class="products-list">
    <div class="container">
        <h3><span>Apple<a class="viewmore" href="#"> <i class="icon-chevron-sign-right"></i></a> </span></h3>
        <ul class="thumbnails">
            <?php $i = 1;
            foreach ($products as $product) { ?>
    <?php if ($product->categoryName == "Apple" && $i <= 4) { ?>
                    <li class="span3">
                        <div class="thumbnail style1">
                            <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>" alt="Product"></a>
                            <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                            <p class="price"><?php echo $product->price; ?></p>
                            <p class="rating"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>
                            <a href="?id=<?php echo $product->productID; ?>" class="add_to_cart">Thêm vào giỏ</a>
                            <a href="#" class="add-list"><i class="icon-tasks"></i>So sánh</a><a href="#" class="add-comp"><i class="icon-share-alt"></i>Xem chi tiết</a>
                        </div>
                    </li>
        <?php $i++;
    }
} ?>   

        </ul>
    </div>
</div>



<div class="products-list">
    <div class="container">
        <h3><span>Samsung<a class="viewmore" href="#"> <i class="icon-chevron-sign-right"></i></a> </span></h3>
        <ul class="thumbnails">
<?php $i = 1;
foreach ($products as $product) { ?>
    <?php if ($product->categoryName == "Samsung" && $i <= 4) { ?>
                    <li class="span3">
                        <div class="thumbnail style1">
                            <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>" alt="Product"></a>
                            <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                            <p class="price"><?php echo $product->price; ?></p>
                            <p class="rating"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>        

                            <a href="?id=<?php echo $product->productID; ?>" class="add_to_cart">Thêm vào giỏ</a>
                            <a href="#" class="add-list"><i class="icon-tasks"></i>So sánh</a><a href="#" class="add-comp"><i class="icon-share-alt"></i>Xem chi tiết</a>
                        </div>
                    </li>
        <?php $i++;
    }
} ?>   

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