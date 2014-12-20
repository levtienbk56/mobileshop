<br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-6  col-lg-offset-4 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title" >Thay đổi mật khẩu</h3>
                </div>                
                <div class="panel-body">
                    <div class="row">                                                
                        <div class=" col-md-9 col-lg-9 "> 
                            <p style="color:red; margin-left:50px; "><?php echo $message; ?></p>
                            <form action="<?php echo base_url() . "admin/index.php/account/updatePasstoDB"; ?>" method="post" >
                                <table>
                                    <tr>
                                        <td>Mật khẩu cũ:</td>
                                        <td><input type="password" name="old_pass"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><span id="msg_oldpass_input" style="color:red;"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Mật khẩu mới:</td>
                                        <td><input type="password" name="new_pass" id="new_pass"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><span id="msg_newpass_input" style="color:red;"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Nhập lại mật khẩu</td>
                                        <td><input type="password" name="re_enter"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><span id="msg_repass_input" style="color:red;"></span></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td style="float:right;"><br> <button type="submit" class="btn btn-primary">Cập nhật</button></td>
                                    </tr>
                                </table>                                                                    
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    td{
        padding-left: 50px;
    }
</style>