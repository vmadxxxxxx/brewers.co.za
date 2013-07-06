<?php
	if (isset($_COOKIE['brewers_freelance'])) {
		// form has already been saved
		$result_msg = '<p class="result green">You have already saved your data. Thank you for your participation.</p>';
	}
	
	if(isset($_POST) && !empty($_POST)) {
		if ( empty($_POST['firstname']) || is_null($_POST['firstname']) )	{
			// firstname
			$input_err['firstname'] = 'Your first name is required';
		}
		if ( empty($_POST['lastname']) || is_null($_POST['lastname']) )	{
			// lastname
			$input_err['lastname'] = 'Your last name is required';
		}
		if ( empty($_POST['email']) || is_null($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
			// email isn't valid
			$input_err['email'] = 'A valid email address is required';
		}
		if (isset($input_err) || empty($input_err)) { 
			// free from errors
			$link = mysql_connect('localhost', 'root', 'root') or die('error connecting');
			$db = mysql_select_db('freelance_db', $link) or die('error_selecting');
			foreach ($_POST as $key => $value) {
				$data[$key] = $key == 'category' ? implode(",\n", $_POST[$key]) : mysql_real_escape_string($value);
			}

			$query = "INSERT INTO user_details (
				firstname, 
				lastname, 
				email,
				phone, 
				mobile,
				fax, 
				skype, 
				facebook, 
				twitter, 
				linkedin, 
				address_post,
				address_street,
				region_city,
				profile,
				experience,
				links,
				category,
				created
			) VALUES (
				'".$data['firstname']."',
				'".$data['lastname']."',
				'".$data['email']."',
				'".$data['phone']."',
				'".$data['mobile']."',
				'".$data['fax']."',
				'".$data['skype']."',
				'".$data['facebook']."',
				'".$data['twitter']."',
				'".$data['linkedin']."',
				'".$data['address_post']."',
				'".$data['address_street']."',
				'".$data['region_city']."',
				'".$data['profile']."',
				'".$data['experience']."',
				'".$data['links']."',
				'".$data['category']."',
				NOW()
			)";

			// print_r($data['category']);

			$result = mysql_query($query);
			

			if ($result) {
				// success on inserting
				$result_msg = '<p class="result green">Thank you for providing us with your data.</p>';
				setcookie("brewers_freelance", "saved", time() + (3600*24*7*365)); // one year ahead
			} else {
				//massive fail!
				$result_msg = '<p class="result red">There was an error saving your data. Please try again.</p>';
			}
		} // otherwise validation errors occur, proceed to display errors
	}
?>

