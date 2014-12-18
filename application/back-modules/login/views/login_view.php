<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?> </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>themes/bootstrap/css/bootstrap.css" rel="stylesheet">
    

    <style>
        body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 400px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
        
    
    
    
    
</head>

<body>

<div class="container">

    
    <form action='<?php echo base_url();?>/admin/index.php/login/process' method='post' name='process' class="form-signin" role="form">
      
        <h2 class="form-signin-heading">Đăng nhập trang quản trị</h2>
        <?php if(! is_null($msg)) echo $msg;?>
        <input type="username" class="form-control" placeholder="Tên đăng nhập" required="" autofocus="" name="username">
        <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="password">
        <label class="checkbox" style="margin-left: 20px;">
          <input type="checkbox" value="remember-me"> Ghi nhớ
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
      </form>

    </div>
    
</body>
</html>