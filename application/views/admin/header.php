<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if(empty($page_title)) echo "Page"; else echo $page_title; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/ionicons-2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/adminlte-2.3.0/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/adminlte-2.3.0/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>