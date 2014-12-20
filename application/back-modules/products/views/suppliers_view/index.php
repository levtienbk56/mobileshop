<aside class="right-side">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh mục nhà cung cấp</h3>
                    <div class="box-tools">
                        <div class="box-footer clearfix no-border">
                            <a href="<?php echo base_url(); ?>admin/index.php/products/suppliers/addNew" class="btn btn-default pull-right"><i class="fa fa-plus"></i>  Thêm mới</a>
                    </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Mã</th>
                            <th>Tên nhà cung cấp</th>
                            <th>Mô tả</th>                            
                            <th></th>
                        </tr>                        
                        
                        <?php foreach ($suppliers as $supplier) {?>
                        <tr>
                            <td><?php echo $supplier->supplierID ?></td>
                            <td><?php echo $supplier->name   ?></td>
                            <td><?php echo $supplier->description ?></td>                            
                            <?php $edit_link = base_url()."admin/index.php/products/suppliers/edit/".$supplier->supplierID;?>
                            <td><a href="<?php echo $edit_link; ?>"><i class="fa fa-edit"></i></a> <a href="" style="margin-left: 10px;  "><i onclick="ConfirmDelete(<?php echo $supplier->supplierID . ',\'' . $supplier->name. '\''; ?>)" class="fa fa-trash-o"></i></a>  </td>
                        </tr>   
                        <?php } ?>
                    </table>
                    
                </div><!-- /.box-body -->
                
            </div><!-- /.box -->
               
        </div>
    </div>
</aside>


<script type = "text/javascript" >
    function ConfirmDelete(newsID, newsTitle) {    
        if (confirm("Bạn có chắc chắn muốn xóa: '" + newsTitle + "' ?"))
        {
            var Url = '<?php echo base_url() . 'admin/index.php/products/suppliers/delete/'; ?>' + newsID;
            window.location.href = Url;
        }
    }
</script>
