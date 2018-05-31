<?php
    include 'connect.php';
    ?>

<div class="article-container">

    <?php

        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM obrtniki WHERE Naziv LIKE '%$search%' OR Opis like '%search%'";

            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "Našli smo ".$queryResult." rezultatov.";

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo
                        "<div>
                    <h2>".$row['Naziv']."</h2>
                    <p>".$row['Opis']."</p>
                    <p>".$row['Kontakt']."</p>
                    <p>".$row['Lokacija']."</p>
                    </div>";
                }
            } else {
                echo "Ni rezultatov.";
            }


        }

    ?>


</div>



