<form action="<?php echo base_url() ?>index.php/search" method="get">
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
