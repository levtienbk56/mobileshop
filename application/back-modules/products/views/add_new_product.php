<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm sản phẩm mới
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="<?php echo base_url(); ?>admin/index.php/products/products_list">Sản phẩm</a></li>
            <li class="active">Thêm sản phẩm mới</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">            

            <!-- main form -->

            <form role="form" action="<?php echo base_url(); ?>admin/index.php/products/add_new_product/add_product" method="post" enctype="multipart/form-data">

                <div class="box-body">

                    <input type="hidden" name="productID" value="">

                    <div class="form-group">
                        <label >Tên </label>
                        <input class="form-control" name="product_name" type="text" >
                    </div>




                    <table style="margin-left: 30px;">
                        <tr>
                            <td>
                                <table >
                                    <tr>
                                        <td><label >Giá</label></td>
                                        <td style="padding-left: 50px;"><input type="text" name="product_price" class="forminput narrowfield"  value=""><span>(đơn vị triệu VNĐ)</span></td>
                                    </tr>
                                    <tr>
                                        <td><label>Là sản phẩm mới?</label></td>
                                        <td style="padding-left: 60px;"><input type="checkbox" id="cb_product_isNew" name="product_isnew"  > </td>
                                    </tr>
                                    <tr>
                                        <td><label>Đang hot?</label></td>
                                        <td style="padding-left: 60px;"><input type="checkbox" id="cb_product_isHot" name="product_isHot" > </td>
                                    </tr>
                                    <tr>
                                        <td><label>Còn hàng?</label></td>
                                        <td style="padding-left: 60px;"><input type="checkbox" id="cb_product_status" name="product_status"  > </td>
                                    </tr>


                                    <tr>
                                        <td><label >Khuyến mại</label></td>
                                        <td style="padding-left: 50px;"><input type="text" class="forminput narrowfield" name="product_saleOff" value=""> </td>
                                    </tr>
                                    <tr>
                                        <td><label >Số lượng</label></td>
                                        <td style="padding-left: 50px;"> <input type="text" class="forminput narrowfield" name="product_quantity" value=""></td>
                                    </tr>
                                    <tr>
                                        <td><label >Ngày nhập hàng: </label></td>
                                        <td style="padding-left: 50px;"><input type="text" name="product_dateCreated"  class="forminput" id="datepicker" placeholder="lựa chọn" value=""></td>
                                    </tr>
                                    <tr>        
                                        <td><label >Hãng SX</label></td>
<!--                                            <td style="padding-left: 50px;"><input type="text" class="forminput narrowfield" name="product_categoryID" value="<?php echo $product->categoryID; ?> "></td>-->
                                        <td style="padding-left: 60px;">
                                            <select name="product_categoryID">
                                                <?php foreach ($categories as $category) { ?>
                                                    <option value="<?php echo $category->categoryID; ?>" ><?php echo $category->categoryName; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>        
                                        <td><label >Nhà cung cấp</label></td>                                            
                                        <td style="padding-left: 60px;">
                                            <select name="product_supplierID">
                                                <?php foreach ($suppliers as $supplier) { ?>
                                                    <option value="<?php echo $supplier->supplierID; ?>"  ><?php echo $supplier->name; ?></option>
                                                <?php } ?>
                                            </select>

                                        </td>
                                    </tr>                                                             
                                </table>
                            </td>
                            <td style="padding-left: 200px;">    

                                <label >Ảnh</label>
                                <br>
                                <input type="file" name="file" id="file"/>
                                <br>                        

                                <img id="previewimg"  src=""/>
                                <input type="hidden" id="img_content" name="product_image">

                            </td>
                        </tr>
                    </table>





                    <br><br>




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
                            <textarea id="CKEditor1" name="product_shortInfo"  rows="10" cols="80"></textarea>                            
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
                            <textarea id="CKEditor2" name="product_description"  rows="10" cols="80"></textarea>                                                
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
                            <textarea id="CKEditor3" name="product_config"  rows="10" cols="80"></textarea>                    
                        </div>

                    </div>                                                        

                    <br>









                    <div class="box-footer">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Thêm</button>

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