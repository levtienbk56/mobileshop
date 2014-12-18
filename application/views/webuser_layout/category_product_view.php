<div class="products-list products-list-simple" id="category_product_list">
    <ul class="thumbnails">        
        <?php foreach ($products as $product) { ?>
            <li class="span3" style="opacity: 1;">
                <div class="thumbnail">
                    <a href="<?php echo base_url() . "index.php/product/view_detail/" . $product->productID; ?>" 
                       class="thumb">
                        <img width="180px;" src="<?php echo base_url() . "themes/front/img/products/" . $product->image; ?>" alt="Product">

                    </a>
                    <p><a height="40px" href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>">
                            <?php echo $product->name; ?>
                        </a>
                    </p>
                    <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ") . " VND"; ?></p>
                    <input type="button" value="Add to Cart" class="btn">
                    <a href="#" class="add-list"><i class="icon-star"></i>Wish List</a><a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a><span class="new">New</span></div>
            </li>   
            <?php }
        ?>

    </ul>
</div>