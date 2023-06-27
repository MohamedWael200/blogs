<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('adminside/style/add.css')}}">

	<title> Add Admin Info</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">{{ Auth::user()->name }}</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li >
				<a href="#">
					<i class='bx bxs-comment-add' ></i>
					<span class="text">Add Post</span>
				</a>
			</li>
			<li class="active">
				<a href="#" >
					<i class='bx bxs-user-plus' ></i>
					<span class="text">Add Admin Info</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
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
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
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
				<img src="{{asset('adminside/img/people.png')}}">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Add Info</a>
						</li>
					</ul>
				</div>

			</div>


			<!-- form Add Info -->
			<div class="contact-box">
			<div class="lefts" style="background: url("{{asset('adminside/img/pexels-cottonbro-studio-3944463.jpg')}}") no-repeat center;"></div>
                <form method="POST" action="{{route('storeAdminInfo')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="right">
                        <h2>Contact Us</h2>
                        <input type="text" placeholder="Name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" id="name" class="field" name="name" >
                        <input type="text" class="field" value="{{\Illuminate\Support\Facades\Auth::user()->githubUr ?? ""}}" name="githubUr" placeholder="Your Githup Url">
                        <input type="text" class="field" value="{{\Illuminate\Support\Facades\Auth::user()->twitterUrl ?? ""}}" name="twitterUrl" placeholder="Your twitter Url">
                        <input type="text" class="field" value="" name="linkedinUrl" placeholder="Your Linked-in Url">
                        <input type="text" class="field" value="{{\Illuminate\Support\Facades\Auth::user()->faceUrl ?? ""}}" name="faceUrl" placeholder="Your FaceBook Url">
                        <input type="text" class="field" value="{{\Illuminate\Support\Facades\Auth::user()->instagramUrl ?? ""}}" name="instagramUrl" placeholder="Your Instagram Url">
                        <input type="file" class="field" value="{{\Illuminate\Support\Facades\Auth::user()->path ?? ""}}" name="photo">
                        <button class="btn" type="submit">Send</button>
                    </div>
                </form>
		</div>


		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="{{asset('adminside/script/add.js')}}"></script>
</body>
</html>
