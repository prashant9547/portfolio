<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prashant Radadiya - Web Developer and Front-end Developer</title>

<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Web Fonts -->
<link href='../../../fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- Font Awesome -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Nivo Lightbox -->
<link href="vendor/nivo-lightbox/nivo-lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/nivo-lightbox/themes/default/default.css" type="text/css" />
  <!-- /Nivo Lightbox -->
  <!-- Perfect ScrollBar -->
<link href="vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
<!-- owl carousel -->
<link href="vendor/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="vendor/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
<!-- Main Styles -->
<link href="css/styles.css" rel="stylesheet">

</head>
<body>
<!-- Page Loader
========================================================= -->
<div class="loader-container" id="page-loader"> 
  <div class="loading-wrapper">
  	<div class="loader-animation" id="loader-animation">
  		<span class="loader"><span class="loader-inner"></span></span>
  	</div>    
    <!-- Edit With Your Name -->
   <div class="loader-name" id="loader-name">
      Prashant <strong> Radadiya</strong>
    </div>
    <!-- /Edit With Your Name -->
    <!-- Edit With Your Job -->
   <p class="loader-job" id="loader-job"> Web Developer & Designer </p>
    <!-- /Edit With Your Job -->
  </div>   
</div>
<!-- /End of Page loader
========================================================= -->

