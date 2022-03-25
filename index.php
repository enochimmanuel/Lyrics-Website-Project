<?php
    require "header.php";
    include 'includes/dbh.inc.php'
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php 
                    if (isset($_SESSION['userId'])) {
                        echo '<p class="login-status">You are logged in!</p>';
                    }
                    else {
                        echo '<p class="login-status">You are logged out!</p>';
                    }
                ?>
            </section>
        </div>

        <h1>Songs</h1>

        <div class="song-list">
            <?php
                $sql = "SELECT * FROM lyrics";
                $result = mysqli_query($conn, $sql);
                $queryResults = mysqli_num_rows($result);

                if ($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='song-list'>
                        <h3>".$row['l_title']."</h3>
                        <p>Date: ".$row['l_date']."</p>
                        <p>Author: ".$row['l_author']."</p>
                        </div>";
                    }
                }

            ?>
        </div>
        
    </main>

    <?php
    require "footer.php";
?>