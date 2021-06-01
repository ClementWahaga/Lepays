<?php get_header(); ?>



<div class="contain">
    
    <h2>à la une <h2>
        
    <span>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, nihil incidunt nobis tenetur aperiam adipisci temporibus. Sequi iure veritatis distinctio aliquam, sint excepturi quibusdam assumenda, id officia laborum autem minus!
    </span>
    


</div>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>