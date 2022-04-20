<?php get_header(); ?>
    
    <section class="sub-header" id="sub-header">
        <div class="content">
            <h2>    
                <?php
                // カテゴリ名出力
                $cat_obj = get_the_category();
                echo $cat_obj[0]->name;
                ?></h2>
        </div>
    </section>

    <section class="main-blog-content">
        <div class="categories">
            <a href="
            <?php
            $categs = get_the_category();
            foreach($categs as $cat) {
                echo get_category_link($cat->term_id);
            }?>
            "><span class="category">
                <?php
                // カテゴリ名出力
                $cat_obj = get_the_category();
                echo $cat_obj[0]->name;
                ?></span></a>
            <span class="date"><?php the_time('Y.m.d'); ?></span>
        </div>
        <div class="container">
        <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>

    </section>



<?php get_footer(); ?>