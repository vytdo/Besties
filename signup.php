<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <header>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active" href="signup.php">Signup</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="hero">
            <div class="hero-image">
                <img src="img/friend1.svg" id="hero-img1">
            </div>

            <div class="hero-right1">
                <div class="hero-welcome">
                    <h1>Become a <span class="bestie"> BESTIE</span></h1>
                </div>

                <div class="login-container">
                    <form action="signup.html">
                        <div class="input-div">
                            <h5>Username</h5>
                            <input type="text" class="input">
                        </div>
                        <div class="input-div">
                            <h5>Email</h5>
                            <input type="text" class="input">
                        </div>
                        <div class="input-div">
                            <h5>Password</h5>
                            <input type="password" class="input">
                        </div>

                        <div class="button">
                            <button type="submit">Signup</button>
                        </div>

                        <div class="suggestion">
                            <a href="login.php">Already have an account? <span class="bestie">Login</span></a>
                        </div>
                    
                    </form>
                  
                </div>
                
            </div>
        </div>
        
    </body>
</html>