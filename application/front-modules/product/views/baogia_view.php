
<div class="container ">
    <div class="row">

        <!-- Contact Page-->
        <div class="span12"> 

            <!-- Breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>        
                <li><a href="#">Sản phẩm</a> <span class="divider">/</span></li>        
                <li class="active">bảng báo giá</li>
            </ul>
            <br>
            <h1 class="margin-bottom">Bảng <span>báo giá</span></h1>
        </div>
    </div>
</div>




<table class="mobile-price" cellspacing="1" width="100%">
    <tbody>
        <tr>
            <th >STT</th>
            <th style="text-align:left; padding-left: 100px;">Tên điện thoại</th>                      
            <th style="text-align:left;">Khuyến mại</th>
            <th style="text-align:left;">Giá tiền (sau KM)</th>  
            <th style="text-align:left;">Kho hàng</th>
        </tr>

        <?php $temp; $i=1;?>
        <?php foreach ($products as $product){ ?>
            
            <?php if($i==1 || $temp != $product->categoryID){ ?>
                <tr >
                    <td style="padding: 20px 45% 5px;border-bottom: 2px solid green;" colspan="6" class="brand">
                        <strong><?php echo $product->categoryName; ?></strong>
                    </td>
                </tr>        
            <?php } ?>
        
                
                
            <tr>
                <td class="stt"><?php echo $i; ?></td>
                <td style="padding-left: 100px;"><a href="<?php echo base_url()."index.php/product/view_detail/".$product->productID; ?>"><?php echo $product->name; ?></a></td>
                <td><?php $km = $product->saleOff; if($km>0) echo $km." %" ?></td>
                <td class="red"><p class="price"><?php echo number_format($this->cart->format_number($product->price) * 1000000, 0, ".", $thousands_sep = " ")." VND"; ?></p>
                </td>       
                
                <td><?php if($product->quantity > 0) echo "Còn hàng"; else echo "Hết hàng"; ?></td>
            </tr>
                
                
            <?php $temp = $product->categoryID;  ?>
        <?php $i++; }?>
        

    </tbody></table>