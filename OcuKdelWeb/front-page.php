<?php get_header(); ?>

    <section class="banner" id="banner">
        <div class="content">
            <h2>OSAKA METROPOLITAN UNIVERSITY <span>KDEL</span></h2>
            <p>私たちの研究室では，機械・情報工学をベースとしたロボット技術を活用し，社会に応用されるロボットのシステム開発に挑戦していきます．</p>
<?php
$args = array(
    'page_id' => 16
);
$query = new WP_Query($args);
if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();

?>
            <a href="<?php the_permalink(); ?>" class="btn">Contact Us</a>
<?php
        endwhile;
    endif;
    wp_reset_postdata();
?>
        </div>
    </section>

    <section class="news">
        <h1>NEWS</h1>
        <div class="content">
<?php
    $paged = get_query_var('paged', 1)?:1;
    $args = array(
        'category_name' => 'news',
        'posts_per_page' => 6,
        'paged' => $paged,
    );
    $my_posts = new WP_Query($args);
    if ($my_posts->have_posts()):
        while ($my_posts->have_posts()):
            $my_posts->the_post();
?>
            <div class="news-row">
                <div class="date"><span><?php  the_time('Y.m.d'); ?></span></div>
                <div class="news-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            </div>
<?php
        endwhile;
    endif;
?>
        </div>
    </section>

    <section class="professor">
        <h1>About</h1>
        <div class="row">
            <div class="pro-col">
                <p>多脚ロボットや人間型ロボットの運動制御について研究を行っています．<br>機械工学と情報工学の観点から知的な運動生成を実現することで，将来的に実応用可能な多肢をもつロボットの開発を目指しています．また，多肢ロボットを扱う技術を応用することで，人間の移動を補助することを目的とした履物型移動装置の開発を行っています．ロボットを扱う，ひいては，モノを扱うことを考えた研究・開発は機械的な側面だけや情報処理の側面だけを見て実現できるものではありません．双方の知識による対象の理解と実装が理想通りに行われたときに目的とした制御が実現されます．私たちの研究室では，機械・情報工学をベースとしたロボット技術を活用し，社会に応用されるロボットのシステム開発に挑戦していきます．</p>
<?php
$args = array(
    'page_id' => 10
);
$query = new WP_Query($args);
if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();

?>
                <a href="<?php the_permalink(); ?>" class="btn">More details</a>
<?php
        endwhile;
    endif;
    wp_reset_postdata();
?>
            </div>
            <div class="pro-col">
                <div class="imgBx">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testi2.jpg" alt="">
                </div>
                <h2>田窪　朋仁（教授）</h2>
            </div>
        </div>
    </section>

    <section class="research">
        <h1>Research</h1>
        <p>私達の研究室では、主に4つの研究テーマに取り組んでいます。</p>
        <div class="row">
            <div class="res-col">
                <div class="desc">
                    <h2>Asterisk</h2>
                    <p>腕脚統合型ロボット "ASTERISK" のセンサ情報を用いた障害物回避手法を提案し，狭隘部での移動を実現します。</p>
                </div>
            </div>
            <div class="res-col">
                <div class="desc">
                    <h2>FCSC</h2>
                    <p>World Robot Summitの、Future Conviniense Store Challenge(FCSC)部門に出場しています。
                        移動台車とマニピュレータを用いたスムーズな陳列廃棄計画を実現し、無人コンビニの実現を目指します。
                    </p>
                </div>
            </div>
            <div class="res-col">
                <div class="desc">
                    <h2>Dulcinea</h2>
                    <p>"Dulcinea"とは、我々の自動走行ロボットの名前です。<br>茨城県つくば市で開催される、つくばチャレンジで、所定のルートを通りながら、課題をクリアし、ゴールを目指します。</p>
                </div>
            </div>
            <div class="res-col">
                <div class="desc">
                    <h2>Welding</h2>
                    <p>マニピュレータの手先に取り付けたカメラによって物体を認識して溶接線を導き出し、溶接作業の自動化を目指します。<br>
                        アームの軌道計画はモデル予測制御を用いて、最適な経路を提案する手法を開発しています。</p>
                </div>
            </div>
        </div>
<?php
$args = array(
    'page_id' => 12
);
$query = new WP_Query($args);
if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();

?>
        <a href="<?php the_permalink(); ?>" class="btn">more details</a>
<?php
        endwhile;
    endif;
    wp_reset_postdata();
?>
    </section>

    <section class="publications">
        <h1>Publications</h1>
        <div class="content">
            <div class="pub-row">
                <span class="year">2020</span>
                <ul>
                    <li>Yuta Otani, Atsushi Ueno and Tomohito Takubo, "Android Malware Classification Using Flattened Image Representation and SENet", ICIC Express Letters, Part B, Applications: An International Journal of Research and Surveys, Vol. 11, No. 8, pp. 761-766, Aug. 2020.</li>
                </ul>
            </div>
            <div class="pub-row">
                <span class="year">2019</span>
                <ul>
                    <li>Katsuyuki Shimoyama, Atsushi Ueno, Tomohito Takubo, "An Evaluation of Web Article Similarity Based on User Comments", ICIC Express Letters, Vol. 13, No. 5, pp. 409-413, May 2019.</li>
                    <li>Atsushi Ueno, Yuu Kamoda, Tomohito Takubo, "A Spoiler Detection Method for Japanese-Written Reviews of Stories", International Journal of Innovative Computing, Information and Control, Vol. 15, No. 1, pp. 189-198, Feb. 2019.</li>
                </ul>
            </div>
            <div class="pub-row">
                <span class="year">2018</span>
                <ul>
                    <li>Atsushi Ueno, Masaki Sakamoto, Tomohito Takubo, "A Method for Detecting Werewolves in the Werewolf Game Based on Vector Representations of Words", ICIC Express Letters, Vol. 12, No. 4, pp. 313-319, Apr. 2018.</li>
                </ul>
            </div>
            <div class="pub-row">
<?php
$args = array(
    'page_id' => 14
);
$query = new WP_Query($args);
if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();

?>
                <a href="<?php the_permalink(); ?>" class="btn">see more</a>
<?php
        endwhile;
    endif;
    wp_reset_postdata();
?>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="content">
            <h1>For More Information, <br>Click Below!</h1>
<?php
$args = array(
    'page_id' => 16
);
$query = new WP_Query($args);
if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();

?>
            <a href="<?php the_permalink(); ?>" class="btn">contact us</a>
<?php
        endwhile;
    endif;
    wp_reset_postdata();
?>
        </div>
    </section>

<?php get_footer(); ?>