<!-- Main Content
================================================== -->
<section id="body" class="">

	<div class="container">

		<!-- MAIN MENU -->
		<div class="main-menu" id="main-menu">
			<ul class="main-menu-list">
				<li><a href="#page-resume" class="link-home">Home</a></li>
				<li><a href="#page-resume" class="link-page">Resume</a></li>
				<li><a href="#page-skills" class="link-page">Skills</a></li>
				<li><a href="#page-portfolio" class="link-page">Portfolio</a></li>
				<li><a href="#page-blog" class="link-page">Blog</a></li>
				<li><a href="#page-contact" class="link-page">Contact</a></li>
			</ul>
		</div>
		<!-- /MAIN MENU -->
		
		<!-- SECTION: vCard Body  -->	
		<div class="section-vcardbody section-home" id="section-home">
			<!-- Profile pic-->
			<div class="vcard-profile-pic">
				<img src="img/profile2.jpg" id="profile2"  alt=""/>
				<img src="img/profile.jpg" id="profile1" class="profileActive" alt=""/>
			</div>
			<!-- /Profile pic -->
			<!-- Description -->
			<div class="vcard-profile-description">
                <!-- Profile title -->
                <?php
                    include 'dbconfig/connection.php';
                    $res = $database->home();
                    $row = mysqli_fetch_assoc($res);
                ?>
				<h1 class="profile-title">I'm <span class="color1"><?php echo $row['myName']; ?></span></h1>
				<h2 class="profile-subtitle">Web Designer & Developer</h2>
				<!-- /Profile Title -->
				<!-- Description Text -->
				<hr class="hr1">
				<div class="vcard-profile-description-text">
					<p><?php echo $row['aboutDesc']; ?></p>
				</div>	
				<!--/ Description Text -->	
				<!-- Description feature -->
				<div class="vcard-profile-description-feature">
					<!-- item -->
					<div class="vcard-profile-description-ft-item">
						<p>email:  prashantradadiya47@gmail.com / phone +(91) 9033739680</p>
					</div>
					<!-- item -->
				</div>	
				<!-- /Description feature -->		
			</div>
			<!-- /Description -->	
			<!-- Footer -->		
			<div class="vcard-footer">
				<!-- Social Icons -->
				<div class="footer-social-icons">
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
				<!-- /Social Icons -->
			</div>
		</div>
		<!-- /SECTION: vCard Body  -->	

		<!-- PAGE: RESUME -->
		<div class="section-vcardbody section-page" id="page-resume">

			<!-- SECTION: Education -->
			<div class="section-education">
				<!-- Section title -->
	            <h2 class="section-title">Resume</h2>
							<!-- /Section title -->
							<?php
										$res = $database->resume();
										$row1 = mysqli_fetch_assoc($res);
								?>
	            <!-- Buttons -->
	            <div class="resume-buttons header-page-buttons">
	            	<!-- Download CV button -->
					<a href="resume_pdf.php?file=<?php echo $row1['resume']; ?>" class="btn btn-default btn-default2"><i class="fa fa-download"></i>&nbsp; Download my resume</a>
	            	<!-- /Download CV button -->
	            	<!-- Get in Touch button -->
					<a href="#page-contact" class="btn btn-default btn-default2 link-page"><i class="fa fa-download"></i>&nbsp;  Get in Touch</a>
	            	<!-- /Get in Touch button -->
	            </div>
	            <!-- /Buttons -->

				<h2 class="section-title2"><i class="fa fa-university"></i>&nbsp; Education</h2>

							<?php
										$res = $database->edu();
										while($row3 = mysqli_fetch_assoc($res)){
								?>
	            <!-- Resume Item -->
				<div class="resume-item">
					<!-- Graduation title -->
                  	<h3 class="section-item-title-1"><?php echo $row3['eduName']; ?></h3>
                  	<!-- /Graduation title -->
                  	<!-- Graduation time -->
                  	<h4 class="graduation-time"> <span> Rajkot -  <span class="graduation-date">Graduation </b> <?php echo $row3['eduEnd']; ?></span></h4>
                  	<!-- /Graduation time -->
                  	<!-- content -->
                  	<div class="graduation-description">
                  	  <p><?php echo $row3['eduDesc']; ?></p>
                  	</div>
                  	<!-- /Content -->
				</div>
				<?php 
                    }
                    ?>

	            <!-- /Resume Item -->
			</div>
			<!--/ SECTION: Education -->
			
			<!-- SECTION: WORK EXPERIENCE -->
			<div class="section-education">

	            <h2 class="section-title2"><i class="fa fa-flag"></i>&nbsp; Work Experience</h2>
							<?php
										$res = $database->exp();
										while($row4 = mysqli_fetch_assoc($res)){
								?>
	            <!-- Resume Item -->
				<div class="resume-item">
					<!-- Work Place -->
                  	<h3 class="section-item-title-1"><?php echo $row4['comName']; ?></h3>
                  	<!-- /Work Place -->
                  	<!-- Job Time -->
                  	<h4 class="job"><b><?php echo $row4['comDeg']; ?></b>  <span class="job-date"><?php echo $row4['comStart'] . ' To ' . $row4['comEnd']; ?> </span></h4>
                  	<!-- /Job Time-->
                  	<!-- content -->
                  	<div class="graduation-description">
                  	  <p><?php echo $row4['comDesc']; ?></p>
                  	</div>
                  	<!-- /Content -->
				</div>
				<?php 
                    }
                    ?>
	  
			
	            
			</div>
			<!--/ SECTION: WORK EXPERIENCE -->

			<h2 class="section-title2"><i class="fa fa-commenting"></i>&nbsp; Testimonials</h2>

			<!-- Testimonials -->
			<div class="testimonials">
				<!-- Testimonial Slides -->
				<div class="testimonial-slides" id="testimonial-carousel">
					<!-- item -->
					<div class="testimonial-item">
						<!-- Testimonial Content -->
						<div class="testimonial-content">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat malesuada aliquet. Morbi vulputate nisl eget adipiscing consequat. Cras arcu tortor, ornare vel libero et, sagittis adipiscing leo. Aenean eget."</p>
						</div>						
						<!-- /Testimonial Content -->	
						<!-- Testimonial Author -->
						<div class="testimonial-credits">
							<!-- picture -->
							<div class="testimonial-picture">
								<img src="img/team2.jpg" alt=""/>
							</div>							
							<!-- /picture -->
							<p class="testimonial-author">Melissa Alvarez</p>
							<p class="testimonial-firm">Trexus Co.</p>
						</div>
						<!-- /Testimonial Author -->								
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="testimonial-item">
						<!-- Testimonial Content -->
						<div class="testimonial-content">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat malesuada aliquet. Morbi vulputate nisl eget adipiscing consequat. Cras arcu tortor, ornare vel libero et, sagittis adipiscing leo. Aenean eget."</p>
						</div>						
						<!-- /Testimonial Content -->	
						<!-- Testimonial Author -->
						<div class="testimonial-credits">
							<!-- picture -->
							<div class="testimonial-picture">
								<img src="img/team1.jpg" alt=""/>
							</div>							
							<!-- /picture -->
							<p class="testimonial-author">John Rex</p>
							<p class="testimonial-firm">DotRex Co.</p>
						</div>
						<!-- /Testimonial Author -->								
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="testimonial-item">
						<!-- Testimonial Content -->
						<div class="testimonial-content">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat malesuada aliquet. Morbi vulputate nisl eget adipiscing consequat. Cras arcu tortor, ornare vel libero et, sagittis adipiscing leo. Aenean eget."</p>
						</div>						
						<!-- /Testimonial Content -->	
						<!-- Testimonial Author -->
						<div class="testimonial-credits">
							<!-- picture -->
							<div class="testimonial-picture">
								<img src="img/team3.jpg" alt=""/>
							</div>							
							<!-- /picture -->
							<p class="testimonial-author">Jhonathan Smith</p>
							<p class="testimonial-firm">RedWings Co.</p>
						</div>
						<!-- /Testimonial Author -->								
					</div>
					<!-- /item -->
				</div>
				<!-- Testimonial Slides -->
			</div>
			<!-- /testimonials -->
				
			<div class="page-footer">
				<!-- Buttons -->
	            <div class="resume-buttons">
	            	<!-- Download CV button -->
								<a href="resume_pdf.php?file=<?php echo $row1['resume']; ?>" class="btn btn-default btn-default2"><i class="fa fa-download"></i>&nbsp; Download my resume</a>
	            	<!-- /Download CV button -->
	            	<!-- Get in Touch button -->
					<a href="#page-contact" class="btn btn-default btn-default2 link-page"><i class="fa fa-download"></i>&nbsp;  Get in Touch</a>
	            	<!-- /Get in Touch button -->
	            </div>
	            <!-- /Buttons -->
	            <!-- Quote -->
	            <p class="footer-quote">"Only You Hold The Key To your True Potential" <br/><i>unknown</i></p>
	            <!-- /Quote -->
			</div>			
			 
		</div>
		<!-- /PAGE: RESUME  -->	

		<!-- SECTION: SKILLS-->
		<div class="section-vcardbody section-page" id="page-skills">
			<div class="section-skills">

				<!-- Section title -->
	            <h2 class="section-title">SKILLS</h2>
	            <!-- /Section title -->


	            <!-- Subtitle -->
	          	<h3 class="section-item-title-2"><i class="fa fa-users"></i>&nbsp;&nbsp; Professional Skills</h3>
	          	<!-- /Subtitle -->

				<!-- Skils List -->
				<ul class="skills-list">
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" data-percent="70%" style="width: 70%;">
                            <span class="sr-only">70% Complete</span>
                        </div>
                        <span class="progress-type">Comunication</span>
                        <span class="progress-completed">70%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar progress-bar-2" role="progressbar" data-percent="85%" style="width: 85%;">
                            <span class="sr-only">85% Complete</span>
                        </div>
                        <span class="progress-type">Leadership</span>
                        <span class="progress-completed">85%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                    <!-- item-list -->
                    <li>
                      <div class="progress" title="Doing my best!">
                        <div class="progress-bar progress-bar-3" role="progressbar" data-percent="85%" style="width: 85%;">
                            <span class="sr-only">85% Complete</span>
                        </div>
                        <span class="progress-type">Confidence</span>
                        <span class="progress-completed">85%</span>
                      </div>
										</li>
										<li>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" data-percent="90%" style="width: 90%;">
                            <span class="sr-only">90% Complete</span>
                        </div>
                        <span class="progress-type">Creative Ideas</span>
                        <span class="progress-completed">90%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                </ul>
				<!-- /Skils List -->

				 <!-- Subtitle -->
	          	<h3 class="section-item-title-2"><i class="fa fa-laptop"></i>&nbsp;&nbsp; Software Skills</h3>
	          	<!-- /Subtitle -->

				<!-- Skils List -->
				<ul class="skills-list">
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar" data-percent="85%" role="progressbar" style="width: 85%;">
                            <span class="sr-only">85% Complete</span>
                        </div>
                        <span class="progress-type">Adobe Photoshop</span>
                        <span class="progress-completed">85%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar progress-bar-2" data-percent="85%" role="progressbar" style="width: 85%;">
                            <span class="sr-only">85% Complete</span>
                        </div>
                        <span class="progress-type">GitKraken</span>
                        <span class="progress-completed">85%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar progress-bar-3" data-percent="75%" role="progressbar" style="width: 75%;">
                            <span class="sr-only">75% Complete</span>
                        </div>
                        <span class="progress-type">Github</span>
                        <span class="progress-completed">75%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                  </ul>
				<!-- /Skils List -->

				 <!-- Subtitle -->
	          	<h3 class="section-item-title-2"><i class="fa fa-code"></i>&nbsp;&nbsp; Code Skills</h3>
	          	<!-- /Subtitle -->

				<!-- Skils List -->
				<ul class="skills-list">
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar" data-percent="80%" role="progressbar" style="width: 80%;">
                            <span class="sr-only">80% Complete</span>
                        </div>
                        <span class="progress-type">HTML5 / CSS3</span>
                        <span class="progress-completed">80%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar progress-bar-2" data-percent="70%" role="progressbar" style="width: 70%;">
                            <span class="sr-only">70% Complete</span>
                        </div>
                        <span class="progress-type">Javascript / Jquery </span>
                        <span class="progress-completed">70%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar progress-bar-3" data-percent="90%" role="progressbar" style="width: 90%;">
                            <span class="sr-only">90% Complete</span>
                        </div>
                        <span class="progress-type">Core PHP</span>
                        <span class="progress-completed">90%</span>
                      </div>
										</li>
										<li>
                      <div class="progress">
                        <div class="progress-bar" data-percent="80%" role="progressbar" style="width: 80%;">
                            <span class="sr-only">80% Complete</span>
                        </div>
                        <span class="progress-type">Laravel </span>
                        <span class="progress-completed">80%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar progress-bar-2" data-percent="70%" role="progressbar" style="width: 70%;">
                            <span class="sr-only">70% Complete</span>
                        </div>
                        <span class="progress-type">VueJs</span>
                        <span class="progress-completed">70%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                    <!-- item-list -->
                    <li>
                      <div class="progress">
                        <div class="progress-bar progress-bar-3" data-percent="50%" role="progressbar" style="width: 50%;">
                            <span class="sr-only">50% Complete</span>
                        </div>
                        <span class="progress-type">Wordpress</span>
                        <span class="progress-completed">50%</span>
                      </div>
                    </li>
                    <!-- /item list -->
                  </ul>
				<!-- /Skils List -->
				 
			</div>			
		</div>
		<!-- /SECTION: SKILLS  -->	

		<!-- SECTION: PORTFOLIO-->
		<div class="section-vcardbody section-page" id="page-portfolio">
			<div class="section-portfolio">

				<!-- Section title -->
	            <h2 class="section-title">Portfolio</h2>
	            <!-- /Section title -->

	            <!-- Projects list -->
				<div class="projects-list">

					<!-- item -->
					<div class="project-item">
						<!-- ==> Put your thumbnail as a background -->
						<a href="port1.png" class="project-thumbnail nivobox" data-lightbox-gallery="portfolio" style="background-image: url('port1.png');">
							<!-- project-description -->
							<div class="project-description-wrapper">
								<div class="project-description">
									<!-- project name -->
									<h2 class="project-title">Personal Portfolio</h2>
									<!-- /project name -->
									<span class="see-more">CV, Core PHP, Oops, One page, Resume</span>
								</div>
							</div>
							<!-- /project-description -->
						</a>
					</div>			
					<!-- /item -->

					<!-- item -->
					<div class="project-item">
						<!-- ==> Put your thumbnail as a background -->
						<a href="img/portfolio/port4.png" class="project-thumbnail nivobox" data-lightbox-gallery="portfolio" style="background-image: url('img/portfolio/port4.png');">
							<!-- project-description -->
							<div class="project-description-wrapper">
								<div class="project-description">
									<!-- project name -->
									<h2 class="project-title">Zoopikart</h2>
									<!-- /project name -->
									<span class="see-more">E-commmerce, Sell, Cloths, Surat, Store</span>
								</div>
							</div>
							<!-- /project-description -->
						</a>
					</div>			
					<!-- /item -->



					<!-- item -->
					<div class="project-item">
						<!-- ==> Put your thumbnail as a background -->
						<a href="img/portfolio/port5.png" class="project-thumbnail nivobox" data-lightbox-gallery="portfolio" style="background-image: url('img/portfolio/port5.png');">
							<!-- project-description -->
							<div class="project-description-wrapper">
								<div class="project-description">
									<!-- project name -->
									<h2 class="project-title">Wskart</h2>
									<!-- /project name -->
									<span class="see-more">Rajkot, Kichenware, Online Store, Wordpress.</span>
								</div>
							</div>
							<!-- /project-description -->
						</a>
					</div>			
					<!-- /item -->


				
					<!-- item -->
					<div class="project-item">
						<!-- ==> Put your thumbnail as a background -->
						<a href="img/portfolio/port2.png" class="project-thumbnail nivobox" data-lightbox-gallery="portfolio" style="background-image: url('img/portfolio/port2.png');">
							<!-- project-description -->
							<div class="project-description-wrapper">
								<div class="project-description">
									<!-- project name -->
									<h2 class="project-title">New Gen Business</h2>
									<!-- /project name -->
									<span class="see-more">Design, Responsive, Css3, Bus.iness, Gen, Trend.</span>
								</div>
							</div>
							<!-- /project-description -->
						</a>
					</div>			
					<!-- /item -->

					
				</div>
				<!-- /projects list -->	

			</div>			
		</div>
		<!-- /SECTION: PORTFOLIO  -->	

		<!-- SECTION: BLOG-->
		<div class="section-vcardbody section-page" id="page-blog">
			<div class="section-blog">

				<!-- Section title -->
	            <h2 class="section-title">Blog</h2>
	            <!-- /Section title -->          
				
				<!-- BLOG POSTS -->
				<div class="blog-posts">
					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="single.html" class="loadPost"><img src="img/blog1.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="single.html" class="loadPost">How to succeed in meetings</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="single.html" class="loadPost">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales varius sagittis. Proin a arcu vitae turpis congue facilisis. Quisque a lectus pretium, sagittis augue in, fringilla risus....</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="single.html" class="btn btn-default loadPost">See More</a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="single.html" class="loadPost"><img src="img/blog2.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="single.html" class="loadPost">10 tips to improve your laptop</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="single.html" class="loadPost">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales varius sagittis. Proin a arcu vitae turpis congue facilisis. Quisque a lectus pretium, sagittis augue in, fringilla risus....</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="single.html" class="btn btn-default loadPost">See More</a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="single.html" class="loadPost"><img src="img/blog3.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="single.html" class="loadPost">News of the week</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="single.html" class="loadPost">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales varius sagittis. Proin a arcu vitae turpis congue facilisis. Quisque a lectus pretium, sagittis augue in, fringilla risus....</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="single.html" class="btn btn-default loadPost">See More</a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="single.html" class="loadPost"><img src="img/blog4.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="single.html" class="loadPost">How to be a leader</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="single.html" class="loadPost">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales varius sagittis. Proin a arcu vitae turpis congue facilisis. Quisque a lectus pretium, sagittis augue in, fringilla risus....</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="single.html" class="btn btn-default loadPost">See More</a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->

					<!-- blog-item -->
					<div class="blog-item">
						<div class="blog-item-wrapper">
							<!-- blog item thumbnail -->
							<div class="blog-item-thumb">
								<a href="single.html" class="loadPost"><img src="img/blog5.jpg" alt=""></a>
							</div>
							<!-- /blog item thumbnail -->
							<!-- Blog item - infos -->
							<div class="blog-item-infos">
								<!-- blog-item-title -->
								<div class="blog-item-title-wrapper">
									<h2 class="blog-item-title title-border"><a href="single.html" class="loadPost">Tips to talk in public</a></h2>
								</div>
								<!-- /blog-item-title -->
								<!-- blog item - description -->
								<div class="blog-item-description">
									<p><a href="single.html" class="loadPost">Designed by Norway-based practice Snhetta, in collaboration with local firm EHDD, the 10-story concrete structure will compliment SFMOMA’s original...</a></p>
								</div>
								<!-- /blog-item-description -->
								<!-- blog item - link -->
								<div class="blog-item-link">
									<a href="single.html" class="btn btn-default loadPost">See More</a>
								</div>
								<!-- /blog item - link -->
							</div>
							<!-- /blog item - infos -->
						</div>
					</div>
					<!-- /blog-item -->
				</div>
				 <!-- /BLOG POSTS -->
				<!-- Pagination -->
				<div class="section-pagination">
					<div class="row">
						<div class="col-xs-12">
							<span class="pagination-numbers">
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">5</a>
								<a href="#">6</a>
							</span>
						</div>
					</div>								
				</div>
				<!-- /Pagination -->
			</div>			
		</div>
		<!-- /SECTION: BLOG  -->	
 
		<!-- SECTION: BLOG SINGLE-->
		<div class="section-vcardbody section-page section-page-single" id="page-blog-single">
			<div class="section-blog-single">
				<!-- Load the single.html content via AJAX -->
				<div id="postHere"></div>			
				<!-- /Load the single.html content via AJAX -->
			</div>			
		</div>
		<!-- /SECTION: BLOG SINGLE  -->

		<!-- SECTION: CONTACT-->
		<div class="section-vcardbody section-page" id="page-contact">
			<div class="section-contact">

				<!-- Section title -->
	            <h2 class="section-title">Contact</h2>
	            <!-- /Section title -->

	            <div class="map">
	            	<div class="map-overlay"></div>
	            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8352.985568651915!2d-0.12905994797222892!3d51.50665753790812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1spt-BR!2sbr!4v1443128181953" height="250" style="border:0" allowfullscreen></iframe>
	            </div>

	            <!-- Contact infos -->                 
                <div class="contact-infos">
                	<h4 class="contact-subtitle-1"><i class="fa fa-map"></i>&nbsp;   Address</h4>
                	<p>Plot-10 Madhav Residency St:2, Near Swati Park -Rajkot 360002.</p>
                	<h4 class="contact-subtitle-1"><i class="fa fa-phone-square"></i>&nbsp; Phone</h4>
                	<p>+(91) 9033739680, +(91) 8849400632</p>
                	<h4 class="contact-subtitle-1"><i class="fa fa-envelope"></i>&nbsp; Mail</h4>
                	<p>prashantradadiya47@gmail.com</p>
                </div>
                <!-- /Contact infos --> 

	            <!-- Contact form -->
	            <h4 class="contact-subtitle-1"><i class="fa fa-paper-plane-o"></i>&nbsp; Send Me a Message</h4>
		        <form id="contactForm" method="post" class="form">
		            <!-- Form Field -->
		            <div class="form-group">
		            	<input class="form-control required" id="name" name="name" placeholder="Name" type="text" required />
		            </div>
		            <!-- /Form Field -->
		            <!-- Form Field -->
		            <div class="form-group">
		            	<input class="form-control required" id="email" name="email" placeholder="Email" type="email" required />
		            </div>
		            <!-- /Form Field -->
		            <!-- Form Field -->
		            <div class="form-group">
		            	<input class="form-control required" id="subject" type="text" name="subject" placeholder="Subject" required>
		            </div>
		            <!-- /Form Field -->
		            <!-- Form Field -->
		            <div class="form-group">
		            	<textarea class="form-control required" id="message" name="message" placeholder="Message" rows="5" required></textarea>
		            </div>
		            <!-- /Form Field -->
		            <!-- Form Field -->
		            <div class="form-group">
		            	<input type="submit" class="btn btn-default form-send" value="Send!">
		            </div>  
		            <!-- /Form Field -->
		        </form>
		        <!-- /Contact Form -->

			</div>			
		</div>
		<!-- /SECTION: CONTACT  -->	
	</div>

