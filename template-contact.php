<?php 
/*
* Template Name: コンタクトテンプレート
* Description: コンタクトフォームを設置するテンプレート
*/
 ?>



<?php get_header(); ?>

    <!-- top -->
    <section>
        <div class="top"></div>
        <h2 class="top_ttl"><?php the_title(); ?><span>お問い合わせ</span></h2>
    </section><!-- /.top -->


    <!-- contact -->
    <section class="sec contact">
        <div class="inner">
            <p class="contact_txt">お問い合わせに関しましては、下記フォーム<br>または、<br>Twitter, メールにてお願い致します。</p>

            <!-- contact_form -->
            <div class="contact_form">
                <?php the_content(); ?>
            </div><!-- /.contact_form -->

        </div>
    </section><!-- /.contact -->

    <?php get_footer(); ?>
   