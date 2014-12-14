
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="float: left;">
            Chi tiết sản phẩm            
        </h1>
        <a style="margin-top: -6px; margin-left: 100px;" href="<?php echo base_url(); ?>admin/index.php/products/products_list" class="btn bg-olive margin" >Trở lại danh sách</a>
        <a style="margin-top: -6px; margin-left: 30px;" href="<?php echo base_url(); ?>admin/index.php/products/add_new_product" class="btn bg-olive margin" >Thêm mới</a>
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

            </div>

            <!-- main form -->

            <form role="form" action="<?php echo base_url(); ?>admin/index.php/products/product_detail/update_product" method="post" enctype="multipart/form-data">

                <div class="box-body">

                    <input type="hidden" name="productID" value="<?php echo $product->productID ?>">

                    <div class="form-group">
                        <label >Tên </label>
                        <input class="form-control" name="product_name" type="text" value="<?php echo $product->name; ?>">
                    </div>

                    <div class="form-group">



                        <table style="margin-left: 30px;">
                            <tr>
                                <td >    
                                    <label >Ảnh</label>
                                    <br>
                                    <img id="previewimg"  src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($product->image); ?>"/>
                                    <input type="hidden" id="img_content" name="product_image" value="<?php echo $product->image; ?>">

                                    <br>
                                    <h5>Thay đổi ảnh?</h5>
                                    <input type="file" name="file" id="file"/>
                                </td>
                                <td style="padding-left: 200px;">

                                    
                                <table >
                                        <tr>
                                            <td><label >Giá</label></td>
                                            <td style="padding-left: 50px;"><input type="text" name="product_price" class="forminput narrowfield"  value="<?php echo $product->price; ?>"><span>(đơn vị triệu VNĐ)</span></td>
                                        </tr>


                                        <tr>
                                            <td><label >Khuyến mại</label></td>
                                            <td style="padding-left: 50px;"><input type="text" class="forminput narrowfield" name="product_saleOff" value="<?php echo $product->saleOff; ?>"> </td>
                                        </tr>
                                        <tr>
                                            <td><label >Số lượng</label></td>
                                            <td style="padding-left: 50px;"> <input type="text" class="forminput narrowfield" name="product_quantity" value="<?php echo $product->quantity; ?> "></td>
                                        </tr>
                                        <tr>
                                            <td><label >Ngày nhập hàng: </label></td>
                                            <td style="padding-left: 50px;"><input type="text" name="product_dateCreated"  class="forminput" id="datepicker" placeholder="lựa chọn" value="<?php echo $product->dateCreated; ?>"></td>
                                        </tr>
                                        <tr>        
                                            <td><label >Hãng SX</label></td>
<!--                                            <td style="padding-left: 50px;"><input type="text" class="forminput narrowfield" name="product_categoryID" value="<?php echo $product->categoryID; ?> "></td>-->
                                            <td style="padding-left: 50px;">
                                                <select name="product_categoryID">
                                                    <?php foreach ($categories as $category){ ?>
                                                        <option value="<?php echo $category->categoryID; ?>" <?php if($category->categoryID == $product->categoryID) echo " selected"; ?> ><?php echo $category->categoryName; ?></option>
                                                    <?php } ?>
                                                </select>
                                                </td>
                                        </tr>
                                        <tr>        
                                            <td><label >Nhà cung cấp</label></td>                                            
                                            <td style="padding-left: 50px;">
                                                <select name="product_supplierID">
                                                    <?php foreach ($suppliers as $supplier){ ?>
                                                        <option value="<?php echo $supplier->supplierID; ?>" <?php if($supplier->supplierID == $product->supplierID) echo " selected"; ?> ><?php echo $supplier->name; ?></option>
                                                    <?php } ?>
                                                </select>
                                                
                                            </td>
                                        </tr>                                        
                                    </table>    

                                </td>
                                
                            </tr>
                        </table>

                        <br><br>

                        <div class='box'>
                            <div class='box-header'>
                                <h3 class='box-title'>Tóm tắt</h3>
                                <!-- tools box -->
                                
                            </div><!-- /.box-header -->
                            <div class='box-body pad'>                                    
                                <textarea id="CKEditor1" name="product_shortInfo"  rows="10" cols="80"><?php echo $product->shortInfo; ?></textarea>                                
                            </div>
                        </div>

                        <div class='box'>
                            <div class='box-header'>
                                <h3 class='box-title'>Mô tả chi tiết</h3>                                                                
                            </div><!-- /.box-header -->
                            <div class='box-body pad'> 
                                <textarea id="CKEditor2" name="product_description"  rows="10" cols="80"><?php echo $product->description; ?></textarea>                                                    
                            </div>
                        </div>



                        <div class='box'>
                            <div class='box-header'>
                                <h3 class='box-title'>Thông số kỹ thuật</h3>                                
                            </div><!-- /.box-header -->                            
                            <div class='box-body pad'> 
                                <textarea id="CKEditor3" name="product_config"  rows="10" cols="80"><?php echo $product->configurationInfo; ?></textarea>
                            </div>
                        </div>                                                        

                        
                        
                        
                        
                        <br>

                        <div class="box-footer">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Cập nhật</button>

                        </div>
                    </div>   

                    <!-- /.box -->
                </div>
            </form>

        </div><!-- /.row -->        
    </section><!-- /.content -->
</aside><!-- /.right-side -->

<script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.10.2.js"></script>


<script>
    $(function () {
        $("#datepicker").datepicker();
    });

</script>

<script>
    $(document).ready(function () {
        // Function for Preview Image.        
        $(":file").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $("#img_content").attr("value", "new name");
            }
        });
        function imageIsLoaded(e) {
            $('#message').css("display", "none");
            $('#preview').css("display", "block");
            $('#previewimg').attr('src', e.target.result);
        }
    });
</script>


<script type="text/javascript">
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('CKEditor1');
        CKEDITOR.replace('CKEditor2');
        CKEDITOR.replace('CKEditor3');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script> 
<script src="<?php echo base_url(); ?>themes/admin/AdminLTE/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>