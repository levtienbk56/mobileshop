<style>
    table{
        text-align: left;
    }
</style>
<div class="container">
    <div class="row"> 

        <!-- Sidebar Media Gallery -->
        <div class="span3">
            <ul class="media-gallery">
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/<?php echo $product->image; ?>" alt="Product"></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>themes/front/img/products/iphone.png" alt="Product"></a></li>
            </ul>
        </div>

        <!-- Products List -->
        <div class="span9"> 
            <!-- Breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="#">Trang chủ</a> <span class="divider">/</span></li>
                <li><a href="#">Sản phẩm</a> <span class="divider">/</span></li>
                <li><a href="#"><?php echo $product->categoryName; ?></a> <span class="divider">/</span></li>
                <li class="active"><?php echo $product->name; ?></li>
            </ul>

            <h1><?php echo $product->name; ?></h1>

            <div class="nav nav-stacked product-info">
                <?php echo $product->shortInfo; ?>
            </div>

            <!-- Price -->
            <p class="main-price"><span><?php if ($product->saleOff > 0) echo number_format($product->price * (100 + $product->saleOff) / 100 * 1000000, 0, ".", $thousands_sep = ",") . "VND" ?></span> <strong><?php echo number_format($product->price * 1000000, 0, ".", $thousands_sep = ",") . "VND"; ?></strong></p>
<<<<<<< HEAD
            <a  class="btn btn-add-cart add_to_cart_detail" id="<?php echo $product->productID; ?>">Thêm vào giỏ </a>
            
            <select id="soluong" class="input-quantity" style="background: none repeat scroll 0% 0% #1A68F2;margin-right: 30px;">                                        
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
=======
            <a  class="btn btn-add-cart add_to_cart_global" id="<?php echo $product->productID; ?>">Thêm vào giỏ </a>

            <input type="text" placeholder="1" class="input-quantity">
>>>>>>> 504751bab4f069f057ddcfd8ece4066c189b16ff
            <span class="input-quantity-text">Số lượng</span>
            <div class="clearfix"></div>

            <div class="col-md-6">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">Mô tả</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">Thông số kỹ thuật</a></li>
                            <li><a href="#tab3primary" data-toggle="tab">Đánh giá</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1primary">
                                <!------------- product detail ------------------------>
                                <?php echo $product->description; ?>
                            </div>                            
                            <div class="tab-pane fade" id="tab2primary" style="text-align:left;">
                                <?php echo $product->configurationInfo; ?>
                            </div>
                            <div class="tab-pane fade" id="tab3primary">
                                <!------------- customer review ----------------------->
                                <div class="accordion-inner">
                                    <ul class="unstyled" id="reload">
                                        <!-------- LOOP-------------------------------->
                                        <?php
                                        foreach ($reviews as $review) {
                                            $star = $review['vote'];
                                            $i = 0;
                                            ?>
                                            <li> <strong> <?php echo $review['name']; ?></strong>
                                                <p class="main-rating review">
                                                    <!-------------- LOOP ------------->
                                                    <?php while ($i < 5) {
                                                        ?>
                                                        <i class="<?php
                                                        if ($i < $star)
                                                            echo "icon-star";
                                                        else
                                                            echo "icon-star-empty"
                                                            ?>"><span>1</span></i>
                                                           <?php
                                                           $i = $i + 1;
                                                       }
                                                       ?>
                                                </p>
                                                <em> <?php echo $review['time']; ?></em>
                                                <p> <?php echo $review['comment']; ?></p>
                                            </li>
                                            <?php
                                        }
                                        ?>                                        
                                    </ul>

                                    <!-- Write Review -->
<<<<<<< HEAD
                                    <h5>Viết đánh giá</h5>
=======
                                    <h5>Write a Review</h5>
>>>>>>> 504751bab4f069f057ddcfd8ece4066c189b16ff
                                    <form id="form-review" class="write-review">
                                        <fieldset>
                                            <input type="text" placeholder="Name" id="customer-review">
                                            <textarea rows="5" placeholder="Message" id="comment-review"></textarea>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="">
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="2">
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="3">
                                            <input type="radio" name="optionsRadios" id="optionsRadios4" value="4">
                                            <input type="radio" name="optionsRadios" id="optionsRadios5" value="5">
                                            <p><input type="button" value="Gửi" onclick="sendReview()"></p>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    function sendReview() {
        var productID = <?php echo $product->productID; ?>;
        var name = $("#customer-review").val();
        var comment = $("#comment-review").val();
        var vote = $('input[name="optionsRadios"]:checked').val();
        var _url = '<?php echo base_url(); ?>index.php/product/add_review';
        if (name === "" || comment === "") {
            alert("Bạn cần nhập đầy đủ");
        } else {
            $.ajax({
                url: _url,
                type: 'POST', //the way you want to send data to your URL
                data: {'productID': productID, 'name': name, 'comment': comment, 'vote': vote},
                dataType: "text",
                success: function (data) {
                    alert("Đánh giá của bạn đã được gửi đi");
<<<<<<< HEAD
                    $('#reload').load(document.URL + ' #reload');
=======
                    $('#form-review').load(document.URL + ' #form-review');
>>>>>>> 504751bab4f069f057ddcfd8ece4066c189b16ff
                }
            });
        }
    }
</script>



<script>
    $('.add_to_cart_detail').click(
            function () {
                var _url = "<?php echo base_url(); ?>index.php/product/add_item_cart";
                var _soluong = $("#soluong").val();
                $.ajax({
                    url: _url,
                    type: 'POST',
                    data: {product_id: this.id, soluong: _soluong},
                    dataType: "text",
                    success:
                            function (data) {
                                var top = $(document).scrollTop();
                                if (top > 450) {
                                    $(".cart-content").css({"margin-top": "-15"});
                                }
                                else {
                                    $(".cart-content").css({"margin-top": "0"});
                                }

                                if (data.trim() === "0")
                                    $("#thongbaogio").load(document.URL + ' #thongbaogio');// phai co dau cach
                                else
                                    alert('Sản phẩm đã có trong giỏ hàng');
                            }
                });
            });
</script>
