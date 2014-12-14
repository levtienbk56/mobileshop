<style>
body {
    margin-top: 20px;
    
}
.col-md-9{line-height:30px;}
.table td {
    line-height: 30px;
    padding: 0;
}
.well{
    padding: 40px 20px 20px 40px;
}
.thsanpham{text-align: left !important;}
.col-md-9{text-align: left !important;}
</style>

<div class="container hoadonmua">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 diachi">
                    <address>
                        Họ tên <strong><?php echo " ".$receipt_info_user[2]; ?></strong>
                        <br>
                        Địa chỉ <strong><?php echo " ".$receipt_info_user[4]; ?></strong>
                        <br>                                                
                        <abbr title="Phone">Số điện thoại:<strong><?php echo " ".$receipt_info_user[3]; ?></strong></abbr> 
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right ngaymua">
                    <p>
                        <em>Ngày đặt: <strong><?php echo " ".$receipt_info_user[1]; ?></strong></em>
                    </p>
                    <p>
                        <em>Mã số hóa đơn #: <strong><?php echo " ".$receipt_info_user[0]; ?></strong></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Hóa đơn</h1>
                    <br>
                    <h5>Bạn đã đặt hàng thành công, vui lòng kiểm tra lại hóa đơn đặt hàng!</h5>
                    <br>
                </div>
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="thsanpham">Sản phẩm:</th>
                            <th>Số lượng</th>
                            <th class="text-center">Giá</th>
                            <th class="text-center">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($receipt_info_products as $product){?>
                        <tr>
                            <td class="col-md-9"><em><?php echo $product['name']; ?></em></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $product['qty']; ?> </td>
                            
                            <td style="text-align:right"><?php echo number_format($product['subtotal'] * 1000000, 0, ".", $thousands_sep = " ") . " VND"; ?></td>
                            <td style="text-align:right"><?php echo number_format($product['price']*$product['qty'] * 1000000, 0, ".", $thousands_sep = " ") . " VND"; ?></td>
                            
                        </tr>
                        
                        <?php }?>
                        
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right" style="padding-top:30px;"><h4><strong>Tổng cộng: </strong></h4></td>
                            <td class="text-center text-danger" style="padding-top:30px;"><h4><strong> <?php echo number_format($total * 1000000, 0, ".", $thousands_sep = " ") . " VND"; ?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>      
            </div>
        </div>
    </div>
</div>