<?php
    include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iskanje obrtnikov</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<body background="3631436-white-wallpapers.jpg">

<h1 style="color:red" align="center">NAJ OBRTNIK</h1>

<table style="width:100%">
    <tr>
        <th><a href="/"><img src="gold_books_dorocollection_work.jpg" height=250 width= 350 align="center"/></a></th>
    </tr>

</table>


<p align="center"> Naj obrtnik je spletna stran, na kateri lahko tako rekoč najdete vse za vaš dom.
    <br>Skoraj pozabljeni poklici so nam v veliko veselje,
    da vam jih predstavimo. Po ugodnih cenah, smo na naši spletni strani vse obrtnike zložili po kategorijah, kot si se seveda to zaslužijo.</p>

<p align="left"><a href="prijava.html" ><i class="fa fa-user" align="right" ></i> PRIJAVA</a></p>


<div class="tab">

    <button class="tablinks" onclick="odpriZavihek(event, 'Obrtniki')">Za obrtnike</button>
    <button class="tablinks" onclick="odpriZavihek(event, 'Iskanje obrtnikov')">Iskanje obrtnikov</button>
    <button class="tablinks" onclick="odpriZavihek(event, 'Pomoč')">Kontakt</button>
    <button class="tablinks" onclick="odpriZavihek(event, 'Registracija uporabnika')">Registracija</button>
</div>




<div id="Obrtniki" class="tabcontent">
    <h3>Vnos novega obrtnika</h3>
    <p> Za vnos novega obrtnika, prosimo da izpolnite vse pogoje, ki se na našajo na spodnja polja.</p>
    <br>
    <form action="insert.php" method="post">
        Naziv : <input type="text" name="username">
        <br></br>
        Opis: <input type="text" name="opis">
        <br></br>
        Kontakt: <input type="text" name="kontakt">
        <br></br>
        Lokacija : <input type="text" name="lokacija">
        <br></br>
        Kategorija :
        <select name="kategorija">
            <option value="Elektroinštalacije">Elektroinštalacije</option>
            <option value="Kamnoseštvo">Kamnoseštvo</option>
            <option value="Računovodske storitve">Računovodske storitve</option>
            <option value="Informacijski inženiring">Informacijski inženiring</option>
            <option value="Lesarstvo">Lesarstvo</option>
            <option value="Dimnikarstvo">Dimnikarstvo</option>
            <option value="Avtomehanika">Avtomehanika</option>

        </select>
        <br></br>
        <input type="submit" value="Potrdi">
        <br></br>
    </form>
</div>




<div id="Iskanje obrtnikov" class="tabcontent">
    <h2 style="color: red;">Kategorije</h2>
	
	
	
	<form action="search.php" method="POST">
	<input type="text" name="search" placeholder="Search" />
	<button type="submit" name="submit-search" value="Search">Search</button>
	</form>


	
    <ul>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Kategorije obrtnikov</a>
            <button class="tablinks" onclick="odpriZavihek(event, 'elektroInstalacije')">Elektroinštalacije</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'kamnosestvo')">Kamnoseštvo</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'racunovodskeStoritve')">Računovodske storitve</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'informacijski')">Informacijski inženiring</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'Lesarstvo')">Lesarstvo</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'dimnikarstvo')">Dimnikarstvo</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'avtomehanika')">Avtomehanika</button>
    </ul>
</div>
</div>

<div id="racunovodskeStoritve" class="tabcontent">

    <?php


    $sql = "SELECT * FROM obrtniki WHERE kategorija='Računovodske storitve';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0 ){
        while ($row = mysqli_fetch_assoc($result)){
            echo
                "<div>
                <h2>".$row['Naziv']."</h2>
                <p>".$row['Opis']."</p>
                <p>".$row['Kontakt']."</p>
                <p>".$row['Lokacija']."</p>
                </div>";
        }
    }
    ?>



</div>

