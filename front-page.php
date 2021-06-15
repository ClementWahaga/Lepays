<?php get_header(); ?>


<h3>A la Une</h3>
<?php get_sidebar(); ?>
<div class="contain">
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    
        
        <hr>
        <h1><?php the_title(); ?></h1>
        <div class="art"><?php the_post_thumbnail();?>
        <?php the_content(); ?></div>
        
    </div>
    
    <?php endwhile; endif; ?>
   
    


</div>

<?php get_footer(); ?>