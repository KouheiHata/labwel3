<?php
/* Template Name: 事業一覧 */
get_header(); ?>

<main id="main" class="main">
    <!-- main start -->

    <?php if (have_posts()) : // 投稿が1件以上ある場合 
    ?>
        <!-- 投稿があった場合のみ冒頭に表示させる要素 -->
        <?php while (have_posts()) : // 投稿の表示条件を満たす間は繰り返す 
        ?>
            <?php the_post(); // データ1件分を取り出して渡す 
            ?>
            <!-- ループ内で繰り返し表示させる要素（ブログ記事など） -->
        <?php endwhile; //　投稿ループ終了
        ?>
    <?php else : //もし表示すべき投稿が無かったら 
    ?>
        <!-- 投稿が1件もない場合のみ表示させる要素（「あてはまる情報はまだありません。」など） -->
        <h2>まだ投稿がありません。<br>管理画面へ記事を投稿してください。</h2>
    <?php endif; // 条件分岐終了 
    ?>
    <section class="section">
        <!-- 第一セクション -->
        <div class="container">
            <h2 class="f-section-h2">
                事業一覧<br>
                <span class="h2-small">service</span>
            </h2>
            <div class="grid-box service-index mt100">
                <div class="box-item box-item1">
                    <button class="index-btn"><a href="#">海岸清掃</a></button>
                </div>
                <div class="box-item box-item2">
                    <button class="index-btn"><a href="#">戸別収集</a></button>
                </div>
                <div class="box-item box-item3">
                    <button class="index-btn"><a href="#">高齢者生活支援</a></button>
                </div>
                <div class="box-item box-item4">
                    <button class="index-btn"><a href="#">寺院清掃</a></button>
                </div>
                <div class="box-item box-item5">
                    <button class="index-btn"><a href="#">清掃・クリーニング</a></button>
                </div>
                <div class="box-item box-item6">
                    <button class="index-btn"><a href="#">おぼろ昆布・加工販売</a></button>
                </div>
                <div class="box-item box-item7">
                    <button class="index-btn"><a href="#">お弁当・調理販売</a></button>
                </div>
                <div class="box-item box-item8">
                    <button class="index-btn"><a href="#">特別清掃</a></button>
                </div>
            </div>
        </div>
    </section><!-- 第一セクション　終了 -->

    <section class="section-works">
        <header class="works-header">
            <div class="container">
                <h2 class="works-heading">海岸清掃</h2>
                <small>COAST CLEANING</small>
            </div>

        </header>
        <div class="flex-box works-gallery">
            <div class="flex-item flex-item1">
                <img src="<?php echo esc_url(get_theme_file_uri('images/coast-clean1.jpg')); ?>" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item2">
                
            </div>
        </div>
        <div class="flex-box">

        </div>
    </section>


</main><!-- main end -->

<?php get_footer(); ?>