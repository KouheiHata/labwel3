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
    <section class="section servicesection">
        <!-- 第一セクション -->
        <div class="container">
            <h2 class="f-section-h2 fadein">
                事業一覧<br>
                <span class="h2-small">service</span>
            </h2>
            <div class="grid-box service-index mt100 fadein">
                <div class="box-item box-item1">
                    <button class="index-btn"><a href="#coast-cleaning">海岸清掃</a></button>
                </div>
                <div class="box-item box-item2">
                    <button class="index-btn"><a href="#waste-gathering">戸別収集</a></button>
                </div>
                <div class="box-item box-item3">
                    <button class="index-btn"><a href="#life-support">高齢者生活支援</a></button>
                </div>
                <div class="box-item box-item4">
                    <button class="index-btn"><a href="#temple-clean">寺院清掃</a></button>
                </div>
                <div class="box-item box-item5">
                    <button class="index-btn"><a href="#cleaning">清掃・クリーニング</a></button>
                </div>
				<!--
                <div class="box-item box-item6">
                    <button class="index-btn"><a href="#kelp-selling">おぼろ昆布・加工販売</a></button>
                </div>
-->
                <div class="box-item box-item7">
                    <button class="index-btn"><a href="#lunchbox">お弁当・調理販売</a></button>
                </div>
                <div class="box-item box-item8">
                    <button class="index-btn"><a href="#cleaning2">特別清掃</a></button>
				</div>
            </div>
            
        </div>
    </section><!-- 第一セクション　終了 -->
    <section class="section-works">
        <header class="works-header fadein">
            <div class="container">
                <h2 class="works-heading fadein" id="coast-cleaning">
                    海岸清掃<br>
                    <span class="h2-small">COAST CLEANING</span>
                </h2>
            </div>
        </header>
        <div class="flex-box works-gallery">
            <div class="flex-item flex-item-img fadein">
                <img src="https://labwel.jp/wp-content/uploads/2022/05/S__2818103.jpg" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item-text fadein">
                <p>敦賀市認可のもと年間を通して車浦地田を中心に海岸清掃をしております。</p>
                <p>廃プラスチックなどの海外からの漂着物を回収し、武生環境清掃センターへ搬出しております。</p>
            </div>
        </div>
        <header class="works-header fadein">
            <div class="container">
                <h2 class="works-heading fadein" id="waste-gathering">
                    戸別収集<br>
                    <span class="h2-small">WASTE GATHERING</span>
                </h2>
            </div>
        </header>
        <div class="flex-box works-gallery d-none d-lg-flex">
            <div class="flex-item flex-item-text fadein">
                <p>一般廃棄物収集・運搬許可を敦賀市よりいただきご家庭の不用品や、粗大ゴミの分別、回収を行っています。</p>
            </div>
            <div class="flex-item flex-item-img fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/waste-gathering.jpg')); ?>" alt="" loading="lazy">
            </div>
        </div>
        <div class="flex-box works-gallery d-xl-none d-md-flex">
            <div class="flex-item flex-item-img fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/waste-gathering.jpg')); ?>" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item-text fadein">
                <p>一般廃棄物収集・運搬許可を敦賀市よりいただきご家庭の不用品や、粗大ゴミの分別、回収を行っています。</p>
            </div>
        </div>
        <header class="works-header fadein">
            <div class="container">
                <h2 class="works-heading fadein" id="life-support">
                    高齢者生活支援<br>
                    <span class="h2-small">LIFE SUPPORT</span>
                </h2>
            </div>
        </header>
        <div class="flex-box works-gallery">
            <div class="flex-item flex-item-img fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/life-support.jpg')); ?>" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item-text fadein">
                <p>高齢者の生活支援として、お家のお掃除、お庭の草むしり、朝のゴミ出し（回収）を行っております。</p>
            </div>
        </div>
        <header class="works-header fadein">
            <div class="container">
                <h2 class="works-heading fadein" id="temple-clean">
                    寺院清掃<br>
                    <span class="h2-small">TEMPLE CLEANING</span>
                </h2>
            </div>
        </header>
        <div class="flex-box works-gallery d-none d-lg-flex">
            <div class="flex-item flex-item-text fadein">
                <p>国指定重要文化財「西福寺」や１３９５年開創の由緒と歴史的伝統ある「永建寺」の寺内外の定期清掃を行っております。</p>
            </div>
            <div class="flex-item flex-item-img fadein">
                <img src="https://labwel.jp/wp-content/uploads/2022/06/matusima.jpg" alt="" loading="lazy">
            </div>
        </div>
        <div class="flex-box works-gallery d-xl-none d-md-flex">
            <div class="flex-item flex-item-img fadein">
                <img src="https://labwel.jp/wp-content/uploads/2022/06/matusima.jpg" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item-text fadein">
                <p>国指定重要文化財「西福寺」や１３９５年開創の由緒と歴史的伝統ある「永建寺」の寺内外の定期清掃を行っております。</p>
            </div>
        </div>
        <header class="works-header fadein">
            <div class="container">
                <h2 class="works-heading fadein" id="cleaning">
                    清掃・クリーニング<br>
                    <span class="h2-small">CLEANING</span>
                </h2>
            </div>
        </header>
        <div class="flex-box works-gallery">
            <div class="flex-item flex-item-img fadein">
                <img src="https://labwel.jp/wp-content/uploads/2022/06/senn.jpg" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item-text fadein">
                <p>敦賀市の病院で働く、医師看護士さんのタオルを回収し、洗濯・クリーニングしております。</p>
            </div>
        </div>
		<!--
        <header class="works-header fadein">
            <div class="container">
                <h2 class="works-heading fadein" id="kelp-selling">
                    おぼろ昆布・加工販売<br>
                    <span class="h2-small">KELP SELLING</span>
                </h2>
            </div>
        </header>
        <div class="flex-box works-gallery d-none d-lg-flex">
            <div class="flex-item flex-item-text fadein">
                <p>北前船で知られる北海道の真昆布を、LABwelの昆布かき職人が真心を込めて加工し、販売しています。</p>
            </div>
            <div class="flex-item flex-item-img fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/kelp-selling.jpg')); ?>" alt="" loading="lazy">
            </div>
        </div>
        <div class="flex-box works-gallery d-xl-none d-md-flex">
            <div class="flex-item flex-item-img fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/kelp-selling.jpg')); ?>" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item-text fadein">
                <p>北前船で知られる北海道の真昆布を、LABwelの昆布かき職人が真心を込めて加工し、販売しています。</p>
            </div>
        </div>
