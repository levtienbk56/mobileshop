<aside class="right-side">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Chi tiết mã đơn hàng: <?php echo $orderID; ?></h3>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>       
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>                            
                            <th></th>
                        </tr>                        
                        <?php $i=0; $tongtien = 0; ?>
                        <?php foreach ($items as $item) {?>
                        <tr>       
                            <td><?php $i++; echo $i; ?></td>
                            <td><a href="<?php echo base_url()."admin/index.php/products/product_detail/viewDetail/".$item->productID;?>"><?php echo $item->name;?></a></td>
                            <td><?php echo $item->quantity; ?></td>
                            <td><?php echo number_format($item->unitPrice * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></td>
                            
                            <td><a href="#"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left: 10px;  "><i class="fa fa-trash-o"></i></a>  </td>
                        </tr>   
                        <?php $tongtien += $item->quantity * $item->unitPrice;?>
                        <?php } ?>
                    </table>
                    <br>
                    
                    <h3 class="box-title">Tổng tiền: <?php echo number_format($tongtien * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></h3>
                    
                </div><!-- /.box-body -->
                
            </div><!-- /.box -->
               
        </div>
    </div>
</aside>