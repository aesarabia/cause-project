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
    
    <br>
    <div class="wrapper"> 
        <div class="container">
        <h2> Our Organization</h2>
        <p class="p1"> A NYC community based, non-profit organization, in Bedford-Stuyvesant (Bed Stuy) Brooklyn, whose mission is to embrace the children of incarcerated parents and empower them to break the cycle of intergenerational involvement in the criminal justice system.</p>
        <p>CPNYC offers an innovative and unique after-school program and summer day camp, the only one of its kind in New York City, specifically designed to meet the needs, interests and concerns of children left behind by parents serving time in prison.</p>
        </div><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-8"></div>
        <iframe width="450" height="320" src="https://www.youtube.com/embed/VW20DZlmXCc" frameborder="1" allowfullscreen align="right"></iframe>
        <p>We are always excited to share news reflecting the impact of our mission with partners and supporters, and how our work is continually reaching new audiences. In March CPNYC will be featured in a compelling segment on Women in Prison from “America Tonight,” Al Jazeera America’s award-winning news program.</p>
        <p>Almost 3 million children in the United States, under the age of 18, have a parent in prison. Children of prisoners face significant uncertainty in nearly every aspect of their lives. They often experience the trauma of multiple changes in caregivers, separation from siblings and inconsistent living arrangements.</p>
        <p>Studies have shown that parental arrest and confinement often lead to stress, trauma, shame and separation anxiety which may be compounded by existing poverty, violence, substance abuse and high crime communities. Many children of incarcerated parents are angry and lash out at others, leading to disruptions in school and confrontations with law enforcement and other authority figures.</p><br>
    </div>
    <div class="container">
    	<div class="col-xs-6 col-md-8"></div>
			<p>When a child loses a parent due to death or is separated as a result of divorce or military deployment, the child receives a level of sympathy and understanding from the community. When a parent is away serving time in prison the child does not receive the same level of compassion and empathy from members of society.</p><br>
            <iframe width="450" height="300" src="https://www.youtube.com/embed/5r4G_nFnt_M" frameborder="0" allowfullscreen></iframe>
                <ul>
                    <li>More than 2.7 million children in the United States, have a parent in prison.
                    </li>
                    <li>One in every 28 children, in the United States, have an incarcerated parent, compared to one in every 125, just 25 years ago.</li>
                    <li>There are more than 105,000 minor children with a parent in the New York State jail and prison systems.</li>
                    <li>In New York State, 58% of incarcerated men and 73% of imprisoned women are parents to children under the age of 18.</li>
                    <li>In the United States, the number of children of incarcerated parents under the age of 18 increased by 80% between 1991 and midyear 2007.</li>
                    <li>One in 9 African American children, 1 in 28 Hispanic children and 1 in 57 white children in the United States have an incarcerated parent.</li>
                    <li>One in every one hundred adults in America is incarcerated in a state or federal prison</li>
                </ul>
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
    


    <?php require_once "footer.php" ?>
    ?>
    </body>
    </html>