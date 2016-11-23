<?php session_start(); ?>
<!doctype html>
<html>
    <head> 
        <title> NYC children</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript"></script>
        <script type="text/javascript" src="jquery.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui-1.10.4.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Lemon|Yatra+One" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <style>

            body {

                margin-left: 0px;
                background-color: #000000;
                /*background: #9295A0;*/
                font-family: 'Tangerine', serif;
                font-size: 18px;
                }

            h2 {
                font-family: 'tangerine' , serif;
                color: #000000;
                font-size: 40px;

                }
        </style>
        <style>
        @import 'https://fonts.googleapis.com/css?family=Vidaloka';
        </style>
        <script>
            $(document).ready(function(){
            $("button").click(function(){
                $("#h1").css("color", "#ff0066","align-center").slideUp(3000).slideDown(3000);
            });
        });
        </script>
    </head>
    <div id=main><br>
    <body>
    <?php require_once "nav.php" ?> 

    <div id="unique">
    <di class="content" style="max-width:960px", align="center">
        <img data-src="" class="img-rounded" alt="">
        <figcaption class="figure-caption"></figcaption>
    </figure>">
   
    <div class="mySlides w3-container w3-xlarge w3-white w3-card-8">
    <h1 class="w3-tag w3-yellow"><a href="Get involved.php"><button type="button" class="top">DONATE</button></a></h1>
        <h1>Our Children need us </h1>
  </div>
     <img class="mySlides" src="images/charity.jpg" style="width:100%">
    </div>
    </div>
    
<!--<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 5000);
}
</script>-->

    <div class="container">
    	<div class="col-xs-6 col-md-8"></div>
		
                </div>
    		<div class="col-xs-6 col-md-4"></div>
    	<div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
        $(function(){
            $("header").click(function(){
                $(this).hide(3000).show(3000);
            });
        });
        </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    
    <br>

    <?php require_once "footer.php" ?> 
    ?>
    </body>
    </html>