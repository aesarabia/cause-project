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
<body>
<?php require_once "nav.php" ?> 
<div class="wrapper"
<h2>Login</h2>
<form method="post" action="login.php">
<label>E-mail
	<input type="email" name="email"  value="" required><br>
</label>
	<br>
<label>Password
	<input type="password" name="pw"  value="" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">  
</form>
</div>
<?php 
if(isset($_POST['submit'])){
	if(empty($_POST['email']) || empty($_POST['pw']) ){
		echo "you left something blank";
	} else{
		$email = $_POST['email'];
		$pw = $_POST['pw'];

		$connection = mysqli_connect("localhost","root","","reg");
		
		$query = "SELECT * FROM capture WHERE pw='$pw' AND email='$email'"; 

		$logincheck = mysqli_query($connection, $query);

		$row = mysqli_num_rows($logincheck);

		echo $row;

		echo "<br>";

		if($row == 1){
			while ( $row = mysqli_fetch_assoc($logincheck)) {
				$_SESSION["uid"] = $row["uid"];
				echo $_SESSION["uid"]. '<br>';

				$_SESSION["time"] = $row["time"];
				echo $_SESSION["time"]. '<br>';

				$_SESSION["name"] = $row["name"];
				echo $_SESSION["name"]. '<br>';

				$_SESSION["email"] = $row["email"];
				echo $_SESSION["email"]. '<br>';

				$_SESSION["pw"] = $row["pw"];
				echo $_SESSION["pw"]. '<br>';

				echo "<a href=\"profile.php\">proceed to profile</a>";

			}

	   } else{
			echo "try again";
		}
		mysqli_close($connection);
		}
	}

	
?>

 <script src="js/bootstrap.min.js"></script>
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
</body>
</html>