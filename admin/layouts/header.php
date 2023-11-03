
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/style.css">
	<title>AdminHub</title>
</head>
<body>

<!-- Sidebar -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="?page=layouts/home">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="?page=teachers/index">
				<i class='bx bxs-briefcase' ></i>
					<span class="text">Teachers</span>
				</a>
			</li>
			<li>
				<a href="?page=classes/index">
					<i class='bx bxs-user' ></i>
					<span class="text">Classes</span>
				</a>
			</li>
			<li>
				<a href="?page=maqolalar/index">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Maqolalar</span>
				</a>
			</li>
			<li>
				<a href="?page=features/index">
					<i class='bx bxs-component' ></i>
					<span class="text">Features</span>
				</a>
			</li>
			<li>
				<a href="?page=messages/index">
					<i class='bx bxs-comment' ></i>
					<span class="text">Messages</span>
				</a>
			</li>
			<li>
				<a href="?page=testimonials/index">
					<i class='bx bxs-chat'></i>
					<span class="text">Testimonials</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section> 
<!-- Sidebar Ends -->
<!-- Content -->
<section id="content">
<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="assets/img/people.png">
			</a>
</nav>