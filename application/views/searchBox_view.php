<form action="<?php echo base_url() ?>index.php/seach" method="get">
<<<<<<< HEAD
    <div class="search-box">
        <div class="col-xs-8 col-xs-offset-2">                                  
            <div class="input-group">
                <div class="dropdown luachontieuchi">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <span id="selectFilter">Tất cả</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a   id="tatca" >Tất cả</a></li>
                        <li role="presentation"><a id="theoten" >Theo tên SP</a></li>
                        <li role="presentation"><a id="theohang">Theo Hãng</a></li>
                        <li role="presentation"><a id="camung" >Cảm ứng</a></li>
                        <li role="presentation"><a id="wifi">wifi</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_filter" value="all" id="search_filter">
                <input type="text" class="form-control khung-search" name="keyword" placeholder="Tìm kiếm">
                <button type="submit" class="btn-search" id="btn-search"><i class="icon-search"></i></button>
=======
   <div class="search-box">
      <div class="col-xs-8 col-xs-offset-2">                                  
         <div class="input-group">
            <div class="dropdown luachontieuchi">
               <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
               Tất cả
               <span class="caret"></span>
               </button>
               <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                  <li role="presentation"><a role="menuitem" tabindex="1" href="#">Samsung</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="2" href="#">Iphone</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nokia</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sony</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LG</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SmartPhone</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tablet</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tin tuc</a></li>
               </ul>
>>>>>>> 88ef2877132f9584e74039bbefc86b6ed3ba141d
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
