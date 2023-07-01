<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('adminside/style/add.css')}}">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="#">
					<i class='bx bxs-comment-add' ></i>
					<span class="text">Add Post</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">

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
			<a href="#" class="profile">
                <img src="{{asset('AdminImage/'.Auth()->user()->path)}}">			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{route('showDashboard')}}">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{route('showaddpost')}}">Adds Post</a>
						</li>
					</ul>
				</div>

			</div>


			<!-- form -->
			<div class="contact-box">
			<div class="lefts"></div>
                <form  method="POST" action="{{route('updatePost',$post->id)}}">
                    @csrf
                    <div class="right">
                        <h2>Add Post</h2>
                        <input type="text" class="field" placeholder="Title Of Post" value="{{$post->title}}" name="title">
                        <textarea placeholder="Content Of Post" class="field"  name="contents">{{$post->content}}</textarea>
                        <label for="cars" class="labSelect">Choose Category :</label>
                    <select name="categories_id" id="category" class="field" >
                        @foreach($categoryName as $category)
                            <option value="{{$category->id}}">
                                {{$category->category}}
                            </option>
                        @endforeach
                    </select>
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