-->
        <header class="works-header fadein">
            <div class="container">
                <h2 class="works-heading fadein" id="lunchbox">
                    お弁当・調理販売<br>
                    <span class="h2-small">LUNCH BOX</span>
                </h2>
            </div>
        </header>
        <div class="flex-box works-gallery">
            <div class="flex-item flex-item-img fadein">
                <img src="https://labwel.jp/wp-content/uploads/2022/06/fb53e8fd9a66cfacc82a3c1b9b927db0.jpg" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item-text fadein">
                <p>LABwelの調理のプロがお客様のご要望に合わせてお弁当を調理、販売しております。お弁当の内容や価格などもご相談承ります。</p>
            </div>
        </div>
        <header class="works-header fadein">
            <div class="container">
                <h2 class="works-heading fadein" id="cleaning2">
                    特別清掃<br>
                    <span class="h2-small">CLEANING</span>
                </h2>
            </div>
        </header>
        <div class="flex-box works-gallery d-none d-lg-flex">
            <div class="flex-item flex-item-text fadein">
                <p>会社の駐車場の除草作業、一般家庭のお庭の草むしり・剪定作業など特殊な清掃も行っております。</p>
            </div>
            <div class="flex-item flex-item-img fadein">
                <img src="https://labwel.jp/wp-content/uploads/2022/05/S__24084504.jpg" alt="" loading="lazy">
            </div>
        </div>
        <div class="flex-box works-gallery d-xl-none d-md-flex">
            <div class="flex-item flex-item-img fadein">
                <img src="https://labwel.jp/wp-content/uploads/2022/05/S__24084504.jpg" alt="" loading="lazy">
            </div>
            <div class="flex-item flex-item-text fadein">
                <p>会社の駐車場の除草作業、一般家庭のお庭の草むしり・剪定作業など特殊な清掃も行っております。</p>
            </div>
        </div>
    </section>


</main><!-- main end -->

<?php get_footer(); ?>