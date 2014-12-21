<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="float: left;">
            Đơn hàng: #<?php echo $order->orderID; ?>
        </h1>
        <a style="margin-top: -6px; margin-left: 100px;" href="<?php echo base_url(); ?>admin/index.php/products/orders" class="btn bg-olive margin" >Trở lại</a>        
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="<?php echo base_url(); ?>admin/index.php/products/orders">Danh sách đặt hàng</a></li>
            <li class="active"><?php echo $order->orderID; ?></li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">

        <div class="row">            
            <?php $action_link1 = base_url() . "admin/index.php/products/orders/updateInfo"; ?>
            <form role="form" action="<?php echo $action_link1; ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <input type="hidden" name="orderID" value="<?php echo $order->orderID ?>">
                    <table style="margin: 20px 50px; padding:20px;">
                        <tr>
                            <td> Trạng thái</td>
                            <td>
                                <select name="status">
                                    <?php
                                    $status = $order->status;
                                    if ($status == 0)
                                        $status_name = "Chưa giao hàng";
                                    else if ($status == 1)
                                        $status_name = "Đã giao hàng";
                                    else if ($status == 2)
                                        $status_name = "Đã hủy";
                                    ?>
                                    <option value="<?php echo $order->status; ?>"><?php echo $status_name; ?></option>
                                    <option value="0">Chưa giao hàng</option>
                                    <option value="1">Đã giao hàng</option>
                                    <option value="2">Đã hủy</option>
                                </select>                                
                            </td>
                        </tr>
                        <tr>
                            <td> Họ tên</td>
                            <td><input name="fullname" value="<?php echo $order->name; ?>"></td>
                        </tr>

                        <tr>
                            <td>Số điện thoại:</td>
                            <td><input name="phonenumber" value="<?php echo $order->phoneNumber; ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input name="address" value="<?php echo $order->address; ?>"></td>
                        </tr>                                                
                        <tr>
                            <td></td>
                            <td><button type="submit" name="submit" class="btn btn-primary">Cập nhật</button></td>
                        </tr>
                    </table>

                </div>
            </form>

<?php $action_link2 = base_url() . "admin/index.php/products/orders/updateItems" ?>
            <form id="form2" role="form" action="<?php echo $action_link2; ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <input type="hidden" name="orderID" value="<?php echo $order->orderID ?>">
                    <h3 style="margin-left:50px;"><a href="<?php echo base_url() . "admin/index.php/products/orders/viewDetail/" . $order->orderID; ?>">Các sản phẩm đã đặt</a></h3>
                    <table style="margin: 20px 50px; padding:20px;">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th></th>
                        </tr>
                            <?php foreach ($items as $item) { ?>
                            <tr>
                                <td><a href="<?php echo base_url() . "admin/index.php/products/product_detail/viewDetail/" . $item->productID; ?>"><?php echo $item->name; ?></a></td>
                            <?php $itemid = $item->orderItemID; ?>
<!--                                <td><input class="form-control text-center soluongmua"  name="<?php echo $itemid; ?>" id="<?php echo $itemid; ?>"  value="<?php echo $item->quantity; ?>" type="number"></td>-->
                                <td>
                                    <select name="<?php echo $itemid; ?>" >
                                        <option value="<?php echo $item->quantity; ?>"><?php echo $item->quantity; ?></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td><?php $delete_link = $item->orderItemID . ',\'' . $item->name . '\''; ?>
                                <td><a onclick="ConfirmDelete(<?php echo $delete_link; ?>)" style="margin-left: 10px;  "><i class="fa fa-trash-o"></i></a>  </td>
                            </tr>                           
<?php } ?>

                        <tr>                            
                            <td style="padding-left:120px;"><br><br><button type="submit" id="capnhat_items" name="submit" class="btn btn-primary">Cập nhật</button></td>
                        </tr>
                    </table>

                </div>
            </form>
        </div><!-- /.row -->        
    </section><!-- /.content -->
</aside><!-- /.right-side -->


<style>
    td{
        padding: 10px 20px;
    }   
    form{
        float:left;
    }
    .soluongmua{
        width: 70px;
        height: 30px !important;
    }
</style>

<script>
    //$("#capnhat_items").click(function () {
    $('#form2').submit(function () {
        return false;
        <?php foreach ($items as $item) { ?>
        if($("#<?php echo $item->orderItemID; ?>").val() <1){
            alert('số lượng sản phẩm phải ít nhất là 1');
        }
        <?php } ?>
            
    
        alert("Khong submit duoc");
        
      
    });

</script>



<script type = "text/javascript" >
    function ConfirmDelete(newsID, newsTitle) {
        if (confirm("Bạn có chắc chắn muốn xóa: '" + newsTitle + "' ?"))
        {
            var Url = '<?php echo base_url() . 'admin/index.php/products/orders/deleteItem/'.$order->orderID."/"; ?>' + newsID;
            window.location.href = Url;
        }
    }
</script>
