<div class="container" style="margin-left: 200px;">
   <div class="row">
      <div class="span9" >
         <!-- Breadcrumb -->
         <ul class="breadcrumb">
            <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
            <li><a href="#">Giới thiệu</a> </li>            
         </ul>
                  
         <h1><?php echo $about->infoName; ?></h1>
         <br>
         <p class="margin">
         </p>
         <?php echo $about->content; ?>
         <div class="clearfix"></div>
      </div>
      <!-- Sidebar -->
   </div>
</div>