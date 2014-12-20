<br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Cập nhật thông tin tài khoản</h3>
                </div>
                <div class="panel-body">
                    <div class="row">                        
                    </div>                
                    <div class=" col-md-9 col-lg-9 "> 
                        <?php $action_link = base_url() . "admin/index.php/account/updateInfoDB"; ?>
                        <form action="<?php echo $action_link; ?>" method="post" enctype="multipart/form-data">           
                            <table>
                                <tr>
                                    <td>Tên đăng nhập:</td>
                                    <td class="righttd"><input type="text" class="form-control" name="login_username" id="username" value="<?php echo $account->username; ?>"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><span id="msg_username_input" style="color:red;"></span></td>
                                </tr>
                                <tr>
                                    <td>Tên đầy đủ:</td>
                                    <td class="righttd" ><input type="text" class="form-control" name="fullname" value="<?php echo $account->realName; ?>"></td>
                                </tr>                                    
                                <tr>
                                    <td>Số điện thoại:</td>
                                    <td class="righttd"><input type="text" class="form-control" name="phone" value="<?php echo $account->phonenumber; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Ảnh</td>
                                    <td class="righttd"><br>
                                        <img id="previewimg"  src="<?php echo base_url(); ?>themes/admin/images/<?php echo $account->image; ?>"/>
                                        <input type="hidden" id="img_content" name="profile_image" value="<?php echo $account->image; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="righttd"><br><input type="file" name="file" id="file"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td ><br><button type="submit" id="submit" name="submit"  class="btn btn-primary">Cập nhật</button></td>
                                </tr>
                            </table>                                                            
                        </form>
                    </div>
                </div>
            </div>                

        </div>
    </div>
</div>


<style>
    .righttd{
        padding-left: 8px;    
    }

</style>


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


<script>
    //  Bind the event handler to the "submit" JavaScript event
    $('form').submit(function () {

        $("#msg_username_input").html("");

        // Get the Login Name value and trim it
        var username = $.trim($('#username').val());


        // Check if empty of not
        if (username === '') {
            //alert('Text-field is empty.');        
            $("#msg_username_input").html("Tên đăng nhập không được để trắng<br><br>");
            return false;
        }
        if (validateUsername(username) === false) {
            $("#msg_username_input").html("Tên đăng nhập chỉ được chứa chữ số và chữ cái<br>Độ dài tối thiểu là 3 ký tự<br><br>");
            return false;
        }

        var _url = "<?php echo base_url(); ?>index.php/admin/account/check_exist";

        $.ajax({
            url: _url,
            type: 'POST',
            data: {user: username},
            dataType: "text",
            success:
                    function (data) {
                        alert(data);
                        //if (data === 0)
                        //return false;
                    }
        });

    });

    function validateUsername(user) {
        var re = /^([a-zA-Z0-9]){3,20}$/;
        return re.test(user);
    }


</script>