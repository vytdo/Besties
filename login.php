<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <header>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="signup.html">Signup</a></li>
                        <li><a class="active" href="login.html">Login</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="hero">
            <div class="hero-image">
                <img src="img/friend.svg" id="hero-img">
            </div>

            <div class="hero-right">
                <div class="hero-welcome">
                    <h1>Welcome back, <span class="bestie"> BESTIE</span></h1>
                </div>

                <div class="login-container">
                    <form action="login.html">
                        <div class="input-div">
                            <h5>Username</h5>
                            <input type="text" class="input">
                        </div>
                        <div class="input-div">
                            <h5>Password</h5>
                            <input type="password" class="input">
                        </div>
                        <a href="#">Forgot Passowrd?</a>
                        <button type="submit">Login</button>
                        <a href="#">Don't have an account? <span>Signup</span></a>
                    </form>
                    
                </div>
                
            </div>
        </div>
        
    </body>
</html>