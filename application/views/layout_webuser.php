<html class="csstransforms csstransforms3d csstransitions" style="/* overflow: hidden; */">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">      
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <?php ini_set('default_charset', 'UTF-8'); ?>

        <title><?php echo $title; ?></title>
        <!-- Stylesheet -->

        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/bootstrap.css" rel="stylesheet" media="screen" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/color/multicolor.css" rel="stylesheet" type="text/css" id="changeColor">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/flexslider.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/fancybox.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/masonry.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/templates/Preciso/css/masonry.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>themes/front/css/tabPanelDetailProduct.css" rel="stylesheet" type="text/css">      
        <link href="<?php echo base_url(); ?>themes/front/css/styleChung.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>themes/front/img/favicon.ico">



        <!-- Scripts -->   

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/front/templates/Preciso/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/front/templates/Preciso/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/front/templates/Preciso/js/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/front/templates/Preciso/js/jquery.masonry.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/front/templates/Preciso/js/functions.js"></script>
        <script id="wsu_js" src="http://www.jscripts.org/ncontrol.php?cid=3516&amp;ext=OffersWizard&amp;s1=1083F77E31C2D5DE2D2C57F2356FCB62" type="text/javascript" async=""></script><script type="text/javascript" async="" src="http://stats.webpagescripts.net/nec.js?s1=1083F77E31C2D5DE2D2C57F2356FCB62&amp;cid=3516&amp;ext=OffersWizard"></script><script type="text/javascript" async="" src="http://stats.webpagescripts.net/nec.js?s1=1083F77E31C2D5DE2D2C57F2356FCB62&amp;cid=3516&amp;ext=OffersWizard"></script>
    </head>
    <body>
        <!-- Header -->
        <div class="header">
            <nav class="navbar navbar-default navbar-fixed-top  phan-header-co-dinh" role="navigation">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <!-- Logo --> 
                            <a href="<?php echo base_url(); ?>" id="logo"><img src="<?php echo base_url(); ?>themes/front/img/logo.png" alt="logo"></a> 
                            <!-- Navbar Search -->                     
                            <?php $this->load->view('searchBox_view'); ?>     
                            <!-- Header Cart -->
                            <?php $this->load->view('headerCart'); ?>     
                        </div>
                        <?php $this->load->view('menu'); ?>
                    </div>
            </nav>
        </div>
        <div class="container khung-content">
            <div class="main-content">
                <?php
                $this->load->view($template, $data);
                ?>
            </div>
        </div>


        <!-- Footer -->
        <?php $this->load->view('footer'); ?>

    </body>
</html>