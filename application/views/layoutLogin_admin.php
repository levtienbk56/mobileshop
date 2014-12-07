<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?> </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>/themes/admin/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="../css/iCheck/minimal/blue.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        
        <?php $this->load->view($template, $data); ?>

        <!-- jQuery 2.0.2 -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>/themes/admin/AdminLTE/js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../jsplugins//iCheck/icheck.min.js" type="text/javascript"></script>
    </body>
</html>