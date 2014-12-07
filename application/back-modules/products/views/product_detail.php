
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chi tiết sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li class="active"><?php echo $product->name; ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Thông tin chi tiết</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $product->name; ?>">
                            </div>



                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>                                
                                <img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>"/>
                                <br>
                                <h5>Thay ảnh mới?</h5>
                                <input type="file" id="exampleInputFile">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá (đơn vị VNĐ)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo number_format($product->price * 1000000, 0, ".", $thousands_sep = " ") ?>">
                            </div>

                            <div class='box'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Mô tả</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>                                    
                                    <textarea class="textarea"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product->description; ?></textarea>    
                                </div>
                            </div>




                            <div class='box'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Thông số cấu hình</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>                                    
                                    <textarea class="textarea"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product->description; ?></textarea>
                                </div>
                            </div>



                            <br>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Là sản phẩm mới?
                                </label>
                            </div>                            
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Đang hot?
                                </label>
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>    
        </div>   <!-- /.row -->        
    </section><!-- /.content -->
</aside><!-- /.right-side -->
