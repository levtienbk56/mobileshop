<aside class="right-side">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách đơn hàng</h3>                    
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Mã đơn hàng</th>                            
                            <th>Trạng thái</th>
                            <th>Ngày đặt hàng</th>
                            <th>Họ tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>      
                            <th></th>
                            <th></th>
                        </tr>                        
                        
                        <?php foreach ($orders as $order) {?>
                        <tr>
                            <td><?php echo $order->orderID; ?></td>                            
                            <?php 
                                $st = $order->status;
                                if ($st == 0) {
                                    $status = "chưa giao hàng";
                                } elseif ($st == 1) {
                                    $status= "đã xử lý";
                                } else {
                                    $status = $st;
                                }
                             ?>
                            <td><?php  echo $status; ?></td>                            
                            <td><?php echo date( 'd-m-Y', strtotime($order->dateOrder)); ?></td>
                            <td><?php echo $order->name; ?></td>
                            <td><?php echo $order->phoneNumber; ?></td>
                            <td><?php echo $order->address; ?></td>                                                        
                            <td><?php echo $order->email; ?></td>  
                            <td><a href="<?php echo base_url()."admin/index.php/products/orders/viewDetail/".$order->orderID; ?>"> <i class="fa fa-eye"></i></a></td>
                            <td><a href="#"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left: 10px;  "><i class="fa fa-trash-o"></i></a>  </td>
                        </tr>   
                        <?php } ?>
                    </table>
                    
                </div><!-- /.box-body -->
                
            </div><!-- /.box -->
               
        </div>
    </div>
</aside>