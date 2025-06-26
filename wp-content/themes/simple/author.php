<?php get_header(); ?>

    <div class="main">
        <div class="container">
           <h2>At the author page</h2>
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                    <article class="post">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <?php echo '<h2>'.apply_filters('excerpt_length', 55).'</h2>'; ?>
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </div>
                        <?php endif; ?>
                        <div>
                            Created By
                            <a href="<?php echo get_author_posts_url(
                                get_the_author_meta('ID')); ?>">
                                <?php the_author(); ?>
                            </a>
                        </div>
                        <p class="post-meta">
                            Posted on <?php echo get_the_date(); ?> by <?php the_author(); ?>
                        </p>
                        <?php the_excerpt(); ?>
                        <div>
                            <a class="button" href="<?php the_permalink(); ?>">
                                Read More
                            </a>
                        </div>
                    </article>
                    
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found.'); ?>
            <?php endif; ?>
        </div>
        <div class="sidebar">
        <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
      </div>

      <div class="clr"></div>
    </div>
    
<?php wp_footer(); ?>
