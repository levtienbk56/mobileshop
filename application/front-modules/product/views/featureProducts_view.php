<div class="products-list products-list-small">
   <div class="container">
      <div class="tabbable">
         <div class="nav nav-tabs"><a href="#tab1" data-toggle="tab" class="active"><span>Mới nhất</span></a><a href="#tab2" data-toggle="tab" class=""><span>Khuyến mại</span></a><a href="#tab3" data-toggle="tab" class=""><span>Mua nhiều nhất</span></a></div>
         <div class="tab-content">
            
             <div class="tab-pane active" id="tab1">
               <ul class="thumbnails">
                  <!-- Products Single Box -->
                  <?php foreach ($new_products as $product){ ?>
                  <li class="span2" style="opacity: 1;">
                     <div class="thumbnail">
                        <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $product->image; ?>" alt="Product"></a>
                        <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                        <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></p>                                                
                        <a  href="?id=<?php echo $product->productID; ?>" class="btn" style="margin-left: 15px;">Thêm vào giỏ</a>
                        <a href="" class="add-list"><i class="icon-star"></i>Wish List</a><a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a><span class="new">Mới</span>
                     </div>
                  </li>
                  <?php }?>
               </ul>
            </div>
            
             <div class="tab-pane" id="tab2">
               <ul class="thumbnails">
               <?php foreach ($saleoff_products as $product){ ?>
                  <li class="span2" style="opacity: 1;">
                     <div class="thumbnail">
                        <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $product->image; ?>" alt="Product"></a>
                        <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                        <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></p>                                                
                        <a  href="?id=<?php echo $product->productID; ?>" class="btn" style="margin-left: 15px;">Thêm vào giỏ</a>
                        <a href="" class="add-list"><i class="icon-star"></i>Wish List</a><a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a><span class="sale">KM</span>
                     </div>
                  </li>
                  <?php }?>  
                  
               </ul>
            </div>
                  <div class="tab-pane" id="tab3">
               <ul class="thumbnails">
               <?php foreach ($hot_products as $product){ ?>
                  <li class="span2" style="opacity: 1;">
                     <div class="thumbnail">
                        <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>" class="thumb"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $product->image; ?>" alt="Product"></a>
                        <p><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $product->productID; ?>"><?php echo $product->name; ?></a></p>
                        <p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></p>                                                
                        <a  href="?id=<?php echo $product->productID; ?>" class="btn" style="margin-left: 15px;">Thêm vào giỏ</a>
                        <a href="" class="add-list"><i class="icon-star"></i>Wish List</a><a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a>
                     </div>
                  </li>
                  <?php }?>  
                  
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

