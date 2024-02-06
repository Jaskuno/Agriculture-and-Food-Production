<!-- Database for the login-->
<?php
$DBHost = "localhost"; //hostname
$DBUser = "root"; //username
$DBPass = ""; //password
$DBName = "agri"; //Name
$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);
if (!$conn) {die("Connection failed:" . mysqli_connect_error());}
    if (isset($_POST['submit'])) { // Check if the form is submitted
        $AccEmail = $_POST['empUser'];
        $AccUsername = $_POST['empUser'];
        $AccPass = $_POST['emp_password'];
        
            $query = "SELECT * FROM employee WHERE employee_Username='$AccUsername' AND employee_PW='$AccPass' or employee_Email='$AccEmail' AND employee_PW='$AccPass'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();

            //$displayUsername = isset($row['employee_Username']) === $AccUsername && isset($row['employee_PW']) !== $AccPass ? htmlspecialchars($AccUsername) : ''; 
        
        if ($result->num_rows > 0) {
            header("Location: http://localhost/AFP/dashboardAFP.php#dashboard");
            exit();
        }
        else {
            $errorStyleUsername = 'border: 2px solid #c51919;';
            $errorStylePassword = 'border: 2px solid #c51919;';
        }
    }
    $conn->close();
?>

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
        height:auto;
        margin: 0;
    }
    #mainBody {
        position: relative;
        height: auto;
        width: 100%;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.267);
        /*Top Right Bottom Left */
        color:rgb(255, 255, 255);
    }

    /*HHHHEEEEEEEEEEEEAAAAAAAAAAAAAAAADDDDDDDDDDDDEEEEEEEEEEEEERRRRRRRRRRR*/

    #nav {
        position:relative;
        display: flex;
        background-color: #184911;  
    }
    #menu {
        position: absolute;
        top:20%;
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
        color:white;
        border-radius: 15px;

    }
    #menu a:hover {
        text-decoration: underline #fdde87c7;
    }
     /* Key Access style */
    .access-key-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    /*MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIIIIIIIIIIIIIIIIIIIIIIIIIIIINNNNNNNNNNNNN*/

    #main {
        position: relative;
        display:flex;
        margin: 5px;
        background-color: rgba(0, 0, 0, 0.404);
        padding: 1vh;
        justify-content: center;
        border-radius: 2%;
    }

    /*FOOOOOOOOOOOOOOOOOOOOOTTTTTTTTTTTTTTTTTTTTTEEEEEEEEEEEEEEEEEEEERRRRRRRRR*/

    #footer {
        position: relative;
        bottom:0;
        display: flex;
        background-color: #291601;
        height: auto;
        align-items: center;
        justify-content: center;
        overflow: hidden;
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
        &:hover{
            mix-blend-mode: multiply;
            transition:.3s;
        }
    }

    /*Log-in Form*/
    .login-container {
        position: relative;
        background-color: #052501;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 10px #0000001a;
        font-size: 20px;
    }

        .login-form {
            margin-top: 20px;
            color: #FFFFFF;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid rgb(250, 201, 151);
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #FFFFFF;
        }

        .form-group button {
            background-color: rgb(112, 60, 0);
            color: #FFFFFF;
            padding: 10px;
            border: 1px solid rgb(250, 201, 151);
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 20px;
        }

        .form-group button:hover {
            background-color: rgb(10, 148, 10);
            border: 1px solid #052501;
        }
        #SignBttn {
            text-align: center;
        }
        #orSignup {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 25px;
        }
        #orSignup img {
            margin: 20px 10px 0 10px;
            width: 30px;
            height: 30px;
            transition: .3s;
            &:hover {
                filter: invert(100%);
            }
        }

        .signUp {
            margin-top: 10px;
            color: rgb(10, 148, 10);
            font-size: 18px;
            &:hover {
                color: grey;
                text-decoration: underline;
            }
        }

        /* #dropdown-container {
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
        } */


