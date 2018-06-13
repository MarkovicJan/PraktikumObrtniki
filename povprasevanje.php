<?php
    include 'connect.php';


    if (isset ($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $kategorija = $_POST['kategorija'];

        $headers = "From: " . $mailFrom;
        $txt = "Prejeli ste sporočilo od: " . $mailFrom . ".\n\n" . $message;

        //mail('damijan.vogrinec@gmail.com', $subject, $message,'From: testniobrtniki@gmail.com');
       // mail('jan.markovic97@gmail.com','Sample mail','Sample content','From: testniobrtniki@gmail.com');

        $sql = "SELECT * FROM obrtniki where Kategorija='$kategorija'";
        $result = mysqli_query($conn, $sql);

        $resultCheck = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                mail($row["Kontakt"], $subject, $txt,'From: testniobrtniki@gmail.com');
            }
        }
        header('refresh:2; url=proba.php');
    }

    ?>