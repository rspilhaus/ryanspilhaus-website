<?php 
	$pageTitle = "Ryan Spilhaus Dot Com | Front-End Developer &amp; Designer";
	include("header.php"); 
?>
<svg class="visuallyHidden">
  <filter id="svg-underline" primitiveUnits="objectBoundingBox">
    <feMorphology in="SourceGraphic" operator="dilate" radius="0.0075 0.05" result="outline"></feMorphology>
    <feFlood flood-color="white" width="1" height="0.03" x="0" y="0.85" result="underline"></feFlood>
    <feComposite in="underline" in2="outline" operator="out" result="underline"></feComposite>
    <feMerge>
      <feMergeNode in="underline"></feMergeNode>
      <feMergeNode in="SourceGraphic"></feMergeNode>
    </feMerge>
  </filter>
</svg>

<section id="hero">
	
	<div class="container">
 <h1 class="hero-statement"><span>Hello, I&rsquo;m <a href="#about" class="scroll highlight">Ryan</a>.</span><span>I build awesome</span><span><a href="#work" class="scroll highlight">experiences</a> for</span><span>the web.</span></h1> 
	</div><!--end .container-->
	<a class="down-arrow scroll" href="#work">
		<div class="down-arrow-dot animate-arrow"></div>
		<div class="down-arrow-dot animate-arrow"></div>
		<div class="down-arrow-dot animate-arrow"></div>
		<div class="down-arrow-arrow animate-arrow"></div>
	</a>
</section><!--end #hero-->

<section id="work">
	<div class="container grid">
		<a class="grid-item grid-item-half grid-item-primary home-work-mbb" href="/mbb">
			<!-- MBB -->
			<div class="grid-item-details">
				<h3 class="grid-item-title">MBB Agency</h3>
				<ul class="grid-item-specifics">
					<li>Front-end Development</li>
				</ul>
			</div><!--end .grid-item-details-->
		</a>
		<a class="grid-item grid-item-half grid-item-primary home-work-ecoag" href="/ecoagriculture">
			<!-- EcoAg -->
			<div class="grid-item-details">
				<h3 class="grid-item-title">EcoAgriculture Partners</h3>
				<ul class="grid-item-specifics">
					<li>Front-end Development</li>
					<li>WordPress Development</li>
				</ul>
			</div><!--end .grid-item-details-->
		</a>
		<a class="grid-item grid-item-third home-work-atom" href="/atom">
			<!-- Atom Project -->
			<div class="grid-item-details">
				<h3 class="grid-item-title">The Atom Project</h3>
				<ul class="grid-item-specifics">
					<li>Front-end Development</li>
					<li>Design</li>
				</ul>
			</div><!--end .grid-item-details-->
		</a>
		<a class="grid-item grid-item-third home-work-email" href="/emails">
			<!-- Emails -->
			<div class="grid-item-details">
				<h3 class="grid-item-title">HTML Emails</h3>
				<ul class="grid-item-specifics">
					<li>Email Development</li>
					<li>Design</li>
				</ul>
			</div><!--end .grid-item-details-->
		</a>
		<a class="grid-item grid-item-third home-work-cat" href="/blackcat">
			<!-- Back the Cat -->
			<div class="grid-item-details">
				<h3 class="grid-item-title">Black Cat Fireworks</h3>
				<ul class="grid-item-specifics">
					<li>Front-end Development</li>
				</ul>
			</div><!--end .grid-item-details-->
		</a>
		<a class="grid-item grid-item-half grid-item-primary home-work-tdr" href="/thedailyrider">
			<!-- TDR -->
			<div class="grid-item-details">
				<h3 class="grid-item-title">The Daily Rider</h3>
				<ul class="grid-item-specifics">
					<li>Front-end Development</li>
					<li>WordPress Development</li>
				</ul>
			</div><!--end .grid-item-details-->
		</a>
		<a class="grid-item grid-item-half home-work-fccpt" href="/fccpt">
			<!-- FCCPT -->
			<div class="grid-item-details">
				<h3 class="grid-item-title">FCCPT</h3>
				<ul class="grid-item-specifics">
					<li>UX Wireframing</li>
					<li>Front-end Development</li>
				</ul>
			</div><!--end .grid-item-details-->
		</a>
	</div><!--end .container work-grid-->
</section><!--end #work-->

<section id="about">
	<div class="container">
		
		<div class="about-image">
			<div class="about-frame-top"></div>
			<img src="/build/images/about-photo-opt.png" alt="Ryan Spilhaus">
			<div class="about-frame"></div>
		</div>
		<div class="about-text">
			<h2 class="about-text-title">About Me</h2>
			<p>Hello! I'm Ryan Spilhaus. I’m a front-end developer/designer living in Kansas City, Missouri. I’m passionate about building amazing things for the web, and I’ve spent years honing my craft at digital and advertising agencies. Although my expertise is in front-end development, I have experience with each stage involved in a web project, from wireframing to design to development. </p>

			<p>I’ve worked with a variety of clients on all sorts of projects. Whether it’s for a non-profit or for-profit, big corporation or small storefront, I love finding and building creative solutions that are both functional and attractive.</p>

			<p>Some of my skills include:</p>
			<div class="skills-list-holder">
				<ul class="skills-list">
					<li>HTML/CSS + SASS</li>
					<li>Photoshop + Illustrator</li>
					<li>Responsive Design + Development</li>
					<li>Email Design + Development</li>
					<li>WordPress Development</li>
				</ul>
				<ul class="skills-list">
					<li>Javascript/jQuery</li>
					<li>GreenSock Animation Platform</li>
					<li>HTML5 Ads</li>
					<li>PHP</li>
					<li>UX/Wireframing</li>
				</ul>
			</div>
		</div><!--end .about-text-->
	</div><!--end .container-->
</section><!--end #about-->

<section id="contact">
	<div class="container">
		<a class="btn" href="mailto:mail@ryanspilhaus.com">Want to get in touch? Email mail@ryanspilhaus.com</a>
	</div><!--end .container-->
</section><!--end #contact-->

<?php include("footer.php"); ?>
	
	