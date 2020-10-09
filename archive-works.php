
<?php get_header(); ?>

    <!-- top -->
    <section>
        <div class="top"></div>
        <h2 class="top_ttl">Works<span>制作物</span></h2>
    </section><!-- /.top -->


    <!-- works -->
    <section class="sec works">
        <div class="inner">
            <p class="works_txt">これまで私が制作した作品を<br class="is_sp">ご紹介しております。</p>

            <!-- works_list -->
            <div class="works_list">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part('template-parts/loop-work'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- /.works_list -->

            <!-- link_btn -->
            <div class="btn_area works_btn">
                <a href="<?php echo home_url(); ?>" class="link_btn large">トップへ戻る</a>
            </div><!-- /.link_btn -->
        </div>
    </section><!-- /.works -->

<?php get_footer(); ?>