<div id="informacijski" class="tabcontent">


    <?php


    $sql = "SELECT * FROM obrtniki WHERE kategorija='Informacijski inženiring';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0 ){
        while ($row = mysqli_fetch_assoc($result)){
            echo
                "<div>
                <h2>".$row['Naziv']."</h2>
                <p>".$row['Opis']."</p>
                <p>".$row['Kontakt']."</p>
                <p>".$row['Lokacija']."</p>
                </div>";
        }
    }
    ?>



</div>

<div id="dimnikarstvo" class="tabcontent">


    <?php


    $sql = "SELECT * FROM obrtniki WHERE kategorija='Dimnikarstvo';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0 ){
        while ($row = mysqli_fetch_assoc($result)){
            echo
                "<div>
                <h2>".$row['Naziv']."</h2>
                <p>".$row['Opis']."</p>
                <p>".$row['Kontakt']."</p>
                <p>".$row['Lokacija']."</p>
                </div>";
        }
    }
    ?>


</div>

<div id="avtomehanika" class="tabcontent">


    <?php


    $sql = "SELECT * FROM obrtniki WHERE kategorija='Avtomehanika';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0 ){
        while ($row = mysqli_fetch_assoc($result)){
            echo
                "<div>
                <h2>".$row['Naziv']."</h2>
                <p>".$row['Opis']."</p>
                <p>".$row['Kontakt']."</p>
                <p>".$row['Lokacija']."</p>
                </div>";
        }
    }
    ?>


</div>


<div id="elektroInstalacije" class="tabcontent">

    <?php


    $sql = "SELECT * FROM obrtniki WHERE kategorija='Elektroinštalacije';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0 ){
        while ($row = mysqli_fetch_assoc($result)){
            echo
                "<div>
                <h2>".$row['Naziv']."</h2>
                <p>".$row['Opis']."</p>
                <p>".$row['Kontakt']."</p>
                <p>".$row['Lokacija']."</p>
                </div>";
        }
    }
    ?>

</div>

<div id="kamnosestvo" class="tabcontent">

    <?php


        $sql = "SELECT * FROM obrtniki WHERE kategorija='Kamnoseštvo';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0 ){
            while ($row = mysqli_fetch_assoc($result)){
                echo
                "<div>
                <h2>".$row['Naziv']."</h2>
                <p>".$row['Opis']."</p>
                <p>".$row['Kontakt']."</p>
                <p>".$row['Lokacija']."</p>
                </div>";
            }
        }
    ?>




</div>

<div id="Lesarstvo" class="tabcontent">

    <?php


    $sql = "SELECT * FROM obrtniki WHERE kategorija='Lesarstvo';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0 ){
        while ($row = mysqli_fetch_assoc($result)){
            echo
                "<div>
                <h2>".$row['Naziv']."</h2>
                <p>".$row['Opis']."</p>
                <p>".$row['Kontakt']."</p>
                <p>".$row['Lokacija']."</p>
                </div>";
        }
    }
    ?>

</div>




<div id="Registracija uporabnika" class="tabcontent">

    <h2>Registracija uporabnika</h2>
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Uporabniško ime</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Geslo</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Potrdite geslo</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Registracija</button>
        </div>
        <p>
            Ste že član? Potem pa se hitro prijavite! <a href="login.php">Prijava</a>
        </p>
    </form>


</div>




<div id="Pomoč" class="tabcontent">
    <p> Dosegljivi smo od ponedeljka do sobote!</p>
    <br></br>
    <p> Kako do nas?</p>

    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EipLb3JvxaFrYSBjZXN0YSA0NiwgMjAwMCBNYXJpYm9yLCBTbG92ZW5pamE&key=AIzaSyA2ey47IlnUvYEHk6wmH4Yy1HG9DXFe83E" allowfullscreen></iframe>
    <p> Naš stalen naslov je navoljo na zgornjem zemljevidu.</p>
    <br></br>
    <b>Nahajamo se na naslovu Koroška cesta 46, 2000 Maribor.</b>
    <br></br>
    <th>Naša stalna telefonska številka:
        <br></br>
        Skozi 24/7: 080 12 42</th>
</div>


<script>
    function odpriZavihek(evt, zavihek) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(zavihek).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>


</body>

</html>