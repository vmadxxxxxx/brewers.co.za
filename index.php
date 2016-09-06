<? include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>

	<section class="content">

		<section class="section section-welcome">
			<article class="inner">
				<h1 class="section-title section-title--hero">
					<small>Welcome to</small><br />
					Brewer&rsquo;s
				</h1>
				<p class="section-copy">
					Brewer's Advertising Data is a central exchange of information within the advertising and marketing industries of South Africa.
					It contains data on people, products and companies &mdash; information you need to know.
				</p>
				<a title="How it works" href="#about" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="about" class="section section-howitworks section-dark">
			<article class="inner">
				<h1 class="section-title">
				    How it works
				</h1>
				<br><br><br>
				<section class="animations grids">
					<figure class="ani-servers g g-1-3">
						<img src="<?= $config->assets ?>/img/servers.png" alt="Servers">
					</figure>
					<figure class="ani-dataprogress g g-1-3">
						<div class="ani-popups">
							<aside class="ani-popup popup-1">
								<header>
									Daniel van der Merwe<br />
									News Presenter
								</header>
								<footer>added</footer>
							</aside>
							<aside class="ani-popup popup-2">
								<header>
									Sally Ambrose<br />
									Client Service Manager
								</header>
								<footer>updated</footer>
							</aside>
							<aside class="ani-popup popup-3">
								<header>
									Chris Wayne Perkins<br />
									Chairman
								</header>
								<footer>added</footer>
							</aside>
							<aside class="ani-popup popup-4">
								<header>
									Carrie Pretorius<br />
									Beauty Editor
								</header>
								<footer>added</footer>
							</aside>
						</div>
						<div class="ani-dataline"></div>
					</figure>
					<figure class="ani-gadgets g g-1-3">
						<img src="<?= $config->assets ?>/img/gadgets.png" alt="Devices and gadgets">
					</figure>
					<i class="cf"></i>
				</section>
				<div class="grids">
					<div class="g g-1-2">
						<article class="section-subcopy-cont">
							<h3 class="section-subcopy-title">When We Know, You Know.</h3>
							<p class="section-subcopy">
								We constantly monitor changes and update instantly every day. <br>
								<br>
								We can do this because our applications are the only ones of their kind that
								run live on the internet which you can access using any device &mdash;
								any where, any time.
							</p>
						</article>
					</div>
					<div class="g g-1-2">
						<article class="section-subcopy-cont">
							<h3 class="section-subcopy-title">Anywhere. Any Device.</h3>
							<p class="section-subcopy">
								In business today there's nothing more useless than stale
								data and nobody can afford to wait until tomorrow to hear
								about what's happened today. We believe this is extremely important.<br>
								<br>
								Access to Brewer's means you can immediately pinpoint who, what, when and where.
							</p>
						</article>
					</div>
				</div>

                <a title="The Products" href="#products" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="products" class="section section-earth section-products">
			<article class="inner">
				<h1 class="section-title">
				    The Products
				</h1>
				<p class="section-copy">
	                Each App will give you an edge. Whether it's knowing who the MD
	                of a specific company is, which agency handles a certain product
	                or what the readership is of an obscure magazine. Whatever you
	                need to know, you can find it here.
	            </p>
	            <section class="app-boxes grids">
	            	<figure class="app-box g g-1-3">
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
	            	<figure class="app-box g g-1-3">
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
	            	<figure class="app-box g g-1-3">
	            		<article class="inner">
							<header class="app-header">
								<h2>
									<small>The</small><br>
									<strong>Media</strong><br>
									<small>App</small><br>
								</h2>
							</header>
							<p class="app-content">
								A media information source which lists all the media in South Africa. Includes contact details, rates, personnel, circulation, readership and much more.
							</p>
	            		</article>
	            	</figure>
                    <?php /*
	            	<figure class="app-box g g-1-4">
	            		<article class="inner">
	            			<aside class="ribbon">new</aside>
							<header class="app-header">
								<h2>
									<small>The</small><br>
									<strong>Freelance</strong><br>
									<small>Database</small><br>
								</h2>
							</header>
							<p class="app-content">
								Coming soon!
								<? // Lists vital services, which remain on the periphery of mainstream business. Freelance Media Planners, Designers, Photographers, Artists, Copywriters and many more. Free access with any other App. ?>
							</p>
	            		</article>
	            	</figure>
                    */ ?>
	            </section>
                <a title="Give it a spin" href="#pricing" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="pricing" class="section section-spin">
			<article class="inner">
				<h1 class="section-title">
				    Give it a spin
				</h1>

				<section class="grids">
					<div <?/*class="g g-1-2"*/?>>
						<section>
							<div class="<?/*grids pricing-tiers*/?>">
								<h3 class="section-subcopy-title">Pricing. There are two options: </h3>
								<figure>
									<h4>Option 1</h4>
									<p>Monthly at R740 per App on a 12 month agreement.</p>
								</figure>
								<figure>
									<h4>Option 2</h4>
									<p>Annual is less expensive at R7,850 per App.</p>
								</figure>
							</div>
							<?/*<p>Please note that access to the Freelance Database App will be automatically included with any subscription.</p>*/?>
						</section>
					</div>
					<?/*
					<div class="g g-1-2">
						<section>
							<h3 class="section-subcopy-title">Try it at no cost &mdash; see if you like it.</h3>
							<p>
								Enter your details below and we'll take it from there. You will <em>not</em> hear from a high-pressure salesman &mdash; promise.
							</p>
						</section>
		                <form class="form-signup" action="" method="post">
		                	<input type="text" class="input" placeholder="Your full name" required>
		                	<input type="email" class="input" placeholder="Your email" required>
		                	<br>
		                	<br>
		                	<button class="btn" target="_blank" type="submit">Okay, let me in</button>
		                	<br>
		                </form>
					</div>
					*/?>
				</section>

                <a title="News from @BrewersApps" href="#section-5" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="section-5" class="section section-earth">
			<article class="inner">
				<h1 class="section-title">
				    <a class="twitter-title" title="@brewersapps" target="_blank" href="http://twitter.com/brewersapps">BrewersApps</a>
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
				    Our People
				</h1>
				<p class="section-copy">
	                A small team that have been doing this for 24 years, Brewer's is now a family-run business. One of us will always be on call to handle your questions.
	            </p>
	            <section class="grids the-family">
					<figure class="family-member g g-1-4">
						<figure class="ri family-member-pic">
							<img src="<?= $config->assets ?>/img/chris.png" alt="Chris Brewer">
						</figure>
						<figcaption>
							<h5 class="section-subcopy-title">Chris <br><small>Main Guy</small></h5>
							<p>
								He now runs Brewer's Apps full-time after having acquired 24 years experience
								in the Advertising and Marketing industry and is also your first point of contact.
							</p>
						</figcaption>
					</figure>
					<figure class="family-member g g-1-4">
						<figure class="ri family-member-pic">
							<img src="<?= $config->assets ?>/img/jake.png" alt="Jake Brewer">
						</figure>
						<figcaption>
							<h5 class="section-subcopy-title">Jake<br><small>Design and Branding</small></h5>
							<p>
								Always striving for pixel-perfect solutions. Compulsive obsessive, but for design that can only be good. Found at <a target="_blank" href="http://studiobrewer.com" title="studiobrewer.com">studiobrewer.com</a>.
							</p>
						</figcaption>
					</figure>
					<figure class="family-member g g-1-4">
						<figure class="ri family-member-pic">
							<img src="<?= $config->assets ?>/img/adam.png" alt="Adam Brewer">
						</figure>
						<figcaption>
							<h5 class="section-subcopy-title">Adam<br><small>Development</small></h5>
							<p>
								Web developer for <a target="_blank" href="http://brewerlogic.com" title="brewerlogic.com">brewerlogic.com</a>,
								he handles the technical bits; seldom understood, he makes things sound easier than they really are.
							</p>
						</figcaption>
					</figure>
					<figure class="family-member g g-1-4">
						<figure class="ri family-member-pic">
							<img src="<?= $config->assets ?>/img/tracey.jpg" alt="Tracey Baard">
						</figure>
						<figcaption>
							<h5 class="section-subcopy-title">Tracey<br><small>Content Manager</small></h5>
							<p>
								Tracey is in charge of keeping all our databases up-to-date, at all times and will usually be available when Chris isn't.
							</p>
						</figcaption>
					</figure>
	            </section>
	            <a title="Get in touch" href="#contact" class="arrow js-smoothscroll"></a>
			</article>
		</section>

		<section id="contact" class="section section-spin section-earth">
			<article class="inner">
				<h1 class="section-title">
				    Contact Us
				</h1>

				<section class="grids">
					<div class="g g-1-2">
						<section>
							<div class="grids pricing-tiers">
								<h3 class="section-subcopy-title">Sales &amp; Admin</h3>
								<figure>
									<h4>Chris Brewer</h4>
									<dl>
										<dt>Mobile</dt> <dd><a href="tel:+27825511371">082 551 1371</a></dd>
										<dt>Email</dt> <dd><a href="mailto:chris@brewers.co.za">chris@brewers.co.za</a></dd>
									</dl>
								</figure>
							</div>
						</section>
					</div>
					<div class="g g-1-2">
						<section class="pricing-tiers">
							<h3 class="section-subcopy-title">Information Updates</h3>
							<figure>
								<h4>Tracey Baard</h4>
								<dl>
									<dt>Office</dt> <dd><a href="+27833601052">083 360 1052</a></dd>
									<dt>Mobile</dt> <dd><a href="+27865049013">086 504 9013</a></dd>
									<dt>Email</dt> <dd><a href="mailto:tracey@brewers.co.za">tracey@brewers.co.za</a></dd>
								</dl>
							</figure>
						</section>
					</div>
				</section>
			</article>
		</section>

	</section>

<? include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>
