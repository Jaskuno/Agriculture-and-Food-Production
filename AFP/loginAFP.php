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
        height:100vh;
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
    /*MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIIIIIIIIIIIIIIIIIIIIIIIIIIIINNNNNNNNNNNNN*/

    #main {
        position: relative;
        display:flex;
        height: 72vh;
        margin: 5px;
        background-color: rgba(0, 0, 0, 0.404);
        padding: 1vh;
        align-items:center;
        justify-content: center;
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
        &:hover{
            mix-blend-mode: multiply;
            transition:.3s;
        }
    }

    /*Log-in Form*/
    .login-container {
        position: relative;
        background-color: #052501;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 0 10px #0000001a;
        font-size: 20px;
        max-width: fit-content;
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

        #signUp {
            margin-top: 10px;
            color: rgb(10, 148, 10);
            font-size: 18px;
            &:hover {
                color: grey;
                text-decoration: underline;
            }
        }

</style>
</head>
<body>
    <div id="mainBody">

        <header id="header">
            <nav id="nav">
                <img style="padding-left: 2%; height: 20ox; width: 70px; border-radius: 80px; padding-top: 1%; padding-bottom: 1%" src="Pics/Logo-Pics/logo.png"/>
                <h1 style=" padding: 20px 15px 5px 5px;"><span style="color: rgb(10, 148, 10);">Agriculture</span> & <span style=" color:rgb(250, 201, 151);">Food Production</span></h1>
                <div id="menu">
                    <a href="homeAFP.html"><span>Home</span></a>
                    <a href="aboutAFP.html"><span>About</span></a>
                    <a href="products.html"><span>Products</span></a>
                    <a href="servicesAFP.html"><span>Services<span></a>
                    <a style="text-decoration: underline rgb(197, 115, 47); color: rgb(197, 115, 47);" href="http://localhost/AFP/loginAFP.php" style="border: none;"><span>Log-in</span></a>
                </div>
            </nav>
        </header>

        <main id="main">
            <div class="login-container">
                <span style="color: white;" >Welcome to</span>
                <h2><span style="color: rgb(10, 148, 10);">Agriculture</span>
                <span style="color: white;">&</span>
                <span style=" color:rgb(250, 201, 151);">Food Production</span></h2>

                <form class="login-form" action="dashboardAFP.html" method="post">
                    <div class="form-group">
                        <label for="username">Enter your username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Enter your password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="form-group" id="SignBttn">
                        <button type="submit">Sign In</button>
                        <div id="orSignup">
                            <a href="#"><img src="Pics/Login-Pics/fbicon.png"/></a>
                            <a href="#"><img src="Pics/Login-Pics/googleicon.png"/></a>
                            <a href="#"><img id="x" src="Pics/Login-Pics/xicon.webp"/></a>
                        </div>
                        <hr>
                        <a href="http://localhost/AFP/Register.php" id="signUp">Sign-Up</a>
                    </div>
                </form>

            </div>
        </main>

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
</body>
</html>