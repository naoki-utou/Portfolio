
<?php get_header(); ?>

	<!-- fv -->
	<section class="fv js_top">
		<div class="fv_img"></div>
		<div class="fv_catchcopy">
			<h2 class="fv_catchcopy_txt wow fadeInUp" data-wow-duration="2s">
				Welcome<br>
				to<br>
				My Portfolio
			</h2>
		</div>
	</section><!-- /.fv -->


	<!-- main -->
	<main class="main">

		<!-- top_profile -->
		<section class="sec top_profile">
			<div class="inner">
				<h2 class="sec_ttl sec_ttl_left">Profile</h2>
				<div class="top_profile_wrap">

					<!-- top_profile_left -->
					<div class="top_profile_wrap_left">
						<!-- top_profile_img -->
						<div class="top_profile_img">
							<img src="<?php echo get_field('profileTop_img')['url']; ?>" alt="プロフィール写真">
						</div><!-- /.top_profile_img -->

						<!-- top_profile_icon -->
						<div class="top_profile_icon">
							<a href="https://twitter.com/naosuke_s?ref_src=twsrc%5Etfw" target="_blank" rel="noopener">
								<i class="fab fa-twitter i_size i_layout i_cursor twitter"></i>
							</a>
							<a href="https://github.com/naoki-utou" target="_blank" rel="noopener">
								<i class="fab fa-github i_size i_layout i_cursor github"></i>
							</a>
						</div><!-- /.top_profile_icon -->
					</div><!-- /.top_profile_left -->

					<!-- top_profile_right -->
					<div class="top_profile_wrap_right">
						<h3 class="top_profile_name"><?php echo get_field('profileTop_name'); ?>  <span><?php echo get_field('profileTop_name_en'); ?></span></h3>
						<p class="top_profile_txt">
							<?php echo get_field('profileTop_desc'); ?>
						</p>

						<!-- link_btn -->
						<div class="btn-area top_profile_btn">
							<a href="<?php echo get_page_link(11); ?>" class="link_btn btn_en">VIEW MORE</a>
						</div><!-- /.link_btn -->
					</div><!-- /.top_profile_right -->
				</div>
			</div>
		</section><!-- /.top_profile -->


		<!-- skill -->
		<section class="sec skill">
			<div class="inner">
				<h2 class="sec_ttl sec_ttl_right">Skill</h2>

				<!-- slill_list -->
				<ul class="skill_list">
					<li class="skill_item">
						<div class="skill_img">
							<img src="<?php echo get_field('skill_img_1')['url']; ?>" alt="HTML/CSS">
						</div>
						<h3 class="skill_name"><?php echo get_field('skill_name_1'); ?></h3>
						<p class="skill_txt">
							<?php echo get_field('skill_desc_1'); ?>
						</p>
					</li>

					<li class="skill_item">
						<div class="skill_img">
							<img src="<?php echo get_field('skill_img_2')['url']; ?>" alt="JavaScript">
						</div>
						<h3 class="skill_name"><?php echo get_field('skill_name_2'); ?></h3>
						<p class="skill_txt">
							<?php echo get_field('skill_desc_2'); ?>
						</p>
					</li>

					<li class="skill_item">
						<div class="skill_img">
							<img src="<?php echo get_field('skill_img_3')['url']; ?>" alt="Sass">
						</div>
						<h3 class="skill_name"><?php echo get_field('skill_name_3'); ?></h3>
						<p class="skill_txt">
							<?php echo get_field('skill_desc_3'); ?>
						</p>
					</li>

					<li class="skill_item">
						<div class="skill_img">
							<img src="<?php echo get_field('skill_img_4')['url']; ?>" alt="WordPress">
						</div>
						<h3 class="skill_name"><?php echo get_field('skill_name_4'); ?></h3>
						<p class="skill_txt">
							<?php echo get_field('skill_desc_4'); ?>
						</p>
					</li>

					<li class="skill_item">
						<div class="skill_img">
							<img src="<?php echo get_field('skill_img_5')['url']; ?>" alt="XD">
						</div>
						<h3 class="skill_name"><?php echo get_field('skill_name_5'); ?></h3>
						<p class="skill_txt">
							<?php echo get_field('skill_desc_5'); ?>
						</p>
					</li>

					<li class="skill_item">
						<div class="skill_img">
							<img src="<?php echo get_field('skill_img_6')['url']; ?>" alt="PhotoShop">
						</div>
						<h3 class="skill_name"><?php echo get_field('skill_name_6'); ?></h3>
						<p class="skill_txt">
							<?php echo get_field('skill_desc_6'); ?>
						</p>
					</li>
				</ul><!-- /.slill_list -->
			</div>
		</section><!-- /.skill -->


		<!-- top_works -->
		<section class="top_works">
			<h2 class="sec_ttl sec_ttl_left top_works_ttl">Works</h2>

			<!-- swiper -->
			<div class="swiper-container">

				<!-- swiper-wrapper -->
			    <div class="swiper-wrapper">
			        <div class="swiper-slide top_works_item">
			        	<a href="<?php echo get_permalink(119); ?>" class="top_works_link">
			        		<img src="<?php echo get_field('worksTop_img_1')['url']; ?>" alt="">
			        		<h3 class="top_works_item_txt"><?php echo get_field('worksTop_tool_1'); ?></h3>
			        	</a>
			        </div>

			        <div class="swiper-slide top_works_item">
			        	<a href="<?php echo get_permalink(119); ?>" class="top_works_link">
			        		<img src="<?php echo get_field('worksTop_img_2')['url']; ?>" alt="">
			        		<h3 class="top_works_item_txt"><?php echo get_field('worksTop_tool_2'); ?></h3>
			        	</a>
			        </div>

			        <div class="swiper-slide top_works_item">
			        	<a href="<?php echo get_permalink(119); ?>" class="top_works_link">
			        		<img src="<?php echo get_field('worksTop_img_3')['url']; ?>" alt="">
			        		<h3 class="top_works_item_txt"><?php echo get_field('worksTop_tool_3'); ?></h3>
			        	</a>
			        </div>

			         <div class="swiper-slide top_works_item">
			         	<a href="<?php echo get_permalink(119); ?>" class="top_works_link">
			        		<img src="<?php echo get_field('worksTop_img_4')['url']; ?>" alt="">
			        		<h3 class="top_works_item_txt"><?php echo get_field('worksTop_tool_4'); ?></h3>
			        	</a>
			        </div>

			        <div class="swiper-slide top_works_item">
			        	<a href="<?php echo get_permalink(119); ?>" class="top_works_link">
			        		<img src="<?php echo get_field('worksTop_img_5')['url']; ?>" alt="">
			        		<h3 class="top_works_item_txt"><?php echo get_field('worksTop_tool_5'); ?></h3>
			        	</a>
			        </div>

			         <div class="swiper-slide top_works_item">
			         	<a href="<?php echo get_permalink(119); ?>" class="top_works_link">
			        		<img src="<?php echo get_field('worksTop_img_6')['url']; ?>" alt="">
			        		<h3 class="top_works_item_txt"><?php echo get_field('worksTop_tool_6'); ?></h3>
			        	</a>
			        </div>
			    </div><!-- /.swiper-wrapper -->

			    <!-- swiper_button -->
			    <div class="swiper-button-prev is_pc"></div>
			    <div class="swiper-button-next is_pc"></div><!--/.swiper_button -->
			</div><!-- /.slider -->

			<!-- link_btn -->
			<div class="btn_area">
				<a href="<?php echo home_url('works'); ?>" class="link_btn large btn_en">VIEW MORE</a>
			</div><!-- /.link_btn -->
		</section><!-- /.top_works -->


		<!-- top_contact -->
		<section class="sec top_contact">
			<div class="inner">
				<h2 class="sec_ttl sec_ttl_right">Contact</h2>
				<div class="top_contact_area">
					<p class="top_contact_txt">
						お問い合わせに関しましては、フォーム<br>
						または、<br>Twitter, メールにてお願い致します。
					</p>
					<div class="btn_area">
						<a href="<?php echo home_url('contact'); ?>" class="link_btn large">お問い合わせ</a>
					</div>
				</div>
			</div>
		</section><!-- /.top_contact -->

	</main><!-- /.main -->


	<?php get_footer(); ?>