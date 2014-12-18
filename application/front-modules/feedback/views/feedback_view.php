<style>
.phanhoi{margin: 20px auto;}
</style>

<div class="container phanhoi">
    
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
    
	<form class="well span8">
        <div class="row">
            <div class="span3">
                <label>First Name</label> <input class="span3" placeholder=
                "Your First Name" type="text"> <label>Last Name</label>
                <input class="span3" placeholder="Your Last Name" type="text">
                <label>Email Address</label> <input class="span3" placeholder=
                "Your email address" type="text"> <label>Subject</label>
                <select class="span3" id="subject" name="subject">
                    <option selected value="na">
                        Choose One:
                    </option>
    
                    <option value="service">
                        General Customer Service
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                        Product Support
                    </option>
                </select>
            </div>
    
            <div class="span5">
                <label>Message</label> 
                <textarea class="input-xlarge span5" id="message" name="message"
                rows="10">
    </textarea>
            </div><button class="btn btn-primary pull-right" type=
            "submit">Send</button>
        </div>
    </form>

</div>
