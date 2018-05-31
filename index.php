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
        Kategorija : <input type="text" name="kategorija">
        <br></br>
        <input type="submit" value="Potrdi">
        <br></br>
    </form>
</div>




<div id="Iskanje obrtnikov" class="tabcontent">
    <h2 style="color: red;">Kategorije</h2>
	
	
	
	<form name="form1" method="post" action="searchresults.php">
	<input name="query" type="text" size="40" maxlength="50" />
	<input type="submit" name="Submit" value="Search" />
	</form>
	
	
	
	
    <ul>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Kategorije obrtnikov</a>
            <button class="tablinks" onclick="odpriZavihek(event, 'elektroInstalacije')">Elektroinštalacije</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'kamnosestvo')">Kamnoseštvo</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'racunovodskeStoritve')">Računovodske storitve</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'informacijski')">Informacijski inženiring</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'Lesarstvo')">Lesarstvo</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'Lesarstvo')">Dimnikarstvo</button>
            <button class="tablinks" onclick="odpriZavihek(event, 'Lesarstvo')">Avtomehanikarstvo</button>
    </ul>
</div>
</div>

<div id="elektroInstalacije" class="tabcontent">

    <h2>Elektroinštalcije Global elektrik</h2>
    <p>Opis:
        Smo mlado podjetje, specializirano za izvajanje tehničnih storitev s področja elektro inštalacij in strelovodnih naprav.<br>
        Nudimo celostno obravnavo elektro inštalacij od projektiranja do izvedbe ali montaže in nadzora.   <br>
        Direktor podjetja ima številna specializirana znanja s področja električnih inštalacij, energetike in telekomunikacij ter strelovodnih
        inštalacij za individualne gradnje.</p>

    <b>Kontakt:info@global-elektrik.si,
        <br>040 232 112</b><br>
    <b>Pločanska ulica 22, 1211 Ljubljana</b><br>
    <iframe width="500" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=plo%C4%8Danska%20ulica%2022&key=AIzaSyCeY_lHw2RzeelYgyt6P8x6qj_sE8UYOLo" allowfullscreen></iframe>



        <h2>Elektroinštalacije Huzjak</h2>
        <p>Opis:
            Elektroinštalacije Huzjak je podjetje, ki se ukvarja s prodajno in storitveno dejavnostjo. <br>
            V okviru prodajne dejavnosti se osredotoča na ponudbo širokega in zanimivega spektra znamk elektronskih pripomočkov srednje in višje vrednosti, <br>
            kakor tudi širokega nabora kablov. Poleg tega ponuja tudi spominske kartice. V okviru storitvene dejavnosti se ukvarjamo s popravilom in <br>
            servisiranjem električnih pripomočkov vseh vrst in znamk. Tako se opravljajo zahtevnejša in manj zahtevna popravila<br>
            različnih elektronike.</p>


        <b>Kontakt: elektro.huzjak@gmail.com,
            <br>telefonska številka: 070 665 556</b><br>
        <b>Kocljeva ulica 1a, 9000 Murska Sobota</b><br>
        <iframe width="500" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=kocljeva%20ulica%201a&key=AIzaSyCeY_lHw2RzeelYgyt6P8x6qj_sE8UYOLo" allowfullscreen></iframe>


    </div>

<div id="kamnosestvo" class="tabcontent">

    <?php


        $sql = "SELECT * FROM obrtniki;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0 ){
            while ($row = mysqli_fetch_assoc($result)){
                echo $row['Naziv'];
            }
        }
    ?>




</div>

<div id="Lesarstvo" class="tabcontent">
    <h2> Lesarstvo Lesi d.o.o</h2>
    <p>Opis:
        Smo proizvajalci vsestranski lesnih produktov.<br> Naši najbolj priljeblju izdelki
        so po naročilu delani stoli in mize. Odlikuje nas hitra ozivnost in oseben odnos s strankami.

        <br>Izdelujemo lahko tudi po naročilu. <br>Drži se nas sloves dobrega znanja z lesom. <br>
        Ponujamo storitve kot so:
    <li style="color: orangered"><b>Mizarstvo</b></li><br>
    <li style="color: orangered"><b>Izdelava ročnih izdelkov iz lesa</b></li><br>
    <li style="color: orangered"><b>Priprava lesa za zimo</b></li><br>
    <li style="color: orangered"><b>Pomaganje pri zlaganju lesa</b></li>

    </p>

    <br>
    <p>Kontakt ter lokacija
        <br>Spodaj nas lahko najdete na lokaciji
        <br>
        <b>Telefonska številka: 041 231 223</b></p>
    <iframe width="500" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJAzvWgdl7b0cRDHdkitYJ5zc&key=AIzaSyCeY_lHw2RzeelYgyt6P8x6qj_sE8UYOLo" allowfullscreen></iframe>



    <h2> Lesarstvo Woody</h2>
    <p>Opis:
        Predelava lesa ter uporaba lesnik izdelkov, je za znižanje emisije toplogrednih plinov <br>
        bistvena in lahko v največji možni meri prispeva k normalizaciji podneba. <br>
        Za prihodnost in obstanek človeštva bo les nedvomno odločilen material 21.stoletja. <br>
        Zato izberite pravilno - IZBERITE NAS!

        <br>Izdelujemo lahko tudi po naročilu. <br>
        Ponujamo storitve kot so:<br>
    <li style="color: orangered"><b>Mizarstvo</b></li><br>
    <li style="color: orangered"><b>Izdelava lesa po merilu</b></li><br>
    <li style="color: orangered"><b>Naročanje lesa za zimo</b></li><br>
    <li style="color: orangered"><b>Pomaganje pri gradnji</b></li>

    </p>

    <br>
    <p>Kontakt in lokacija
        <br>Spodaj nas lahko najdete na lokaciji
        <br>
        <b>Telefonska številka: 050 232 123</b><br>
        <iframe width="500" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJL0BywsdvZUcRQ2YKFyp_Utw&key=AIzaSyCeY_lHw2RzeelYgyt6P8x6qj_sE8UYOLo" allowfullscreen></iframe>


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