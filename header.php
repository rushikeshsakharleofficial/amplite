<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
            document.body.classList.add('dark');
        }
    </script>
</head>
<body <?php body_class(); ?>>

<div id="news-ticker" style="display: flex;">
    <div class="ticker-title">Latest News</div>
    <div class="ticker-content">
        <div class="ticker-track">
            <?php
            $ticker_query = new WP_Query(array('posts_per_page' => 5));
            if ($ticker_query->have_posts()) :
                while ($ticker_query->have_posts()) : $ticker_query->the_post(); ?>
                    <span class="ticker-item">
                        <span style="opacity:0.7; margin-right:5px;"><?php echo get_the_date('M d'); ?>:</span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </span>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
    <button class="ticker-close" onclick="document.getElementById('news-ticker').style.display='none'">×</button>
</div>

<header>
    <div class="container header-inner">
        <div class="logo" style="display: flex; align-items: center; gap: 12px;">
            <?php
            if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                the_custom_logo();
            }
            ?>
            <a href="<?php echo home_url(); ?>" class="site-title font-linux" style="text-decoration: none;">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>

        <div class="nav-wrapper">
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'fallback_cb' => false
                ));
                ?>
            </nav>
            <button id="header-search-toggle" aria-label="Open Search">
                <svg xmlns="[http://www.w3.org/2000/svg](http://www.w3.org/2000/svg)" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
        </div>

        <?php if ( is_active_sidebar( 'header-right' ) ) : ?>
        <div class="header-right">
            <?php dynamic_sidebar('header-right'); ?>
        </div>
        <?php endif; ?>
    </div>
</header>

<!-- Search Overlay -->
<div id="search-overlay">
    <button id="search-close">×</button>
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <input type="search" class="search-field" placeholder="Type To Search..." value="<?php echo get_search_query(); ?>" name="s" />
        </label>
    </form>
</div>
