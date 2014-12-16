<form action="<?php echo base_url() ?>index.php/seach" method="get">

    <div class="search-box">
        <div class="col-xs-8 col-xs-offset-2">                                  
            <div class="input-group">
                <input type="hidden" name="search_filter" value="all" id="search_filter">
                <input type="text" class="form-control khung-search" name="keyword" placeholder="Tìm kiếm">
                <button type="submit" class="btn-search" id="btn-search"><i class="icon-search"></i></button>
            </div>
        </div>
    </div>
</form>

<script>

    $("#tatca").click(function () {
        $("#selectFilter").text("Tất cả");
        $("#search_filter").attr("value","all");
    });
    $("#theoten").click(function () {
        $("#selectFilter").text("Theo tên");
        $("#search_filter").attr("value","by_name");
    });
    $("#theohang").click(function () {
        $("#selectFilter").text("Theo hãng");
        $("#search_filter").attr("value","by_brand");
    });
    $("#camung").click(function () {
        $("#selectFilter").text("Cảm ứng");
        $("#search_filter").attr("value","touch_screen");
    });
    $("#wifi").click(function () {
        $("#selectFilter").text("Có wifi");
        $("#search_filter").attr("value","wifi");
    });            
</script>
