<!DOCTYPE php>
<php lang="en" ng-app="eduGuardApp">
<head>
<title>eduguard-home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<!-- AngularJS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.6/ui-bootstrap-tpls.min.js"></script>
<script src="js/app.js"></script>
</head>
<body ng-controller="MainController">

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Edugaurd</span>
				</div>
			</div>
			<!-- Main Navigation -->
			<nav class="main_nav_container">
                    <div class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="index.php">home</a></li>
                            <li class="main_nav_item"><a href="elements.php">about us</a></li>
                            <li class="main_nav_item"><a href="courses.php">courses</a></li>
                            <li class="main_nav_item"><a href="teachers.php">mentors</a></li>
                            <li class="main_nav_item"><a href="news.php">news</a></li>
                            <li class="main_nav_item"><a href="contact.php">contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
			<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="https://cdn-icons-png.freepik.com/256/1077/1077114.png?semt=ais_hybrid" alt="login">
			<span ng-if="!isLoggedIn"><a href="login.php">student login</a></span>
			<span ng-if="isLoggedIn">
				<a href="#" ng-click="logout()">logout</a>
				<span>{{currentUser.name}}</span>
			</span>
		</div>
            

			
		</div>
		

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                        <li class="menu_item menu_mm"><a href="index.php">Home</a></li>
                        <li class="menu_item menu_mm"><a href="elements.php">About us</a></li>
                        <li class="menu_item menu_mm"><a href="courses.php">Courses</a></li>
                        <li class="menu_item menu_mm"><a href="teachers.php">Mentors</a></li>
                        <li class="menu_item menu_mm"><a href="news.php">News</a></li>
                        <li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
                    </ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm"> All rights reserved</div>
			</div>

		</div>

	</div>
	
<!-- Home -->

<div class="home">

	<!-- Hero Slider -->
	<div class="hero_slider_container">
		<div class="hero_slider owl-carousel">
			
			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
					</div>
				</div>
			</div>
			
			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
					</div>
				</div>
			</div>
			
			<!-- Hero Slide -->
			<div class="hero_slide">
				<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
				<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
					<div class="hero_slide_content text-center">
						<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
					</div>
				</div>
			</div>

		</div>

		<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
		<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
	</div>

</div>

<div class="hero_boxes">
	<div class="hero_boxes_inner">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 hero_box_col">
					<div class="hero_box d-flex flex-row align-items-center justify-content-start">
						<img src="images/earth-globe.svg" class="svg" alt="">
						<div class="hero_box_content">
							<h2 class="hero_box_title">Online Courses</h2>
							<a href="courses.php" class="hero_box_link">view more</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 hero_box_col">
					<div class="hero_box d-flex flex-row align-items-center justify-content-start">
						<img src="images/books.svg" class="svg" alt="">
						<div class="hero_box_content">
							<h2 class="hero_box_title">News Updates</h2>
							<a href="news.php" class="hero_box_link">view more</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 hero_box_col">
					<div class="hero_box d-flex flex-row align-items-center justify-content-start">
						<img src="images/professor.svg" class="svg" alt="">
						<div class="hero_box_content">
							<h2 class="hero_box_title">Our Teachers</h2>
							<a href="teachers.php" class="hero_box_link">view more</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Courses</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a ng-href="courses.php">B.Tech Computer Science</a></div>
							<div class="card-text">Programming Fundamentals, Data Structures, Algorithms</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Dr. Ravi Kumar, <span>Professor</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span> 1 </span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a ng-href="courses.php">Electronics & Communication</a></div>
							<div class="card-text"> Digital Electronics, Communication Systems, Signal Processing</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Prof. Ananya Sharma, <span>HOD</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>2</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a ng-href="courses.php"> Mechanical Engineering</a></div>
							<div class="card-text">Thermodynamics, Fluid Mechanics,  Manufacturing Processes</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Dr. Sunil Verma, <span>Professor</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>3</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Register now and gain knowledge <span> </span> for your better</h1>
							<p class="register_text"> get your self registered for safe future with dedicated mentorship and guidance and be up to date with the latest educational news and updates.</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Search for your course</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree">
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">search course</button>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Services</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/earth-globe.svg" alt="">
					</div>
					<h3>Online Courses</h3>
					<p>Access our comprehensive library of B.Tech courses with interactive learning materials, video lectures, and practical assignments designed by top educators from leading engineering institutes across India.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					<h3>Mentorship</h3>
					<p>Connect with experienced professionals and professors who will guide you through your academic journey, provide career advice, and help you prepare for competitive exams like GATE, JEE, and placement interviews.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/books.svg" alt="">
					</div>
					<h3>News Updates</h3>
					<p>Stay informed about the latest educational opportunities, scholarship programs, competitive exam schedules, and industry developments relevant to engineering students across various disciplines.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/professor.svg" alt="">
					</div>
					<h3>Exceptional Professors</h3>
					<p>Learn from India's top engineering educators with decades of academic and industry experience. Our faculty includes IIT and NIT professors dedicated to providing quality education and mentorship to every student.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/blackboard.svg" alt="">
					</div>
					<h3>Top Programs</h3>
					<p>Choose from a wide range of AICTE-approved engineering programs designed to meet industry standards. Our curriculum is regularly updated to incorporate the latest technological advancements and market demands.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/mortarboard.svg" alt="">
					</div>
					<h3>Graduate Diploma</h3>
					<p>Earn a recognized degree that opens doors to opportunities in leading tech companies, government organizations, and research institutions. Our placement cell ensures students receive excellent career guidance and job prospects.</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

