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

    <section class="section"><!-- A型紹介セクション -->
        <div class="container">
            <h2 id="typea" class="f-section-h2 fadein">
                A型事業所
                <span class="h2-large">Type A</span>
            </h2>
            <div class="section-boxright fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/kelpslice.jpg')); ?>" alt="" loading="lazy" class="mt100">
            </div>
            <div class="section-boxleft grid-box fadein">
                <div class="box-item box-item1 fadein">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/ipppo.png')); ?>" alt="ipppo" loading="lazy"><br><br>
					<a href="https://labwel.jp/wp-content/uploads/2022/05/r3_ipppo.pdf">令和３年度スコアシート及び<br>地域連携活動実施状況報告書</a>
					<br><br><a href="<?php echo esc_url(get_theme_file_uri('images/r2_ipppo.pdf')); ?>">令和２年度スコアシート及び<br>地域連携活動実施状況報告書</a>
                </div>
                <div class="box-item box-item2 fadein">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/+ipppo.png')); ?>" alt="+ipppo" loading="lazy"><br><br>
					 <a href="https://labwel.jp/wp-content/uploads/2022/05/r3_plus-ipppo.pdf">令和３年度スコアシート及び<br>地域連携活動実施状況報告書</a>
<br><br><a href="<?php echo esc_url(get_theme_file_uri('images/r2_plus-ipppo.pdf')); ?>">令和２年度スコアシート及び<br>地域連携活動実施状況報告書</a>
                </div>
                <div class="box-item box-item3 col2 fadein">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/a-copy_03.png')); ?>" alt="やりがい見つかる「A型」" loading="lazy" class="mt50">
                </div>
                <div class="box-item box-item4 col2 fadein">
                    <p class="mt50">バリエーション豊富なお仕事内容だから自分のやりがいにつながる得意なお仕事がきっと見つかります。</p>
                </div>
            </div>
            <div class="clearfix"></div>

            <h2 class="page-article-title mt100 fadein">
                サービス利用開始までの流れ
            </h2>
        </div>

        <ul class="side-scroll-content mt40 fadein">
            <li class="scroll-content-card">
                <p class="content-card-title">1.ハローワークからの紹介</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam1.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
                    <p>ハローワークで紹介状をもらい、面接の日程を調整してもらいます。
                    </p>
                    <p>※面接の前に見学をしてもらうことも可能です。</p>
                </div>
            </li>
            <li class="scroll-content-card">
                <p title class="content-card-title">2.事業所との面接</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam5.jpg')); ?>" alt="" loading="lazy">
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
        <div class="container">
            <h2 class="page-article-title mt100 fadein">所在地・連絡先</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <table class="office-address mt50 fadein">
                        <thead>
                            <tr>
                                <th colspan="2">本社/Ipppo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>住所</td>
                                <td>福井県敦賀市公文名54-10-1</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-6526</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-5024 （そうじ部）</td>
                            </tr>
                            <tr>
                                <td>FAX</td>
                                <td>0770-47-6527</td>
                            </tr>
                        </tbody>
                    </table>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.5471168521503!2d136.05110441525704!3d35.614236480209975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001e55444fbdf73%3A0xe95b2cb616ba3505!2z44CSOTE0LTAxMzEg56aP5LqV55yM5pWm6LOA5biC5YWs5paH5ZCN77yV77yU!5e0!3m2!1sja!2sjp!4v1617330630976!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="mt50 fadein"></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <table class="office-address mt50 fadein">
                        <thead>
                            <tr>
                                <th colspan="2">+Ipppo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>住所</td>
                                <td>福井県敦賀市野神2-34-2</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-6979</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-6984</td>
                            </tr>
                            <tr>
                                <td>　</td>
                                <td>　</td>
                            </tr>
                        </tbody>
                    </table>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.729710679572!2d136.05291601525752!3d35.63438928020527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001e5335f98bff7%3A0x1b4a37e74ad48a02!2z44CSOTE0LTAxMjEg56aP5LqV55yM5pWm6LOA5biC6YeO56We77yS!5e0!3m2!1sja!2sjp!4v1617330719708!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="mt50 fadein"></iframe>
                </div>
            </div>
        </div>
    </section><!-- A型紹介　終了 -->
    <section class="section">
        <div class="container">
            <h2 id="typeb" class="f-section-h2 fadein">
                B型事業所
                <span class="h2-large">Type B</span>
            </h2>
            <div class="section-boxright fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/kelpslice.jpg')); ?>" alt="" loading="lazy">
            </div>
            <div class="section-boxleft fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/+ipppo.png')); ?>" alt="+ipppo" loading="lazy">
                <img src="<?php echo esc_url(get_theme_file_uri('images/b-copy_07.png')); ?>" alt="自分の居場所が見つかる「B型」" loading="lazy" class="mt50">
                <p class="mt50">みんなと働くのが楽しくなる</p>
                <p>そんな働きやすい環境と楽しい人間関係づくりにこだわりました。</p>
            </div>
            <div class="clearfix"></div>
            <h2 class="page-article-title mt100 fadein">
                サービス利用開始までの流れ
            </h2>
        </div>
        <ul class="side-scroll-content mt40 fadein">
            <li class="scroll-content-card">
                <p class="content-card-title">1.事務所へのご見学</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam1.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
                    <p>事務所へ来ていただき、実際の仕事の内容や雰囲気を見学していただきます。</p>
                </div>
            </li>
            <li class="scroll-content-card">
                <p class="content-card-title">2.事業所での体験</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam3.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
                    <p>見学をした後、実際に事業所でお仕事を体験し、その後に利用申込みを行っていただきます。</p>
                </div>
            </li>
            <li class="scroll-content-card">
                <p class="content-card-title">3.関係各所へのご利用手続き</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam4.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
                    <p>各市町や、相談支援事業者などと連絡を取り、受給者証発行の手続きを行なってから事業所の利用を始めます。</p>
                </div>
            </li>
        </ul>
        <div class="container">
            <h2 class="page-article-title mt100 fadein">
                所在地・連絡先
            </h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <table class="office-address mt50 fadein">
                        <thead><tr>
                            <th colspan="2">+Ipppo</th>
                        </tr></thead>
                        <tbody>
                            <tr>
                                <td>住所</td>
                                <td>福井県敦賀市野神2-34-2</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-6979</td>
                            </tr>
                            <tr>
                                <td>FAX</td>
                                <td>0770-47-6984</td>
                            </tr>
                            <tr>
                                <td>　</td>
                                <td>　</td>
                            </tr>
                        </tbody>
                    </table>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.729710679572!2d136.05291601525752!3d35.63438928020527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001e5335f98bff7%3A0x1b4a37e74ad48a02!2z44CSOTE0LTAxMjEg56aP5LqV55yM5pWm6LOA5biC6YeO56We77yS!5e0!3m2!1sja!2sjp!4v1617330719708!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="mt50 fadein"></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <table class="office-address mt50 fadein">
                        <thead>
                            <tr>
                                <th colspan="2">Be Ipppo!</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>住所</td>
                                <td>福井県敦賀市野神15-4-13</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-6979</td>
                            </tr>
                            <tr>
                                <td>FAX</td>
                                <td>0770-47-6984</td>
                            </tr>
                            <tr>
                                <td>　</td>
                                <td>　</td>
                            </tr>
                        </tbody>
                    </table>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.694787329481!2d136.05560401525747!3d35.635250080205005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001facb6eccd6fb%3A0xb400c77583c41e2a!2z44CSOTE0LTAxMjEg56aP5LqV55yM5pWm6LOA5biC6YeO56We77yR77yV4oiS77yU4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1617340618270!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="mt50 fadein"></iframe>
                </div>
            </div>
        </div>

    </section>
    <section class="section">
        <div class="container">
            <h2 id="grouphome" class="f-section-h2 fadein">
                共同生活援助（グループホーム）
                <span class="h2-large">Group Home</span>
            </h2>
            <h2 class="f-section-h2 fadein">LIFE Ipppo!和久野</h2>
            <div class="section-boxright fadein">
                <img src="<?php echo esc_url(get_theme_file_uri('images/grouphome-image.jpg')); ?>" alt="" loading="lazy">
            </div>
            <div class="section-boxleft fadein">
                <p class="mt100">警備セキュリティをはじめ、夜間支援員などの安心して住むことが出来る環境づくりを目指しました。</p>
            </div>
            <div class="clearfix"></div>
            <h2 class="page-article-title mt100 fadein">
                サービス利用開始までの流れ
            </h2>
        </div>
        <ul class="side-scroll-content mt40 fadein">
            <li class="scroll-content-card">
                <p class="content-card-title">1.グループホームへのご見学</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam1.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
                    <p>窓口に連絡を入れてもらい、ご都合の良いの良い日時に見学、または入居相談に来て頂きます。</p>
                </div>
            </li>
            <li class="scroll-content-card">
                <p class="content-card-title">2.ご入居の相談</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam5.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
                    <p>入居相談を通して入居するための要件や入居後の生活設計を一緒に考えていきます。</p>
                </div>
            </li>
            <li class="scroll-content-card">
                <p class="content-card-title">3.関係各所へのご利用手続き</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam4.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
                    <p>各市町や、相談支援事業者などと連絡を取り受給者証発行の手続きを行います。</p>
                </div>
            </li>
        </ul>
        <div class="container">
            <h2 class="page-article-title mt100 fadein">所在地・連絡先</h2>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <table class="office-address mt50 fadein">
                        <thead>
                            <tr><th colspan="2">LIFE Ipppo!和久野</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>住所</td>
                                <td>福井県敦賀市和久野2号東河原17-3</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-6964</td>
                            </tr>
                        </tbody>
                    </table>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.1074957452456!2d136.06029611525722!3d35.62507638020739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001fab1e87425fd%3A0x23b2a51bd662539c!2z44CSOTE0LTAxMjMg56aP5LqV55yM5pWm6LOA5biC5ZKM5LmF6YeO77yS!5e0!3m2!1sja!2sjp!4v1617595443945!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="mt50 fadein"></iframe>
                </div>
            </div>
        </div>
    </section>

	<!-- 相談支援セクション -->
	
    <section class="section">
        <div class="container">
            <h2 id="Consultation_office" class="f-section-h2 fadein">
			指定特定相談支援事業所<span class="h2-large">Consultation office</span>
            </h2>
            <h2 class="f-section-h2 fadein">らぼうぇる</h2>
            <div class="section-boxright fadein">
                <img src="https://labwel.jp/wp-content/uploads/2022/05/464fe7a43049d43c9bc09d40ceddba64.jpg" alt="" loading="lazy">
            </div>
            <div class="section-boxleft fadein">
                <p class="mt100">障害のある方とそのご家族等のための地域で安心して暮らせるための相談窓口です。</p>
            </div>
            <div class="clearfix"></div>
            <h2 class="page-article-title mt100 fadein">
                サービス利用開始までの流れ
            </h2>
        </div>
        <ul class="side-scroll-content mt40 fadein">
            <li class="scroll-content-card">
				<p class="content-card-title">1.サービスの申請</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam1.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
					<p>市(地域福祉課)に使いたいサービスの申請を行います。</p>
                </div>
            </li>
            <li class="scroll-content-card">
				<p class="content-card-title">2.計画の作成</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam5.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner" style="margin-top: 30px;">
					<p>本人・家族等の希望や本人の障害支援区分等をふまえながら、本人・家族等と相談事業所が話し合って「サービス等利用計画(障害児支援利用計画)」を作成します。</p>
                </div>
            </li>
            <li class="scroll-content-card">
				<p class="content-card-title">3.契約</p>
                <img src="<?php echo esc_url(get_theme_file_uri('images/exam4.jpg')); ?>" alt="" loading="lazy">
                <div class="card-content-inner">
					<p>サービスを受ける障害福祉事業所と契約し、サービスの利用が開始となります。</p>
                </div>
            </li>
        </ul>
        <div class="container">
                    <h3 class="page-article-title mt100 fadein scrollin">計画相談支援「行動障害支援体制加算」「精神障害者支援体制加算」について</h3>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 mt40">
            <p>平成３０年度障害福祉サービス等報酬改定により、計画相談支援及び障害児相談支援について、さらなる質の向上を目指すための見直しが行われました。 このことに伴い新設されました「精神障害者支援体制加算」の対象となる研修を修了した相談支援専門員を配置しております。</p>
        <div class="border border-dark px-3">
            <h4>精神障害者支援体制加算</h4>
            <p>精神科病院等に入院する者及び地域において単身生活等をする精神障害者に対して、地域移行支援や地域定着支援のマネジメントを含めた適切な計画相談支援等を実施するために、定められた研修を修了し、専門的な知識及び支援技術を持つ相談支援専門員を事業所に配置する。</p></div>
            <p>１．体制加算を算定するにあたって要件となる受講済み研修<br>研修名<br>令和２年12月４日<br>福井県精神保健福祉従事者研修会（現任）<br>２．研修を修了した者<br>氏名：原田 美文<br>職種：相談支援専門員</p>
        </div>
        <div class="container">
            <h2 class="page-article-title mt100 fadein">所在地・連絡先</h2>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <table class="office-address mt50 fadein">
                        <thead>
                            <tr>
                                <th colspan="2">指定特定相談支援事業所らぼうぇる</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>住所</td>
                                <td>福井県敦賀市公文名54-10-1</td>
                            </tr>
                            <tr>
                                <td>TEL</td>
                                <td>0770-47-6526</td>
                            </tr>
                            <tr>
                                <td>FAX</td>
                                <td>0770-47-6527</td>
                            </tr>
                        </tbody>
                    </table>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.5471168521503!2d136.05110441525704!3d35.614236480209975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001e55444fbdf73%3A0xe95b2cb616ba3505!2z44CSOTE0LTAxMzEg56aP5LqV55yM5pWm6LOA5biC5YWs5paH5ZCN77yV77yU!5e0!3m2!1sja!2sjp!4v1617330630976!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="mt50 fadein"></iframe>
                </div>
            </div>
        </div>
    </section>
	
	<!-- 相談支援セクションここまで -->

</main><!-- main end -->

<?php get_footer(); ?>