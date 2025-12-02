<?php get_header(); ?>

<div class="container">
    <div class="main-layout">
        
        <main class="content-area">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white dark:bg-gray-800 p-6 rounded-lg border border-gray-200 dark:border-gray-700'); ?>>
                    
                    <header class="entry-header mb-6">
                        <div class="text-sm text-gray-500 mb-2">
                            <span class="text-blue-600 font-bold uppercase"><?php the_category(', '); ?></span>
                            <span class="mx-2">&bull;</span>
                            <?php echo get_the_date(); ?>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mb-6 rounded-lg overflow-hidden">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-cover')); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                    <div class="entry-content text-gray-800 dark:text-gray-300">
                        <?php the_content(); ?>
                    </div>

                    <footer class="entry-footer">
                         <div class="tags-links">
                             <?php the_tags('', '', ''); ?>
                         </div>
                    </footer>
                
                </article>

                <div class="comments-area">
                    <?php 
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif; 
                    ?>
                </div>

            <?php endwhile; endif; ?>
        </main>

        <aside class="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </aside>

    </div>
</div>

<?php get_footer(); ?>
