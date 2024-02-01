<?php get_header(); ?>


<div class="post-content">
    <div class="content-wrap">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
            <article class="the_article">
                <div class="thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <div class="main-content">
                    <?php echo get_the_date(); ?>
                    <?php echo get_the_category_list(' '); ?>
                    <?php echo get_the_tag_list(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>

                </div>
            </article>
            <?php endwhile?>
        <?php endif?>
    </div>
</div>








<?php get_footer(); ?>