<form action="<?php echo base_url() ?>index.php/seach" method="get">
   <div class="search-box">
      <div class="col-xs-8 col-xs-offset-2">                                  
         <div class="input-group">
            <div class="dropdown luachontieuchi">
               <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
               Tất cả
               <span class="caret"></span>
               </button>
               <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Samsung</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Iphone</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nokia</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sony</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LG</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SmartPhone</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tablet</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tin tuc</a></li>
               </ul>
            </div>
            <input type="hidden" name="search_param" value="all" id="search_param">         
            <input type="text" class="form-control khung-search" name="x" placeholder="Tìm kiếm">
            <button type="submit" class="btn-search"><i class="icon-search"></i></button>
         </div>
      </div>
   </div>
</form>