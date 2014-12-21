<style>
    .phanhoi{margin: 20px auto;}
</style>

<script type="text/javascript">
    function validateMail(x) {
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
            return false;
        }
        return true;
    }
    function sendFeedback() {
        var select = document.getElementById("select-subject");
        var subject = select.options[select.selectedIndex].value;
        var fullname = $("#fullname").val();
        var email = $("#email").val();
        var message = $("#message").val().trim();
        var _url = '<?php echo base_url(); ?>index.php/feedback/add_feedback';
        if (fullname === "" || message === "") {
            alert("Bạn cần nhập đầy đủ");
        } else if (!validateMail(email)) {
            alert("mail không hợp lệ");
        } else {
            $.ajax({
                url: _url,
                type: 'POST', //the way you want to send data to your URL
                data: {'fullname': fullname, 'message': message, 'subject': subject, 'email': email},
                dataType: "text",
                success: function () {
                    alert("Cảm ơn bạn đã gửi ý kiến phản hồi!");
                    $('#container_feedback').load(document.URL + ' #container_feedback');
                }
            });
        }
    }
</script>

<div class="container phanhoi" id="container_feedback">
    <div class="row"> 

        <br>
        <!-- Contact Page-->
        <div class="span12"> 
            <h1 class="margin-bottom" style="margin-left: 200px;">Gửi  <span>phản hồi</span></h1>
        </div>
    </div>

    <form class="well span8" id="form-feedback" style="margin-left: 200px;">
        <div class="row">
            <div class="span3">
                <label>Họ tên:</label> 
                <input class="span3" style="height:30px !important;" type="text" id="fullname"> 
                <label>Email:</label> 
                <input class="span3" style="height:30px !important;"  type="text" id="email"> 
                <label>Mục phản hồi</label>
                <select class="span3" id="select-subject" name="subject">
                    <option selected value="service">Lựa chọn:</option>
                    <option value="service">  Dịch vụ</option>
                    <option value="suggestions"> Góp ý</option>
                    <option value="product"> Sản phẩm </option>
                </select>
            </div>

            <div class="span5">
                <label>Nội dung</label> 
                <textarea class="input-xlarge span5" id="message" name="message"rows="8"></textarea>
            </div>            
            <input class="btn btn-primary pull-right" type="button" value="Gửi" onclick="sendFeedback()">
        </div>
    </form>

</div>