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

<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<!-- | - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

Version: 1.0

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - | -->

<head>

	<title>contact</title>

<!-- Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="RapidWeaver" />
		

<!-- CSS -->
	<link rel="stylesheet" href="../rw_common/themes/autonomy/styles.css" />
	<link rel="stylesheet" href="../rw_common/themes/autonomy/styles.min.css" />
	<link rel="stylesheet" href="../rw_common/themes/autonomy/colors-page1.css" />
	
	<!-- Conditional Stylesheets for Internet Explorer 7, 8 and 9 -->
	<!--[if IE 9]><link rel="stylesheet" href="../rw_common/themes/autonomy/css/ie/ie9.css" media="all"/><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" href="../rw_common/themes/autonomy/css/ie/ie8.css" media="all"/><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="../rw_common/themes/autonomy/css/ie/ie7.css" media="all"/><![endif]-->

<!-- JavaScript : Include and embedded version -->
	<script src="../rw_common/themes/autonomy/javascript.js"></script>
	<script src="../rw_common/themes/autonomy/js/modernizr-respond.min.js"></script>
	<script src="../rw_common/themes/autonomy/js/jquery.min.js"></script>
	<script src="../rw_common/themes/autonomy/js/scripts.min.js"></script>
	<script>
		RwSet = {
			pathto: "../rw_common/themes/autonomy/javascript.js",
			baseurl: "http://www.1kredhead.com/"
		};
	</script>

<!-- JavaScript & CSS : Style Variations -->
	<script type="text/javascript" src="../rw_common/themes/autonomy/css/options/extracontent.js"></script>
		<script type="text/javascript" src="../rw_common/themes/autonomy/css/options/twitter.min.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/body/width/1100bx.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/fonts/body/arial.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/fonts/headings/sans-serif.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/header/title/font-size/38.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/header/slogan/font-size/26.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/header/logo/left.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/navigation/position/right.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/navigation/font-size/15.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/primary/font-size/16.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/secondary/position/right.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/secondary/font-size/13.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/footer/font-size/12.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/extra/font-size/13.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/autonomy/css/banner/height/450.css" />
		<script type="text/javascript" src="../rw_common/themes/autonomy/css/banner/image/11.js"></script>
		<script type="text/javascript" src="../rw_common/themes/autonomy/css/banner/slides/fade.js"></script>
		<script type="text/javascript" src="../rw_common/themes/autonomy/css/banner/slides/horizontal.js"></script>
		<script type="text/javascript" src="../rw_common/themes/autonomy/css/banner/slides/reverse-true.js"></script>
		<script type="text/javascript" src="../rw_common/themes/autonomy/css/banner/slides/slide-4000.js"></script>
		<script type="text/javascript" src="../rw_common/themes/autonomy/css/banner/slides/anim-1400.js"></script>
		<script type="text/javascript" src="../rw_common/themes/autonomy/css/banner/slides/easing/linear.js"></script>
		
	<style type="text/css" media="all">#title {
    font-size: 5.5rem;
font-weight: bold
}
.menu{
font-size: 2.25rem;
font-weight: bold
}</style>

	
	
	

</head>

<body>
	<div id="wrap">
		<div id="wrap-nav">
			<nav id="navigation" class="clearfix"><ul class="menu"><li><a href="../index.html" rel="self">home</a></li><li><a href="../styled-2/reels.html" rel="self">reel</a></li><li class="current"><a href="contact.php" rel="self">contact</a></li><li><a href="../styled/equipment.html" rel="self">equipment</a></li></ul></nav>
		</div><!-- nav -->
		<div id="top">
			<div id="headings" class="clearfix center">
				<div id="logo"><a href="http://www.1kredhead.com/"></a></div><!-- logo -->
				<h1 id="title"><a href="http://www.1kredhead.com/">1k<span style="color:red;&rdquo;>red</span><span style="color:white;&rdquo;>red</span>head.com</a> <span id="slogan">moving.images.</span><!-- slogan --></h1><!-- title -->
				<div id="extraContainer1"><!--extra user content renders here--></div><!-- extra content -->
			</div>
		</div>
		<header>
			<div id="header-container">
				<div id="banner">
					<div id="slides"><div id="extraContainer2"><!--extra user content renders here--></div></div><!-- extra content -->
				</div>
				<!-- banner -->
			</div>
			<!-- header-container -->
		</header>
		<!-- header -->
		<div id="extraContainer3"><!--extra user content renders here--></div>
		<div id="main-container">
			<div id="main" class="clearfix center">
				<section id="primary-container">
					
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message:</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

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
				</section>
				<!-- #primary-container -->
				<aside id="secondary-container">
					<h3></h3>
					<div id="sidebar">
						
					</div>
					<!-- #sidebar -->
					<div id="plugin-sidebar">
						
					</div>
					<!-- #plugin-sidebar -->
				</aside>
				<!-- #secondary-container -->
			</div>
			<!-- #main -->
		</div>
		<!-- #main-container -->
		<div id="footer-container">
			<div id="breadcrumb"></div><!-- #breadcrumb -->
		</div>
		<!-- #footer-container -->
		<div id="bottom">
			<div id="extraContainer4"><!--extra user content renders here--></div>
		</div>
		<footer>
			<div>
				<p>&copy; 2014 Christopher McKay <a href="#" id="rw_email_contact">Contact Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":ch";var _rwObsfuscatedHref3 = "ris";var _rwObsfuscatedHref4 = "mck";var _rwObsfuscatedHref5 = "ay@";var _rwObsfuscatedHref6 = "1kr";var _rwObsfuscatedHref7 = "edh";var _rwObsfuscatedHref8 = "ead";var _rwObsfuscatedHref9 = ".co";var _rwObsfuscatedHref10 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></p>
			</div>
		</footer>
		<!-- footer -->		
	</div>
	<!-- #wrap -->
</body>
</html>