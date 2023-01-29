<?php get_header(); ?>

		<main>
			<article class="promo light-bg">
				<div class="article__header promo__header">
					<div class="article__title promo__title">
						<?= CFS() -> get('header_title') ?>
					</div>
					<div class="article__subtitle promo__subtitle">
						<?= CFS() -> get('header_slogan') ?>
					</div>
				</div>
				<a href='#about' class="promo__btn"><?= CFS() -> get('header_button') ?></a>
			</article>

			<article class="history dark-bg" id="about">
				<div class="history__items">
					<?php
					$loop = CFS()->get('card');
					foreach ($loop as $row) {
						?>
						<div class="history__item">
							<div class="item-title"> <?= $row['card_year'] ?> </div>
							<div class="item-descr"> <?= $row['card_text'] ?> </div>
						</div>
						<?php
					}
					?>
				</div>
			</article>

			<article class="team light-bg" id="team">
				<div class="buildings"></div>
				<div class="article__header">
					<div class="article__title">
						<?= CFS()->get('team_title'); ?>
					</div>
					<div class="article__subtitle">
						<?= CFS()->get('team_descr'); ?>
					</div>
				</div>
				<div class="team__members">
					<!-- Swiper -->
					<div class="swiper swiper-mobile">
						<div class="swiper-wrapper">
						
							<?php
							$loop = CFS()->get('teammates');
							foreach ($loop as $row) {
								?>
								<div class="swiper-slide">
									<div class="team__member">
										<img
										src="<?= $row['teammates_img'] ?>"
										alt=""
										class="team__member-image" />
										<div class="team__member-name"> <?= $row['teammates_name'] ?> </div>
										<div class="team__member-post"> <?= $row['teammates_post'] ?> </div>
										<div class="team__member-links">
											<?php 
												if(!empty($row['teammates_twitter']['url'])) {
													?>
														<a href="<?= $row['teammates_twitter']['url'] ?>" target="<?= $row['teammates_twitter']['target'] ?>">
															<img src="/wp-content/themes/mytheme/assets/icons/twitter.png" alt="">
														</a>
													<?php 		
												}
												if(!empty($row['teammates_inst']['url'])) {
													?>
														<a href="<?= $row['teammates_inst']['url'] ?>" target="<?= $row['teammates_inst']['target'] ?>">
															<img src="/wp-content/themes/mytheme/assets/icons/instagram.png" alt="">
														</a>
													<?php 
												}
											?>
										</div>
									</div>
								</div>
								<?php
							}
							?>
							
						</div>
						<!-- Add Arrows -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>

							
					
				</div>
			</article>

			<article class="advantages dark-bg" id="services">
				<div class="article__header">
					<div class="article__title"> <?= CFS()->get('services_title'); ?> </div>
					<div class="article__subtitle"> <?= CFS()->get('services_subtitle'); ?> </div>
				</div>

				<div class="advantages__items">
					<?php
						$loop = CFS()->get('services_cards');
						foreach ($loop as $row) {
							?>
							<div class="advantages__item">
								<div class="advantages__item-img">
									<img src="<?= $row['services_icon'] ?>" alt="">
								</div>
								<div class="advantages__item-text">
									<div class="advantages__item-title"> <?= $row['services_name'] ?> </div>
									<div class="advantages__item-descr"> <?= $row['services_descr'] ?> </div>
								</div>
							</div>
							<?php
						}
					?>
					
				</div>
			</article>

			<article class="contact light-bg" id="contact">
				<div class="article__header">
					<div class="article__title">
						<?= CFS()->get('contacts_title'); ?>
					</div>
					<div class="article__subtitle">
						<?= CFS()->get('contacts_subtitle'); ?>
					</div>
				</div>

				<div class="contact__icons">
					<div class="contact__icon">
						<div class="contact__img">
							<img src="/wp-content/themes/mytheme/assets/icons/phone.png" alt="" />
						</div>
						<?php 
							if(!empty(CFS()->get('contacts_phone')['url'])) {
								?>
									<a class="contact__descr" href="tel:+<?= CFS()->get('contacts_phone')['url'] ?>">
										<?= CFS()->get('contacts_phone')['text'] ?>
									</a>
								<?php 		
							}
						?>
					</div>
					<div class="contact__icon">
						<div class="contact__img">
							<img src="/wp-content/themes/mytheme/assets/icons/pin.png" alt="" />
						</div>
						<?php 
							if(!empty(CFS()->get('contacts_map')['url'])) {
								?>
									<a class="contact__descr" href="<?= CFS()->get('contacts_map')['url'] ?>" target="<?= CFS()->get('contacts_map')['target'] ?>">
										<?= CFS()->get('contacts_map')['text'] ?>
									</a>
								<?php 		
							}
						?>
					</div>
					<div class="contact__icon">
						<div class="contact__img">
							<img src="/wp-content/themes/mytheme/assets/icons/mail.png" alt="" />
						</div>
						<?php 
							if(!empty(CFS()->get('contacts_email')['url'])) {
								?>
									<a class="contact__descr" href="mailto:<?= CFS()->get('contacts_email')['url'] ?>">
										<?= CFS()->get('contacts_email')['text'] ?>
									</a>
								<?php 		
							}
						?>
					</div>
				</div>

				<?= the_content() ?>
			</article>
		</main>

<?php get_footer(); ?>
