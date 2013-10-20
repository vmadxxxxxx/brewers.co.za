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
				<a title="How it works" href="#section-2" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="section-2" class="section section-howitworks section-dark">
			<article class="inner">
				<h1 class="section-title">
				    How it works
				</h1>
				<section class="animations grids">
					<figure class="ani-servers ri g g-1-3">
						<img src="<?= $config->assets ?>/img/servers.png" alt="Servers">
					</figure>
					<div class="ani-dataprogress g g-1-3">
						<div class="ani-popups">
							<aside class="ani-popup popup-1">
								<header>
									Jake Brewer<br />
									Senior Designer
								</header>
								<footer>added</footer>
							</aside>
							<aside class="ani-popup popup-2">
								<header>
									Adam Brewer<br />
									Senior Developer
								</header>
								<footer>removed</footer>
							</aside>
							<aside class="ani-popup popup-3">
								<header>
									Chris Brewer<br />
									Director
								</header>
								<footer>added</footer>
							</aside>
							<aside class="ani-popup popup-4">
								<header>
									Michele Brewer<br />
									Family Supervisor
								</header>
								<footer>all-knowing</footer>
							</aside>
						</div>
						<div class="ani-dataline"></div>
					</div>
					<figure class="ani-gadgets ri g g-1-3">
						<img src="<?= $config->assets ?>/img/gadgets.png" alt="Devices and gadgets">
					</figure>
					<i class="cf"></i>
				</section>
				<div class="grids">
					<div class="g g-1-2">
						<article class="section-subcopy-cont">
							<h3 class="section-subcopy-title">When We Know, You Know.</h3>
							<p class="section-subcopy">
								Changes happen in our industry all the time. This is is why
								we update the information within our applications on a
								minute-by-minute basis.<br />
								<br />
								It’s all either permission-based, or within the public domain,
								so it’s extremely reliable.
							</p>
						</article>
					</div>
					<div class="g g-1-2">
						<article class="section-subcopy-cont">
							<h3 class="section-subcopy-title">Anywhere. Any Device.</h3>
							<p class="section-subcopy">
								Among the endless valley of mobile devices, there are high demands.
								Each have their own constraints and screen proportions.<br />
								<br>
								Our web applications respond to these, displaying the information
								clearly, quickly and relevant to your device.
							</p>
						</article>
					</div>
				</div>

                <a title="The Products" href="#section-3" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="section-3" class="section section-earth section-products">
			<article class="inner">
				<h1 class="section-title">
				    The Products.
				</h1>
				<p class="section-copy">
	                Who? What? When? <br>
	                This is where you give a brief overview of the products.
	                Maybe 3—4 lines of copy, as each will have their own accompanying description.
	                Nothing more.
	            </p>
	            <section class="app-boxes grids">
	            	<figure class="app-box g g-1-4">
	            		<article class="inner">
							<header class="app-header">
								<h2>
									<small>The</small><br>
									<strong>Marketing</strong><br>
									<small>App</small><br>
								</h2>
							</header>
							<p class="app-content">
								Information on South African companies who market and
								promote their products or services.
							</p>
	            		</article>
	            	</figure>
	            	<figure class="app-box g g-1-4">
	            		<article class="inner">
							<header class="app-header">
								<h2>
									<small>The</small><br>
									<strong>Ad Agency</strong><br>
									<small>App</small><br>
								</h2>
							</header>
							<p class="app-content">
								Detailed information on all the advertising agencies in South Africa, including company information, details of personnel, plus the list of that agency's clients.
							</p>
	            		</article>
	            	</figure>
	            	<figure class="app-box g g-1-4">
	            		<article class="inner">
							<header class="app-header">
								<h2>
									<small>The</small><br>
									<strong>Media Almanac</strong><br>
									<small>App</small><br>
								</h2>
							</header>
							<p class="app-content">
								A media information source and lists those media in South Africa who accept advertising.
							</p>
	            		</article>
	            	</figure>
	            	<figure class="app-box g g-1-4">
	            		<article class="inner">
							<header class="app-header">
								<h2>
									<small>The</small><br>
									<strong>Freelance</strong><br>
									<small>Database</small><br>
								</h2>
							</header>
							<p class="app-content">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo dignissim pretium.
							</p>
	            		</article>
	            	</figure>
	            </section>
                <a title="Give it a spin" href="#section-4" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="section-4" class="section section-spin">
			<article class="inner">
				<h1 class="section-title">
				    Give it a spin.
				</h1>
				<section>
					<div class="grids pricing-tiers">
						<h3 class="section-subcopy-title">Pricing</h3>
						<figure class="g g-1-2">
							<h4>Tier 1</h4>
							<p>Pellentesque erat augue, gravida vel eros non, ullamcorper fermentum dolor.</p>
						</figure>
						<figure class="g g-1-2">
							<h4>Tier 2</h4>
							<p>Pellentesque erat augue, gravida vel eros non, ullamcorper fermentum dolor. ullamcorper fermentum dolor</p>
						</figure>
					</div>
				</section>
				<section>
					<h3 class="section-subcopy-title">Try it for free, see if you like it.</h3>
					<p class="small-content-block">
						Enter your details below, and we’ll take you there now. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent hendrerit commodo augue.
					</p>
				</section>
                <form class="form-signup" action="" method="post">
                	<input type="text" class="input" placeholder="Your full name" required>
                	<input type="email" class="input" placeholder="Your email" required>
                	<br />
                	<button class="btn" target="_blank" type="submit">Sign me up</button>
                	<br>
                </form>

                <a title="News from @BrewersApps" href="#section-5" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="section-5" class="section section-earth">
			<article class="inner">
				<h1 class="section-title">
				    <a title="@brewersapps" target="_blank" href="http://twitter.com/brewersapps">@BrewersApps</a>
				</h1>
				<i class="icon icon-twitter-1 icon-twitter-feed"></i>
                <aside id="twitter-feed" class="twitter-feed grids cf loading">
                	<div id="tweets" class="tweets hide"></div>
                	<div class="g g-1">
                		<a class="btn" title="@brewersapps" target="_blank" href="http://twitter.com/brewersapps">Go to Twitter</a>
                	</div>
                </aside>
                <a title="The Family" href="#section-6" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="section-6" class="section section-thefamily">
			<article class="inner">
				<h1 class="section-title">
				    La Familia
				</h1>
				<p class="section-copy">
	                A small team. That means more time for our clients. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu justo a est posuere pulvinar. Donec vel tempus turpis, eget sodales sapien.
	            </p>
	            <section class="grids the-family">
					<figure class="family-member g g-1-4">
						<figure class="ri family-member-pic">
							<img src="<?= $config->assets ?>/img/chris.png" alt="Chris Brewer">
						</figure>
						<figcaption>
							<h5 class="section-subcopy-title">Chris Brewer <br><small>Main Guy</small></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu justo a est posuere pulvinar. Donec vel tempus turpis, eget sodales sapien.
							</p>
						</figcaption>
					</figure>
					<figure class="family-member g g-1-4">
						<figure class="ri family-member-pic">
							<img src="<?= $config->assets ?>/img/jake.png" alt="Jake Brewer">
						</figure>
						<figcaption>
							<h5 class="section-subcopy-title">Jake Brewer<br><small>Design and Branding</small></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu justo a est posuere pulvinar. Donec vel tempus turpis, eget sodales sapien.
							</p>
						</figcaption>
					</figure>
					<figure class="family-member g g-1-4">
						<figure class="ri family-member-pic">
							<img src="<?= $config->assets ?>/img/adam.png" alt="Adam Brewer">
						</figure>
						<figcaption>
							<h5 class="section-subcopy-title">Adam Brewer <br><small>Development</small></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu justo a est posuere pulvinar. Donec vel tempus turpis, eget sodales sapien.
							</p>
						</figcaption>
					</figure>
					<figure class="family-member g g-1-4">
						<figure class="ri family-member-pic">
							<img src="" alt="Tracey Baard">
						</figure>
						<figcaption>
							<h5 class="section-subcopy-title">Tracey Baard<br><small>Content Manager</small></h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu justo a est posuere pulvinar. Donec vel tempus turpis, eget sodales sapien.
							</p>
						</figcaption>
					</figure>
	            </section>
			</article>
		</section>

	</section>

<? include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>
