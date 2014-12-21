<!-- Right side column. Contains the navbar and content of the page -->

<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header no-margin">
        <h1 class="text-center">
            Quản lý phản hồi
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- MAILBOX BEGIN -->
        <div class="mailbox row">
            <div class="col-xs-12">
                <div class="box box-solid">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <!-- BOXES are complex enough to move the .box-header around.
                                     This is an example of having the box header within the box body -->
                                <div class="box-header">
                                    <i class="fa fa-inbox"></i>
                                    <h3 class="box-title">Hộp thư phản hồi</h3>
                                </div>                                
                                <!-- Navigation - folders-->
                                <div style="margin-top: 15px;">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="header">Các nhóm thư</li>
                                        <li class="active"><a id="all_fd"><i class="fa fa-inbox"></i> Tất cả</a></li>
                                        <li><a id="service_fd"><i class="fa  fa-toggle-up "></i>Dịch vụ</a></li>
                                        <li><a id="product_fd"><i class="fa fa-mobile"></i>Sản phẩm</a></li>
                                        <li><a id="suggest_fd"><i class="fa fa-puzzle-piece"></i>Góp ý</a></li>
                                        <li><a href="#"><i class="fa fa-star"></i>Quan tâm</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i>Thư rác</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.col (LEFT) -->
                            <div class="col-md-9 col-sm-8" id="load_load">
                                <div class="row pad">
                                    <div class="col-sm-6">
                                        <label style="margin-right: 10px;">
                                            <input type="checkbox" id="check-all"/>
                                        </label>
                                        <!-- Action button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                                                Thao tác <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Đánh dấu đã xem</a></li>
                                                <li><a href="#">Đánh dấu chưa xem`</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Đưa vào thư rác</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Xóa</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 search-form">
                                        <form action="#" class="text-right">
                                            <div class="input-group">                                                
                                                <input class="form-control input-sm" id="system-search" name="q" placeholder="Tìm kiếm" required>
                                                <div class="input-group-btn">
                                                    <button  type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.row -->

                                <div class="table-responsive" id="load_content">
                                    <!-- THE MESSAGES -->
                                    <table class="table table-mailbox table-list-search "  >
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Họ tên</th>
                                            <th>Loại phản hồi</th>
                                            <th>Nội dung</th>
                                            <th>Thời gian gửi</th>
                                        </tr>
                                        <?php foreach ($feedbacks as $feedback) { ?>
                                        <tr class="view_message" id="<?php echo $feedback->content; ?>" <?php if ($feedback->status == 1) echo "class=\"unread\""; //da doc   ?> >
                                                <td class="small-col"><input type="checkbox" /></td>
                                                <td class="small-col"><i class="fa fa-star"></i></td>
                                                <td class="name"><a href=""><?php echo $feedback->name; ?></a></td>
                                                <td class="subject"><a href="#"><?php echo $feedback->subject; ?></a></td>
                                                <td class="subject"><a class="feeback_content" id="<?php echo $feedback->feedbackID; ?>">
                                                        <?php
                                                        $content = $feedback->content;
                                                        if (strlen($content) > 40)
                                                            echo substr($content, 40) . "...";
                                                        else
                                                            echo $content;
                                                        ?></a></td>
                                                <td class="time"><?php echo date("d/m/y g:i A", strtotime($feedback->time)); ?></td>
                                            </tr>                                        
                                        <?php } ?>
                                    </table>
                                </div><!-- /.table-responsive -->
                            </div><!-- /.col (RIGHT) -->
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->                    
                </div><!-- /.box -->
            </div><!-- /.col (MAIN) -->
        </div>
        <!-- MAILBOX END -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->


<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="text-danger fa fa-times"></i></button>
                <h4 class="modal-title" id="myModalLabel">Nội dung phản hồi</h4>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>
<!-- fim Modal-->    




<!-- Page script -->
<script type="text/javascript">
    $(function () {

        "use strict";

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"]').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });

        //When unchecking the checkbox
        $("#check-all").on('ifUnchecked', function (event) {
            //Uncheck all checkboxes
            $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
        });
        //When checking the checkbox
        $("#check-all").on('ifChecked', function (event) {
            //Check all checkboxes
            $("input[type='checkbox']", ".table-mailbox").iCheck("check");
        });
        //Handle starring for glyphicon and font awesome
        $(".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty").click(function (e) {
            e.preventDefault();
            //detect type
            var glyph = $(this).hasClass("glyphicon");
            var fa = $(this).hasClass("fa");

            //Switch states
            if (glyph) {
                $(this).toggleClass("glyphicon-star");
                $(this).toggleClass("glyphicon-star-empty");
            }

            if (fa) {
                $(this).toggleClass("fa-star");
                $(this).toggleClass("fa-star-o");
            }
        });

        //Initialize WYSIHTML5 - text editor
        $("#email_message").wysihtml5();
    });
</script>





<script src="<?php echo base_url(); ?>themes/admin/js/jquery-1.11.0.min.js" type="text/javascript"></script>        
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




<script>
    $('#service_fd').click(
            function () {
                var _url = "<?php echo base_url(); ?>admin/index.php/feedback/get_service_feedback";

                $.ajax({
                    url: _url,
                    type: 'POST',
                    dataType: "text",
                    success:
                            function (data) {
                                $("#load_content").html(data);
                            }
                });
            });
    $('#product_fd').click(
            function () {
                var _url = "<?php echo base_url(); ?>admin/index.php/feedback/get_product_feedback";

                $.ajax({
                    url: _url,
                    type: 'POST',
                    dataType: "text",
                    success:
                            function (data) {
                                $("#load_content").html(data);
                            }
                });
            });

    $('#suggest_fd').click(
            function () {
                var _url = "<?php echo base_url(); ?>admin/index.php/feedback/get_suggest_feedback";

                $.ajax({
                    url: _url,
                    type: 'POST',
                    dataType: "text",
                    success:
                            function (data) {
                                $("#load_content").html(data);
                            }
                });
            });
    $('#all_fd').click(
            function () {
                var _url = "<?php echo base_url(); ?>admin/index.php/feedback/get_all_feedback";

                $.ajax({
                    url: _url,
                    type: 'POST',
                    dataType: "text",
                    success:
                            function (data) {
                                $("#load_content").html(data);
                            }
                });
            });    
</script>        



<script>
    $(function () {
        /* BOOTSNIPP FULLSCREEN FIX */
        if (window.location == window.parent.location) {
            $('#back-to-bootsnipp').removeClass('hide');
            $('.alert').addClass('hide');
        }

        $('#fullscreen').on('click', function (event) {
            event.preventDefault();
            window.parent.location = "http://bootsnipp.com/iframe/Q60Oj";
        });

        $('tbody > tr').on('click', function (event) {
            event.preventDefault();
            $('#myModal').modal('show');
        })

        $('.btn-mais-info').on('click', function (event) {
            $('.open_info').toggleClass("hide");
        })


    });
</script>

<script>
    $(".view_message").click(function(){
        var content = this.id;
        $(".modal-body").html(content);        
    });
</script>

<style>    
    tbody > tr {
        cursor: pointer;
    }

    .result{
        margin-top:20px;
    }
</style>