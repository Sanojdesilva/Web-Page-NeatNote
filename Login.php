<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <script src="icon.js"></script>
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">NeatNote</h2>
                </div>
                <div class="menu">
                    <ul>
                        <li> <a href="#">Home</a></li>
                        <li> <a href="#">About</a></li>
                        <li> <a href="#">Contact</a></li>
                        <li> <a href="#">Help</a></li>
                        <li> <a href="#">SignUp</a></li>
                    </ul>
                </div>

                <div class="search">
                    <input type="search" class="srch" name="" placeholder="Type To Search">
                    <a href="#"> <button class="btn">Search</button> </a>
                </div>
            </div>

            <div class="content">
                <h1>Sell your notes & <br><span> Earn cash </span>. <br> Sell more. Earn More. <br></h1>
                <p class="par">Price your notes with your own price. Earn money by selling your notes. <br>Exchange knowledge with others and earn from it <br> Sell your lecture notes, presentations, proposals, reports, tutes etc.</p>
                <button class="cn"> <a href="#">Get Started</a> </button>

                <div class="form">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email here" id="email">
                    <input type="password" name="password" placeholder="Enter password here" id="password">
                    <button class="btnn"> <a href="">Login</a></button>

                    <p class="link">Don't have account<br>
                    <a href="registration.html">Sign Up </a> here</p>
                    <a href="FrogotPassword.html" class="fp"><p class="liw">Frogot Password</p></a>
                    <div class="icon">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon> </a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon> </a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon> </a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon> </a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon> </a>
                    </div>
                </div>
            </div>
        </div>
        <?php session_start();
            if(isset($_POST["btnSubmit"]))
            {
                $userName = $_POST["email"];
                $password = $_POST["password"];
                
                $con = mysqli_connect("localhost","root","","neatnote","3308");
                
                if(!$con) 
                {
                    die("Sorry !!! we are facing technical issue"); 
                }
                
                $sql = "SELECT * FROM `user` WHERE `Email` = '".$userName."' and `Password` = '".$password."'";
                
                $result = mysqli_query($con,$sql);	 
                
                if(mysqli_num_rows($result)>0)
                {
                    //Create session 
                    $_SESSION["userName"] = $userName;
                    header('Location:myAccount.php');
                }
                else
                {
                    header('Location:login.php');
                } 
            }
        ?>
    </body>
</html>