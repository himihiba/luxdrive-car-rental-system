<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LUXDRIVE</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<!-- HEADER -->
	<header class="header" id="header">
		<div class="container flex-space">
			<a href="index.php?page=home" class="nav__logo">LUXDRIVE</a>
			<nav class="nav flex nav_ul nav_mobile">
				<ul class="nav__list flex ">
					<li><a href="index.php?page=home" class="nav__links">Home</a></li>
					<li><a href="index.php?page=browse" class="nav__links">Browse cars</a></li>
					<li><a href="#contact" class="nav__links">Contact us</a></li>
				</ul>
				<?php if (isset($_SESSION['user_id'])) { ?>
					<div class="flex-center gap-1">
						<div class="profile flex-center"><span>AM</span></div>
						<button><img width="30" height="30" src="https://img.icons8.com/material-rounded/24/expand-arrow--v1.png" alt="expand-arrow--v1" /></button>
					</div>
				<?php } else { ?>
					<ul class="flex auth-list">
						<li><a href="index.php?page=login" class="auth_link btn log_btn">login</a></li>
						<li><a href="index.php?page=signup" class="auth_link btn sign_btn">sign Up</a></li>
					</ul>
				<?php } ?>
			</nav>
		</div>
	</header>

	<!--MAIN -->
	<main class="main">
		<section class="section hero_section">
			<div class="container flex-center" style="color: white; flex-direction: column; text-align: center;">
				<h1>DON'T RENT A CAR.</h1>
				<h1>RENT THE CAR.</h1>
				<p class="p_hero">Premium car rental at affordable rates. Worldwide.</p>
				<div class="btn_hero flex gap-2">
					<a href="?page=browse" class="btn btn-brws">Browse Our Fleet</a>
					<a href="?page=login" class="btn btn-bok">Book Now</a>
				</div>
				<form method="GET" action="?page=browse" class="search-form flex-column">
					<div class="flex gap-2 form-row">
						<div class="form-group">
							<label class="form-label">Pick-up Date</label>
							<input type="date" name="start_date" class="form-input" required>
						</div>
						<div class="form-group">
							<label class="form-label">Return Date</label>
							<input type="date" name="end_date" class="form-input" required>
						</div>
						<div class="form-group">
							<label class="form-label">Car Type</label>
							<select name="car_type" class="form-input">
								<option value="">All Types</option>
								<option value="sedan">Sedan</option>
								<option value="suv">SUV</option>
								<option value="luxury">Luxury</option>
								<option value="sports">Sports</option>
							</select>
						</div>
					</div>
					<button type="submit" class="btn btn-brws btn-serch" style="width: 100%;">Find Available Cars</button>
				</form>
			</div>
		</section>
		<section class="stats">
			<div class="stats-grid">
				<div class="stat-item">
					<h3>350+</h3>
					<p>Exclusive Vehicles</p>
				</div>
				<div class="stat-item">
					<h3>105</h3>
					<p>Countries Worldwide</p>
				</div>
				<div class="stat-item">
					<h3>24/7</h3>
					<p>Customer Support</p>
				</div>
				<div class="stat-item">
					<h3>2000+</h3>
					<p>Satisfied Customers</p>
				</div>
			</div>
		</section>
		<section class="section why-choose-section" style="background-color: #000000;">
        <div class="decorative-blur-1"></div>
        <div class="decorative-blur-2"></div>
        
        <div class="container">
            <div class="section-header">
                <h2 class="main-title">Why choose <span class="italic">LUXDRIVE</span>?</h2>
                <p class="subtitle">
                    Experience unparalleled luxury with world-class service
                </p>
            </div>
            <div class="grid-main">
                <div class="featured-card">
                    <div class="card-blur"></div>
                    <div class="card-content">
                        <div class="icon-box">
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                        <h3 class="card-title">Premium Fleet</h3>
                        <p class="card-description">
                            Drive the finest luxury vehicles from brands like Ferrari, Lamborghini, Rolls-Royce, and more. Meticulously maintained for perfection.
                        </p>
                        <div class="stat-display">
                            <div class="stat-number">350+</div>
                            <div class="stat-label">Exclusive vehicles</div>
                        </div>
                    </div>
                </div>

                <!-- Two Stacked Items -->
                <div class="stacked-cards">
                    <div class="white-card">
                        <div class="small-icon-box">
                            <svg class="small-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h3 class="small-title">Best Prices</h3>
                        <p class="small-description">Transparent pricing with no hidden fees. Premium quality at competitive rates.</p>
                    </div>

                    <div class="white-card">
                        <div class="small-icon-box">
                            <svg class="small-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                            </svg>
                        </div>
                        <h3 class="small-title">24/7 Support</h3>
                        <p class="small-description">Dedicated concierge service available around the clock, wherever you are.</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Row - Three Equal Items -->
            <div class="grid-bottom">
                <div class="gradient-card">
                    <div class="gradient-blur"></div>
                    <div class="card-content">
                        <svg class="icon" style="width: 3rem; height: 3rem; margin-bottom: 1rem; opacity: 0.9;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <h3 class="small-title">Global Coverage</h3>
                        <p style="color: rgba(255, 255, 255, 0.9);">Available in 105 countries with thousands of locations.</p>
                    </div>
                </div>

                <div class="white-card">
                    <div class="small-icon-box">
                        <svg class="small-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="small-title">Instant Booking</h3>
                    <p class="small-description">Reserve your dream car in minutes with immediate confirmation.</p>
                </div>

                <div class="white-card">
                    <div class="small-icon-box">
                        <svg class="small-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="small-title">Fully Insured</h3>
                    <p class="small-description">Comprehensive coverage on all vehicles for complete peace of mind.</p>
                </div>
            </div>
        </div>
		</section>
		<section class=" section how-it-works-section">
        <div class="container">
					<!-- Header -->
            <div class="section-header">
                <h2 class="main-title">How it works</h2>
            </div>
            <div class="timeline-container">
                <!-- Horizontal Line -->
                <div class="timeline-line"></div>
                
                <div class="steps-grid">
                    <!-- Step 1 -->
                    <div class="step">
                        <div class="step-icon">
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <div class="step-number">01</div>
                        <h3 class="step-title">Search and select</h3>
                        <p class="step-description">
                            Browse our premium collection and filter by brand, type, or features.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="step">
                        <div class="step-icon">
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="step-number">02</div>
                        <h3 class="step-title">Book and customize</h3>
                        <p class="step-description">
                            Select dates, add extras, and get instant confirmation.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="step">
                        <div class="step-icon">
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                            </svg>
                        </div>
                        <div class="step-number">03</div>
                        <h3 class="step-title">Pick up and drive</h3>
                        <p class="step-description">
                            Complete quick paperwork and hit the road in your dream car.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	</main>

	<!-- FOOTER -->
	<footer class="footer">

	</footer>
</body>

</html>