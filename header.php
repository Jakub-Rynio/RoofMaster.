<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoofMaster</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <?php wp_head(); ?>     
</head>
<body onload="rm_change_slide()">


<div class="container-fluid">

    <header >
             
        <div id="main_menu">
            <div id="hed_img" >
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.jpg" class="img-fluid dobject-fit-cover ">
            </div>
                <div id="menu-l" >

                    <nav class="navbar navbar-expand-lg "> 
                        
                        <button id="mob_menu" class="navbar-toggler hed_nav ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                            <span class="navbar-toggler-icon"></span> 
                        </button> 
                        
                        <?php 
                            wp_nav_menu( array(
                                'theme_location'  => 'primary-menu',
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse hed_nav',
                                'container_id'    => '',
                                'menu_class'      => 'navbar-nav mr-auto ',
                                ) );
                        ?>

                    </nav>
            </div>
            <div style="clear: both;"></div>

        </div>
        <div id="mobile_box">

            <nav class="navbar navbar-expand-lg "> 
                
                <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'primary-menu',
                        'container'       => 'div',
                        'container_class' => '',
                        'container_id'    => 'mobile_menu_box',
                        'menu_class'      => 'navbar-nav mr-auto mobile_menu',
                        ) );
                ?>

            </nav>
        </div>
            
    </header>
    
    
    


