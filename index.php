

<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="contain">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>
        <?php the_post_thumbnail();?>
    <?php endwhile; endif; ?>
    
</div>

<?php get_footer(); ?>