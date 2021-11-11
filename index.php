<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <header>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a class="active" href="#">Home</a></li>
                        <li><a href="signup.html">Signup</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="hero">
            <div class="hero-image">
                <img src="img/friend3.svg" id="hero-img">
            </div>

            <div class="hero-slogan">
                <h1>BECOME A <span class="bestie"> BESTIE</span></h1>
                <h1>MAKE A  <span class="bestie"> BESTIE</span></h1>

                <p>Over thousands of besties all over the world <br> Discover your bestie today and let others discover you</p>

                <button> <a href="signup.html">SIGN UP TODAY</a> </button>
            </div>
        </div>

        <?php 

            // CONNECTION
            require_once("settings.php");
            $conn = @mysqli_connect($host, $user, $pswd, $dbnm) or die ("Failed to connect to server");

            if(!$conn){
                echo "<p> Connection failure </p>";
            } else {

                $friendsTable = "CREATE TABLE IF NOT EXISTS friends(
                    friend_id INT NOT NULL AUTO_INCREMENT,
                    friend_email VARCHAR(50) NOT NULL,
                    password VARCHAR(20) NOT NULL,
                    profile_name VARCHAR(30) NOT NULL,
                    date_started DATE NOT NULL,
                    num_of_friends INT unsigned,
                    PRIMARY KEY(friend_id)
                )";
            }

            $createFriendsTable = mysqli_query($conn, $friendsTable);

            mysqli_close($conn);
        ?>
        
    </body>
</html>