<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Donate</title>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript"></script>
        <script type="text/javascript" src="jquery.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui-1.10.4.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <style type="text/css">
        body {
            background: #000000 ;
            font-family: 'Tangerine', serif;
            font-size: 20px;
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
<div class="wrapper">
 <div class="container"> 
        <h2>Donate Support our Children</h2>
        <p> NYCED is a non-for-profit 501C(3) organization and all donations  are dedicated to our children and are tax deductible.</p>
        <p>Donations are directly allocated to program activities and support services.</p>
        <p>Many companies have programs through which they match charitable contributions made by their employees. Through corporate gift matching, your employer can multiply your gift to Children of Promise, NYC, broadening its impact.</p></div>

        <div class="container">
        <h2>Easy steps to enroll:</h2>
        <ol>
          <il>Check with your company’s Human Resources Department to see if they offer gift matching.</il>
          <li>Obtain the form and complete the employee section.</il>
          <il>Contact CPNYC for requested organizational information at (718) 483-9290.</il>
          <il>Submit completed gift matching form to your HR Department. CPNYC will be notified of your submission.</il>
        </ol>
        </div><hr>
        <div class="container">
          <h2>Hours of Operation</h2>
          <p>Monday thru Friday 9am - 6pm</p>
          <p>Saturday 10am - 2pm</p>
        </div>
        <form><hr>
        <div class="container">
          <div class="account-info">
            <legend><b>Login</b></legend>
                <label>username
                <input type="text" name="Username">
                </label><br>
                <label>Password
                <input type=" date" name="birthdate">
                </label>
          </form>
          </div class="container">
          <div class="Account-action">
                <input class="btn" type="Submit" name="submit" value="login"><br>
                <label><br>
                <label>Email</label>
                <input type="e-mail" name="e-mail address" placeholder="name@domin.com" required><br>
                <input type="checkbox" name="remember">Stay signed</label><br>
              </label>  
          </div>
    </form>
    </div><br><br>
    <div class="container">
        <table class="table">
    <thead>
      <tr>
        <th>Donation</th>
        <th>Type</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr class="services">
        <td>Silver</td>
        <td>$100~$300</td>
        <td><button type="button" class="back to top">Donate</button></td>
      </tr>
      <tr class="donations">
        <td>Gold</td>
        <td>$350~$750</td>
        <td><button type="button" class="back to top">Donate</button></td>
      </tr>
      <tr class="price">
        <td>Platium</td>
        <td>$500~$1000</td>
        <td><button type="button" class="back to top">Donate</button></td>
      </tr>
    </tbody>
  </table>
  </div>
        <h2>Thank you for your support</h2>
    </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
?>
</body>
</html>

