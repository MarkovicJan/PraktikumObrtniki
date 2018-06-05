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
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>

								<li><a href="#obrtniki" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Obrtniki</span></a></li>
								<li><a href="#iskanjeObrtnikov" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Iskanje obrtnika</span></a></li>
								<li><a href="#registracija" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Registracija</span></a></li>
								<li><a href="#kontakt" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Kontakt</span></a></li>
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

                <div id="obrtniki" class="tabcontent">
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

				<!-- About Me -->
                <div id="registracija" class="tabcontent">

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

                <div id="kontakt" class="tabcontent">

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

	</body>
</html>