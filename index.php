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
			<nav class="nav flex nav_ul">
				<ul class="nav__list flex ">
					<li><a href="index.php?page=home" class="nav__links">Home</a></li>
					<li><a href="index.php?page=browse" class="nav__links">Browse cars</a></li>
					<li><a href="#contact" class="nav__links">Contact us</a></li>
				</ul>
				<?php if (isset($_SESSION['user_id'])){ ?>
				<div class="flex-center gap-1">
					<div class="profile flex-center"><span>AM</span></div>
					<button><img width="30" height="30" src="https://img.icons8.com/material-rounded/24/expand-arrow--v1.png" alt="expand-arrow--v1"/></button>
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
	</main>

	<!-- FOOTER -->
	<footer class="footer">

	</footer>
</body>

</html>