</section>
<!-- /Main Content
================================================== -->

<!-- Contact Form - Ajax Messages
========================================================= -->
<!-- Form Sucess -->
<div class="form-result modal-wrap" id="contactSuccess">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <h4 class="modal-title"><i class="fa fa-check-circle"></i> Success!</h4>
    <p>Your message has been sent to us.</p>
  </div>
</div>
<!-- /Form Sucess -->
<!-- form-error -->
<div class="form-result modal-wrap" id="contactError">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <h4 class="modal-title"><i class="fa fa-times"></i> Error</h4>
    <p>There was an error sending your message.</p>
  </div>
</div>
<!-- /form-error -->

<!-- Contact Form - Ajax Messages
========================================================= -->


<!-- >> JS
============================================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="vendor/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/validate.js"></script>
<!-- Holder JS -->
<script src="vendor/holder.js"></script>
<!-- Modal box-->
<script src="vendor/nivo-lightbox/nivo-lightbox.min.js"></script>
<!-- /Modal Box -->
<!-- Perfect ScrolBar -->
<script src="vendor/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
<!-- /Perfect ScrolBar -->
<!-- Owl Caroulsel -->
<script src="vendor/owl.carousel/owl-carousel/owl.carousel.js"></script>
<!-- Google Maps -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Cross-browser -->
<script src="vendor/cross-browser.js"></script>
<!-- Main Scripts -->
<script src="js/main.js"></script>
<script>
    $(document).ready(function() {
window.onload = function () {
$('.loading-wrapper').fadeOut(500, function(){ $('.loading-wrapper').remove(); } );
}
});
    </script>

============================================================================= -->
</body>
</html>
