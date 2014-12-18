<style>
    th,td{
        text-align:left;
    }
</style>

<script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.11.0.min.js" type="text/javascript"></script>        

<aside class="right-side">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách sản phẩm
            <small>Quản lý chi tiết</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li class="active">danh sách chi tiết</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-4" style="margin-top:-8px;"> <a href="<?php echo base_url(); ?>admin/index.php/products/add_new_product" class="btn bg-olive margin" >Thêm mới</a></div>
            <div class="col-md-12">
                <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>tên</th>
                            <th>ảnh</th>
                            <th>giá</th>                                                                                                                
                            <th>khuyến mại</th>
                            <th>số lượng</th>
                            <th>trạng thái</th>
                            <th>danh muc</th>
                            <th></th>
                            <th></th>             
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($products as $product) {
                            ?>
                            <tr>
                                <td><?php echo $product->productID; ?></td>
                                <td><?php echo $product->name; ?></td>                                
                                <td><img width="50px;" src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>"></td>
                                <td><?php echo number_format($product->price * 1000000, 0, ".", $thousands_sep = " ") . " VND"; ?></td>                                                                
                                <td><?php
                                    $p = $product->saleOff;
                                    if ($p > 0)
                                        echo $p . " %";
                                    ?></td>
                                <td><?php echo $product->quantity; ?></td>
                                <td><?php echo $product->status; ?></td>
                                <td><?php echo $product->categoryName; ?></td>
                                <td><a href="<?php echo base_url(); ?>admin/index.php/products/product_detail/viewDetail/<?php echo $product->productID; ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash-o complexConfirm"  
                                                   onclick="ConfirmDelete(<?php echo $product->productID;?>,<?php echo '\''. $product->name.'\''; ?>)" ></i></a> </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

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
