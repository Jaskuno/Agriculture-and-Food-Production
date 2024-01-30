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

    /*MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIIIIIIIIIIIIIIIIIIIIIIIIIIIINNNNNNNNNNNNN*/

    #main {
        position: relative;
        margin: 5px;
        background-color: rgba(0, 0, 0, 0.404);
        padding: 1vh;
        border-radius: 15px;

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
            <nav id="nav">
                <img style="padding-left: 2%; width: 70px; border-radius: 80px; padding-top: 1%; padding-bottom: 1%"
                    src="Pics/Logo-Pics/logo.png" />
                    <h1 style=" padding: 20px 15px 5px 5px;"><span style="color: rgb(10, 148, 10);">Agriculture</span> & <span style=" color:rgb(250, 201, 151);">Food Production</span></h1>

                <div id="menu">
                    <a href="homeAFP.html"><span>Home</span></a>
                    <a href="#"><span>Store</span></a>
                    <a href="#" style="border:none;"><img width=40px height=40px style="vertical-align:middle; margin-top:-10px;" src="Pics/Icon-pics/cart.png"/></a>
                    <a href="#" style="border:none;"><img width=40px height=40px style="vertical-align:middle; margin-top:-10px;" src="Pics/Dashboard-Pics/settings.png"/></a>
                </div>
            </nav>
        </header>

        <main id="main">

        </main>
    
        <footer id="footer">
            <h2 style="font-family: Lucida Console; color:rgb(255, 255, 255); position: absolute; left: 10px;">GROUP 10</h2>
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