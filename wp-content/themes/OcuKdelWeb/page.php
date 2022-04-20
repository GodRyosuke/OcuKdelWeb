<?php get_header(); ?>
    
    <section class="sub-header" id="sub-header">
        <div class="content">
            <h2><?php the_title(); ?></h2>
        </div>
    </section>
 
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
    endif;
    ?>

<?php get_footer(); ?>