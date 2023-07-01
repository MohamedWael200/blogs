<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('adminside/style.css')}}">

	<title>AdminHub</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">{{ Auth::user()->name }}</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
                    <a href="{{route('showaddpost')}}"><span class="text">Add Post</span><a/>
				</a>
			</li>
			<li>
				<a href="#">
                    <a href="{{route('showAdminInfo',Auth()->user()->id)}}"><span class="text">Update Admin Info</span></a>

                </a>
			</li>
		</ul>
		<ul class="side-menu">

			<li>
				<a href="#" >
					<a class="logout" href="{{route('signout')}}"><span class="text">Logout</span>
                        <i class='bx bxs-log-out-circle' ></i>
                    </a>
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

				<img src="{{asset('AdminImage/'.Auth()->user()->path)}}">
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
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>{{$count}}</h3>
						<p>Number Of Post</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>{{$catCount}}</h3>
						<p>Number Of Categoty</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>{{$adminCount}}</h3>
						<p>Number Of Admin</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Post Title</th>
								<th>Update</th>
                                <th>Delete</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($posts as $post)
                            <tr>
								<td>
									<img src="{{asset('AdminImage/'.$post->user->path)}}">
									<p>{{$post->user->name}}</p>
								</td>
								<td>{{$post->title}}</td>
                                <td>
                                    <a href="{{route('editUpdate',$post->id)}}"><span class="status completed">Update</span></a>
                                </td>
                                <td>


                                    <form method="POST" action="{{route('destory',$post->id)}}">
                                        @csrf
                                    <button type="submit"><span class="status pending delete">Delete</span></button>
                                    </form>
                                </td>
							</tr>
                        @endforeach
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Admin</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
                        @foreach($showAdmin as $admin)
						<li class="completed">
							<img class="adminImg" src="{{asset('AdminImage/'.$admin->path)}}">
                            <p>{{$admin->name}}</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
                        @endforeach

					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="{{asset('adminside/script.js')}}"></script>
</body>
</html>
