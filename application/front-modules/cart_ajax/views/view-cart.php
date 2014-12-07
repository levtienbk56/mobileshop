<div id="update_cart">

    <!-- displays a success or failure message like 'cart updated' -->
    <div id='cart_message'></div>

    <form id="upcart">

        <table width="100%" cellpadding="0" cellspacing="0">

            <?php
            $i = 1;

            foreach ($this->cart->contents() as $items) {
                echo form_hidden('rowid[]', $items['rowid']);
                echo "<tr ";
                if ($i & 1) { // do the zebra :o)
                    echo ' class="alt"';
                }
                ?>
                ><td>
                    <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                </td>

                <td><?php echo $items['name']; ?></td>

                <td>&euro;<?php echo $this->cart->format_number($items['price']); ?></td>
                <td>&euro;<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                </tr>

                <?php
                $i++;
            }
            ?>

            <tr>
                <td></td>
                <td></td>
                <td>Total</td>
                <td>&euro;<?php echo $this->cart->format_number($this->cart->total()); ?></td>
            </tr>

        </table>

        <input type='submit' value='Update'>

    </form>
</div> 

<script>
    $(document).ready(function () {
        $("#cartform form").submit(function () {
            var id = $(this).find('input[name=product_id]').val();
            var qty = $(this).find('input[name=quantity]').val();

            $.post('<?php base_url() ?>' + "index.php/cart/add_cart_item", {real_id: <?php $product->prod_id ?>, product_id: id, quantity: qty},
            function (data) {
                if (data == 'true') {
                    $.get('<?php base_url() ?>' + "index.php/cart/show_cart", function (cart) { // Get the contents of the url cart/show_cart  
                        $("#cart_content").html(cart); // Replace the cart
                        $("#cart_message").text('Added!');
                        $("#cart_message").fadeOut(2000);
                    });
                } else {
                    alert("Error adding product!");
                }
            });
            return false;
        });
        $(function () {
            $("#upcart").submit(function () {

                dataString = $("#upcart").serialize();

                $.ajax({
                    type: "POST",
                    cache: false,
                    url: '<?php base_url() ?>' + "index.php/cart/update_cart",
                    data: dataString,
                    cache: false,
                            success: function (msg) {
                                // reload the (updated) cart
                                $.get('<?php base_url() ?>' + "cart/show_cart", function (cart) { // Get the contents of the url cart/show_cart  
                                    $("#cart_content").html(cart); // Replace the cart
                                    $("#cart_message").text('Updated!');
                                    $("#cart_message").fadeOut(2000);
                                });
                            }

                });
                return false;
            });
        });

    });


</script>