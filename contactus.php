<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contactus.css">
    <style>
         form {
    width: 300px;
    margin: 15vh auto 0 auto;
    padding: 20px;
    background-color: whitesmoke;
    border-radius: 4px;
    margin-top: 50px;
    font-size: 12px;
}
 button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(0, 0, 0);
    border: none;
    border-radius: 4px;
}
input {
    border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-size: 12px;
	padding: 10px;
	width: 100%;
}
p{
    text-align: center;
    margin-top: 200px;
    
}
textarea {
   resize: none;
   border: 2px solid #f0f0f0;
   border-radius: 4px;
	display: block;
	font-size: 12px;
	padding: 10px;
	width: 100%;
}
    </style>
</head>
<br><br>
<br>
<br>
    <nav>

        <a href="#" class="logo">
            <img src="icons/Movie-roll-cinema-entertainment-icon-EPS-10-by-Hoeda80.jpg" />
        </a>

        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>

        <ul class="menu">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="movie.php">Movies</a></li>
            <li><a href="tvshow.php">TV Shows</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="#">Categories</a></li>
            <li>
                <div class="search">
                    <input type="text" placeholder="Find Your Favourtie Movies" />

                    <i class="fas fa-search"></i>
                </div>
            </li>

            <li><a href="logout.php">Logout</a></li>
        </ul>
        </nav>
        
<body>
    



    <main>
        <p>SEND E-MAIL</p>
        <form method="post" action="contactform.php">
            <input type="text" name = "name" placeholder="Full name">
            <input type="text" name = "mail" placeholder="Your e-mail">
            <input type="text" name = "subject" placeholder="subject">
            <textarea name="message"placeholder="Message"></textarea>
            <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </main>



</body>
</html>