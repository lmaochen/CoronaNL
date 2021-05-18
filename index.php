<?php
    $data = json_decode(file_get_contents("http://corona-steun.nl/api.php"), 1);
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <title>Coronavirus NL | informatie, nieuws en advies</title>
    <meta name="description" content="Vind hier de laatste informatie/niews over het corona virus (covid19), corona map, corona aantal en advies.">
    <link rel="icon" type="image/jpeg" sizes="1920x1080" href="assets/img/1582065498831.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <style>
    html, body { 
    overflow-x: hidden;
    }

    @media screen and (max-width: 420px) {
        .col-lg-8{
            height: 1600px !important;
        }
    }   
    </style>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md text-truncate d-inline-block navbar navbar-expand-lg fixed-top" id="mainNav" style="background-color: #2a5e65;">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#">Coronavirus</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link active js-scroll-trigger" href="#about">Veiligheid</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#download">Map</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Meer informatie</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url(&quot;assets/img/virus-4835301_1920.jpg&quot;);">
        <div class="intro-body" style="background-image: url(&quot;assets/img/virus-4835301_1920.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading" style="font-size: 53px;margin: -20px;"><?= $data["aantal"]?> mensen hebben corona in Nederland, vandaag zijn er <?= $data["aantalv"]?> bijgekomen. <br><small class="text-center text-white-50" style="padding: 0px;padding-top: 0px;width: auto;padding-right: 0px;padding-bottom: 0px;font-size: 14px;height: 0px;color: rgba(255,255,255,0.498);"><br><a href="https://www.rivm.nl/nieuws/actuele-informatie-over-coronavirus">Dit aantal word elke dag om 14:00 bijgewerkt vanuit het rivm&nbsp;</a></small><br></h1>
                        <br>
                        <p
                            class="intro-text">Corona <a href="https://nl.wikipedia.org/wiki/COVID-19">(COVID-19)</a> is een uitbraak van een nieuwe coronavirus die in Azie gestart is, het veroorzaakt koorts en luchtwegklachten waardoor het constant verspreid word, vermijd
                            dan daarom zo veel mogelijk sociaal contact. Er zijn er in totaal  <?= $data["doden"]?> mensen overleden aan corona, waarbij er <?= $data["dodenv"]?> vandaag overleden zijn..<br></p>
                            <h1 style="font-size: 15px;height: 12px;margin: 33px;">meer informatie</h1><br><a class="btn btn-link btn-circle" role="button" href="#about" style="height: 52px;margin: -47px;padding-top: 3px;"><i class="fa fa-angle-double-down animated"></i></a></div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="content-section text-center" style="background-color: #3f6e74;">
        <div class="container">
            <div class="row">
                <div class="col-auto col-lg-8 col-xl-7 offset-xl-0 text-left d-inline float-left mx-auto">
                    <h2 class="text-left" style="width: 626px;font-size: 24px;">veiligheidsmaatregelen</h2>
                    <p class="text-left d-inline" style="padding: 0px;padding-left: -15px;width: 554px;"><strong>Houd 1,5 meter (twee armlengtes) afstand van elkaar</strong><br><strong>Hoest en nies in de binnenkant van je elleboog</strong><br><strong>Blijf thuis als je verkoudheidsklachten krijgt</strong><br><strong>Gebruik papieren zakdoekjes</strong><br><strong>Geen handen schudden</strong><br><br><br></p>
                    <p
                        class="text-left">Het is erg belangrijk om veiligheidsmaatregelen te nemen om de virus verspreiding te dempen, het virus verspreid zich <strong>exponentieel,&nbsp;</strong>waardoor elk persoon die aan de veiligsmaatregelen houd een grote invloed kan
                        hebben op het vermindering van het virus verspreiding.&nbsp;</p>
                        <p class="text-left">Volg alstublieft de veiligheidsmaatregelen en verminder de verspreiding van Corona, u kunt hier meer over de maatregelen lezen. Als u meer vragen heeft kunt u 0800-1351 bellen van 8:00 tot 22:00 uur.</p><button class="btn btn-primary btn-sm text-center"
                            type="button" style="margin: -2px;margin-left: -1px;margin-bottom: 30px;"><strong>Rijkinstituut voor volksgezondheid en mileu</strong></button>
                        <h1 style="font-size: 16px;">help, ik denk dat ik corona heb</h1>
                        <p>Wees niet bang, en ga nooit meteen naar een huisarts om te testen of je Corona hebt, dit is om verspreiding te voorkomen, kijk eerst of u één of meer van deze klachten heeft:<br><br>verkoudheid, niezen, hoesten, keelpijn, moeilijk
                            ademen, koorts (boven 38 graden)<br><br>Blijf vooral thuis met deze klachten om verspreiding te voorkomen, bel wel direct uw huisarts als u één van deze punten klopt:<br></p>
                        <ul>
                            <li>U word steeds zieker<br></li>
                            <li>U heeft moeite met ademhaling<br></li>
                            <li>U heeft meer dan 3 dagen koorts<br></li>
                            <li>U raakt steeds meer in de war<br></li>
                            <li>U bent ouder dan 70, heeft een chronische ziekte of minder weerstand<br></li>
                        </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="download" class="download-section content-section text-center" style="background-image: url(&quot;assets/img/1582065498831.jpg&quot;);padding-top: 100px;">
        <div class="container text-center d-table-cell" style="padding-top: 0px;width: 1128px;height: 557px;">
            <div class="row text-center d-inline">
                <div class="col">
                    <h1 class="text-center">Corona map<br><small class="text-center d-inline-block" style="font-size: 9px;">Informatie word gehaald uit de officiele rivm website, klik de map voor meer informatie</small></h1><img class="img-thumbnail img-fluid border rounded-0 border-primary shadow-lg d-inline-block"
                        src="<?= $data["map"]?>" style="width: auto;" onclick="location.href='https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente';"></div>
            </div>
        </div>
    </section>
    <section id="contact" class="content-section text-center" style="background-color: #3f6e74;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>heeft u meer interesse in corona? bekijk deze links</h2>
                    <p></p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" onclick="location.href='https://www.rivm.nl/coronavirus/covid-19';" type="button"><i class="fa fa-info-circle fa-fw"></i><span class="network-name">&nbsp; RIVM</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" onclick="location.href='https://bing.com/covid';" type="button" style="width: 191px;"><i class="fa fa-info-circle fa-fw"></i><span class="network-name" style="width: 7px;">Wereldmap</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" onclick="location.href='https://github.com/lmaochen/coronaNL';" type="button" style="padding-right: 19px;width: 187px;"><i class="fa fa-github fa-fw"></i><span class="network-name">Corona-api</span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer style="background-color: #3f6e74;">
        <div class="container text-center">
            <p>Copyright © Chen - deze site zal nooit commercieel gebruikt worden</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>