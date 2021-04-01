<?php
/* Template Name: 事務所のご案内 */
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
        <div class="container">
            <h2 class="f-section-h2">
                A型事業所
                <span class="h2-large">Type A Welfare</span>
            </h2>
            <div class="section-boxleft">
                <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo.png')); ?>" alt="ipppo" loading="lazy">
                <img src="<?php echo esc_url(get_theme_file_uri('images/+ipppo.png')); ?>" alt="+ipppo" loading="lazy" class="ml100">
                <img src="<?php echo esc_url(get_theme_file_uri('images/a-copy_03.png')); ?>" alt="やりがい見つかる「A型」" loading="lazy" class="mt50">
                <p class="mt50">バリエーション豊富なお仕事内容だから自分のやりがいにつながる得意なお仕事がきっと見つかります。</p>
            </div>
            <div class="section-boxright">
                <img src="<?php echo esc_url(get_theme_file_uri('images/kelpslice.jpg')); ?>" alt="" loading="lazy">
            </div>
            <div class="clearfix"></div>
            <h2 class="page-article-title mt100">サービス利用開始までの流れ</h2>

            <ul class="side-scroll-content mt40">
                <li class="scroll-content-card">
                    <p title class="content-card-title">1.ハローワークからの紹介</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/exam1.jpg')); ?>" alt="" loading="lazy">
                    <div class="card-content-inner">
                        <p description>ハローワークで紹介状をもらい、面接の日程を調整してもらいます。
                        </p>
                        <p description>※面接の前に見学をしてもらうことも可能です。</p>
                    </div>
                </li>
                <li class="scroll-content-card">
                    <p title class="content-card-title">2.事業所との面接</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/exam2.jpg')); ?>" alt="" loading="lazy">
                    <div class="card-content-inner">
                        <p description>面接を行います。アセスメントの日程調整も行います。</p>
                        <p description>持ち物として履歴書、紹介状、医師の診断書が必要になります。</p>
                    </div>
                </li>
                <li class="scroll-content-card">
                    <p title class="content-card-title">3.事業所でのアセスメント</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/exam3.jpg')); ?>" alt="" loading="lazy">
                    <div class="card-content-inner">
                        <p description>職場を体験していただきます。</p>
                        <p description>なおこの期間は賃金は発生いたしません。</p>
                    </div>
                </li>
                <li class="scroll-content-card">
                    <p title class="content-card-title">4.採用通知および、ご利用手続き</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('images/exam4.jpg')); ?>" alt="" loading="lazy">
                    <div class="card-content-inner">
                        <p description>採用通知が届いた場合、各市町や、相談支援事業所などと連絡を取り、受給者証発行の 手続きを行ないます。</p>
                    </div>
                </li>
            </ul>

        </div>
    </section>
    <section class="section"></section>
    <section class="section"></section>

</main><!-- main end -->

<?php get_footer(); ?>