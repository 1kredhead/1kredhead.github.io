<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!doctype html>  
<html lang="en">
<head>

	<!-- Marvel 1.0.9 -->

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width">
	<meta name="baseurl" content="http://www.1kredhead.com/">
	<title><i></i>contact | 1k<span style="color:red">red</span>head.com</title>
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/marvel/consolidated-1.css" />
		
	
	
	<style type="text/css" media="all">form.rw-contact-form input.form-input-field {color: #ffffff;}
form.rw-contact-form input.form-input-button {color: #ffffff;}</style>
	
	
</head>
<body>

	<nav class="slide_nav">
		<div class="slide_wrap">
			<header>
				<div class="menu_btn close">
					<div class="meun_ui"></div>
				</div>
				<div id="slide_nav_title"></div>
			</header>
			<div class="scroll">
				<ul class="theme"><li><a href="../" rel=""><i></i> home</a></li><li><a href="../reels/reels.html" rel=""><i></i>reel</a></li><li><a href="../equipment/equipment.html" rel=""><i></i>equipment</a></li><li><a  class="current" href="contact.php" rel=""><i></i>contact</a></li></ul>
			</div>
		</div>
		<div class="anchor">
			<ul class="theme reset social_container"></ul>
		</div>
	</nav>

	<header class="theme cf">
		<div class="radial_main">
			<div class="z_up site_wrapper">
				<nav class="desk_links"><ul class="theme reset"></ul></nav>

				<a class="cartloom-viewcart">
					<span class="cartloom-cart-count">0</span>
					<span class="social-bag"></span>
				</a>

				<a href="http://www.1kredhead.com/" class="cf branding">
					<figure class="site_logo"></figure>
					<h1 class="site_title" data-cmsx>1k<span style="color:red">red</span>head.com</h1>
				</a>

				<figure class="theme feature cf">
					<img class="feature marvel_parallax"  alt="image shot by Chris McKay" src="../rw_common/images/013K0709.JPG">
					<div id="extraContainer1"></div>
				</figure>
			</div>
			<div class="site_wrapper rad">
				<div class="radial_grad radial_1"></div>
				<div class="radial_grad radial_2"></div>
			</div>
		</div>
	</header>

	<div class="dia_parent">
		<div class="diagonal">
			<ul class="anim theme reset social_container"></ul>
			<h2 class="anim site_slogan" data-cmsx><span>Christopher McKay, DOP       (416) 938-2523</span></h2>
		</div>
	</div>
	<div class="menu_mask"></div>

	<div class="site_wrapper menu_stick">
		<div class="menu_btn slideout">
			<div class="meun_ui"></div>
		</div>
	</div>

	<main class="theme site_wrapper cf">
		<section class="theme">
			<div class="section-theme">
				<div id="crumb_wrap"></div>
				
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element3'); ?>" name="form[element3]" size="40"/><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

			</div>
		</section>
		<aside class="theme">
			<h3 class="sidebar_title"></h3>
			
			
		</aside>
		<footer class="theme site_wrapper cf">
			&copy; 2023 Christopher McKay <a href="#" class="BA89AF8B-E61B-4E67-AB21-C97C76F60E93">Contact  Us</a><script type="text/javascript">(function(){ var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":ch";var _rwObsfuscatedHref3 = "ris";var _rwObsfuscatedHref4 = "mck";var _rwObsfuscatedHref5 = "ay@";var _rwObsfuscatedHref6 = "1kr";var _rwObsfuscatedHref7 = "edh";var _rwObsfuscatedHref8 = "ead";var _rwObsfuscatedHref9 = ".co";var _rwObsfuscatedHref10 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; Array.from(document.getElementsByClassName("BA89AF8B-E61B-4E67-AB21-C97C76F60E93")).forEach(function(x){x.href = _rwObsfuscatedHref});})()</script>
		</footer>
	</main>

	<div class="slide_overlay"></div>
	<div id="config_theme"></div>
	<script>window.jQuery || document.write('<script src="../rw_common/themes/marvel/assets/js/jquery.js">\x3C/script>')</script>
	<script type="text/javascript" src="../rw_common/themes/marvel/assets/js/function-min.js"></script>
</body>
</html>
