<?php

/*
Template Name: 投稿ページテンプレート
*/

?>

<?php get_header(); ?>

<div class="blog-wrapper mx-4 mx-lg-auto my-5">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article>
            <header class="mb-5">
                <h5 class="blog-title text-center mb-3 mb-sm-5 pt-4"><?php the_title(); ?></h5>
                <p class="blog-date text-center mb-1"><?php the_time('Y.m.d'); ?></p>
            </header>
            <div class="blog-content mb-5 pb-5">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
        <div class="pagination-wrapper d-flex justify-content-between my-5">
            <div class="next-link"><?php next_post_link('%link', '<img src="'.get_theme_file_uri("/images/icon_arrow_left.svg").'" alt="前へ"/>&emsp;新しい記事を読む', false) ?></div>
            <div class="previous-link"><?php previous_post_link('%link', '古い記事を読む&emsp;<img src="'.get_theme_file_uri("/images/icon_arrow_right.svg").'" alt="次へ"/>', false) ?></div>
        </div>
    <?php else : 
        // 記事が存在しない場合の処理
    ?>
    <?php endif; ?>
</div>




<?php get_footer(); ?>