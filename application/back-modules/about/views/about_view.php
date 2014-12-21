<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="float: left;">
            Sửa đổi thông tin giới thiệu
        </h1>
        
        <a class="btn" ></a>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
            <li><a href="<?php echo base_url(); ?>admin/index.php/about">Giới thiệu</a></li>            
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
            <?php $action_link = base_url() . "admin/index.php/about/update" ?>
            <form role="form" action="<?php echo $action_link; ?>" method="post" enctype="multipart/form-data">
                <div class="box-body">                    
                    <div class="form-group">
                        <label >Tiêu đề: </label>
                        <input class="form-control" name="name" type="text" value="<?php echo $about->infoName; ?>">
                    </div>

                    <div class="form-group">                                
                    
                        <div class='box'>
                            <div class='box-header'>
                                <h3 class='box-title'>Mô tả</h3>
                                <!-- tools box -->

                            </div><!-- /.box-header -->
                            <div class='box-body pad'>                                    
                                <textarea id="CKEditor" name="content"  rows="10" cols="80"><?php echo $about->content; ?></textarea>
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

<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('CKEditor');
        $(".textarea").wysihtml5();
    });
</script> 
<script src="<?php echo base_url(); ?>themes/admin/AdminLTE/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>