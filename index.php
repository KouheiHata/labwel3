<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (is_front_page()) : ?>
            <?php bloginfo('name'); ?>

        <?php elseif (is_home()) : ?>
            ブログ｜<?php bloginfo('name'); ?>

        <?php elseif (is_page()) : ?>
            <?php wp_title(''); ?>｜<?php bloginfo('name'); ?>

        <?php elseif (is_single()) : ?>
            <?php wp_title(''); ?>｜<?php bloginfo('name'); ?>

        <?php elseif (is_category()) : ?>
            <?php single_cat_title() ?>の記事一覧｜<?php bloginfo('name'); ?>

        <?php elseif (is_month()) : ?>
            <?php the_time("Y年m月") ?>の記事一覧｜<?php bloginfo('name'); ?>

        <?php elseif (is_year()) : ?>
            <?php the_time("Y年") ?>の記事一覧｜<?php bloginfo('name'); ?>

        <?php elseif (is_search()) : ?>
            検索結果｜<?php bloginfo('name'); ?>

        <?php elseif (is_404()) : ?>
            ページが見つかりません｜<?php bloginfo('name'); ?>

        <?php else : ?>
            <?php bloginfo('name'); ?>

        <?php endif; ?>
    </title>
    <meta name="description" content="株式会社LABwelは福井県敦賀市にある、お仕事を通して自分の存在価値・やる気・新たな能力の発見など、利用者さんの成長に繋がる自立を支援をする会社です。">
    <meta name="keywords" content="labwel, ラボウェル, ラボエル, Labwel, fukui, 福井県, turuga, 敦賀市, 就労継続支援">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ontouchstart>

    <div class="wrapper">
        <!-- wrapper start -->

        <header id="f-header" class="f-header">
            <!-- header start▼ -->
            <div class="container-fluid">
                <div class="row align-content-center">
                    <div class="nav-wrap">
                        <div class="container">
                            <nav class="flex-box">
                                <h1 class="logo">
                                    <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="LABWEL">
                                </h1>
                                <ul class="nav-top flex-box">
                                    <li><a href="#">会社情報</a></li>
                                    <li><a href="#">事務所のご案内</a></li>
                                    <li><a href="#">お仕事の内容</a></li>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#" class="contact-button">お問い合わせ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <img src="<?php echo esc_url(get_theme_file_uri('images/main-slide1.jpg')); ?>" alt="メインイメージ｜海岸清掃" loading="lazy">
                </div>
            </div>
        </header><!-- header end -->


        <main id="f-main" class="f-main">
            <!-- main start▼ -->
            <section class="f-section">
                <div class="container">
                    <div class="f-section-inner">
                        <h2 class="f-section-h2">
                            A型事業所
                            <span class="h2-large">Type A Welfare</span><br>
                            <span class="h2-small">type A</span>
                        </h2>
                        <p class="f-content-p mt100">やりがいの見つかるA型</p>
                        <p class="f-content-p mt100">バリエーション豊富なお仕事だから、自分のやりがいにつながる得意なお仕事がきっと見つかります。</p>
                        <button class="f-button mt100"><a href="#" target="_blank">詳しくはこちら</a></button>
                        <img src="<?php echo esc_url(get_theme_file_uri('images/typea-work.jpg')); ?>" alt="A型｜海岸清掃" loading="lazy" class="f-section-image1">
                    </div>
                </div>
            </section>
            <section class="f-section">
                <div class="container">
                    <div class="f-section-inner f-section-inner2">
                        <h2 class="f-section-h2">
                            B型事業所
                            <span class="h2-large">Type B Welfare</span><br>
                            <span class="h2-small">type B</span>
                        </h2>
                        <p class="f-contenr-p mt100">自分の居場所が見つかるB型</p>
                        <p class="f-content-p mt100">みんなとお仕事するのが楽しくなる。</p>
                        <p class="f-contenr-p">そんな働きやすい環境と楽しい人間関係づくりこだわりました。</p>
                        <button class="f-button mt100"><a href="#" target="_blank">詳しくはこちら</a></button>
                        <img src="<?php echo esc_url(get_theme_file_uri('images/typeb-work.jpg')); ?>" alt="B型｜寺院清掃" loading="lazy" class="f-section-image2">
                    </div>
                </div>
            </section>
            <section class="f-section">
                <div class="container">
                    <div class="f-section-inner">
                        <h2 class="f-section-h2">
                            共同生活援助（グループホーム）
                            <span class="h2-large">Group Home</span><br>
                        </h2>
                        <h2 class="f-section-h2">
                            LIFE Ipppo!和久野<br>
                            <span class="h2-small">group home</span>
                        </h2>
                        <p class="f-content-p mt100">自分の住む場所が見つかる『グループホーム』</p>
                        <p class="f-content-p mt100">住みやすい環境と安心を与えられる家づくりにこだわりました。</p>
                        <button class="f-button mt100"><a href="#" target="_blank">詳しくはこちら</a></button>
                        <img src="<?php echo esc_url(get_theme_file_uri('images/grouphome-image.jpg')); ?>" alt="LIFE Ipppo和久野" loading="lazy" class="f-section-image1">
                    </div>
                </div>
            </section>
            <section class="f-section">
                <div class="container">
                    <h2 class="f-section-h2">
                        お仕事の一覧<br>
                        <span class="h2-small">works</span>
                        <span class="h2-large">Works</span>
                    </h2>

                    <div class="flex-box f-work-gallery1 mt100">
                        <div class="flex-item flex-item1">
                            <h3>海岸清掃</h3>
                            <p class="gallery-more">READ MORE&nbsp;>></p>
                            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/coast-clean1.jpg')); ?>" loading="lazy" alt="海岸清掃"></a>
                        </div>
                        <div class="flex-item flex-item2">
                            <h3>戸別収集</h3>
                            <p class="gallery-more">READ MORE&nbsp;>></p>
                            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/waste-gathering.jpg')); ?>" loading="lazy" alt="戸別収集"></a>

                        </div>
                        <div class="flex-item flex-item3">
                            <h3>高齢者生活支援</h3>
                            <p class="gallery-more">READ MORE&nbsp;>></p>
                            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/life-support.jpg')); ?>" loading="lazy" alt="高齢者生活支援"></a>
                        </div>
                    </div>
                    <div class="flex-box f-work-gallery2">
                        <div class="flex-item flex-item1">
                            <h3>寺院清掃</h3>
                            <p class="gallery-more">READ MORE&nbsp;>></p>
                            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/temple-clean.jpg')); ?>" loading="lazy" alt="寺院清掃"></a>
                        </div>
                        <div class="flex-item flex-item2">
                            <h3>洗濯・クリーニング</h3>
                            <p class="gallery-more">READ MORE&nbsp;>></p>
                            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/cleaning.jpg')); ?>" loading="lazy" alt="洗濯・クリーニング"></a>
                        </div>
                    </div>
                    <div class="flex-box f-work-gallery1">
                        <div class="flex-item flex-item1">
                            <h3>おぼろ昆布・加工販売</h3>
                            <p class="gallery-more">READ MORE&nbsp;>></p>
                            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/kelp-selling.jpg')); ?>" loading="lazy" alt="おぼろ昆布・加工販売"></a>
                        </div>
                        <div class="flex-item flex-item2">
                            <h3>弁当・調理販売</h3>
                            <p class="gallery-more">READ MORE&nbsp;>></p>
                            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/lunchbox.jpg')); ?>" loading="lazy" alt="弁当・調理販売"></a>
                        </div>
                        <div class="flex-item flex-item3">
                            <h3>特別清掃</h3>
                            <p class="gallery-more">READ MORE&nbsp;>></p>
                            <a href="#"><img src="<?php echo esc_url(get_theme_file_uri('images/cleaning2.jpg')); ?>" loading="lazy" alt="特別清掃"></a>
                        </div>
                    </div>

                </div>
            </section>
        </main><!-- main end -->

        <footer id="f-footer" class="f-footer">
            <!-- footer start▼ -->
            <div class="container">
                <div class="flex-box mb40">
                    <div class="flex-item">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="Labwel" class="logo" loading="lazy">
                        <p><small class="ultra-gray">©&nbsp;Labwel. All Right Reserved.</small></p>
                    </div>
                    <div class="flex-item">
                        <ul class="flex-box footer-nav">
                            <li><a href="#">会社情報</a></li>
                            <li><a href="#">事務所のご案内</a></li>
                            <li><a href="#">お仕事の内容</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">お問い合わせ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex-box">
                    <div class="flex-item">
                        <p class="table-title">本社事業所</p>

                        <table class="footer-table">
                            <tbody>
                                <tr>
                                    <td>〒&nbsp;914-0131</td>
                                </tr>
                                <tr>
                                    <td>福井県敦賀市公文名&nbsp;51-10-1</td>
                                </tr>
                                <tr>
                                    <td>TEL&nbsp;0770-47-6526</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </footer><!-- footer end -->
    </div><!-- wrapper end -->
    <?php wp_footer(); ?>
</body>

</html>