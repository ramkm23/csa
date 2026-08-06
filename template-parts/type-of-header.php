<?php if( get_field( 'choose-header-type','option') == 'Horizontal' ): ?>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div id="logo" class="horizontaleader pull-left">
                        <a href="<?php echo get_home_url(); ?>" class="scrollto"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SBH-Logo5.png"></a>
                        <!-- Uncomment below if you prefer to use an image logo -->
                        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
                    </div>
                </div>
                <div class="col-sm-8 desktop-version">
                    <?php 
                        wp_nav_menu( array(
                        'theme_location' => 'contact-top-menu',
                        'container' => 'nav',
                        'container_class' => 'main-navigation',
                        'container_id' => 'top-nav-menu-container',
                        'menu_class' => 'nav-menu',
                        'fallback_cb' => false
                        ) ); 
                    ?>
                </div>
            </div>
            <!-- #nav-menu-container -->
        </div>
        <div class="full-with-hirizontal-menu" style="background-color:#8d653b;padding:10px 0px;text-align:center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><?php get_template_part( 'template-parts/menu-list' );?></div>
            </div>
        </div>
        </div>
    </header>
<?php endif; ?>
<?php if( get_field( 'choose-header-type','option') == 'Vertical' ): ?>
    <header id="header" class="verticle-header">
        <div id="logo" class="vertical-header-logo">
        <h1><a href="<?php echo get_home_url(); ?>" class="scrollto"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/SBH-Logo5.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>       
        <nav id="nav-menu-container" class="vertical-header-menu">
         <?php get_template_part( 'template-parts/menu-list' );?>
        </nav><!-- #nav-menu-container -->                                                                                                                           
    </header>
<?php endif; ?>

