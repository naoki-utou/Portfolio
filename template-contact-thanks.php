<?php 
/*
* Template Name: コンタクト-完了テンプレート
* Description: お問い合わせ完了テンプレート
*/
?>


<?php get_header(); ?>


    <!-- top -->
    <section>
        <div class="top"></div>
        <h2 class="top_ttl"><?php the_title(); ?><span>お問い合わせ</span></h2>
    </section><!-- /.top -->

    <!-- contact_thanks -->
    <div class="inner contact_thanks">
    	<div class="contact_thanks_txt">
    		<?php the_content(); ?>
    	</div>

    	<div class="btn_area">
            <a href="<?php echo home_url('contact'); ?>" class="link_btn large">前へ戻る</a>
        </div>
    </div><!-- /.contact_thanks -->


<?php get_footer(); ?>