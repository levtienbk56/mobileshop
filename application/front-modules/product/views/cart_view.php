<style>
    .table td{text-align: left;}
    .table th{text-align: left;}
    .delete_item:hover{cursor: pointer;}
</style>
<!-- Breadcrumb -->
<ul class="breadcrumb">
    <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
    <li class="active">Giỏ hàng</li>
</ul>
<br>
<h1>Chi tiết giỏ hàng</h1>
<br>

<?php if($this->cart->total_items() == 0){ ?>
<div class="alert alert-info">        
        <strong>Giỏ hàng rỗng!</strong>
</div>
<?php } else{?>



<form id="ajaxform" action="<?php echo base_url(); ?>index.php/product/view_cart" method="post" >
    <table class="table table-hover" id="cart_data">
        <tr>    
            <th>Ảnh</th>
            <th class="p-name">Sản phẩm</th>
            <th style="text-align:center;">Giá</th>
            <th style="text-align:center;">Số lượng</th>
            <th style="text-align:right">Tổng tiền đơn vị</th>
            <th></th>
        </tr>

        <?php $i = 1; ?>

        <?php foreach ($this->cart->contents() as $items): ?>
            <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
            <tr>                                
                <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                    <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                        <td class="thumb-cart"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $option_value; ?>" alt="<?php echo $option_name; ?>"></a></td>
                    <?php endforeach; ?>                        
                <?php endif; ?>



                <td class="p-name">
                    <a href="<?php echo base_url(); ?>index.php/product/view_detail/<?php echo $items['id']; ?>"><?php echo $items['name']; ?></a>
                </td>


                <td style="text-align:center;"> <?php echo number_format($this->cart->format_number($items['price']) * 1000000, 0, ".", $thousands_sep = " ") . "VND"; ?></td>
                <td style="text-align:center;"><input class="form-control text-center soluongmua"  name="<?php echo $i . '[qty]'; ?>" value="<?php echo $items['qty']; ?>" maxlength="3" size="5" type="number"></td>

                <td style="text-align:right"><?php echo number_format($this->cart->format_number($items['subtotal']) * 1000000, 0, ".", $thousands_sep = " ") . " VND"; ?></td>
                <td style="padding-left: 30px;">                        
                    <a href="<?php echo base_url()."index.php/product/delete_item_cart/".$items['id'];?>" class="delete_item" id="<?php echo $items['id']; ?>"><i class="icon-trash"></i></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>    
    <div class="main-cart-total">
        <p class="total">Tổng cộng <span><?php
                echo $this->cart->format_number($this->cart->total() * 1000000, 0, ".", $thousands_sep = " ") . " VND";
                ;
                ?></span> 
        </p></div>      
    <div class="main-checkout"><a href="<?php echo base_url(); ?>index.php/product/make_bill" class="btn btn-checkout">Tạo hóa đơn</a></div>
    <p><input type="submit" class="updatecart"  name="update_cart" value="Cập nhật" /></p>
</form>

<?php }?>
<script>
    $('.delete_item1').click(
            function () {
                var _url = "<?php echo base_url(); ?>index.php/product/delete_item_in_cart";
                var _id = this.id;
                $.ajax({
                    url: _url,
                    type: 'POST',
                    data: {product_id: _id},
                    dataType: "text",
                    success:
                            function () {
                                $("#cart_data").load(document.URL + ' #cart_data');// phai co dau cach
                            }
                });
            });
</script>