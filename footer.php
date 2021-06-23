<footer id="f-footer" class="f-footer">
    <!-- footer start▼ -->
    <div class="container">
        <div class="flex-box mb40">
            <div class="flex-item">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="Labwel" class="logo" loading="lazy"></a>
                <p><small class="ultra-gray">©&nbsp;Labwel. All Right Reserved.</small></p>
            </div>
            <div class="flex-item">
                <ul class="flex-box footer-nav">
                    <li><a href="<?php echo esc_url(home_url('information')); ?>">会社情報</a></li>
                    <li><a href="<?php echo esc_url(home_url('office-guide')); ?>">事務所のご案内</a></li>
                    <li><a href="<?php echo esc_url(home_url('works')); ?>">お仕事の内容</a></li>
                    <li><a href="https://www.facebook.com/labwel.co.jp">Facebook</a></li>
                    <li><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
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
                            <td>福井県敦賀市公文名&nbsp;54-10-1</td>
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