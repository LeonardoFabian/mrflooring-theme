<?php
get_header();
    while (have_posts()) : the_post();     
        ?>
        <h1 class="text-2xl"><?php the_title(); ?></h1>
        <?php 
    endwhile;
get_footer();
?>