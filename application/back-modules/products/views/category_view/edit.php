<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="float: left;">
            Sửa đổi nội dung danh mục            
        </h1>
        <a style="margin-top: -6px; margin-left: 100px;" href="<?php echo base_url(); ?>admin/index.php/products/products_list" class="btn bg-olive margin" >Trở lại danh sách</a>
        <a style="margin-top: -6px; margin-left: 30px;" href="<?php echo base_url(); ?>admin/index.php/products/add_new_product" class="btn bg-olive margin" >Thêm mới</a>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="<?php echo base_url(); ?>admin/index.php/products/categories">Danh mục</a></li>
            <li class="active"><?php echo $category->categoryName; ?></li>
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
            <?php $action_link = base_url()."admin/index.php/products/categories/update".$category->categoryID; ?>
            <form role="form" action="<?php echo $action_link; ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">

                    <input type="hidden" name="categoryID" value="<?php echo $category->categoryID ?>">

                    <div class="form-group">
                        <label >Tên danh mục </label>
                        <input class="form-control" name="product_name" type="text" value="<?php echo $category->categoryName; ?>">
                    </div>

                    <div class="form-group">
                                
                                    <label >Ảnh</label>
                                    <br>
                                    <img id="previewimg"  src="<?php echo base_url(); ?>themes/front/img/products/<?php echo trim($category->image); ?>"/>
                                    <input type="hidden" id="img_content" name="product_image" value="<?php echo $category->image; ?>">
                                    <br>
                                    <h5>Thay đổi ảnh?</h5>
                                    <input type="file" name="file" id="file"/>                                
                        <br>

                        <div class='box'>
                            <div class='box-header'>
                                <h3 class='box-title'>Mô tả</h3>
                                <!-- tools box -->
                                
                            </div><!-- /.box-header -->
                            <div class='box-body pad'>                                    
                                <textarea id="CKEditor" name="product_shortInfo"  rows="10" cols="80"><?php echo $category->description; ?></textarea>
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

<script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.10.2.js"></script>

<script type="text/javascript">
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('CKEditor');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script> 
<script src="<?php echo base_url(); ?>themes/admin/AdminLTE/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>