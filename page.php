<?php get_header(); ?>

<div class="container">
    <div class="main-layout">
        
        <!-- Main Content (Full Width for Pages) -->
        <main class="content-area" style="flex: 100%;">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white dark:bg-gray-800 p-8 rounded-lg border border-gray-200 dark:border-gray-700'); ?>>
                    
                    <header class="entry-header mb-6">
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
                
                </article>

            <?php endwhile; endif; ?>
        </main>

    </div>
</div>

<?php get_footer(); ?>