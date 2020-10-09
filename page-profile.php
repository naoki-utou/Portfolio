
<?php get_header(); ?>

    <!-- top -->
    <section>
        <div class="top"></div>
        <h2 class="top_ttl"><?php the_title(); ?><span>私自身について</span></h2>
    </section><!-- /.top -->


    <!-- profile -->
    <section class="sec profile">
        <div class="inner">
            <div class="profile_wrap">

                <!-- profile_left -->
                <div class="profile_wrap_left">
                    <!-- profile_img -->
                    <div class="profile_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aya-2.png" alt="プロフィール写真">
                    </div><!-- /.profile_img -->
                </div><!-- /.profile_left -->

                <!-- profile_right -->
                <div class="profile_wrap_right">
                    <h3 class="profile_career">【経歴】</h3>
                    <div class="profile_career_txt">   
                        <h3 class="profile_career_ttl">
                            2015年3月　<br class="is_sp">大阪府立成城高等学校（定時制） 卒業。
                        </h3>
                    </div>

                    <div class="profile_career_txt">     
                        <h3 class="profile_career_ttl">
                            2015年3月 ~ 2019年1月　<br class="is_sp">電子機器の製造会社にて製造職。
                        </h3>
                        <p class="profile_career_lead">
                            高校を卒業後、地元にある電子機器の製造を請け負う会社で約4年ほど製造職にて勤めてまいりました。<br>
                            入社当初はラインスタッフとして働いていましたが、積極的に意見を出していくうちに生産管理の業務にも携わることになり、
                            納期から逆算したスケジュールの組み立て方や、不測の事態が起きた時の対応力が身につきました。
                        </p>
                    </div>

                    <div class="profile_career_txt">   
                        <h3 class="profile_career_ttl">
                            2020年4月 ~ <br class="is_sp">プログラミング学習開始。
                        </h3>
                        <p class="profile_career_lead">
                            Webサイト制作に興味を持ったのをきっかけに、2020年4月から独学でHTMLとCSSの学習を始めました。<br>
                            2020年7月から「デイトラ 」というオンラインスクールを受講し、HTMLとCSSに加え、JavaScript(主にjQuery)とWordPress
                            のスキルを身につけました。
                        </p>
                    </div>
                </div><!-- /.profile_right -->
            </div>

            <!-- profile_strength -->
            <div class="profile_strength">
                <h3 class="profile_info_ttl">私の長所</h3>
                <div class="profile_strength_wrap">
                    <div class="profile_strength_item wow fadeInUp" data-wow-duration="1.5s">
                        <div class="profile_strength_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strength-1.svg" alt="積極性">
                        </div>
                        <h4 class="profile_strength_ttl">常に自ら学んで<br>行動すること</h4>
                        <p class="profile_strength_txt">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>

                    <div class="profile_strength_item wow fadeInUp" data-wow-duration="2s">
                        <!-- profile_strength_img -->
                        <div class="profile_strength_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strength-2.svg" alt="積極性">
                        </div><!-- /.profile_strength_img -->

                        <h4 class="profile_strength_ttl">常に自ら学んで<br>行動すること</h4>
                        <p class="profile_strength_txt">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>

                    <div class="profile_strength_item wow fadeInUp" data-wow-duration="2.5s">
                        <!-- profile_strength_img -->
                        <div class="profile_strength_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strength-3.svg" alt="積極性">
                        </div><!-- /.profile_strength_img -->

                        <h4 class="profile_strength_ttl">常に自ら学んで<br>行動すること</h4>
                        <p class="profile_strength_txt">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>
            </div><!-- /.profile_strength -->

            <!-- profile_thought -->
            <div class="profile_thought">
                <h3 class="profile_info_ttl">Web業界を目指す理由</h3>
                <p class="profile_thought_txt">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>

            <div class="profile_thought">
                <h3 class="profile_info_ttl">今後の目標</h3>
                <p class="profile_thought_txt">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div><!-- /.profile_thought -->

            <!-- link_btn -->
            <div class="btn_area">
                <a href="<?php echo home_url(); ?>" class="link_btn large">トップへ戻る</a>
            </div><!-- /.link_btn -->
        </div>
    </section><!-- /.profile -->


<?php get_footer(); ?>