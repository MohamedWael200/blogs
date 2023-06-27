<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('style/about.css')}}">
    <link rel="stylesheet" href="{{asset('style/index.css')}}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
<div class="hero">
    <nav>
        <img src="{{asset('images/Mohamed.png')}}" class="logo" alt="">
        <ul>
            <li><a href="{{route('homepage')}}">Home</a></li>
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


<div class = "about-wrapper">
    <div class = "about-left">
        <div class = "about-left-content">
            <div>
                <div class = "shadow">
                    <div class = "about-img">
                        <img src = "{{asset('../images/me6.jpeg')}}" alt = "about image">
                    </div>
                </div>

                <h2>Mohamed<br>Wael</h2>
                <h3>WeB DEVELOPER</h3>
            </div>

            <ul class = "icons">
                <li><i class = "fab fa-facebook-f"></i></li>
                <li><i class = "fab fa-twitter"></i></li>
                <li><i class = "fab fa-linkedin"></i></li>
                <li><i class = "fab fa-instagram"></i></li>
            </ul>
        </div>
    </div>

    <div class = "about-right">
        <h1>hi<span>!</span></h1>
        <h2>Here's who I am & what I do</h2>
        <div class = "about-btns">
            <button type = "button" class = "btn btn-pink">resume</button>
            <button type = "button" class = "btn btn-white">projects</button>
        </div>

        <div class = "about-para">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, aspernatur possimus ullam quaerat, laboriosam ex voluptate aliquid laborum, obcaecati ratione accusamus! Ea nisi modi dolor nam numquam? Temporibus, molestias amet.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus iure tempora alias laudantium sapiente impedit!</p>
        </div>
    </div>
</div>


</body>
<script>
    let subMenu = document.getElementById("subMenu");
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
</html>
