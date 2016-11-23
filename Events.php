<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <title> Events</title>
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
                 background: #000000;
                font-family: 'Tangerine', serif;
                font-size: 20px;
                }
            h2 {
                font-family: 'tangerine' , serif;
                color: #000000;
                font-size: 40px;
                }
    
    </style>
     </style>
        <script>
            $(document).ready(function(){
            $("button").click(function(){
                $("#h1").css("color", "#ff0066","align-center").slideUp(3000).slideDown(3000);
            });
        });
        </script>
    </head>
    <body>
    <?php require_once "nav.php" ?> 
    <div class="wrapper">
        <div class="container">
        <h2>Our 2016 Events </h2>
        <p>CPNYC’s full day Summer Day Camp Program operates Monday-Friday, 8:00am-5:00pm, in July and August. The Summer Day Camp serves children ages 6-13 and provides educational, cultural and arts-based programming, recreational activities and mental health services.</p>
        <p>Our facility is open year-round, 6-days a week, to provide children with a safe place where they can learn, play, express themselves, be creative and develop the tools to break the cycle of intergenerational incarceration.</p>
        </div>
        <div style="float: left; margin: 0px 50px 15px 50px;"><img src="images/sports.jpg" width="500px"></div>
        

    <div class="container">
    <div class="row">
        <p>
        Children enrolled in our Summer Day Camp are given the opportunity to go on educational field trips to museums, parks, plays and shows. Additionally, twice a week children can also participate in non-traditional sporting activities, provided by the NYC Parks Department where they can receive instructions in golf, tennis and track. The CPNYC Summer Day Camp Program aims to decrease the summer learning loss experienced by many children by proving fun, new learning experiences during the summer months.</p><br>
        <div style="float: right; margin: 0px 50px 15px 80px;"><img src="images/img_4745.jpg" width="450px"></div><br>

        <h2>Best Practices for our children</h2>
        <p>CPNYC incorporates the best practices of youth development into everything we do while taking into consideration the unique needs of our population. We operate differently because our children are dealing with the trauma of losing a loved one to incarceration, and many are also struggling with additional stressors like community violence. Our staff is specially trained to work with children who have experienced trauma, and every aspect of our programming addresses these unique needs.</p>
    </div>
    </div>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-xs-6 col-md-8"></div>
				<p></p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <?php require_once "footer.php" ?> 
    ?>
    </body>
    </html>