<style>
    .phanhoi{margin: 20px auto;}
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
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

        var firstname = $("#first-name").val();
        var lastname = $("#last-name").val();
        var email = $("#email").val();
        var message = $("#message").val().trim();
        var _url = '<?php echo base_url(); ?>index.php/feedback/add_feedback';

        if (firstname === "" || message === "" || lastname === "") {
            alert("Bạn cần nhập đầy đủ");
        } else if (!validateMail(email)) {
            alert("mail không hợp lệ");
        } else {
            $.ajax({
                url: _url,
                type: 'POST', //the way you want to send data to your URL
                data: {'firstname': firstname, 'lastname': lastname, 'message': message, 'subject': subject, 'email': email},
                dataType: "text",
                success: function () {
                    alert("Phản hồi đã được gửi.");
                    $('#container_feedback').load(document.URL + ' #container_feedback');
                }
            });
        }
    }
</script>

<div class="container phanhoi" id="container_feedback">

    <div class="row"> 

        <!-- Contact Page-->
        <div class="span12"> 

            <!-- Breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>        
                <li class="active">Gửi phản hồi</li>
            </ul>
            <br>
            <h1 class="margin-bottom">Gửi  <span>phản hồi</span></h1>
        </div>
    </div>

    <form class="well span8" id="form-feedback">
        <div class="row">
            <div class="span3">
                <label>First Name</label> 
                <input class="span3" placeholder="Your First Name" type="text" id="first-name"> 
                <label>Last Name</label>
                <input class="span3" placeholder="Your Last Name" type="text" id="last-name">
                <label>Email Address</label> 
                <input class="span3" placeholder="Your email address" type="text" id="email"> 
                <label>Subject</label>
                <select class="span3" id="select-subject" name="subject">
                    <option selected value="service">Choose One:</option>
                    <option value="service">  General Customer Service </option>
                    <option value="suggestions"> Suggestions </option>
                    <option value="product"> Product Support </option>
                </select>
            </div>

            <div class="span5">
                <label>Message</label> 
                <textarea class="input-xlarge span5" id="message" name="message"
                          rows="10">
                </textarea>
            </div>
            <!--<button class="btn btn-primary pull-right" type=submit">Send</button>-->
            <input class="btn btn-primary pull-right" type="button" value="Send" onclick="sendFeedback()">
        </div>
    </form>

</div>
