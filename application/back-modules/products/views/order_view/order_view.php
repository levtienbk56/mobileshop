<script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.11.0.min.js" type="text/javascript"></script>        
<aside class="right-side">
    <section class="content-header">
        <h1>
            Danh sách đơn hàng
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li class="active">Danh sách đơn hàng</li>
        </ol>
    </section>
    <div class="col-md-4" style="padding: 20px 10px;">
                <form action="#" method="get">
                    <div class="input-group">
                        <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                        <input class="form-control" id="system-search" name="q" placeholder="Tìm kiếm" required>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                    </div>
                </form>                                                
            </div>
    <div class="row">
        
        <div class="col-xs-12">
            
                <div class="box-body table-responsive no-padding">
                    <table class="table table-list-search">
                        <thead>
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
                        </thead>
                        <?php foreach ($orders as $order) {?>
                        <tr>
                            <td><?php echo $order->orderID; ?></td>                            
                            <?php 
                                $st = $order->status;
                                if ($st == 0) {
                                    $status = "chưa giao hàng";
                                } elseif ($st == 1) {
                                    $status= "đã giao hàng";
                                } else {
                                    $status = "đã hủy";
                                }
                             ?>
                            <td><?php  echo $status; ?></td>                            
                            <td><?php echo date( 'd-m-Y', strtotime($order->dateOrder)); ?></td>
                            <td><?php echo $order->name; ?></td>
                            <td><?php echo $order->phoneNumber; ?></td>
                            <td><?php echo $order->address; ?></td>                                                        
                            <td><?php echo $order->email; ?></td>  
                            <td><a href="<?php echo base_url()."admin/index.php/products/orders/viewDetail/".$order->orderID; ?>"> <i class="fa fa-eye"></i></a></td>
                            <td><a href="<?php echo base_url()."admin/index.php/products/orders/edit/".$order->orderID; ?>"><i class="fa fa-edit"></i></a></td>
                        </tr>   
                        <?php } ?>
                    </table>
                    
                </div><!-- /.box-body -->
                
            </div><!-- /.box -->
               
        </div>
    </div>
</aside>



<script type = "text/javascript">
    $(document).ready(function () {
        var activeSystemClass = $('.list-group-item.active');

//something is entered in search form
        $('#system-search').keyup(function () {
            var that = this;
// affect all table rows on in systems table
            var tableBody = $('.table-list-search tbody');
            var tableRowsClass = $('.table-list-search tbody tr');
            $('.search-sf').remove();
            tableRowsClass.each(function (i, val) {

//Lower text for case insensitive
                var rowText = $(val).text().toLowerCase();
                var inputText = $(that).val().toLowerCase();
                if (inputText != '')
                {
                    $('.search-query-sf').remove();
                    tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Tìm với: "'
                            + $(that).val()
                            + '"</strong></td></tr>');
                }
                else
                {
                    $('.search-query-sf').remove();
                }

                if (rowText.indexOf(inputText) == -1)
                {
//hide rows
                    tableRowsClass.eq(i).hide();

                }
                else
                {
                    $('.search-sf').remove();
                    tableRowsClass.eq(i).show();
                }
            });
//all tr elements are hidden
            if (tableRowsClass.children(':visible').length == 0)
            {
                tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">Không tìm thấy.</td></tr>');
            }
        });
    });
</script>


<script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>themes/admin/jquery.confirm-master/jquery.confirm.js"></script>	    
<script src="<?php echo base_url(); ?>themes/admin/jquery.confirm-master//run_prettify.js"></script>

<script type = "text/javascript" >    
    function ConfirmDelete(newsID, newsTitle)
    {                
        if (confirm("Bạn có chắc chắn muốn xóa sản phẩm: '" + newsTitle + "' ?"))
        {
            var Url = '<?php echo base_url() . 'admin/index.php/products/products_list/delete_product/'; ?>'+ newsID;
            window.location.href = Url;
        }
    }
</script>