<div class="testimonials page_section">
    <!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>What our students say</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                
                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme testimonials_slider">
                        
                        <!-- Testimonials Item -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">"</div>
                                <p class="testimonials_text">The B.Tech Computer Science program at Eduguard has been transformative for my career. The curriculum is industry-relevant, and the mentors provide excellent guidance on emerging technologies. The placement support helped me secure a position at a leading tech company in Hyderabad.</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="images/testimonials_user.jpg" alt="">
                                    </div>
                                    <div class="testimonial_name">Rahul Sharma</div>
									<div class="testimonial_title">B.Tech CSE Graduate</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Item -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">"</div>
									<p class="testimonials_text">As a B.Tech Electronics student at Eduguard, I received exceptional training in both theoretical concepts and practical applications. The faculty's support during my GATE preparation was invaluable, and I successfully secured admission for M.Tech at IIT Madras. I'm grateful for the foundation Eduguard provided.</p>

                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="images/testimonials_user.jpg" alt="">
                                    </div>
                                    <div class="testimonial_name">Priya Patel</div>
										<div class="testimonial_title">B.Tech ECE Graduate</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Item -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">"</div>
                                <p class="testimonials_text">Eduguard's B.Tech Mechanical Engineering program provided me with a solid understanding of core concepts and exposed me to cutting-edge technologies like CAD/CAM and automation. The industry connections helped me secure an internship that later converted to a full-time role at a prestigious automotive company.</p>

                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="images/testimonials_user.jpg" alt="">
                                    </div>
                                    <div class="testimonial_name">Vikram Singh</div>
										<div class="testimonial_title">B.Tech ME Graduate</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


							
							
										

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Upcoming Events</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">15</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">JEE Main 2023 Registration Deadline</a></div>
									<div class="event_location">National Testing Agency</div>
									<p>Last date to register for JEE Main 2023 January session. Don't miss this opportunity to apply for premier engineering institutes across India. Visit the NTA official website for detailed information and application process.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">28</div>
									<div class="event_month">February</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">GATE 2023 Results Announcement</a></div>
									<div class="event_location">IIT Kanpur</div>
									<p>GATE 2023 results will be declared on the official website. Qualifying candidates can apply for M.Tech programs at IITs, NITs, and other prestigious institutions or for PSU recruitment. Check your scorecard and admission options.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">10</div>
									<div class="event_month">March</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">National Scholarship Portal Registration</a></div>
									<div class="event_location">Ministry of Education</div>
									<p>Applications open for various government scholarships for engineering students. Eligible candidates can apply for financial assistance based on merit, category, and economic background. Don't miss this opportunity to fund your education.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>	
					</div>
				</div>

			</div>
				
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>Eduguard</span>
							</div>
						</div>

						<p class="footer_about_text">get your self registered for safe future with dedicated mentorship and guidance and be up to date with the latest educational news and updates.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item" ng-repeat="item in navItems">
									<a ng-href="{{item.url}}">{{item.title}}</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Updates</a></li>
								<li class="footer_list_item"><a href="#">News</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Bhimavaram, Andhra Pradesh 
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@eduguard.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

<!-- Make sure your custom.js file or main script includes these initializations -->
<script>
$(document).ready(function()
{
    // Init Hero Slider
    if($('.hero_slider').length)
    {
        var heroSlider = $('.hero_slider');
        
        heroSlider.owlCarousel(
        {
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            nav: false,
            dots: false,
            smartSpeed: 800
        });
        
        // Add event listeners for slider navigation
        if($('.hero_slider_left').length)
        {
            $('.hero_slider_left').on('click', function()
            {
                heroSlider.trigger('prev.owl.carousel');
            });
        }
        
        if($('.hero_slider_right').length)
        {
            $('.hero_slider_right').on('click', function()
            {
                heroSlider.trigger('next.owl.carousel');
            });
        }
    }
    
    // Init Testimonials Slider
    if($('.testimonials_slider').length)
    {
        var testimonialsSlider = $('.testimonials_slider');
        
        testimonialsSlider.owlCarousel(
        {
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: false,
            nav: false,
            dots: true,
            smartSpeed: 600
        });
    }
});
</script>

</body>
</php>