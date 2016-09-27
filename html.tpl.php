<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
    <head>
        <?php print $head; ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php print $head_title; ?></title>
        <meta name="description" content="Muro laopinión">
        <meta name="author" content="intranet" />
        <meta name="ROBOTS" content="NOFOLLOW">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php print base_path(); ?>sites/default/themes/intranet/css/normalize.min.css">
        <link rel="stylesheet" href="<?php print base_path(); ?>sites/default/themes/intranet/css/style.css">
        <script src="<?php print base_path(); ?>sites/default/themes/intranet/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="<?php print base_path(); ?>sites/default/themes/intranet/js/vendor/jquery-1.11.2.min.js"> </script>
        <script src="<?php print base_path(); ?>sites/default/themes/intranet/js/script.js"></script>
        
        <?php print $styles; ?>
        <?php print $scripts; ?>
    </head>
    <body class="<?php print $classes; ?>" <?php print $attributes;?>>
        <?php print $page_top; ?>
        <!--CONTENT GENERAL-->
          <div class="centerContent borderContent">
            <div class="head_desktop"><?php include("header.tpl.php"); ?></div>
            <?php print $page; ?>
            <div class="footer_desktop"><?php include("footer.tpl.php"); ?></div>
          </div>
        <!--END CONTENT GENERAL-->
    </body>
</html>
