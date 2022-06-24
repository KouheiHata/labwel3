<?php
/* Template Name: 会社情報 */
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
            <h2 title class="page-title fadein">
                会社情報<br>
                <span class="suffix">Infomation</span>
            </h2>
        </div>

        <div class="container">
            <div class="col-12 justify-content-center mt100">
                <h3 class="description-heading fadein">株式会社LABwelは、お仕事を通して自分の存在価値・やる気・新たな能力の 発見など、利用者さんの“成長に繋がる自立”を支援をする会社です。
                </h3>
            </div>

            <h2 title class="page-article-title mt100 fadein 576space">
                会社概要<br>
                <span class="suffix">About Us</span>
            </h2>

            <div class="flex-box description-table">
                <div class="flex-item">
                    <table class="info-table fadein">
                        <tbody>
                            <tr>
                                <td>会社名</td>
                                <td>株式会社　LABwel</td>
                            </tr>
                            <tr>
                                <td>代表者名</td>
                                <td>津田一彦</td>
                            </tr>
                            <tr>
                                <td>所在地</td>
                                <td>福井県敦賀市公文名54-10-1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex-item">
                    <table class="info-table fadein">
                        <tbody>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-6526</td>
                            </tr>
                            <tr>
                                <td>FAX</td>
                                <td>0770-47-6527</td>
                            </tr>
                            <tr>
                                <td>創業</td>
                                <td>平成27年7月21日</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section><!-- 第一セクション　終了 -->
    <section class="section">
        <!-- 第二セクション -->

        <div class="container">
            <h2 title class="page-article-title mb100 fadein">
                経営理念<br>
                <span class="suffix">Mission</span>
            </h2>
            <h3 class="description-heading fadein">
                お客様の満足に貢献し、障がい者の満足を追求し、地域社会に貢献する。
            </h3>
        </div>

        <img src="<?php echo esc_url(get_theme_file_uri('images/gathering-photo.jpg')); ?>" alt="" class="mt100 fadein" loading="lazy">
    </section><!-- 第２セクション　終了 -->

    <section class="section">
        <!-- 第3セクション -->
        <div class="container">
            <h2 class="page-article-title fadein">
                これまでの沿革<br>
                <span class="suffix">History</span>
            </h2>
            <div class="flex-box description-table fadein">
                <div class="flex-item">
                    <table class="info-table">
                        <tbody>
                            <tr>
                                <td>平成27年7月</td>
                                <td>株式会社　LABwel　設立</td>
                            </tr>
                            <tr>
                                <td>同年</td>
                                <td>事業所　Ipppo!　設立</td>
                            </tr>
                            <tr>
							    <td>平成28年7月</td>
                                <td>事業所　+Ipppo!　設立</td>
							</tr>
							<tr>
                                <td>令和元年</td>
                                <td>事業所　+Ipppo!にてB型事業所開始</td>
                            </tr>
							<tr>
							    <td>令和2年10月</td>
                                <td>事業所　Be Ipppo!　設立</td>
							</tr>
							<tr>
							    <td>令和3年2月</td>
                                <td>共同生活援助(グループホーム) LIFE Ipppo!和久野　開所</td>
							</tr>
							<tr>
							    <td>令和4年1月</td>
                                <td>指定特定相談支援事業所 らぼうぇる　開所</td>
							</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section><!-- 第３セクション終了 -->

</main><!-- main end -->

<?php get_footer(); ?>