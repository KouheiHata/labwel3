        <?php get_header(); ?>
        <main id="f-main" class="f-main">
            <!-- main start▼ -->
            <section class="f-news mx-4 mx-lg-auto">
                <header>
                    <h4 class="text-center my-5 py-3">最新情報</h4>
                </header>
                <div>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 5,
                    );
                    $the_query = new WP_Query($args);
                    if( $the_query->have_posts()) : ?>
                    <ul class="news-list">
                        <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="list-item py-3">
                            <a href="<?php the_permalink(); ?>">
                                <span class="post-date d-block d-md-inline pr-lg-5"><?php the_time('Y.m.d'); ?></span>
                                <span class="post-title d-block d-md-inline ml-md-5 pl-lg-5"><?php the_title(); ?></span>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <div class="news-more">
                        <span>もっとみる</span>
                        <a href="<?php echo esc_url(home_url('/archives/post')); ?>"></a>
                    </div>
                    <?php endif;
                        wp_reset_postdata(); ?>
                </div>
            </section>
            <section class="f-section">
                <div class="container">
                    <div class="f-section-inner fadein">
                        <h2 class="f-section-h2 fadein">
                            就労継続支援A型事業所
                            <span class="h2-large">Type A</span><br>
                            <span class="h2-small">type A</span>
                        </h2>
                        <img src="<?php echo esc_url(get_theme_file_uri('images/typea-work.jpg')); ?>" alt="A型｜海岸清掃" loading="lazy" class="f-section-image1 fadein">
                        <p class="f-content-p mt100 fadein">やりがいの見つかるA型</p>
                        <p class="f-content-p mt100 fadein">バリエーション豊富なお仕事だから、自分のやりがいにつながる得意なお仕事がきっと見つかります。</p>
                        <button class="f-button mt100 fadein"><a href="<?php echo esc_url(home_url('office-guide#typea')); ?>" target="_blank">詳しくはこちら</a></button>
                    </div>
                </div>
            </section><!-- 第一セクション終了 -->
            <section class="f-section">
                <div class="container">
                    <div class="f-section-inner f-section-inner2 fadein">
                        <h2 class="f-section-h2 fadein">
                            就労継続支援B型事業所
                            <span class="h2-large">Type B</span><br>
                            <span class="h2-small">type B</span>
                        </h2>
                        <img src="<?php echo esc_url(get_theme_file_uri('images/typeb-work.jpg')); ?>" alt="B型｜寺院清掃" loading="lazy" class="f-section-image2 fadein">
                        <p class="f-contenr-p mt100 fadein">自分の居場所が見つかるB型</p>
                        <p class="f-content-p mt100 fadein">みんなとお仕事するのが楽しくなる。</p>
                        <p class="f-contenr-p fadein">そんな働きやすい環境と楽しい人間関係づくりこだわりました。</p>
                        <button class="f-button mt100 fadein"><a href="<?php echo esc_url(home_url('office-guide#typeb')); ?>" target="_blank">詳しくはこちら</a></button>
                    </div>
                </div>
            </section><!-- 第2セクション終了 -->
            <section class="f-section">
                <div class="container">
                    <div class="f-section-inner fadein">
                        <h2 class="f-section-h2 fadein">
                            共同生活援助（グループホーム）
                            <span class="h2-large">Group Home</span><br>
                        </h2>
                        <h2 class="f-section-h2">
                            LIFE Ipppo!和久野<br>
                            <span class="h2-small">group home</span>
                        </h2>
                        <img src="<?php echo esc_url(get_theme_file_uri('images/grouphome-image.jpg')); ?>" alt="LIFE Ipppo和久野" loading="lazy" class="f-section-image1 fadein">
                        <p class="f-content-p mt100 fadein">自分の住む場所が見つかる『グループホーム』</p>
                        <p class="f-content-p mt100 fadein">住みやすい環境と安心を与えられる家づくりにこだわりました。</p>
                        <button class="f-button mt100 fadein"><a href="<?php echo esc_url(home_url('office-guide#grouphome')); ?>" target="_blank">詳しくはこちら</a></button>
                    </div>
                </div>
            </section>
			<!-- 相談支援セクション開始 -->
			 <section class="f-section consultation">
                <div class="container">
                    <div class="f-section-inner f-section-inner2 fadein">
                        <h2 class="f-section-h2 fadein">
						指定特定相談支援事業所
                        <span class="h2-large">Consultation office</span><br>
                        </h2>
                        <h2 class="f-section-h2">
						らぼうぇる<br>
                            <span class="h2-small">Consultation office</span>
						</h2>
                        <img src="https://labwel.jp/wp-content/uploads/2022/05/464fe7a43049d43c9bc09d40ceddba64.jpg" alt="指定特定相談事業所" loading="lazy" class="f-section-image2 fadein">
                        <p class="f-contenr-p mt100 fadein">障害のある方とそのご家族等のための地域で安心して暮らせるための相談窓口です。</p>
                        <button class="f-button mt100 fadein"><a href="<?php echo esc_url(home_url('office-guide#Consultation_office')); ?>" target="_blank">詳しくはこちら</a></button>
                    </div>
                </div>
            </section>
			<!-- 相談支援セクション終了 -->
            <section class="f-section">
                <!-- 第３セクション -->
                <div class="container">
                    <h2 class="f-section-h2 fadein">
                        お仕事の一覧<br>
                        <span class="h2-small">works</span>
                        <span class="h2-large">Works</span>
                    </h2>

                    <div class="flex-box f-work-gallery1 mt100">
                        <div class="flex-item flex-item1 lg__w33 fadein">
                            <a href="<?php echo esc_url(home_url('works#coast-cleaning')); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/coast-clean1.jpg')); ?>" loading="lazy" alt="海岸清掃">
                                <h3>海岸清掃</h3>
                                <p class="gallery-more">READ MORE&nbsp;>></p>
                            </a>
                        </div>
                        <div class="flex-item flex-item2 lg__w33 fadein delay1">
                            <a href="<?php echo esc_url(home_url('works#waste-gathering')); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/waste-gathering.jpg')); ?>" loading="lazy" alt="戸別収集">
                                <h3>戸別収集</h3>
                                <p class="gallery-more">READ MORE&nbsp;>></p>
                            </a>
                        </div>
                        <div class="flex-item flex-item3 lg__w33 md__w50 fadein delay2">
                            <a href="<?php echo esc_url(home_url('works#life-support')); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/life-support.jpg')); ?>" loading="lazy" alt="高齢者生活支援">
                                <h3>高齢者生活支援</h3>
                                <p class="gallery-more">READ MORE&nbsp;>></p>
                            </a>
                        </div>
                        <div class="flex-item flex-item4 lg__w50 fadein delay1">
                            <a href="<?php echo esc_url(home_url('works#temple-clean')); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/temple-clean.jpg')); ?>" loading="lazy" alt="寺院清掃">
                                <h3>寺院清掃</h3>
                                <p class="gallery-more">READ MORE&nbsp;>></p>
                            </a>
                        </div>
                        <div class="flex-item flex-item5 lg__w50 fadein delay2">
                            <a href="<?php echo esc_url(home_url('work#cleaning')); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/cleaning.jpg')); ?>" loading="lazy" alt="洗濯・クリーニング">
                                <h3>洗濯・クリーニング</h3>
                                <p class="gallery-more">READ MORE&nbsp;>></p>
                            </a>
                        </div>
                        <div class="flex-item flex-item6 lg__w33 fadein">
                            <a href="<?php echo esc_url(home_url('work#kelp-selling')); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/kelp-selling.jpg')); ?>" loading="lazy" alt="おぼろ昆布・加工販売">
                                <h3>おぼろ昆布・加工販売</h3>
                                <p class="gallery-more">READ MORE&nbsp;>></p>
                            </a>
                        </div>
                        <div class="flex-item flex-item7 lg__w33 fadein delay1">
                            <a href="<?php echo esc_url(home_url('work#lunchbox')); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/lunchbox.jpg')); ?>" loading="lazy" alt="弁当・調理販売">
                                <h3>弁当・調理販売</h3>
                                <p class="gallery-more">READ MORE&nbsp;>></p>
                            </a>
                        </div>
                        <div class="flex-item flex-item8 lg__w33 fadein delay2">
                            <a href="<?php echo esc_url(home_url('work#cleaning2')); ?>">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/cleaning2.jpg')); ?>" loading="lazy" alt="特別清掃">
                                <h3>特別清掃</h3>
                                <p class="gallery-more">READ MORE&nbsp;>></p>
                            </a>
                        </div>
                    </div>
                </div><!-- お仕事の一覧終了 -->
            </section><!-- 第３セクション終了 -->
        </main><!-- main end -->
        <?php get_footer(); ?>