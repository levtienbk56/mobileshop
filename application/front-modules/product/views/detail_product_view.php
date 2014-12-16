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

            <!-- Add Buttons -->             
            <input type="button" value="Thêm vào giỏ hàng" class="btn btn-add-cart">
            <input type="text" placeholder="1" class="input-quantity">
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
                            <div class="tab-pane fade" id="tab2primary">
                                <!------------- product configuration info ------------>
                                <table class="data-table" id="product-attribute-specs-table">
                                    <colgroup><col width="25%">
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th> Màn hình</th>
                                        </tr>
                                        <tr class="first odd">
                                            <td class="label"> Kích thước</td>
                                            <td class="data last"> <?php echo $configuration[0]['screenSize'] . " inches"; ?> </td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">Độ phân giải</th>
                                            <td class="data last"><?php echo $configuration[0]['screenResolution']; ?> </td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">Khác</th>
                                            <td class="data last"> <?php echo $configuration[0]['screenOption']; ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Hệ điều hành - CPU</th>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">hệ điều hành</th>
                                            <td class="data last"> <?php echo $configuration[0]['os']; ?> </td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">chipset</th>
                                            <td class="data last"> <?php echo $configuration[0]['chipset']; ?> </td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">đồ họa</th>
                                            <td class="data last"> <?php echo $configuration[0]['chipgraphic']; ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Bộ nhớ</th>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label"> RAM</th>
                                            <td class="data last"> <?php echo $configuration[0]['memoryRam']; ?> </td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">bộ nhớ trong</th>
                                            <td class="data last">  <?php echo $configuration[0]['memoryInternal']; ?> </td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">thẻ nhớ ngoài</th>
                                            <td class="data last"> <?php echo $configuration[0]['memoryExternal']; ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Camera</th>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">Camera sau</th>
                                            <td class="data last"> <?php echo $configuration[0]['cameraBack']; ?> </td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">Camera trước</th>
                                            <td class="data last"> <?php echo $configuration[0]['cameraFront']; ?> </td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">quay phim</th>
                                            <td class="data last"> <?php echo $configuration[0]['cameraVideo']; ?> </td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">gọi video</th>
                                            <td class="data last">
                                                <?php
                                                if ($configuration[0]['cameraVideoCall'] == 1) {
                                                    echo 'có';
                                                }
                                                if ($configuration[0]['cameraVideoCall'] == 0) {
                                                    echo 'không';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">tính năng khác</th>
                                            <td class="data last"> <?php echo $configuration[0]['cameraOption']; ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Thiết kế và trọng lượng</th>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">kích thước</th>
                                            <td class="data last"><?php echo $configuration[0]['designSize']; ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">chất liệu</th>
                                            <td class="data last"><?php echo $configuration[0]['designMaterials']; ?></td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">trọng lượng</th>
                                            <td class="data last"><?php echo $configuration[0]['designWeight']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Mạng và sim</th>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">số SIM</th>
                                            <td class="data last"><?php echo $configuration[0]['simNumber']; ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">loại SIM</th>
                                            <td class="data last"><?php echo $configuration[0]['simType']; ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">mạng 2G</th>
                                            <td class="data last"><?php echo $configuration[0]['network2G']; ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">mạng 3G</th>
                                            <td class="data last"><?php echo $configuration[0]['network3G']; ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">mạng 4G</th>
                                            <td class="data last"><?php echo $configuration[0]['network4G']; ?></td>
                                        </tr>

                                        <tr>
                                            <th>Các kết nối</th>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">wifi</th>
                                            <td class="data last"><?php echo $configuration[0]['connectWifi']; ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">tốc độ 3G</th>
                                            <td class="data last"><?php echo $configuration[0]['connect3G']; ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">GPS</th>
                                            <td class="data last"><?php echo $configuration[0]['connectGPS']; ?></td>
                                        </tr>
                                        <tr class="even">
                                            <th class="label">NFC</th>
                                            <td class="data last"><?php echo $configuration[0]['connectNFC']; ?></td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">cổng USB</th>
                                            <td class="data last"> <?php echo $configuration[0]['connectUSB']; ?></td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">Bluetooth</th>
                                            <td class="data last"> <?php echo $configuration[0]['connectBluetooth']; ?></td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">jack tai nghe</th>
                                            <td class="data last"> <?php echo $configuration[0]['connectHeadphone']; ?></td>
                                        </tr>

                                        <tr>
                                            <th>Thông tin pin</th>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">dung lượng pin</th>
                                            <td class="data last"> <?php echo $configuration[0]['batteryCapacity']; ?></td>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">thời gian sử dụng</th>
                                            <td class="data last"> <?php echo $configuration[0]['batteryTime']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>tính năng khác</th>
                                        </tr>
                                        <tr class="odd">
                                            <th class="label">tính năng</th>
                                            <td class="data last"> <?php echo $configuration[0]['otherFunction']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="tab-pane fade" id="tab3primary">
                                <!------------- customer review ----------------------->
                                <div class="accordion-inner">
                                    <ul class="unstyled">
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
                                                    <!--- original html code -------------------------
                                                    <i class="icon-star"><span>2</span></i>
                                                    <i class="icon-star"><span>2</span></i>
                                                    <i class="icon-star"><span>3</span></i>
                                                    <i class="icon-star-half-empty"><span>4</span></i>
                                                    <i class="icon-star-empty"><span>5</span></i>
                                                    -------------------------------------------------->
                                                </p>
                                                <em> <?php echo $review['time']; ?></em>
                                                <p> <?php echo $review['comment']; ?></p>
                                            </li>
                                            <?php
                                        }
                                        ?>                                        
                                    </ul>

                                    <!-- Write Review -->
                                    <h5>Write a Review</h5>
                                    <form id="form-review" class="write-review" onsubmit="sendReview()">
                                        <fieldset>
                                            <input type="text" placeholder="Name" id="customer-review">
                                            <textarea rows="5" placeholder="Message" id="comment-review"></textarea>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="">
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="2">
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="3">
                                            <input type="radio" name="optionsRadios" id="optionsRadios4" value="4">
                                            <input type="radio" name="optionsRadios" id="optionsRadios5" value="5">
                                            <input type="submit" value="Send"">
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script type="text/javascript">
    function sendReview() {
        var productID = <?php echo $product->productID; ?>;
        var name = $("#customer-review").val();
        var comment = $("#comment-review").val();
        var vote = $('input[name="optionsRadios"]:checked').val();
        var _url = '<?php echo base_url(); ?>index.php/product/add_review';
        
        if(name === "" || comment === ""){
            alert("Bạn cần nhập tối thiểu tên và comment");
            return;
        }
        $.ajax({
            url: _url,
            type: 'POST', //the way you want to send data to your URL
            data: {'productID': productID, 'name': name, 'comment': comment, 'vote': vote},
            dataType: "text",
            success: function (data) {
                alert(data);  //as a debugging message.
            }
        });
    }
</script>