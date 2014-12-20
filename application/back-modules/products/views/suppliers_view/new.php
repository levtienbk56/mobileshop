<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="float: left;">
            Thêm mới NCC
        </h1>
        <a style="margin-top: -6px; margin-left: 100px;" href="<?php echo base_url(); ?>admin/index.php/products/suppliers" class="btn bg-olive margin" >Trở lại</a>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="<?php echo base_url(); ?>admin/index.php/products/suppliers">Nhà cung cấp</a></li>
            <li class="active">Thêm mới</li>
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
            <?php $action_link = base_url() . "admin/index.php/products/suppliers/create" ?>
            <form role="form" action="<?php echo $action_link; ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <input type="hidden" name="categoryID">
                    <div class="form-group">
                        <label >Tên NCC </label>
                        <input class="form-control" name="supplier_name" type="text">
                    </div>

                    <div class="form-group">                                                       
                        <div class='box'>
                            <div class='box-header'>
                                <h3 class='box-title'>Mô tả</h3>
                                <!-- tools box -->

                            </div><!-- /.box-header -->
                            <div class='box-body pad'>                                    
                                <textarea id="CKEditor" name="supplier_description"  rows="10" cols="80"></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="box-footer">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Tạo mới</button>

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
        CKEDITOR.replace('CKEditor');
        $(".textarea").wysihtml5();
    });
</script> 
<script src="<?php echo base_url(); ?>themes/admin/AdminLTE/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>