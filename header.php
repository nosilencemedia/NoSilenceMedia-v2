<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( ' | ', true, 'right' ); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
        <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/dosis:n2,n3,n4,n6:default.js" type="text/javascript"></script>
        
        <!-- Facebook -->
        <link rel="image_src" href="<?php echo get_template_directory_uri(); ?>/images/sitethumbnail.png" />
        <meta name="description" content="Through thought, laughter, tears, and discussion, we aim to use creative expression to add to, change, and help the world and the people in it." />
        
        <!-- Add Google Information -->
        <?php wp_head(); ?>
    </head>
