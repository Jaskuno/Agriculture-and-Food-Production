
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agricultural Food Production</title>
  <style>
    /*BBBBBBBBBBBBBBBOOOOOOOOOOOOOOOOODDDDDDDDDDDDDDDDDDYYYYYYYYYY*/
    * a {
      text-decoration: none;
      display: inline-block;
    }

    body {
      background-image: url("https://images.unsplash.com/photo-1586771107445-d3ca888129ff?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
      background-color: beige;
      background-repeat: no-repeat;
      background-size: cover;
      height: auto;
      margin: 0;
    }

    #mainBody {
      position: relative;
      height: auto;
      width: 100%;
      border-radius: 10px;
      background-color: rgba(0, 0, 0, 0.267);
      /*Top Right Bottom Left */
      color: rgb(255, 255, 255);
    }

    /*HHHHEEEEEEEEEEEEAAAAAAAAAAAAAAAADDDDDDDDDDDDEEEEEEEEEEEEERRRRRRRRRRR*/
    #nav {
      position: relative;
      display: flex;
      background-color: #184911;
    }

    #menu {
      position: absolute;
      top: 20%;
      text-align: center;
      right: 0;
      padding: 10px 10px 5px 5px;
      display: inline-flex;
    }

    /* liness in between ng menus */
    #menu a {
      margin-right: 10px;
      border-right: 1px solid grey;
      font-family: 'Times New Roman';
      padding: 10px 10px 5px 5px;
      font-size: 25px;
      color: white;
      border-radius: 15px;
    }

    #menu a:hover {
      text-decoration: underline #fdde87c7;
    }

    /* Drop down Login */
    #dropdown-container {
        display: none;
        position: absolute;
        background-color: grey;
        border-radius: 20%;
        width:90px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }
    #dropdown-container a {
        color: black;
        padding: 5px;
        font-size: 20px;
        border-right: none;
    }
    #dropdown-container a:hover {
        background-color: #ddd;
    }
    #dropdown:hover #dropdown-container {
        display: block;
    }

    /*MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIIIIIIIIIIIIIIIIIIIIIIIIIIIINNNNNNNNNNNNN*/
    #main {
      position: relative;
      display: flex;
      margin: 5px;
      background-color: rgba(0, 0, 0, 0.404);
      padding: 1vh;
      justify-content: center;
    }

    /* Registration Form */
    .container {
      position: relative;
      background-color: #052501;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      font-size: 40px;
    }

    .message {
      padding: 0px;
      border-radius: 8px;
      font-size: 15px;
    }

    h2 {
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      padding-top: 10px;
      font-size: 25px;
      color: #fff;
    }

    label {
      margin-bottom: 8px;
      margin-left: 5px;
      font-weight: bold;
    }

    input {
      padding: 10px;
      margin-bottom: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: rgb(112, 60, 0);
      color: #fff;
      cursor: pointer;
      font-size: 25px;
      &:hover {
        background-color: rgb(10, 148, 10);
        border: 1px solid rgb(10, 148, 10);
      }
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-group::after {
      content: "";
      display: table;
      clear: both;
    }

    .form-group label,
    .form-group input {
      float: left;
      width:49%;
      box-sizing: border-box;
    }

    @media screen and (max-width: 600px) {

      .form-group label,
      .form-group input {
        width: 100%;
      }
    }

    #signIn {
      margin-top: 10px;
      color: rgb(10, 148, 10);
      font-size: 18px;

      &:hover {
        color: grey;
        text-decoration: underline;
      }
    }

    .style-red{
      color:#d80303;
      margin-top:10px;
      font-family: SFProText-Regular, Helvetica, Arial, sans-serif;

    }
    

    /*FOOOOOOOOOOOOOOOOOOOOOTTTTTTTTTTTTTTTTTTTTTEEEEEEEEEEEEEEEEEEEERRRRRRRRR*/
    #footer {
      position: relative;
      display: flex;
      background-color: #291601;
      height: auto;
      align-items: center;
      justify-content: center;
    }

    #findUs {
      list-style-type: none;
      text-decoration: none;
      display: inline-flex;
      column-gap: 20px;
      margin-left: -40px;
    }

    #findUs img {
      height: 30px;
      width: 30px;

      &:hover {
        mix-blend-mode: multiply;
        transition: .3s;
      }
    }

    
  </style>
</head>

