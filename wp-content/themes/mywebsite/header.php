<!Doctype html>
<html>
    <head>
        <title>My First Wordpress website</title>

        <?php wp_head(); ?>
    </head>
    <?php
    if (is_front_page()):
        $mywebsite_classes = array('mywebsite-class', 'my-class');
    else:
        $mywebsie_classes = array('no-mywebsite-class');
    endif;
    ?>
    <body class="<?php body_class($mywebsite_classes); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">MyWebSite Theme</a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">

                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => 'false',
                                    'menu_class' => 'nav navbar-nav navbar-right'));
                                ?>
                            </div>
                        </div>
                    </nav>



                </div>
            </div>


            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
                 width="<?php echo get_custom_header()->width; ?>" alt="" />

        