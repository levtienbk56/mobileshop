

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chi tiết sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="<?php echo base_url(); ?>admin/index.php/products/products_list">Sản phẩm</a></li>
            <li class="active"><?php echo $product->name; ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                
                    <div class="box-header">
                        <h3 class="box-title">Thông tin chi tiết</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo base_url(); ?>admin/index.php/products/product_detail/update_product" method="post">
                        <div class="box-body">

                            <input type="hidden" name="productID" value="<?php echo $product->productID ?>">

                            <div class="form-group">
                                <label >Tên </label>
                                <input class="form-control" name="product_name" type="text" value="<?php echo $product->name; ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <img  src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>"/>
                                <input type="hidden" name="product_image" value="<?php echo $product->image; ?>">

                                <br>
                                <h5>Thay ảnh mới?</h5>
                                <input type="file" id="exampleInputFile">


                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá</label>
                                <input type="text" name="product_price" class="forminput narrowfield"  value="<?php echo $product->price; ?>">
                                <span>(đơn vị triệu VNĐ)</span>
                            </div>

                            <div class='box'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Tóm tắt</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>                                    
                                    <textarea class="textarea" name="product_shortInfo" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product->shortInfo; ?></textarea>                                    
                                </div>
                            </div>

                            <div class='box'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Mô tả chi tiết</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>                                    
                                    <textarea class="textarea" name="product_description"  style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product->description; ?></textarea>
                                </div>
                            </div>



                            <div class='box'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Thông số kỹ thuật</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>                                    
                                    <textarea class="textarea" name="product_config" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product->configurationInfo; ?></textarea>
                                </div>
                            </div>                                                        

                            <br>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="cb_product_isNew" name="product_isnew" <?php if ($product->isNew == 1) echo "checked"; ?> > Là sản phẩm mới?
                                </label>
                            </div>                            
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="cb_product_isHot" name="product_isHot"  <?php if ($product->isHot == 1) echo "checked"; ?>> Đang hot?
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="cb_product_status" name="product_status"  <?php if ($product->status == 1) echo "checked"; ?>> Còn hàng?
                                </label>
                            </div>




                            <div class="form-group">
                                <label >Khuyến mại</label>
                                <input type="text" class="forminput narrowfield" name="product_saleOff" value="<?php echo $product->saleOff; ?>">
                            </div>

                            <div class="form-group">
                                <label >Số lượng</label>
                                <input type="text" class="forminput narrowfield" name="product_quantity" value="<?php echo $product->quantity; ?> ">
                            </div>

                            <label >Ngày nhập hàng: </label><input type="text" name="product_dateCreated"  class="forminput" id="datepicker" placeholder="lựa chọn" value="<?php echo $product->dateCreated; ?>">


                            <div class="form-group">
                                <label >Hãng SX</label>
                                <input type="text" class="forminput narrowfield" name="product_categoryID" value="<?php echo $product->categoryID; ?> ">
                            </div>

                            <div class="form-group">
                                <label >Nhà cung cấp</label>
                                <input type="text" class="forminput narrowfield" name="product_supplierID" value="<?php echo $product->supplierName; ?> ">
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </div>   
                    </form>
                <!-- /.box -->
            </div>
        </div><!-- /.row -->        
    </section><!-- /.content -->
</aside><!-- /.right-side -->

<script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.10.2.js"></script>

<script>
    $(function () {
        $("#datepicker").datepicker();
    });

</script>
