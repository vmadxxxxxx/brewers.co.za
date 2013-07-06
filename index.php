<?php include('includes/header.php'); ?>
	
	<!--<script type="text/javascript">	
		
		// Set up Sliders
		// **************
		$(function(){

			$('#slider').anythingSlider({
				startStopped    : false, // If autoPlay is on, this can force it to start stopped
				autoPlay		: true,
				width           : 1200,   // Override the default CSS width
				height			: 364,
				//theme           : 'metallic',
				autoPlayLocked  : true,  // If true, user changing slides will not stop the slideshow
				resumeDelay     : 10000, // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
				startText		: '>',
				stopText		: '||',
				buildArrows		: false,
				resizeContents  : true,
				delay			: 5000,
				animationTime	: 800,
				easing			: 'swing',
				onSlideComplete : function(slider){
					// alert('Welcome to Slide #' + slider.currentPage);
				}
			});

		});
	</script>-->
	
	<!--<style>
		div.anythingSlider .start-stop.playing, div.anythingSlider .start-stop:hover, div.anythingSlider .start-stop.hover {padding:3px 0px 4px;background-color:#333;border-radius: 0 0 0px 0px;-moz-border-radius: 0 0 0px 0px;-webkit-border-radius: 0 0 0px 0px;}
		.start-stop {padding:3px 0px 4px !important;background-color:#333 !important;border-radius: 0 0 0px 0px !important;-moz-border-radius: 0 0 0px 0px !important;-webkit-border-radius: 0 0 0px 0px !important;}
		div.anythingSlider .thumbNav {float:right;}
		div.anythingSlider.activeSlider .thumbNav a.cur, div.anythingSlider.activeSlider .thumbNav a {background-color:#333;color:#DDD;border-radius: 0 0 0px 0px;-moz-border-radius: 0 0 0px 0px;-webkit-border-radius: 0 0 0px 0px;}
		div.anythingSlider .thumbNav {background-color:#333;}
		div.anythingSlider .thumbNav a {margin:0px 0px 0px 5px;}
		div.anythingSlider {top:-14px;}
		div.anythingSlider .anythingWindow {border:none;}
	</style>-->
	
	<div class="border-T">
		<h1 class="font1 w960 pad">Welcome to the new Brewers</h1>
		
	</div>
	
	<div id="slider-wrapper">
		<div id="slider-wrapper-inner" class="home">
			<!--<img class="slider-img-offset" src="assets/img/main_01.jpg" alt="" />-->
		</div>
	</div>

	<!--<h1 class="font1 w960 pad">Welcome to the new Brewers.</h1>-->
	
	<div class="font1 pad border-TB">
		<div class="copy18 w960">
			
			<!-- These are the blue buttons on the index page -->
				<a id="button-signup" href="contact.php">Sign up</a>
				<a id="button-tour" href="tour.php">Take a tour</a>
			<!-- END-->	
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td class="home-copy-left">
						Welcome to our unique online program. It's the first of its kind in our sector of the market and has revolutionised data distribution through the power of the internet.
						<br /><br />
						<!-- 2012.01.14
						It was a logical step for us to take because the advertising and marketing industries in South Africa are so dynamic and constantly changing that it was obvious we should shift to a platform that enables <b><em>instant</em></b> updating of data...<b><em>When we know, you know</em></b>.
						-->
						The advertising and marketing industries are so dynamic and constantly change so it became obvious to us that the shift to a platform which enable <b><em>instant</em></b> updating of data was inevitable and this has resulted in our promise that <b><em>When we know, you know</em></b>.
					</td>
					<td class="home-copy-right">
						<!--
						<br /><br />
						If you're a subscriber you can click on any of the birthdays listed here and be taken to their page in whatever application they're listed - depending on which Apps you subscribe to.
						<br /><br />
						-->
						It doesn't matter which platform you use - Windows (any version) or Mac or Linux. Those problems are a thing of the past. (But if you're still using Internet Explorer then we'd like to suggest that you change to <a id="chrome" target="_blank" href="http://www.google.com/chrome">Chrome</a>, <a id="firefox" target="_blank" href="http://www.mozilla.com/en-US/firefox/">Firefox</a> or <a id="opera" target="_blank" href="http://www.opera.com/download/">Opera</a> - they're far more responsive, reliable and up-to-date). 
						<br /><br />
						Just one more technical bit - please ensure you have Javascript enabled - the search functionality depends on it.<!--they make our programs super-slick.-->
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="content">		
	
		<div class="box-left borderR">
			<div class="box-left-inner">
			
				<?php include('includes/fetch_bdays.php'); ?>
				
				<h2 class="arrow_bg font1" style="white-space:nowrap;">Industry Birthdays for <?php echo date('jS F', time()); ?></h2>
				
				<br />
				<br />
				
				<ul id="bdays-list">
					
					<?php while ($employee = mysql_fetch_assoc($employees)) : ?>
						<li class="bdays-list-item">
							<a target="_blank" href="/BDA/bad/employees/view/<?php echo $employee['employee_id']; ?>"><?php echo $employee['employee_name'] . ' ' . $employee['employee_surname']; ?></a><br />
							<?php echo $employee['title_name']; ?> - <a target="_blank" href="/BDA/bad/agencies/view/<?php echo $employee['agency_id']; ?>"><?php echo $employee['agency_name']; ?></a>
						</li>
					<?php endwhile; ?>
					
					
					<?php while ($person = mysql_fetch_assoc($people)) : ?>
						<li class="bdays-list-item">
							<a target="_blank" href="/BDA/mad/people/view/<?php echo $person['person_id']; ?>"><?php echo $person['person_name'] . ' ' . $person['person_surname']; ?></a><br />
							<?php echo $person['department_name']; ?> - <a target="_blank" href="/BDA/mad/companies/view/<?php echo $person['company_id']; ?>"><?php echo $person['company_name']; ?></a>
						</li>
					<?php endwhile; ?>
					
					<?php while ($staff = mysql_fetch_assoc($staffs)) : ?>
						<li class="bdays-list-item">
							<a target="_blank" href="/BDA/alm/staffs/view/<?php echo $staff['staff_id']; ?>"><?php echo $staff['staff_name'] . ' ' . $staff['staff_surname']; ?></a><br />
							<?php echo $staff['sub_div_name']; ?> - <a target="_blank" href="/BDA/alm/publications/view/<?php echo $staff['publication_id']; ?>"><?php echo $staff['publication_name']; ?></a>
						</li>
					<?php endwhile; ?>
				
				</ul>
				
				<?php if (isset($birthdays_sat) && isset($birthdays_sun)) : ?>
					<br />
					<br />
					<br />
					<h2 class="arrow_bg font1">Industry Birthdays for Saturday</h2>
					
					<br />
					<br />
					
					<ul id="bdays-list">
						
						<?php while ($employee = mysql_fetch_assoc($birthdays_sat['employees'])) : ?>
							<li class="bdays-list-item">
								<a target="_blank" href="/BDA/bad/employees/view/<?php echo $employee['employee_id']; ?>"><?php echo $employee['employee_name'] . ' ' . $employee['employee_surname']; ?></a><br />
								<?php echo $employee['title_name']; ?> - <a target="_blank" href="/BDA/bad/agencies/view/<?php echo $employee['agency_id']; ?>"><?php echo $employee['agency_name']; ?></a>
							</li>
						<?php endwhile; ?>
						
						
						<?php while ($person = mysql_fetch_assoc($birthdays_sat['people'])) : ?>
							<li class="bdays-list-item">
								<a target="_blank" href="/BDA/mad/people/view/<?php echo $person['person_id']; ?>"><?php echo $person['person_name'] . ' ' . $person['person_surname']; ?></a><br />
								<?php echo $person['department_name']; ?> - <a target="_blank" href="/BDA/mad/companies/view/<?php echo $person['company_id']; ?>"><?php echo $person['company_name']; ?></a>
							</li>
						<?php endwhile; ?>
						
						<?php while ($staff = mysql_fetch_assoc($birthdays_sat['staffs'])) : ?>
							<li class="bdays-list-item">
								<a target="_blank" href="/BDA/alm/staffs/view/<?php echo $staff['staff_id']; ?>"><?php echo $staff['staff_name'] . ' ' . $staff['staff_surname']; ?></a><br />
								<?php echo $staff['sub_div_name']; ?> - <a target="_blank" href="/BDA/alm/publications/view/<?php echo $staff['publication_id']; ?>"><?php echo $staff['publication_name']; ?></a>
							</li>
						<?php endwhile; ?>
					
					</ul>
					
					<br />
					<br />
					<br />
					<h2 class="arrow_bg font1">Industry Birthdays for Sunday</h2>
					
					<br />
					<br />
					
					<ul id="bdays-list">
						
						<?php while ($employee = mysql_fetch_assoc($birthdays_sun['employees'])) : ?>
							<li class="bdays-list-item">
								<a target="_blank" href="/BDA/bad/employees/view/<?php echo $employee['employee_id']; ?>"><?php echo $employee['employee_name'] . ' ' . $employee['employee_surname']; ?></a><br />
								<?php echo $employee['title_name']; ?> - <a target="_blank" href="/BDA/bad/agencies/view/<?php echo $employee['agency_id']; ?>"><?php echo $employee['agency_name']; ?></a>
							</li>
						<?php endwhile; ?>
						
						
						<?php while ($person = mysql_fetch_assoc($birthdays_sun['people'])) : ?>
							<li class="bdays-list-item">
								<a target="_blank" href="/BDA/mad/people/view/<?php echo $person['person_id']; ?>"><?php echo $person['person_name'] . ' ' . $person['person_surname']; ?></a><br />
								<?php echo $person['department_name']; ?> - <a target="_blank" href="/BDA/mad/companies/view/<?php echo $person['company_id']; ?>"><?php echo $person['company_name']; ?></a>
							</li>
						<?php endwhile; ?>
						
						<?php while ($staff = mysql_fetch_assoc($birthdays_sun['staffs'])) : ?>
							<li class="bdays-list-item">
								<a target="_blank" href="/BDA/alm/staffs/view/<?php echo $staff['staff_id']; ?>"><?php echo $staff['staff_name'] . ' ' . $staff['staff_surname']; ?></a><br />
								<?php echo $staff['sub_div_name']; ?> - <a target="_blank" href="/BDA/alm/publications/view/<?php echo $staff['publication_id']; ?>"><?php echo $staff['publication_name']; ?></a>
							</li>
						<?php endwhile; ?>
					
					</ul>
					
				<?php endif; ?>
				
			</div>
		</div>
		
		<div class="box-right">
			
			<div class="box-right-inner">
			
				<img src="assets/img/home_01.png" alt="" title="" />
				<p class="grabber-title">Better. Faster. Cheaper.</p>
				<p class="width75">The new Brewers products are built using open source resources. Better quality, higher reliability, more flexibility and lower cost.</p>
				<p class="learn-more"><a href="about.php#opensource">Learn More</a></p>
				
				<br />
				<br />
				<br />
				
				<img src="assets/img/home_02.png" alt="" title="" />
				<p class="grabber-title">It's all about the search.</p>
				<p class="width75">Clearer, faster and more reliable searching. Done.</p>
				<p class="learn-more"><a href="about.php#searching">Learn More</a></p>
				
				
			</div>
		</div>
	
		<br class="clearfix"/>
		
	</div> <!-- #content -->
	

<?php include('includes/footer.php'); ?>
