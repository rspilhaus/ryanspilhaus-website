<?php 
	$pageTitle = "Resumé | Ryan Spilhaus Dot Com";
	include("header.php"); 
?>


<header class="resume-header">
	<div class="container">
		<a href="/" class="resume-header-logo logo"><?php echo file_get_contents("build/svg/logo.svg"); ?></a>
		<h1 class="resume-header-title">Ryan Spilhaus</h1>
		<h2 class="resume-header-subtitle">Front-End Developer +&nbsp;Designer</h2>
	</div><!--end .container-->
</header><!--end .resume-header-->

<section class="resume-intro">
	<div class="container">
		<p class="resume-intro-text">Hello! I&rsquo;m Ryan Spilhaus. I&rsquo;m a front-end developer + designer living in Kansas City, Missouri. I&rsquo;m passionate about building amazing things for the web, and I&rsquo;ve spent years honing my craft at digital and advertising agencies. Although my expertise is in front-end development, I have experience with each stage involved in a web project, from wireframing to design to development. </p>
	</div><!--end .container-->
</section><!--end .resume-intro-->

<section class="resume-block">
	<div class="container">
		<h3 class="resume-block-title">Work Experience</h3>
		<div class="resume-work">
			<h4 class="resume-work-title">Front-End Developer - MBB+ Advertising&nbsp;Agency</h4>
			<p class="resume-work-dates">March 2016 - Present</p>
			<ul>
				<li>Develop responsive web sites using modern best-practices and&nbsp;techniques</li>
				<li>Build custom WordPress themes and functionality for use with client&nbsp;sites</li>
				<li>Code responsive, standards-compliant email templates for client&nbsp;use</li>
				<li>Develop animated HTML5 Banner Ads using the Greensock  Javascript animation&nbsp;platform</li>
				<li>Produce wireframes and sketches for clients and&nbsp;designers</li>
			</ul>
		</div><!--end .resume-work-->
		<div class="resume-work">
			<h4 class="resume-work-title">UI/UX Developer + Designer - Cstraight&nbsp;Media</h4>
			<p class="resume-work-dates">July 2012 - March 2016</p>
			<ul>
				<li>Design and develop responsive web sites using modern best-practices and&nbsp;techniques</li>
				<li>Collaborate with a team of other designers and developers to complete larger-scale&nbsp;projects</li>
				<li>Build custom WordPress themes and functionality for use with client&nbsp;sites</li>
				<li>Design and develop responsive, standards-compliant email templates for client&nbsp;use</li>
				<li>Teach and assist junior designers and developers on the&nbsp;team</li>
				<li>Produce wireframes and sketches for clients and&nbsp;designers</li>
			</ul>
		</div><!--end .resume-work-->
		<div class="resume-work">
			<h4 class="resume-work-title">Web Director - McLean Bible&nbsp;Church</h4>
			<p class="resume-work-dates">November 2010 - June 2012</p>
			<ul>
				<li>Build and maintain websites and microsites for 14,000 member church in&nbsp;Virginia</li>
				<li>Train other staff members on how to use and interact with the various web properties and social&nbsp;media</li>
			</ul>
		</div><!--end .resume-work-->
	</div><!--end .container-->
</section><!--end .resume-block-->

<section class="resume-block">
	<div class="container">
		<h3 class="resume-block-title extra-padding">Skills</h3>
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
		</div><!--end .skills-list-holder-->
	</div><!--end .container-->
</section><!--end .resume-block-->

<section class="resume-block">
	<div class="container">
		<h3 class="resume-block-title">Education</h3>
		<div class="resume-work">
			<h4 class="resume-work-title">American University - Washington D.C.</h4>
			<p class="resume-work-dates">Bachelor of Arts - Public Communication<br />Minor - Marketing</p>
	</div><!--end .container-->
</section><!--end .resume-block-->

<section id="contact">
	<div class="container">
		<a class="btn" href="build/pdf/Resume-RyanSpilhaus.pdf" target="_blank">Download PDF Version</a>
	</div><!--end .container-->
</section><!--end #contact-->

<?php include("footer.php"); ?>