<?php get_header(); ?>
    
    <section class="sub-header" id="sub-header">
        <div class="content">
            <h2><?php single_cat_title(); ?></h2>
        </div>
    </section>

    <section class="blog-content">
        <div class="cards">
<?php
$paged = get_query_var('paged', 1)?:1;
if (have_posts()):
    while (have_posts()):
        the_post();
?>
            <a href="<?php the_permalink(); ?>">
                <div class="card">
                    <?php the_post_thumbnail(); ?>
                    <!-- <img src="./assets/img/cafeteria.png" alt=""> -->
                    <div class="desc">
                        <div class="categories">
                            <span class="category">
                            <?php
                            // カテゴリ名出力
                            $cat_obj = get_the_category();
                            echo $cat_obj[0]->name;
                            ?>
                            </span>
                            <span class="date"><?php the_time('Y.m.d'); ?></span>
                        </div>
                        <h3><?php echo the_title(); ?></h3>
                        <div class="desc-content">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                    </div>
                </div>          
            </a>
<?php
    endwhile;
endif;
?>
        </div>
        
<?php
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if ($pages > 1): // ページが2つ以上ならページネーション
    $range = ($pages > 5) ? 5 : $pages;
?>
        <div class="pagenation">
            <div class="pagenate-boxes">
                <?php
                    if ($range + 1 <= $paged): // 1ページ目表示
                ?>
                <a href="<?php echo esc_url(get_pagenum_link(1)); ?>" class="pagenate-box">
                    <div class="cover">
                        <span><i class="fas fa-angle-double-left"></i></span>
                    </div>
                </a>
                <?php endif; ?>
                <?php
                if ($paged > 1):    // < 表示
                ?>
                <a href="<?php echo esc_url(get_pagenum_link($paged - 1)); ?>" class="pagenate-box">
                    <div class="cover">
                        <span><i class="fa fa-angle-left"></i></span>
                    </div>
                </a>
                <?php endif; ?>
                <?php            
                    if ($paged <= floor($range / 2)): // 最初のrange
                        for ($i = 1; $i <= $range; $i++):
                ?>
                <a href="<?php echo esc_url(get_pagenum_link($i)); ?>" class="pagenate-box <?php if ($i == $paged){ echo "current"; } ?>">
                    <div class="cover">
                        <span><?php echo $i; ?></span>
                    </div>
                </a>
                <?php
                        endfor;
                    elseif ($paged + floor($range / 2) <= $pages):
                        for ($i = 0; $i < $range; $i++): // 中間のrange
                            $pagenum = $paged - floor($range / 2) + $i; // ページ番号
                ?>    
                <a href="<?php echo esc_url(get_pagenum_link($pagenum)); ?>" class="pagenate-box <?php if ($pagenum == $paged){ echo "current"; } ?>">
                    <div class="cover">
                        <span><?php echo $pagenum; ?></span>
                    </div>
                </a>
                <?php
                        endfor;
                    else:
                        for ($i = $pages - $range + 1;  $i <= $pages; $i++): // ラストのrange
                ?>
                <a href="<?php echo esc_url(get_pagenum_link($i)); ?>" class="pagenate-box <?php if ($i == $paged){ echo "current"; } ?>">
                    <div class="cover">
                        <span><?php echo $i; ?></span>
                    </div>
                </a>
                <?php
                        endfor;
                    endif;
                ?>
                <?php
                    if ($paged < $pages):   // > 表示
                ?>
                <a href="<?php echo esc_url(get_pagenum_link($paged + 1)); ?>" class="pagenate-box">
                    <div class="cover">
                        <span><i class="fa fa-angle-right"></i></span>
                    </div>
                </a>
                <?php endif; ?>
                <?php if ($paged <= $pages - $range): // ラストページ表示 ?>
                <a href="<?php echo esc_url(get_pagenum_link($pages)); ?>" class="pagenate-box">
                    <div class="cover">
                        <span><i class="fas fa-angle-double-right"></i></span>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>
    </section>

<?php get_footer(); ?>