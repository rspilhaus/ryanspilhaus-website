<?php 
	$pageTitle = "MBB Agency | Ryan Spilhaus Dot Com";
	include("header.php"); 
?>

<header class="work-header work-header-mbb">
	<a href="/" class="work-header-logo logo"><?php echo file_get_contents("build/svg/logo.svg"); ?></a>
	<div class="container">
		<h2 class="work-header-text">Don&rsquo;t just say you create action &ndash; show it. A top-notch agency deserves a top-notch website to show the&nbsp;world. </h2>
	</div><!--end .container-->
</header><!--end .work-header-->

<section class="work-intro">
	<div class="container">
		<div class="work-intro-text">
			<h1 class="work-intro-text-title">MBB+ Agency</h1>
			<h5 class="work-intro-text-meta">Front-End Development</h5>
			<p class="work-intro-text-summary">My first major project upon joining MBB was to build the front-end of the new website they had been working on. MBB is an advertising agency just outside Kansas City doing great work for all sorts of clients and the website had to reflect the high quality work being produced. What a great way to start a&nbsp;job!</p>
		</div><!--end .work-intro-text-->		
		<div class="work-intro-image">
			<img src="/build/images/work/mbb/work-logo.png" alt="MBB Logo">
		</div><!--end .work-intro-image-->
	</div><!--end .container-->
</section><!--end .work-intro-->

<section class="work-row">
	<div class="work-row-half work-row-photo" style="background-image:url('/build/images/work/mbb/work-half-one.jpg');"></div><!--end .work-row-half-->
	<div class="work-row-half">
		<div class="work-row-half-text">
			<h3 class="work-row-half-title">Front-End Development</h3>
			<p class="work-row-half-content">Bringing the design to life was an exciting process, full of interesting opportunities to use cutting edge web technologies like Flexbox, CSS Animations, native background video and more. The responsive design looks great on any device, and I was able to integrate plenty of interesting microinteractions to create a smooth, engaging&nbsp;experience.</p>
		</div><!--end .work-row-half-text-->
	</div><!--end .work-row-half-->
</section><!--end .work-row-->

<section class="work-row">
	<div class="work-row-half">
		<div class="work-row-half-text">
			<h3 class="work-row-half-title">Teamwork makes the dream work</h3>
			<p class="work-row-half-content">I love working with teams of specialized people, and this project was no exception. I was able to work with designers to interpret their vision, copywriters and SEO specialists to make sure the site was optimized, and a back-end developer to prepare the site to be integrated with the Drupal CMS. When everyone is working together, a great website is easy to create!</p>
		</div><!--end .work-row-half-text-->
	</div><!--end .work-row-half-->
	<div class="work-row-half work-row-photo" style="background-image:url('/build/images/work/mbb/work-half-two.jpg');"></div><!--end .work-row-half-->
</section><!--end .work-row-->

<section class="work-showcase">
	<a href="https://mbbagency.com" class="btn" target="_blank">Visit the Site</a>
	<img src="/build/images/work/mbb/work-browser.jpg" class="work-showcase-image" alt="">
</section><!--end .work-showcase-->

<?php include("footer.php"); ?>
	
	