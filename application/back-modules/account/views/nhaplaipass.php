<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Bạn nhập chưa xác nhận mật khẩu thành công</h3>
                </div>
                <div class="panel-body">
                    <div class="modal-body" style="padding-left:120px;">
                        <form role="form" action="<?php echo base_url() . "admin/index.php/account/confirmToUpdate" ?>" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="uPassword" name="password" placeholder="Mật khẩu">
                                    <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
                                </div> <!-- /.input-group -->
                            </div> <!-- /.form-group -->                    
                            <div class="form-group" >                                
                                <button style="width:220px;" class="form-control btn btn-primary" type="submit">Ok</button>                                    
                                
                            </div>
                        </form>

                    </div> <!-- /.modal-body -->
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