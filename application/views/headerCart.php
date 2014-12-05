<!-- Header Cart -->
<?php $soloaiSP = 0; ?>
<?php foreach ($this->cart->contents() as $items): ?>
    <?php $soloaiSP++; ?>
<?php endforeach; ?>  
<div class="cart on">
    <i class="icon-shopping-cart"></i>
    <p> <?php echo number_format($this->cart->format_number($this->cart->total()) * 1000000, 0, ".", $thousands_sep = " ") . "VND"; ?><span>( <?php echo $soloaiSP . " loại sản phẩm"; ?> )</span></p>
    <!-- Header Cart Content -->
    <div class="cart-content">
        <div class="mini-cart-info">
            <h3>Giỏ hàng</h3>
            <ul>
                <?php $i = 1; ?>
                <?php foreach ($this->cart->contents() as $items): ?>
                    <?php if ($i < 3): ?>
                        <li>
                            <a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a>
                            <div class="mini-cart-detail">
                                <h5><a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $items['id'] + 1; ?>"><?php echo $items['name']; ?></a></h5>
                                <em><?php echo $this->cart->format_number($items['qty']); ?> chiếc</em>
                                <p> <?php echo number_format($this->cart->format_number($items['price']) * 1000000, 0, ".", $thousands_sep = " "); ?> VND</p>

                            </div>
                        </li>                    
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>

                <?php if ($i > 2): ?>            
                    <li style="height: 20%; list-style: none;"><div style="text-align: center; color: blue; font-size: 30px;" >...</div></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="mini-cart-total">

            <p class="total">Tổng cộng <span><?php echo number_format($this->cart->format_number($this->cart->total()) * 1000000, 0, ".", $thousands_sep = ","); ?> VND</span> 
            </p>
        </div>
        <div class="checkout"><a href="<?php echo base_url(); ?>index.php/product/view_cart" class="btn">Xem giỏ</a> <a href="<?php echo base_url(); ?>index.php/product/make_bill" class="btn btn-checkout">Đặt hàng</a></div>
    </div>
</div>