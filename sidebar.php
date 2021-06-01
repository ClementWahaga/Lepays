<?php get_sidebar('primary'); ?>
    <div id="sidebar-primary" class="aside">
       
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar " ) ) : ?> <?php endif; ?>
    </div>
</div>
