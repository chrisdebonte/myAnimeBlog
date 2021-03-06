<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Anime General</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Chango&family=Roboto&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Antonio&family=Montserrat:ital,wght@0,300;0,400;1,200;1,300;1,400&family=Ranga:wght@400;700&family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" type = "text/css" href="../../../styles.css" />

</head>

<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="//localhost:8000/index.php">Anime General</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <?php
                if($_SESSION["username"] != "")
                    {
                        echo  "<a class = nav-link> Welcome ". $_SESSION["username"] . "</a>";
                    }
                else 
                    {
                        echo "<a class= nav-link" ." href=". "//localhost:8000/login.php> Login/Signup ". "</a>";
                    }
            ?>
            <!--<a class="nav-link" href="//localhost:8000/Login-page.php">Login/Signup </a>-->          
        </li>
    </div>
</header>

<body>
   
   <!--Tried getting a backgroundimage-->            
   <!--<div class = "bg"></div>-->
    <h2>
        <nav id="secondaryNav">
            <ul> 
               
               <?php
                if($_SESSION["username"] != "")
                    {
                      echo "<li><a href="."//localhost:8000/about.php" .">About Us</a>|<a href=". "//localhost:8000/submitArticle.php". ">Submit A Review</a>|<a href=//localhost:8000/logout.php> Log out</a></li>";
                    }
                else 
                    {
                        echo "<li><a href="."//localhost:8000/about.php" .">About Us</a>|<a href=". "//localhost:8000/submitArticle.php". ">Submit A Review</a></li>";
                    }
               ?>
            </ul>  
        </nav>
    </h2>
</body>