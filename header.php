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

<body <?php body_class(); ?> ontouchstart="">

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
                                    <a href="<?php echo esc_url(home_url('/')) ?>">
                                    <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="LABWEL">
                                    </a>
                                </h1>
                                <ul class="nav-top flex-box">
                                    <li><a href="#" class="header-menu-item">会社情報</a></li>
                                    <li><a href="#" class="header-menu-item">事務所のご案内</a></li>
                                    <li><a href="#" class="header-menu-item">お仕事の内容</a></li>
                                    <li><a href="#" class="header-menu-item">Facebook</a></li>
                                    <li><a href="#" class="contact-button">お問い合わせ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <img src="<?php echo esc_url(get_theme_file_uri('images/main-slide1.jpg')); ?>" alt="メインイメージ｜海岸清掃" loading="lazy">
                </div>
            </div>
        </header><!-- header end -->