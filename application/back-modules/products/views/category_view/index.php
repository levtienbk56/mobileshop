<aside class="right-side">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh mục sản phẩm</h3>
                    <div class="box-tools">
                        <div class="box-footer clearfix no-border">
                        <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Thêm danh mục</button>
                    </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Ảnh đại diên</th>
                            <th></th>
                        </tr>                        
                        
                        <?php foreach ($categories as $category) {?>
                        <tr>
                            <td><?php echo $category->categoryID ?></td>
                            <td><?php echo $category->categoryName ?></td>
                            <td><?php echo $category->description ?></td>
                            <?php 
                                $image = base_url()."themes/front/img/products/".$category->image;
                                $edit = base_url()."admin/index.php/products/categories/edit/".$category->categoryID;
                            ?>
                            <td><img width="100" src="<?php echo $image; ?>"></td>
                            <td><a href="<?php echo $edit; ?>"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left: 10px;  "><i class="fa fa-trash-o"></i></a>  </td>
                        </tr>   
                        <?php } ?>
                    </table>
                    
                </div><!-- /.box-body -->
                
            </div><!-- /.box -->
               
        </div>
    </div>
</aside>