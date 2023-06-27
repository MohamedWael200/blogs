<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="hero">
    <nav>
        <img src="{{asset('images/Mohamed.png')}}" class="logo" alt="">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
        </ul>
        <i class="fa-solid fa-bell noti" onclick="toggleMenu()"></i>

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <a href="#" class="sub-menu-link">
                    <img src="{{asset('images/profile.png')}}" alt="">
                    <p>Edit Profile</p>
                    <span>></span>
                </a>

                <a href="#" class="sub-menu-link">
                    <img src="{{asset('images/profile.png')}}" alt="">
                    <p>Edit Profile</p>
                    <span>></span>
                </a>

            </div>
        </div>
    </nav>
</div>
<!-- Blog -->
<div class="container" id="services">
    @foreach($posts as $post)
    <div class="card">
        <div class="flex-container">
            <img src="{{asset('AdminImage/'.$post->user->path)}}">
            <div class="card__wrapper">
                <h2>{{$post->user->name}}</h2>
                <p>{{$post->title}} <span class="Category">{{$post->categories->category}}</span></p>
                <p class="text">{{$post->content}}
                </p>
                <div class="socials">
{{--                    <div class="icon">--}}
{{--                        <a href="{{$post->user->linked-inUrl}}"><i class="ri-linkedin-fill"></i></a>--}}
{{--                    </div>--}}

                    <div class="icon">
                        <a href="{{$post->user->twitterUrl}}"><i class="ri-twitter-fill"></i></a>
                    </div>

                    <div class="icon">
                        <a href="{{$post->user->faceUrl}}"><i class="ri-facebook-fill"></i></a>
                    </div>
                    <div class="icon">
                        <a href="{{$post->user->githubUr}}"><i class="ri-github-fill"></i></a>
                    </div>
                    <div class="icon">
                        <a href="{{$post->user->instagramUrl}}"><i class="ri-instagram-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


<script>
    let subMenu = document.getElementById("subMenu");
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
</body>
</html>