<body>
  <div id="mainBody">
    <header id="header">
      <nav id="nav"> <img style="padding-left: 2%; width: 70px; border-radius: 80px; padding-top: 1%; padding-bottom: 1%" src="Pics/Logo-Pics/logo.png" />
        <h1 style=" padding: 20px 15px 5px 5px;"><span style="color: rgb(10, 148, 10);">Agriculture</span> & <span style=" color:rgb(250, 201, 151);">Food Production</span></h1>
        <div id="menu"> 
          <a href="homeAFP.html"><span>Home</span></a> 
          <a href="aboutAFP.html"><span>About</span></a> 
          <a href="products.html"><span>Products</span></a> 
          <a href="servicesAFP.html"><span>Services<span></a> 
          <a style="text-decoration: underline rgb(197, 115, 47); color: rgb(197, 115, 47);" href="#" style="border: none;"><span>Log-in</span></a>
          <!-- <div id="dropdown">
          <a style="text-decoration: underline rgb(197, 115, 47); color: rgb(197, 115, 47);" href="#" style="border: none;"><span>Log-in</span></a> 
            <div id="dropdown-container">
                <a class="dropdown-content" href="http://localhost/AFP/customerLogin.php">Customer</a>
                <a class="dropdown-content" href="http://localhost/AFP/loginAFP.php">Employee</a>
            </div>
          </div> -->
        </div>
      </nav>
    </header>

    <main id="main">
      <div class="container"> <center style="margin-bottom:10px;"><span style="color: rgb(10, 148, 10);">Agriculture</span> <span style="color: white;">&</span> <span style=" color:rgb(250, 201, 151);">Food Production</span></center>
      <hr>
        <div class="message"> <center style="margin-bottom:1  0px;"><span style="color: white;">Sign Up and Harvest from our Agriculture & Food Production Website</span></center>  
          <form action="#" method="post">
            <div class="form-group"> <label for="email">Email:</label> <input type="email" id="email" name="uEmail" placeholder="Email" value="<?php echo isset($_POST['uEmail']) ? htmlspecialchars($_POST['uEmail']) : ''; ?>" required> </div>
            <div class="form-group"> <label for="name">Full Name:</label> <input type="text" id="name" name="uName" placeholder="Name" value="<?php echo isset($_POST['uName']) ? htmlspecialchars($_POST['uName']) : ''; ?>" required> </div>
            <div class="form-group"> <label for="username">Birthday:</label> <input type="Date" id="birthday" name="uBirthday" placeholder="YYYY-MM-DD" value="<?php echo isset($_POST['uBirthday']) ? htmlspecialchars($_POST['uBirthday']) : ''; ?>" required> </div>
            <div class="form-group"> <label for="username">Address:</label> <input type="text" id="address" name="uAddress" placeholder="Address" value="<?php echo isset($_POST['uAddress']) ? htmlspecialchars($_POST['uAddress']) : ''; ?>" required> </div>
            <div class="form-group"> <label for="username">Username:</label> <input type="text" id="username" name="uUsername" placeholder="Username" value="<?php echo isset($_POST['uUsername']) ? htmlspecialchars($_POST['uUsername']) : ''; ?>" required> </div>
            <div class="form-group"> <label for="password">Password:</label> <input type="password" id="password" name="uPassword" placeholder="Password" required> </div> 
            <input type="submit" value="Register" name="sign-up">
            <hr width="100%">
            <div style="display: flex; justify-content: center; text-align: center;">
            <a href="http://localhost/AFP/loginAFP.php" id="signIn">Sign-in</a>
            </div>
          </form>

          <?php $DBHost = "localhost"; //hostname 
          $DBUser = "root"; //username 
          $DBPass = ""; //password 
          $DBName = "agri"; //Name 
          $conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName); 
          if(!$conn) {die("Connection failed:" . mysqli_connect_error());} 

            if(isset($_POST['sign-up'])) {
            $checkQuery = "SELECT * FROM employee WHERE employee_Username = '$_POST[uUsername]'";
            $checkResult = mysqli_query($conn, $checkQuery);

              if (mysqli_num_rows($checkResult) > 0){
                echo "<div class='style-red'><center>Username is already taken. Please choose a different username.</center></div>";
              } elseif (strlen($_POST['uPassword']) < 8 ) {
                echo "<div class='style-red'><center>Password must be at least 8 characters.</center></div>";
              } else {
              $sql = "INSERT into employee (`employee_Email`,`employee_Name`,`employee_Username`,`employee_PW`,`employee_Address`,`employee_Birthdate`,`employee_Company`) 
              values('$_POST[uEmail]','$_POST[uName]','$_POST[uUsername]','$_POST[uPassword]','$_POST[uAddress]','$_POST[uBirthday]','AFP Company')"; 
              
              $result = mysqli_query($conn,$sql);
                if ($result) {
                echo "<div style='color: GREEN; margin-top:10px; font-family: SFProText-Regular, Helvetica, Arial, sans-serif;'><center>Registered Successfully</center></div>";
                } else { echo "<div class='style-red'><center>Registration failed. Please try again.</center></div>";}  
                exit();
              }
            }
          ?>
          <!--<script>
            document.addEventListener('DOMContentLoaded', function() {
              function setLinearGradientBackground() {
                var container = document.querySelector('.container');
                container.style.background = 'linear-gradient(to right, #4CAF50, #FFFF00)';
              }
              ?php if (isset($_POST['sign-up'])) { ?>
              setLinearGradientBackground();
              ?php } ?>
            });
          </script>-->

          <!--<script>
            document.addEventListener('DOMContentLoaded', function() {
              ?php if (isset($_POST['sign-up'])) { 
                ?>
                  var container = document.querySelector('.container');
                  container.style.background = 'linear-gradient(#052501, #052501, #052501, #052501, #052501, #052501, #052501, #052501, #052501, #052501, white)';
                ?php 
              } ?>
            });
          </script>-->
        </div>
      </div>
    </main>

    <footer id="footer">
      <h2 style="font-family: Lucida Console; color:rgb(255, 255, 255); position: absolute; left: 10px;">GROUP 10 <span style="color: rgb(10, 148, 10);"></h2>
      <h3 style="font-family: Lucida Console; position: absolute; right: 30px; bottom: 5px;">Contact Us: (63+)9123456789
      </h3>
      <ul id="findUs">
        <li><a href="#"><img src="Pics/Icon-pics/facebook.png" /></a></li>
        <li><a href="#"><img src="Pics/Icon-pics/instagram.png" /></a></li>
        <li><a href="#"><img src="Pics/Icon-pics/pinterest.png" /></a></li>
      </ul>
    </footer>
  </div>
</body>

</html>