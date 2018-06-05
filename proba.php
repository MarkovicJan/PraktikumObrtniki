<?php
include_once 'connect.php';
?>

<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Obrtniki</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">


				<div class="top">

					<!-- Logo -->
						<div id="logo">

							<h1 id="title">NAJ OBRTNIK</h1>

						</div>

					<!-- Nav -->
						<nav id="nav">

							<ul>

                                <li><button class="skel-layers-ignoreHref" onclick="odpriZavihek(event, 'Obrtniki')"><span class="icon fa-home">Obrtniki</span></button></li>
                                <li><button class="skel-layers-ignoreHref" onclick="odpriZavihek(event, 'iskanjeObrtnikov')"><span class="icon fa-th">Iskanje obrtnika</span></button></li>
                                <li><button class="skel-layers-ignoreHref" onclick="odpriZavihek(event, 'Registracija')"><span class="icon fa-user">Registracija</span></button></li>
                                <li><button class="skel-layers-ignoreHref" onclick="odpriZavihek(event, 'Kontakt')"><span class="icon fa-envelope">Kontakt</span></li></button>
							</ul>
						</nav>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="uvod" class="one dark cover">
						<div class="container">

							<header>
                                <h2 class="alt" style="color: #9ececc">Naj obrtnik je spletna stran, na kateri lahko tako rekoč najdete vse za vaš dom.</h2>
                                <br>Skoraj pozabljeni poklici so nam v veliko veselje,
                                da vam jih predstavimo. Po ugodnih cenah, smo na naši spletni strani vse obrtnike zložili po kategorijah, kot si se seveda to zaslužijo.</h2>

							</header>



						</div>
					</section>

                <div id="Obrtniki" class="tabcontent">
                    <h3>Vnos novega obrtnika</h3>
                    <p> Za vnos novega obrtnika, prosimo da izpolnite vse pogoje, ki se na našajo na spodnja polja.</p>
                    <br>
                    <form action="insert.php" method="post">
                        Naziv : <input type="text" name="username">
                        <br>
                        Opis: <input type="text" name="opis">
                        <br>
                        Kontakt: <input type="text" name="kontakt">
                        <br>
                        Lokacija : <input type="text" name="lokacija">
                        <br>
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
                        <br>
                        <input type="submit" value="Potrdi">

                        <br>
                    </form>
                </div>


                <div id="iskanjeObrtnikov" class="tabcontent">
                    <h2 style="color: red;">Kategorije</h2>



                    <form action="search.php" method="POST">
                        <input type="text" name="search" placeholder="Search" />
                        <button type="submit" name="submit-search" value="Search">Search</button>
                    </form>


<br>
                    <ul>
                        <div class="dropdown">

                            <button class="tablinks" onclick="odpriZavihek(event, 'elektroInstalacije')">Elektroinštalacije</button>
                            <button class="tablinks" onclick="odpriZavihek(event, 'kamnosestvo')">Kamnoseštvo</button>
                            <button class="tablinks" onclick="odpriZavihek(event, 'racunovodskeStoritve')">Računovodske storitve</button>
                            <button class="tablinks" onclick="odpriZavihek(event, 'informacijski')">Informacijski inženiring</button>
                            <button class="tablinks" onclick="odpriZavihek(event, 'Lesarstvo')">Lesarstvo</button>
                            <button class="tablinks" onclick="odpriZavihek(event, 'dimnikarstvo')">Dimnikarstvo</button>
                            <button class="tablinks" onclick="odpriZavihek(event, 'avtomehanika')">Avtomehanika</button>
                    </ul>
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

                <div id='dimnikarstvo' class="tabcontent">

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



                <!-- About Me -->
                <div id="Registracija" class="tabcontent">

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

<br>
                </div>

                <!-- Contact -->
                <div id="Kontakt" class="tabcontent">

                    <h2>Kontakt</h2>
                    <p> Dosegljivi smo od ponedeljka do sobote!</p>
                    <br>
                    <p> Kako do nas?</p>

                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EipLb3JvxaFrYSBjZXN0YSA0NiwgMjAwMCBNYXJpYm9yLCBTbG92ZW5pamE&key=AIzaSyA2ey47IlnUvYEHk6wmH4Yy1HG9DXFe83E" allowfullscreen></iframe>
                    <p> Naš stalen naslov je navoljo na zgornjem zemljevidu.</p>
                    <br>
                    <b>Nahajamo se na naslovu Koroška cesta 46, 2000 Maribor.</b>
                    <br>
                    <th>Naša stalna telefonska številka:
                        <br>
                        Skozi 24/7: 080 12 42</th>
                </div>

		<!-- Footer -->

		<!-- Scripts -->


			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>


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