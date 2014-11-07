<style>
    .table td{text-align: left;}
    .table th{text-align: left;}
</style>
<div class="container">
  <div class="row">
    <div class="span12"> 
      
      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
        <li class="active">Giỏ hàng</li>
      </ul>
      <br>
      <h1>Giỏ hàng</h1>
      <br>
      <p class="small-desc">Chút mô tả</p>
      
      <!-- Alert -->
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Thông báo</strong> giỏ hàng rỗng</div>
      
      <!-- Cart -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th></th>
            <th class="p-name">Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>                        
            <th>Thay đổi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="thumb-cart"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></td>
            <td class="p-name"><h5><a href="#">iPhone 5 16GB Trắng</a></h5></td>
            <td><strong>8.000.000 VND</strong></td>
            <td><input type="number" class="form-control text-center soluongmua" value="1"></td>            
            
            <td>
                <i class="icon-refresh"></i>
                <i class="icon-trash"></i>                
            </td>
          </tr>
          <tr>
            <td class="thumb-cart"><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></td>
            <td class="p-name"><h5><a href="#">iPhone 4 16GB đen</a></h5></td>
            <td><strong>4 250 000VND</strong></td>
            <td><input type="number" class="form-control text-center soluongmua" value="1"></td>            
            
            <td>
                <i class="icon-refresh"></i>
                <i class="icon-trash"></i>                
            </td>
          </tr>
        </tbody>
      </table>
      
      <!-- Cart Total -->
      <div class="main-cart-total">
        <p class="total">Tổng cộng <span>12 250 000 VND</span> 
      </p></div>
      <div class="main-checkout"><a href="<?php echo base_url(); ?>index.php/product/make_bill" class="btn btn-checkout">Tạo hóa đơn</a></div>
    </div>
  </div>
</div>


<?php $this->load->view('cartHome'); ?>