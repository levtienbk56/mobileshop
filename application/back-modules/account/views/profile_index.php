<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin tài khoản quản trị</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="image" src="<?php echo base_url()."themes/admin/images/".$account->image; ?>" class="img-circle"> </div>
                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Tên đăng nhập:</td>
                                        <td><?php echo $account->username; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Họ tên đầy đủ:</td>
                                        <td><?php echo $account->realName; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Vị trí công việc</td>
                                        <td><?php echo $account->rolename; ?></td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td><?php $p = $account->phonenumber; if($p != 0) echo $p; ?> </td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Cập nhật thông tin</a>
                            <a href="<?php echo base_url()."admin/index.php/account/changePass"; ?>" class="btn btn-primary"> Đổi mật khẩu</a>

                        </div>
                    </div>
                </div>                

            </div>
        </div>
    </div>
</div>





<style>
    .user-row {
        margin-bottom: 14px;
    }

    .user-row:last-child {
        margin-bottom: 0;
    }

    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }

    .dropdown-user:hover {
        cursor: pointer;
    }

    .table-user-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information > tbody > tr:first-child {
        border-top: 0;
    }


    .table-user-information > tbody > tr > td {
        border-top: 0;
    }
    .toppad
    {margin-top:20px;
    }

</style>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Vui lòng xác nhận mật khẩu!</h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form" action="<?php echo base_url()."admin/index.php/account/confirmToUpdate";?>" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="uPassword" name="password" placeholder="Mật khẩu">
                            <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.form-group -->                    
                    <div class="modal-footer">
                        <button class="form-control btn btn-primary" type="submit">Ok</button>
                    </div> <!-- /.modal-footer -->
                </form>
            </div> <!-- /.modal-body -->


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<style>
    .modal-dialog {
        width: 300px;
    }
    .modal-footer {
        height: 70px;
        margin: 0;
    }
    .modal-footer .btn {
        font-weight: bold;
    }
    .modal-footer .progress {
        display: none;
        height: 32px;
        margin: 0;
    }
    .input-group-addon {
        color: #fff;
        background: #3276B1;
    }

</style>

<script>
    $(document).ready(function () {
        $('.modal-footer button').click(function () {
            var button = $(this);

            if (button.attr("data-dismiss") != "modal") {
                var inputs = $('form input');
                var title = $('.modal-title');
                var progress = $('.progress');
                var progressBar = $('.progress-bar');

                inputs.attr("disabled", "disabled");

                button.hide();

                progress.show();

                progressBar.animate({width: "100%"}, 100);

                progress.delay(1000)
                        .fadeOut(600);

                button.text("Close")
                        .removeClass("btn-primary")
                        .addClass("btn-success")
                        .blur()
                        .delay(1600)
                        .fadeIn(function () {
                            title.text("Log in is successful");
                            button.attr("data-dismiss", "modal");
                        });
            }
        });

        $('#myModal').on('hidden.bs.modal', function (e) {
            var inputs = $('form input');
            var title = $('.modal-title');
            var progressBar = $('.progress-bar');
            var button = $('.modal-footer button');

            inputs.removeAttr("disabled");

            title.text("Log in");

            progressBar.css({"width": "0%"});

            button.removeClass("btn-success")
                    .addClass("btn-primary")
                    .text("Ok")
                    .removeAttr("data-dismiss");

        });
    });
</script>