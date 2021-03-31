<?php get_header(); ?>

<main id="main" class="main"><!-- main start -->

<?php if(have_posts(  )) : // 投稿が1件以上ある場合 ?>
    <!-- 投稿があった場合のみ冒頭に表示させる要素 -->
    <?php while (have_posts(  )): // 投稿の表示条件を満たす間は繰り返す ?>
        <?php the_post(  ); // データ1件分を取り出して渡す ?>
        <!-- ループ内で繰り返し表示させる要素（ブログ記事など） -->
    <?php endwhile; //　投稿ループ終了?>
<?php else: //もし表示すべき投稿が無かったら ?>
    <!-- 投稿が1件もない場合のみ表示させる要素（「あてはまる情報はまだありません。」など） -->
    <h2>まだ投稿がありません。<br>管理画面へ記事を投稿してください。</h2>
<?php endif; // 条件分岐終了 ?>

</main><!-- main end -->

<?php get_footer(); ?>