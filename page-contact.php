<?php

/*
Template Name: お問い合わせページ
*/
?>

<?php get_header(); ?>

<section class="f-section">
<div class="container access-top">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="f-section-h2">
            お問い合せ
            <br />
            <span class="h2-small">Contact</span>
            </h2>
            <div class="pt-5"></div>
            <?php echo do_shortcode('[contact-form-7 id="386" title="LABWEL3_お問い合わせ"]'); ?>
        </div>
   </div>
</div>
</section>

<?php get_footer(); ?>