<?php include('includes/header.php'); ?>

	<div class="border-TB"> 
		<h1 class="font1 w960 pad">The New Freelance Database</h1>
	</div>

	<div class="border-TB">
		<p class="w960 copy16 pad font1">
			We are launching the "Freelance Database" as a supplement to our existing Applications for Advertising Agencies, Advertisers and the Media.<br />
			<br />
			The intention is to provide easily accessible contact information for those specialists who cannot easily fit into our existing products. As such it will be an excellent opportunity for freelance writers, independent consultants and PR practitioners for example.<br />
			<br />
			It's very easy to be listed. Simply follow the click-through process and complete the information which YOU would like us to make public. You can say (within reason) almost anything you wish about yourself or your organisation - although it's best to keep it short and to the point - people will contact you if you are precise.<br />
			<br />
			For example if you are a writer who specialises in cooking then simply say that. You may also wish to provide some examples or links to what you've done previously to ensure that potential clients don't waste your time or theirs.<br />

			<br /><br />
			- <em>Chris</em> 
		</p>
	</div>

	<div id="content">
		
		<h2 class="contact-h2 arrow_bg">Fields we'd like you to provide</h2>

		<?php if(isset($result_msg) && !empty($result_msg) && !isset($input_err)) : ?>
			<div><?php echo $result_msg; ?></div>
		<?php endif; ?>

		<form id="freelanceForm" action="" method="post">
		
			<div class="inputBox">
				<label for="firstname">First Name: *</label>
				<input type="text" id="firstname" name="firstname" placeholder="First name">
				<?php if (isset($input_err) && !empty($input_err['firstname'])) :?>
					<p class="inputError"><?php echo $input_err['firstname']; ?></p>
				<?php endif; ?>
			</div>
			<div class="inputBox">
				<label for="lastname">Last Name: *</label>
				<input type="text" id="lastname" name="lastname" placeholder="Last name">
				<?php if (isset($input_err) && !empty($input_err['lastname'])) :?>
					<p class="inputError"><?php echo $input_err['lastname']; ?></p>
				<?php endif; ?>
			</div>
			<div class="inputBox">
				<label for="lastname">Email: *</label>
				<input type="text" id="email" name="email" placeholder="Email Address">
				<?php if (isset($input_err) && !empty($input_err['email'])) :?>
					<p class="inputError"><?php echo $input_err['email']; ?></p>
				<?php endif; ?>
			</div>
			<div class="inputBox">
				<label for="phone">Phone:</label>
				<input type="text" id="phone" name="phone" placeholder="Phone number">
			</div>
			<div class="inputBox">
				<label for="phone">Mobile/Cell:</label>
				<input type="text" id="mobile" name="mobile" placeholder="Mobile/Cell number">
			</div>
			<div class="inputBox">
				<label for="fax">Fax:</label>
				<input type="text" id="fax" name="fax" placeholder="Fax">
			</div>
			<div class="inputBox">
				<label for="skype">Skype:</label>
				<input type="text" id="skype" name="skype" placeholder="Skype">
			</div>

			<div class="inputBox">
				<label for="facebook">Facebook Profile:</label>
				<input type="text" id="facebook" name="facebook" placeholder="Facebook URL">
			</div>

			<div class="inputBox">
				<label for="twiiter">Twitter:</label>
				<input type="text" id="twitter" name="twitter" placeholder="Twitter name">
			</div>

			<div class="inputBox">
				<label for="linkedin">LinkedIn Profile:</label>
				<input type="text" id="linkedin" name="linkedin" placeholder="LinkedIn profile">
			</div>


			<div class="inputBox">
				<label for="address_post">Postal Address:</label>
				<textarea id="address_post" name="address_post" placeholder="Please provide your postal address"></textarea>
			</div>

			<div class="inputBox">
				<label for="address_street">Street Address:</label>
				<textarea id="address_street" name="address_street" placeholder="Please provide your street address"></textarea>
			</div>

			<div class="inputBox">
				<label for="region_city">Region</label>
				<select name="region_city">
					<option value="">Please select your nearest city</option>
					<option>Bloemfontein</option>
					<option>Cape Town</option>
					<option>Durban</option>
					<option>East London</option>
					<option>Johannesburg</option>
					<option>Namibia</option>
					<option>Pietermaritzburg</option>
					<option>Port Elizabeth</option>
				</select>
			</div>


			<div class="inputBox">
				<label for="profile">Profile:</label>
				<textarea id="profile" name="profile" placeholder="What you do and what you want others to know about you"></textarea>
			</div>


			<div class="inputBox">
				<label for="experience">Relevant Experience:</label>
				<textarea id="experience" name="experience" placeholder="Place any relevant experience here"></textarea>
			</div>
			

			<div class="inputBox">
				<label for="links">Links to websites you'd like to be included:</label>
				<textarea id="links" name="links" placeholder="http://sitetoinclude.com"></textarea>
			</div>



			<div class="inputBox">
				<label for="categories">Please select which category under which you would wish to be listed (maximum of 3). Hold either Ctrl or the Apple key (if you're using a Mac) to select multiple categories.</label>
				<select name="category[]" multiple="multiple" style="height:160px;width:250px;">
					<!-- <option value="">Select up to three</option> -->
					<option>Writer/Journalists/Columnists</option>
					<option>Media Planning/Strategic Consultants</option>
					<option>Marketing Consultants</option>
					<option>Artists/Designers</option>
					<option>Internet Specialists</option>
					<option>Photographers</option>
					<option>Research Consultants</option>
					<option>Event Organisers</option>
					<option>PR Practitioners</option>
					<option>Recruitment Agencies</option>
					<option>Public/Motivational Speakers</option>	
				</select>
			</div>
			<br />
			<br />
			<p>If you have any questions regarding filling out this form you can get hold of Chris from <a title="" href="/contact.php/">our contact page</a>.</p>

			<div class="inputBox">
			<input id="submit" type="submit" value="Submit" <?php if (  (isset($result) || isset($_COOKIE['brewers_freelance'])) && !isset($input_err) ) echo 'disabled="disabled"'; ?>>
			</div>

		</form>

		<br class="clearfix"/>
	</div> <!-- #content -->

<?php include('includes/footer.php'); ?>
