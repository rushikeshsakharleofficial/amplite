<?php get_header(); ?>

<div class="container">
    <div class="main-layout">
        <!-- Main Content Area (Full width on Home) -->
        <main class="content-area" style="flex: 100%;">
            <?php if (have_posts()) : the_post(); ?>
            <div class="hero-post" style="margin-bottom: 2rem; position: relative; border-radius: 12px; overflow: hidden; height: 350px;">
                <?php if (has_post_thumbnail()) { the_post_thumbnail('large', array('style' => 'width:100%; height:100%; object-fit:cover;')); } ?>
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 2rem; color: white;">
                   <h2 style="font-size: 2rem; margin: 0;"><?php the_title(); ?></h2>
                   <p><?php echo get_the_excerpt(); ?></p>
                   <a href="<?php the_permalink(); ?>" style="background: var(--primary); color: white; padding: 5px 10px; border-radius: 4px; text-decoration:none;">Read Now</a>
                </div>
            </div>
            <?php endif; ?>

            <h3 style="border-left: 4px solid var(--primary); padding-left: 10px; margin-bottom: 1.5rem;">Latest Posts</h3>

            <div class="post-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <div class="card-img">
                            <?php if (has_post_thumbnail()) { the_post_thumbnail('medium', array('style' => 'width:100%; height:100%; object-fit:cover;')); } ?>
                            <span class="card-cat"><?php the_category(', '); ?></span>
                        </div>
                        <div class="card-body">
                            <div style="font-size: 0.75rem; color: #888; margin-bottom: 0.5rem;">
                                <?php echo get_the_date(); ?> | <?php the_author(); ?>
                            </div>
                            <h3 style="margin: 0 0 0.5rem 0; font-size: 1.1rem;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p style="font-size: 0.9rem; color: #666; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read Article &rarr;</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination" style="margin-top: 2rem; text-align: center;">
                <?php echo paginate_links(); ?>
            </div>
        </main>
        
        <!-- No Sidebar here -->
    </div>
</div>

<?php get_footer(); ?>
