<?php get_header(); ?>

    <div class="main">
        <?php get_sidebar(); ?>
        <div class="clr"></div>
        <div class="container">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                    <article class="post">
                        <h2><?php the_title(); ?></h2>
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <?php the_content(); ?>
                        
                    </article>
                    
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found.'); ?>
            <?php endif; ?>
        </div>
    </div>
    
<?php wp_footer(); ?>
