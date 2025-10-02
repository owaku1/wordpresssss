<!DOCTYPE html>
<?php $theme_url = get_template_directory_uri(); ?>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php  
            if ( is_front_page() ) { // Pokud je to domovská stránka (statická stránka)
                echo get_the_title( get_option( 'page_on_front' ) ); // Získá název statické domovské stránky
            } else {
                wp_title( '|', true, 'right' ); // Standardní titulek pro ostatní stránky
            }
         ?></title>

         <script src="<?php $theme_url ?>/script/script.js"></script>
         <link rel="stylesheet" href="<?php $theme_url ?>/style.css">
         <?php wp_head(); ?>
    </head>
    <body>
        <?php
            get_header();
        ?>

        <main id="primary" class="site-main">
            <?php
                the_content();
            ?>
        </main>

        <?php
            get_footer();
        ?>
    </body>
</html>