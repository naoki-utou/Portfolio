<!-- 記事ループ -->
<div class="works_card">
    <div class="works_card_wrap">

        <!-- リンク先 -->
        <a href="<?php the_permalink(); ?>">

            <!-- アイキャッチ画像 -->
            <div class="works_card_img">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="">
                <?php endif; ?><!-- /.アイキャッチ画像 -->
            </div>

            <!-- 本文 -->
            <div class="works_card_body">
                <h3 class="works_card_ttl"><?php the_title(); ?> <span>(架空のサイト)</span></h3>
                <?php the_excerpt(); ?>
            </div><!-- /.本文 -->
        </a>
    </div>
</div><!-- /.記事ループ -->