<?php get_header(); ?>


<h3>A la Une</h3>
<div class="contain">
    
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    
        
        <hr>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <?php the_post_thumbnail();?>
        <?php get_sidebar(); ?>
    </div>
    
    
    <?php endwhile; endif; ?>
   
    


</div>

<?php get_footer(); ?>