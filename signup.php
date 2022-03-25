<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>_signUp</h1>
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            echo '<p class="signuperror">fill in all the fields.</p>';
                        }
                        else if ($_GET["error"] == "invaliduidmail") {
                            echo '<p class="signuperror">invalid username and e-mail.</p>';
                        }
                        else if ($_GET["error"] == "invaliduid") {
                            echo '<p class="signuperror">invalid username.</p>';
                        }
                        else if ($_GET["error"] == "invalidmail") {
                            echo '<p class="signuperror">invalid e-mail.</p>';
                        }
                        else if ($_GET["error"] == "passwordcheck") {
                            echo '<p class="signuperror">your passwords do not match.</p>';
                        }
                        else if ($_GET["error"] == "usertaken") {
                            echo '<p class="signuperror">username is already taken.</p>';
                        }
                    }
                    else if (isset($_GET['signup'])) {
                        if ($_GET["signup"] == "success") {
                            echo '<p class="signupsuccess">signup successful!</p>';
                        }
                    }
                ?>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <button type="submit" name="signup-submit">SignUp</button>
                </form>
            </section>
        </div>
        
    </main>

<?php
    require "footer.php";
?>