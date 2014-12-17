<style>
    .form_input{
        height: 30px !important;
        width: 300px !important;
    }
    .msg{
        color: red;
        font-size: 12px;
        margin-left: 30px;
    }
    .msg2{
        color: red;
        font-size: 12px;        
    }
</style>


<div class="container hoadonmua">
    <div class="row"> 

    <!-- Products List -->
    <div class="span6" style="text-align:center;">         
        <h1>Tạo hóa đơn đặt hàng</h1>
        <br>
        <p class="small-desc" >Bạn vui lòng điền các thông tin theo mẫu ở dưới<br> cửa hàng ABC sẽ chuyển giao các sản phẩm bạn đã chọn mua trong 
            thời gian sớm nhất.</p>
    </div>
</div>



<div class="row">
    <div class="span8">
        <form action="<?php echo base_url(); ?>index.php/product/order_product" method="post" class="form-horizontal" id="billingform" accept-charset="utf-8">
            <div class="control-group">
                <label for="name" class="control-label">	
                    Họ tên đầy đủ:
                </label>
                <div class="controls">
                    <input name="fullname"  id="fullname" class="form_input">     <span class="msg" id="msg_name_input"></span>
                    
                </div>
            </div>

            <div class="control-group">
                <label for="address" class="control-label">	
                    Địa chỉ nhận hàng:
                </label>
                <div class="controls"><input name="address" type="text"  id="address" class="form_input"> 
                    <span class="msg" id="msg_address_input"></span>
                </div>
            </div>

            <div class="control-group">
                <label for="phone_number" class="control-label" >	
                    Số điện thoại:
                </label>
                <div class="controls"><input name="phone_number"  type="text" value="" id="phone_number" class="form_input">
                    <br>
                    <span class="msg2" id="msg_sdt_input"></span>
                </div>
            </div>            

            
                <div class="control-group">
                <label  class="control-label" >	
                    Email:
                </label>
                <div class="controls"><input name="email"  type="text" value="" id="email" class="form_input">
                    <br>
                    <span class="msg2" id="msg_email_input"></span>
                </div>
            </div>            
            
            
            
            <button type="submit" class="btn btn-large btn-primary" style="margin-left: 30%;margin-top: 5%;">Đặt hàng</button>
        </form>
    </div> <!-- .span8 -->
</div>    



</div>


<script>
    //  Bind the event handler to the "submit" JavaScript event
$('form').submit(function () {

    $("#msg_name_input").html("");
    $("#msg_address_input").html("");
    $("#msg_sdt_input").html("");
    $("#msg_email_input").html("");


    // Get the Login Name value and trim it
    var fullname = $.trim($('#fullname').val());
    var address  = $.trim($('#address').val());
    var phone   = $.trim($('#phone_number').val());
    var email = $.trim($('#email').val());
    
    // Check if empty of not
    if (fullname === '') {
        //alert('Text-field is empty.');        
        $("#msg_name_input").html( "Bạn cần nhập họ tên");
        return false;
    }
    if(address === ''){
        $("#msg_address_input").html( "Bạn cần nhập địa chỉ nhận hàng");
        return false;
    }
    if(phone === '' || validateSdt(phone) === false){
        $("#msg_sdt_input").html("Số điện thoại độ dài không quá 15 ký tự, chỉ chứa các chữ số hoặc dấu gạch ngang -");
        return false;
    }
    if(validateEmail(email) === false){
        $("#msg_email_input").html("Email không chính xác!");
        return false;
    }    
});


function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function validateSdt(sdt) { 
    var re = /^([0-9]|-){10,15}$/;
    return re.test(sdt);
} 
</script>