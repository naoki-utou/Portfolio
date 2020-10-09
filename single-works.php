
<?php get_header(); ?>

    <!-- work -->
    <section class="sec work">
        <div class="inner">
            <div class="work_ttl_area">
                <h2 class="work_ttl"><?php the_title(); ?></h2>
            </div>

            <!-- work_view -->
            <div class="work_view">
                <img src="<?php echo get_field('img')['url']; ?>" alt="サイトの画像">
            </div><!-- /.work_view -->

            <!-- link_btn -->
            <div class="btn_area work_btn">
                <a href="<?php echo get_field('link'); ?>" target="_blank" rel="noopener" class="link_btn large btn_en">VIEW MORE</a>
            </div><!-- /.link_btn -->

            <!-- work_process -->
            <div class="work_process">
                <div class="work_process_txt">
                    <h3 class="work_process_ttl">サイトの概要</h3>
                    <p class="work_process_lead">
                        <?php echo get_field('desc'); ?>
                    </p>
                </div>

                <div class="work_process_txt">
                    <h3 class="work_process_ttl">ターゲット層</h3>
                    <p class="work_process_lead">
                        <?php echo get_field('target'); ?>
                    </p>
                </div>

                <div class="work_process_txt">
                    <h3 class="work_process_ttl">目的・ゴール</h3>
                    <p class="work_process_lead">
                        <?php echo get_field('goal'); ?>
                    </p>
                </div>

                <div class="work_process_txt">
                    <h3 class="work_process_ttl">制作ポイント</h3>
                    <p class="work_process_lead">
                        <?php echo get_field('point'); ?>
                    </p>
                </div>

                <div class="work_process_txt">
                    <h3 class="work_process_ttl">担当範囲</h3>
                    <p class="work_process_lead">
                        <?php echo get_field('charge'); ?>
                    </p>
                </div>

                <div class="work_process_txt">
                    <h3 class="work_process_ttl">使用ツール</h3>
                    <p class="work_process_lead">
                        <?php echo get_field('tools'); ?>
                    </p>
                </div>
            </div><!-- /.work_process -->

            <!-- work_img -->
            <div class="work_img">
                <img src="<?php echo get_field('site-img')['url']; ?>" alt="サイトのデザイン">
            </div><!-- /.work_img -->

            <!-- link_btn -->
            <div class="btn_area">
                <a href="<?php echo get_field('link'); ?>" target="_blank" rel="noopener" class="link_btn large btn_en">VIEW MORE</a>
            </div><!-- /.link_btn -->
        </div>
    </section><!-- /.work -->





<?php get_footer(); ?>
   