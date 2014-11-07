<form id="ajaxform" action="<?php echo base_url(); ?>" method="post" accept-charset="UTF-8">
        <table cellpadding="6" cellspacing="1" style="width:100%" border="1">

        <tr>
            <th>QTY</th>
            <th>Item Description</th>
            <th style="text-align:right">Item Price</th>
            <th style="text-align:right">Sub-Total</th>
        </tr>

        <?php $i = 1; ?>

        <?php foreach ($this->cart->contents() as $items): ?>

            <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

            <tr>
                <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                    <?php echo $items['name']; ?>

                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                        <p>
                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                            <?php endforeach; ?>
                        </p>

                    <?php endif; ?>
                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
            </tr>

            <?php $i++; ?>

        <?php endforeach; ?>

        <tr>
            <td colspan="2"></td>
            <td class="right"><strong>Total</strong></td>
            <td class="right" align="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
        </tr>
    </table>
    <p><input type="submit"  name="update_cart" value="Update your Cart" /></p>    
</form>
<!--
<script type="text/javascript">
    var frm = $('#ajaxform');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                //alert('ok');
            }
        });

//        ev.preventDefault();
    });
</script>-->
