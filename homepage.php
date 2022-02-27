<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Movie/Tv Show website</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="sliderCSS.css">


    <style>
        body {
            font-family: poppins;
        }
    </style>

</head>

<body class="body">
    <nav>

        <a href="#" class="logo">
            <img src="icons/Movie-roll-cinema-entertainment-icon-EPS-10-by-Hoeda80.jpg" />
        </a>

        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>

        <ul id="list" class="menu">
            <li><a id="home" href="homepage.php">Home</a></li>
            <li><a href="movie.php">Movies</a></li>
            <li><a href="tvshow.php">TV Shows</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li id="lastone"><a href="#">Categories</a></li>
            <li>
                <div class="search">
                    <input type="text" placeholder="Find Your Favourtie Movies" />

                    <i class="fas fa-search"></i>
                </div>
            </li>
    <li><a href="logout.php">Logout</a></li>

        </ul>



    </nav>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="images/spider-man-no-way-home-trailer-event-social.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="images/4k-money-heist-season-4-netflix-aw.jpg" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="images/wallpapersden.com_eternals-movie-all-cast_2560x1080.jpg" style="width:100%">

        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="images/wallpapersden.com_nomadland-2020_2000x1125.jpg" style="width:100%">

        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script src="sliderJS.js"></script>
</body>



<div class="movies-heading">
    <h2>Movies & Tv Shows</h2>
</div>
<section id="movies-list">

    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=ZYzbalQ6Lg8&t=5s">Trailer</a></div>
            <img src="images/snh_online_6072x9000_posed_01.jpg">
        </div>

        <a href="#">
            Spiderman: No Way Home
        </a>
    </div>

    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=8g18jFHCLXk&t=7s">Trailer</a></div>
            <img src="images/dune-movie-HD-Posters-.jpg">
        </div>

        <a href="#">
            Dune
        </a>
    </div>

    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=6sxCFZ8_d84&t=2s">Trailer</a></div>
            <img src="images/91yW53jVKSL._RI_.jpg">
        </div>

        <a href="#">
            Nomadland
        </a>
    </div>

    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=x_me3xsvDgk">Trailer</a></div>
            <img src="images/MV5BMTExZmVjY2ItYTAzYi00MDdlLWFlOWItNTJhMDRjMzQ5ZGY0XkEyXkFqcGdeQXVyODIyOTEyMzY@._V1_.jpg">
        </div>

        <a href="#">
            Eternals
        </a>
    </div>

    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=uwsmkWh0S5Y">Trailer</a></div>
            <img
                src="tvshowimg/MV5BNDJkYzY3MzMtMGFhYi00MmQ4LWJkNTgtZGNiZWZmMTMxNzdlXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_FMjpg_UX1000_.jpg">
        </div>

        <a href="#">
            Money Heist: Season 1 - 5
        </a>
    </div>

    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=4Ps6nV4wiCE">Trailer</a></div>
            <img
                src="tvshowimg/MV5BYmU5OWM5ZTAtNjUzOC00NmUyLTgyOWMtMjlkNjdlMDAzMzU1XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg">
        </div>

        <a href="#">
            Arcane: Season 1
        </a>
    </div>

    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=39cIMHLPFMU">Trailer</a></div>
            <img src="images/Hive-929198218-large.jpg">
        </div>

        <a href="#">
            Hive (Zgjoi)
        </a>
    </div>

    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=nW948Va-l10&t=75s">Trailer</a></div>
            <img src="tvshowimg/Loki_Digital_KeyArt_Teaser_v4_Lg.jpg">
        </div>

        <a href="#">
            Loki: Season 1
        </a>
    </div>
    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=A5GJLwWiYSg">Trailer</a></div>
            <img src="images/FDzl4WIWEAYtDfX.jpg">
        </div>

        <a href="#">
            West Side Story
        </a>
    </div>
    <div class="movies-box">

        <div class="movies-img">
            <div class="quality"><a target="popup" class="trailer"
                    style="height: 20px; color: white; text-align: center; margin-top: -2; margin-left:-2px ;"
                    href="https://www.youtube.com/watch?v=sS6ksY8xWCY">Trailer</a></div>
            <img src="images/MV5BMjMxNTdiNWMtOWY0My00MjM4LTkwNzMtOGI0YThhN2Q4M2I4XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg">
        </div>

        <a href="#">
            The Green Knight
        </a>
    </div>
</section>

<div class="btns">
    <a href="movie.html">More Movies</a>
    <a href="tvshow.html">More Tv Shows</a>
</div>

<footer>
    <p></p>
    <p>Copyright 2022 - </p>
</footer>
</body>

</html>