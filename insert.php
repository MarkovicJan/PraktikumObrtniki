

<?php


$con = mysqli_connect ('127.0.0.1','root');

if(!$con)
{
    echo 'Not Connect to server';
}

if (!mysqli_select_db($con,'obrtniki'))
{
    echo 'Database not selected';
}

$Naziv = $_POST['username'];
$Opis = $_POST['opis'];
$Kontakt = $_POST ['kontakt'];
$Lokacija = $_POST ['lokacija'];
$Kategorija = $_POST ['kategorija'];

$sql = "INSERT INTO obrtniki (Naziv, Opis, Kontakt, Lokacija, Kategorija) VALUES ('$Naziv','$Opis', '$Kontakt', '$Lokacija', '$Kategorija')";


if (!mysqli_query($con,$sql))
{
    echo 'Not inserted';
}
else
{
    echo 'Vaši podatki so se vnesli';
}


header('refresh:2; url=index.php');

?>

