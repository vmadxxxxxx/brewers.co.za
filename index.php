<? include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>

	<section class="content">

		<section class="section section-welcome">
			<article class="inner">
				<h1 class="section-title section-title--hero">
					<small>Welcome to</small><br />
					Brewers.
				</h1>
				<p class="section-copy">
					Brewer&rsquo;s Advertising Data provides a directory of information on the advertising and marketing industries in South Africa, for the purposes of xxxx.
				</p>
				<div class="arrow"></div>
			</article>
		</section>

		<section class="section section-dark">
			<article class="inner">
				<h1 class="section-title">
				    When we know,<br> you know.
				</h1>
                <p class="section-copy">
                    Changes happen in our industry all the time.
                    This is is why we update the information within our applications on a minute-by-minute basis.
                    All of which is either permission-based, or within the public domain.
                </p>
                <aside class="animations grids cf">
                	<div class="g g-1-3">
                		<figure class="ri no-animations">
							<img src="<?= $config->assets ?>/img/we-know-sequence_01.png" alt="Industry changes">
						</figure>
						<figure class="animation animation-1">
							<div class="a-path">
								<i class="a-disk a-disk-1"></i>
								<i class="a-disk a-disk-2"></i>
								<i class="a-disk a-disk-3"></i>
								<i class="a-disk a-disk-4"></i>
								<i class="a-disk a-disk-5"></i>
								<i class="a-disk a-disk-6"></i>
							</div>
						</figure>
						<p class="animations-copy">Industry changes <br> happen frequently</p>
					</div>
					<div class="g g-1-3">
						<figure class="ri no-animations">
							<img src="<?= $config->assets ?>/img/we-know-sequence_02.png" alt="Minute-by-minute updates">
						</figure>
						<figure class="animation animation-2">
							<div class="a-clock">
								<i class="s-hand"></i>
								<i class="h-hand"></i>
								<i class="m-hand"></i>
							</div>
						</figure>
						<p class="animations-copy">Get minute-by-minute <br> updates</p>
					</div>
					<div class="g g-1-3">
						<figure class="ri no-animations">
							<img src="<?= $config->assets ?>/img/we-know-sequence_03.png" alt="Permission-based data">
						</figure>
						<figure class="animation animation-3">
							<div class="a-tick">
								<i class="tick-head"></i>
								<i class="tick-tail"></i>
							</div>
						</figure>
						<p class="animations-copy">All the data is <br> permission-based</p>
                	</div>
                </aside>
                <div class="arrow"></div>
			</article>
		</section>

		<section class="section section-earth">
			<article class="inner">
				<h1 class="section-title">
				    Anywhere. Any device.
				</h1>
                <article class="grids cf">
                	<div class="g g-1-2">
                		<figure class="ri no-animations">
							<img src="<?= $config->assets ?>/img/devices.png" alt="Any device">
						</figure>
					</div>
					<div class="g g-1-2">
						<p class="section-copy">
		                    Among the valleys of mobile devices, there are high demands. Each have their own constraints and screen proportions.<br /><br />
							Our web apps respond to these, displaying the information clearly and quickly.
		                </p>
					</div>
                </article>
                <div class="arrow"></div>
			</article>
		</section>

		<section class="section">
			<article class="inner">
				<h1 class="section-title">
				    Give it a spin.
				</h1>
                <p class="section-copy">
                    Sign up for a free trial and start using it straight away.<br /><br />
					You’ll soon discover why it’s the fastest, cheapest and most reliable product of it’s kind.
                </p>
                <div class="arrow"></div>
			</article>
		</section>

		<section class="section section-earth">
			<article class="inner">
				<h1 class="section-title">
				    News from<br> <a title="@brewersapps" target="_blank" href="http://twitter.com/brewersapps">@BrewersApps</a>
				</h1>
				<i class="icon icon-twitter-1 icon-twitter-feed"></i>
                <aside id="twitter-feed" class="twitter-feed grids cf loading">
                	<div id="tweets" class="tweets hide"></div>
                	<div class="g g-1">
                		<a class="btn" title="@brewersapps" target="_blank" href="http://twitter.com/brewersapps">Go to Twitter</a>
                	</div>
                </aside>
			</article>
		</section>

	</section>

<? include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>
