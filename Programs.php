<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <title> Our Programs</title>
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
                background-color: #000000;
                 /*background: #9295A0;*/
                font-family: 'Tangerine', serif;
                font-size: 18px;
                color-rendering: auto;
                    }
                h2 {
                    font-family: 'tangerine' , serif;
                    color:#000000;
                    font-size: 40px;
                    }
    </style>
    </head>
    <body>
    <?php require_once "nav.php" ?> 
    
   <!-- <div class="container fluid">-->
   <div class="wrapper">
        <div class="container">
        <div class="row"></div>
        <div class="col-xs-6 col-md-8"></div>
        <div class="col-xs-6 col-md-4"></div>
        <h2>After school Programs</h2>
        <p>Since 2009, CPNYC has provided structured after-school programs to over 200 elementary and middle school aged children, Monday through Friday, 3:00-6:30pm. Program services include comprehensive academic support, enrichment activities, mentoring and mental health services. Our After school Program is designed to develop children’s intellectual, social and emotional competencies and promote healthy decision making and critical thinking skills.  Our staff training combines the best practices in youth development with mental health strategies and techniques that specifically address the unique needs of these children. This is a bold new approach toward engaging children of imprisoned parents in an authentic empowering environment.</p>

        <div> <img src="images/picture-2.jpg" width="700" height="300">
        <h2>Academic Education Support</h2>
        <p>Academic enrichment and support provides innovative and creative group activities to build participants’ educational skills, motivation and engagement.</p>
        <p>Academic enrichment activities supplement, rather than replicate, school-day learning and may include small group learning, tutoring and homework assistance, reading clubs, project based learning, computer assisted instruction and community service projects.</p></div>

        <p>Creative learning and arts-based activities offer children the opportunity to explore their talents, express their imagination and emotions and to develop creative skills. Activities are offered within the visual and expressive arts such as; spoken word and poetry, fine arts, arts therapy and documentary film making.</p>

        <h2>Arts & recreation</h2>
        <p>Our recreational programs enrich all areas of a child’s development by providing excitement, self-confidence, discovery and fun</p>
        <p>Innovative physical activities are designed to help children express their emotions in a positive and healthy way.</p>
        <p>Recreational activities include dance, creative movement, tennis, swimming, skate boarding and surfing</p>
    </div>
    </div>
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