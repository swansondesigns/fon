<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dzgala
 */


get_header('home');

?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main">

			<section class="header">
				<img src="/wp-content/uploads/2019/04/DZ_Logo_Shimmer_v3.gif" class="logo-image logo-image-dz" />

				<a href="https://denverzoo.org" class="header-link header-link-home visit-link">Visit DenverZoo.org</a>

				<img src="/wp-content/uploads/2019/04/FON_GALA_Logo_Shimmer_v4.gif" class="logo-image logo-image-fon center-sm animated will-fade-in" />
				<div class="honorees center-sm animated will-fade-in">
					<span>Susan and Eddie Robinson</span>
					<span class="as-the">as the</span>
					<span>KM Conservation</span>
					<span>Award Honorees</span>
				</div>

				<noscript>
					<img src="/wp-content/uploads/2019/04/FON_GALA_Logo_Shimmer_v4.gif" class="logo-image logo-image-fon center-sm" />
					<div class="honorees center-sm">
						<span>Susan and Eddie Robinson</span>
						<span class="as-the">as the</span>
						<span>KM Conservation</span>
						<span>Award Honorees</span>
					</div>
				</noscript>


				<!-- <img src="/wp-content/uploads/2019/04/sloth-1.png" class="main-image" /> -->
				<div class="main-image-wrapper">

					<!-- <img src="/wp-content/themes/dzgala-child/images/clear.gif" id="main-image" class="main-image animated" data-bg-image="/wp-content/uploads/2019/04/sloth-web-3.png"/> -->
					<img src="/wp-content/themes/dzgala-child/images/clear.gif"
							id="main-image"
							class="main-image animated"
							data-bg-image="/wp-content/uploads/2019/04/sloth-web-3.png"
					/>
					<!-- srcset="/wp-content/uploads/2019/04/sloth-web-3-768x421.png 345w, /wp-content/uploads/2019/04/sloth-web-3-1024x562.png 465w"
					sizes="(max-width: 345px) 350px, (max-width: 465px) 465px" -->
					<!-- -1024x562 -->
					<!-- -768x421 -->

					<noscript>
						<img src="/wp-content/uploads/2019/04/sloth-web-3.png" class="main-image" />
					</noscript>

				</div>

			</section>

			<section class="invite">

				<div class="container">

					<h2 class="heading-1">Come be Inspired. <span>Come Make a Difference.</span></h2>
					<h2 class="heading-1">Come be a Force of Nature.</h2>
					<p class="deets">
						<span class="deet">9.12.19</span>
						<span class="deet">6 p.m.</span>
						<span class="deet">Denver Zoo, 2300 Steele Street, Denver CO</span>
					</p>
					<p class="leaf-wrapper">
						<img src="/wp-content/uploads/2019/04/leaf-web.svg" class="leaf"  />
					</p>
					<?php echo do_shortcode('[content_block id=16]'); ?>

				</div>

			</section>

			<section class="silhouettes">

				<div class="container">
					<div class="silhouette-wrapper">
						<div class="silhouette silhouette-1"></div>
						<div class="silhouette silhouette-2"></div>
						<div class="silhouette silhouette-3"></div>
					</div>
				</div>

			</section>



			<section class="levels">
				<div class="container">

					<h2>Sponsorship Levels</h2>

					<p class="leaf-wrapper">
						<img src="/wp-content/uploads/2019/04/leaf-web.svg" class="leaf"  />
					</p>

					<div class="levels-grid">

						<div class="tier tier-full-width tier-1">
							<h3>Title Sponsor</h3>
							<h4><span>$</span>100k</h4>

							<?php echo do_shortcode('[content_block id=14]'); ?>

						</div>

						<div class="tier tier-full-width tier-2">
							<h3>Presenting Sponsor</h3>
							<h4><span>$</span>50k</h4>
							<?php echo do_shortcode('[content_block id=18]'); ?>
						</div>

						<div class="tier tier-full-width tier-3">
							<h3>Habitat Sponsor</h3>
							<h4><span>$</span>25k</h4>
							<?php echo do_shortcode('[content_block id=19]'); ?>
						</div>

						<div class="levels-grid">

							<div class="tier tier-4">
								<h3>Wilderness Sponsor</h3>
								<h4><span>$</span>10k</h4>
								<?php echo do_shortcode('[content_block id=20]'); ?>
								<a class="button" href="/wilderness-sponsorship/">Become a Wilderness Sponsor</a>
							</div>

							<div class="tier tier-5">
								<h3>Table Sponsor</h3>
								<h4><span>$</span>5k</h4>
								<?php echo do_shortcode('[content_block id=21]'); ?>
								<a class="button" href="/table-sponsorship/">Become a Table Sponsor</a>
							</div>

						</div>

					</div>

					<h2>Sponsors</h2>

					<p class="leaf-wrapper">
						<img src="/wp-content/uploads/2019/04/leaf-web.svg" class="leaf"  />
					</p>

					<div class="sponsors-grid">

						<div class="sponsors-wrapper">
							<h3>Conservation Award Sponsor</h3>

							<div class="sponsor-wrapper">
								<img src="/wp-content/uploads/2019/04/KM_Concessions.png" />

							</div>


						</div>
						<div class="sponsors-wrapper sponsors-habitat">
							<h3>Habitat Sponsor</h3>

							<div class="sponsor-wrapper">
								<img src="/wp-content/uploads/2019/07/Wagner_lockup-color.png" />
							</div>

							<div class="sponsor-wrapper">
								<img src="/wp-content/uploads/2019/08/Brownstein_50Anniversary_Logo.jpg" />
							</div>

							<div class="sponsor-wrapper">
								The Gilbert & Kaufmann Family Foundation
							</div>

							<div class="sponsor-wrapper">
								Buz & Sherri Koelbel
							</div>

						</div>

						<div class="sponsors-wrapper sponsors-wrapper-3">

							<h3>Wilderness Sponsor</h3>

							<div class="sponsor-wrapper">Butler Rents</div>
							<div class="sponsor-wrapper">The Chotin Foundation – Robin & Steven Chotin and Family</div>
							<div class="sponsor-wrapper">JPMorgan Chase</div>
							<div class="sponsor-wrapper">Mittera Colorado</div>
							<div class="sponsor-wrapper">Occidental</div>
							<div class="sponsor-wrapper">Pacific Western Bank</div>
							<div class="sponsor-wrapper">Vehicle Vault</div>
							<div class="sponsor-wrapper">Todd Wheeler - Cushman Wakefield</div>

						</div>

						<div class="sponsors-wrapper sponsors-wrapper-3">

							<h3>Table Sponsor</h3>

							<div class="sponsor-wrapper">Altria</div>
							<div class="sponsor-wrapper">Alvarado Restaurant Group</div>
							<div class="sponsor-wrapper">AOR</div>
							<div class="sponsor-wrapper">CBS 4</div>
							<div class="sponsor-wrapper">Cigna</div>
							<div class="sponsor-wrapper">Haselden Construction</div>
							<div class="sponsor-wrapper">Headwaters Strategies / 5280 Strategies</div>
							<div class="sponsor-wrapper">IMA Financial Group</div>
							<div class="sponsor-wrapper">Jay's Valet</div>
							<div class="sponsor-wrapper">MDC Holdings</div>
							<div class="sponsor-wrapper">Metro Denver Economic Development Corporation</div>
							<div class="sponsor-wrapper">Plante Moran</div>
							<div class="sponsor-wrapper">Seattle Fish</div>
							<div class="sponsor-wrapper">SRC Energy</div>
							<div class="sponsor-wrapper">St. Joseph Hospital Foundation</div>
							<div class="sponsor-wrapper">UMB Bank</div>
							<div class="sponsor-wrapper">US Bank</div>
							<div class="sponsor-wrapper">Westside Investment Partners</div>
							<div class="sponsor-wrapper">Visit Denver</div>

						</div>

					</div>

					<h2>Contact</h2>

					<p class="leaf-wrapper">
						<img src="/wp-content/uploads/2019/04/leaf-web.svg" class="leaf"  />
					</p>


					<?php echo do_shortcode('[content_block id=30]'); ?>
				</div>

			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