</style>
</head>
<body>
    <!--define as the main container of the header(navigation bar), main(contains the contents), and footer(initially contacts)-->
    <div id="mainBody">
        <!-- Contains the navigation bar that holds the button link to navigate off and on the pages-->
        <header id="header">
            <nav id="nav">
                <img style="padding-left: 2%; width: 70px; border-radius: 80px; padding-top: 1%; padding-bottom: 1%" src="Pics/Logo-Pics/logo.png"/>
                <h1 style=" padding: 20px 15px 5px 5px;"><span style="color: rgb(10, 148, 10);">Agriculture</span> & <span style=" color:rgb(250, 201, 151);">Food Production</span></h1>
                <div id="menu">
                    <a href="homeAFP.html"><span>Home</span></a>
                    <a href="aboutAFP.html"><span>About</span></a>
                    <a href="http://localhost/AFP/products.php"><span>Products</span></a>
                    <a href="servicesAFP.html"><span>Services<span></a>
                    <a style="text-decoration: underline rgb(197, 115, 47); color: rgb(197, 115, 47);" href="http://localhost/AFP/loginAFP.php" style="border: none;"><span>Log-in</span></a>
                    <!-- <div id="dropdown">
                    <a style="text-decoration: underline rgb(197, 115, 47); color: rgb(197, 115, 47);" href="http://localhost/AFP/loginAFP.php" style="border: none;"><span>Log-in</span></a>
                        <div id="dropdown-container">
                            <a class="dropdown-content" href="http://localhost/AFP/customerLogin.php">Customer</a>
                            <a class="dropdown-content" href="http://localhost/AFP/loginAFP.php">Employee</a>
                        </div>
                    </div> -->
                </div>
            </nav>
        </header>
        <!-- Contains the main role or function of the selected page where it holds the data and the main contents of the page -->
        <main id="main">
            <!-- contains the form of login -->
            <div class="login-container"> 
                <center><span style="color: white;" >Welcome to</span></center>
                <h2><span style="color: rgb(10, 148, 10);">Agriculture</span>
                <span style="color: white;">&</span>
                <span style=" color:rgb(250, 201, 151);">Food Production</span></h2>

                <form class="login-form" method="post">
                    <div class="form-group">
                        <label for="username">Enter your Username:</label>
                        <input type="text" id="username" name="empUser" placeholder="Username" 
                        style="<?php echo $errorStyleUsername; ?>"
                        required>
                    </div>
                    <div class="form-group">
                        <label for="password">Enter your Password:</label>
                        <input type="password" id="password" name="emp_password" placeholder="Password" 
                        style="<?php echo $errorStylePassword; ?>"
                        required>
                    </div>
                    
                    <div class="form-group" id="SignBttn">
                        <button type="submit" name="submit">Sign In</button>
                        <div id="orSignup">
                            <a href="#"><img src="Pics/Login-Pics/fbicon.png"/></a>
                            <a href="#"><img src="Pics/Login-Pics/googleicon.png"/></a>
                            <a href="#"><img id="x" src="Pics/Login-Pics/xicon.webp"/></a>
                        </div>
                        <hr>
                        <a id="loginLink" href="http://localhost/AFP/Register.php" class="signUp">Sign-Up</a>
                    </div>
                </form>
            </div>
        </main>
        <!-- Footer -->
        <footer id="footer">
            <h2 style="font-family: Lucida Console; color:rgb(255, 255, 255); position: absolute; left: 10px;">GROUP 10 <span style="color: rgb(10, 148, 10);"></h2>
            <h3 style="font-family: Lucida Console; position: absolute; right: 30px; bottom: 5px;">Contact Us: (63+)9123456789</h3>
            <ul id="findUs">
                <li><a href="#"><img src="Pics/Icon-pics/facebook.png"/></a></li>
                <li><a href="#"><img src="Pics/Icon-pics/instagram.png"/></a></li>
                <li><a href="#"><img src="Pics/Icon-pics/pinterest.png"/></a></li>
            </ul>
        </footer>

    </div>
    <div id="accessKeyPopup" class="access-key-popup">
        <label for="accessKeyInput">Enter Access Key:</label>
        <input type="text" id="accessKeyInput">
        <button onclick="validateAccessKey()">Submit</button>
    </div>
    <!-- Access key Popup -->
    <script>
        // Function to validate the access key and redirect to the login link
        function validateAccessKey() {
            var enteredKey = document.getElementById("accessKeyInput").value;
            var correctKey = "1234"; // Replace with the actual correct access key
    
            if (enteredKey === correctKey) {
                window.location.href = "http://localhost/AFP/Register.php";
            } else {
                alert("Invalid Access Key. Please try again.");
            }
        }
    
        // Function to display the access key popup
        function showAccessKeyPopup() {
            var popup = document.getElementById("accessKeyPopup");
            popup.style.display = "block";
        }
    
        // Event listener to trigger the popup when the login link is clicked
        document.getElementById("loginLink").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent the default link behavior
            showAccessKeyPopup();
        });
    </script>
</body>
</html>