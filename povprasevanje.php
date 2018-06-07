<?php
    include 'connect.php';




    if (isset ($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $kategorija = $_POST['kategorija'];

    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail("damijanvogrinec@gmail.com", $subject, $message, $headers);

    /*
    $sql = "SELECT Kontakt FROM obrtniki where Kategorija=$kategorija";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
           // $datas[] = $row;
            echo $row;
        }
    }*/

   // foreach ($datas as $data){
     //   mail($data, $subject, $txt, $headers);
    //}










}






?>