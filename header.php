<?php
    include 'includes/dbh.inc.php';
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.js">
    <title></title>
</head>
<body>
    <header>
        <nav class="nav-header-main">
            <div class="header-logo">
                <a href="index.php">
                    <img src="media/lybrarylogo.png" alt="logo" class="logo">
                </a>
            </div>
            <div class="menu-buttons">
            <ul>
                
                <li><a href="index.php">Home</a></li> 
                
                <li><a href="#">Submit Lyrics</a></li> <!-- anchor tag not yet directed to the page -->
                
                <li><a href="#sub-menu-1">Categories</a>
                    <div id="sub-menu-1">
                        <ul>
                            <li><a href="#"><b>[x]</b></a>
                            <li><b>Artists</b>
                                <div class="sub-menu-2">
                                    <ul>
                                        <li><a href="#">#</a></li>
                                        <li><a href="#">A</a></li>
                                        <li><a href="#">B</a></li>
                                        <li><a href="#">C</a></li>
                                        <li><a href="#">D</a></li>
                                        <li><a href="#">E</a></li>
                                        <li><a href="#">F</a></li>
                                        <li><a href="#">G</a></li>
                                        <li><a href="#">H</a></li>
                                        <li><a href="#">I</a></li>
                                        <li><a href="#">J</a></li>
                                        <li><a href="#">K</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">N</a></li>
                                        <li><a href="#">O</a></li>
                                        <li><a href="#">P</a></li>
                                        <li><a href="#">Q</a></li>
                                        <li><a href="#">R</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">T</a></li>
                                        <li><a href="#">U</a></li>
                                        <li><a href="#">V</a></li>
                                        <li><a href="#">W</a></li>
                                        <li><a href="#">X</a></li>
                                        <li><a href="#">Y</a></li>
                                        <li><a href="#">Z</a></li>
                                    </ul>
                                </div> 
                            </li>
                            <li><b>Songs</b>
                                <div class="sub-menu-2">
                                    <ul>
                                        <li><a href="#">#</a></li>
                                        <li><a href="#">A</a></li>
                                        <li><a href="#">B</a></li>
                                        <li><a href="#">C</a></li>
                                        <li><a href="#">D</a></li>
                                        <li><a href="#">E</a></li>
                                        <li><a href="#">F</a></li>
                                        <li><a href="#">G</a></li>
                                        <li><a href="#">H</a></li>
                                        <li><a href="#">I</a></li>
                                        <li><a href="#">J</a></li>
                                        <li><a href="#">K</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">N</a></li>
                                        <li><a href="#">O</a></li>
                                        <li><a href="#">P</a></li>
                                        <li><a href="#">Q</a></li>
                                        <li><a href="#">R</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">T</a></li>
                                        <li><a href="#">U</a></li>
                                        <li><a href="#">V</a></li>
                                        <li><a href="#">W</a></li>
                                        <li><a href="#">X</a></li>
                                        <li><a href="#">Y</a></li>
                                        <li><a href="#">Z</a></li>
                                    </ul>
                                </div> 
                            </li>
                        </ul>
                    </div>  

                    
                </li>

                <!-- remove upper comment tag once started coding on categories-->

                <li><a href="#">Contact Us</a></li> 
            
            </ul>
            </div>    
            


            <div class="header-login">
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit"><u>logout</u></button>
                        </form>';
                    }
                    else {
                        echo '<form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit"><u>login</u></button>
                    </form>
                    <a href="signup.php">signUp</a>
                    </form>';
                    }
                ?>
            </div>
            <div class="search-bar">
                    <form action="search.php" method="POST">
                        <input type="text" name="search" placeholder="search artist/song">
                        <button type="submit" name="submit-search">search</button>
                    </form>
            </div>
        </nav>
    </header>
</body>
</html>