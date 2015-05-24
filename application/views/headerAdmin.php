<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link href="<?php echo base_url();?>css/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>css/admin/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url();?>css/admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url();?>css/admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>css/admin/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>css/admin/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>css/admin/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
     <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo base_url();?>images/mommy.png" class="hidden-xs"/>
                <span>Mommy</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector ends -->
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a href="index.html"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i><span> Berita</span></a>
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i><span> Forum</span></a>
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i><span> Galeri</span></a>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>