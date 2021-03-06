<?php
include 'dbo.php';
include 'include.php';
include "topbar.php";


if($_SESSION['userID'] == ""){

  header("location: signup.php");
}


if( $_SERVER["REQUEST_METHOD"] == "POST"){


  $animeID = $_POST['sel'];
  $userID = $_SESSION["userID"];
  $title = $_POST['title'];
  $body = nl2br($_POST['article']);
  $starRating = 5;

  $json = file_get_contents("https://api.jikan.moe/v3/anime/$animeID");
  $data = json_decode($json, true);

  echo "<p>" . $animeID . " " . $userID . " " . $title . " " . $body . " " . $starRating . "</p>";

    $conn = OpenCon();

    $stmt = $conn->prepare("INSERT INTO ARTICLE (articleTitle, userID, animeID, body, starRating, imageURL, animeName, date) VALUES(?, ?, ?, ?, ?, ?, ?, now())");
    $stmt->bind_param("siisiss", $title, $userID, $animeID, $body, $starRating, $data["image_url"], $data["title"]);
    $stmt->execute();

    CloseCon($conn);
    


}


?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Chapter 5</title>
 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Chango&family=Roboto&display=swap" rel="stylesheet">
   
   <script>
       
    </script>
-->
</head>


<div class = "submitPage">
<input id='thistag' placeholder="Enter anime title" name="name"/>
<button id="myBtn">Search</button>


  <form action="" method="post" >
    <p id="values"></p>

    <div class = "articleTitle">
    <p>Come up with a catchy Headline for your Review!</p>
      <textarea id='title' name='title'></textarea>
    </div>

    <div class = "description">
    <p>Go in-depth! Explain why you feel the way you feel about this anime! No Spoilers!</p>
      <textarea id='article' name='article'></textarea>
    </div>
    <div id='buttonHolder'>
    <input id='submit' type="submit" name="submit" value="Submit!" />
    </div>
</div>




</form>









<script>




    function myfunc(p1){
        document.getElementById("values").innerHTML = p1;
    }


const input = document.querySelector('input');
const log = document.getElementById('values');

document.getElementById("myBtn").addEventListener("click", updateValue);
//input.addEventListener('input', updateValue);

function updateValue(e) {
    var text = document.getElementById('thistag').value;

    if(text.length > 2){
    var urlcall = 'submitSearchResults.php?q=' + text;

    $.ajax(
  urlcall,
  {
      success: function(data) {
       // alert('AJAX call was successful!');
        //alert('Data from the server' + data);
        myfunc(data);
        
      },
      error: function() {
        alert('There was some error performing the AJAX call!');
      }
   }
);}
}
</script>


