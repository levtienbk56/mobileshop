<style>
    .table td{text-align: left;}
    .table th{text-align: left;}
</style>
<!-- Breadcrumb -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
    <li class="active">Giỏ hàng</li>
</ul>
<br>
<h1>Chi tiết giỏ hàng</h1>
<br>
<p class="small-desc">Chút mô tả</p>


<form id="ajaxform" action="<?php echo base_url(); ?>index.php/product/view_cart" method="post" >
    <table class="table table-hover" >
        <tr>    
            <th>Ảnh</th>
            <th class="p-name">Sản phẩm</th>
            <th style="text-align:center;">Giá</th>
            <th style="text-align:center;">Số lượng</th>
            <th style="text-align:right">Tổng tiền đơn vị</th>
        </tr>

        <?php $i = 1; ?>

        <?php foreach ($this->cart->contents() as $items): ?>

            <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
            <tr>                
                <td class="thumb-cart"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></td>
                <td class="p-name">
                    <?php echo $items['name']; ?>
                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                        <p>
                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                            <?php endforeach; ?>
                        </p>
                    <?php endif; ?>
                </td>
                
                
                <td style="text-align:center;"> <?php echo number_format($this->cart->format_number($items['price']) * 1000000, 0, ".", $thousands_sep = " ")."VND"; ?></td>
                <td style="text-align:center;"><input class="form-control text-center soluongmua"  name="<?php echo $i . '[qty]'; ?>" value="<?php echo $items['qty']; ?>" maxlength="3" size="5" type="number"></td>
                
                <td style="text-align:right"><?php echo number_format($this->cart->format_number($items['subtotal']) * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></td>
            </tr>

            <?php $i++; ?>

        <?php endforeach; ?>

    </table>    
    <div class="main-cart-total">
        <p class="total">Tổng cộng <span><?php echo $this->cart->format_number($this->cart->total()* 1000000, 0, ".", $thousands_sep = " ")." VND";; ?></span> 
        </p></div>      
    <div class="main-checkout"><a href="<?php echo base_url(); ?>index.php/product/make_bill" class="btn btn-checkout">Tạo hóa đơn</a></div>
    <p><input type="submit" class="updatecart"  name="update_cart" value="Cập nhật" /></p>
</form>