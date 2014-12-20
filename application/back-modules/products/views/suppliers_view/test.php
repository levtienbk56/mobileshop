<script type="text/javascript">
    function load_ajax() {
        $.ajax({
            url: <?php echo base_url("user/like") ?>,
            type: 'post',
            dateType: "text",
            data: {
                number: '1024'
            },
            success: function () {
                alert("success");
            }
        });
    }
</script>
<input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
<button class="shortcut primary " style="height: 40px; padding-top: 0px;" onclick="load_ajax()"></button>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>