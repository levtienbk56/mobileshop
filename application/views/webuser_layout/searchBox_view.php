<form action="<?php echo base_url() ?>index.php/search" method="get">
    <div class="search-box">
        <div class="col-xs-8 col-xs-offset-2">                                  
            <div class="input-group">
                <div class="dropdown luachontieuchi">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <span id="selectFilter">Tất cả</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a id="tatca" >Tất cả</a></li>
                        <li role="presentation"><a id="theoten" >Theo tên SP</a></li>
                        <li role="presentation"><a id="theohang">Theo Hãng</a></li>
                        <li role="presentation"><a id="camung" >Cảm ứng</a></li>
                        <li role="presentation"><a id="wifi">wifi</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_filter" value="all" id="search_filter">
                <input type="text" class="form-control khung-search" name="keyword" placeholder="Tìm kiếm">
                <button type="submit" class="btn-search" id="btn-search"><i class="icon-search"></i></button>
            </div>
        </div>
    </div>
</form>
