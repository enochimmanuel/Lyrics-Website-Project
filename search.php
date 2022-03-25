<?php
    require "header.php";
?>

<h1>Search Page</h1>

<div class = "search-results">
    <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM lyrics WHERE l_title LIKE '%$search%' OR l_artist LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            
            if ($queryResult == 1) {
                echo "<div class='search-result-no'>There is ".$queryResult." result</div>";
            }
            else {
                echo "<div class='search-result-no'>There are ".$queryResult." results!</div>";
            }
        
            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<a href='lyric.php?title=".$row['l_title']."&date=".$row['l_date']."'><div class='search-result'>
                        <h2>".$row['l_title']."</h2>
                        <p>".$row['l_lyrics']."</p>
                        <p>Date: ".$row['l_date']."</p>
                        <p>Author: ".$row['l_author']."</p>
                        </div></a>";
                }
            } 
            else {
                echo "There are no results matching your search";
            }
        }
    ?>
</div>