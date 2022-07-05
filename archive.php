<?php

/*
Template Name: アーカイブページテンプレート
*/

?>

<?php get_header(); ?>

<div class="archive-wrapper mx-4 mx-lg-auto">
    <header>
        <h4 class="text-center my-5 py-3">最新情報アーカイブ</h4>
    </header>
    <?php if(have_posts()) : ?>
        <ul class="news-list">
            <?php while(have_posts()) : the_post(); ?>
            <li class="list-item py-3">
                <a href="<?php the_permalink(); ?>">
                    <span class="post-date d-block d-md-inline pr-lg-5"><?php the_time('Y.m.d'); ?></span>
                    <span class="post-title d-block d-md-inline ml-md-5 pl-lg-5"><?php the_title(); ?></span>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
    <?php else : 
        // 記事が存在しない場合の処理
    ?>
    <?php endif; ?>
    <?php if( $wp_query->max_num_pages > 1) : ?>
        <div class="pagination-wrapper my-5">
            <?php the_posts_pagination( array(
                'end_size' => 0,
                'mid_size' => 2,
                'prev_text' => '<img src="'.get_theme_file_uri("/images/icon_arrow_left.svg").'" alt="前へ"/>',
                'next_text' => '<img src="'.get_theme_file_uri("/images/icon_arrow_right.svg").'" alt="次へ"/>',
            ) ); ?>
        </div>
    <?php endif; ?>
</div>


<?php get_footer(); ?>