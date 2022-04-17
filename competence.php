<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
</head>

<body>
    <main>
        <section id="competences" class="sectionDif">
            <h1 class="grandTitre">Compétences</h1>
            <div id="competencesLogiciels">

                <?php
                $lecteur = new SplFileObject("private/competences.csv", 'r');
                while ($lecteur->eof() == false) {
                    $ligne = $lecteur->fgets();
                    if ($ligne != "") {
                        $tab = explode(";", $ligne);
                        $titreLogiciel = $tab[0];
                        $nomBarre      =  $tab[1];
                        $texteLogiciel = $tab[2];
                        
                        
                        //début de boucle
                ?>
                        <div class="logiciel">
                            <div class="blocDescriptionLogiciel">
                                <div class="descriptionLogiciel">
                                    <h5 class="titreLogiciel"><?php echo($titreLogiciel);?></h5>
                                    <p class="texteLogiciel"><?php echo($texteLogiciel);?></p>
                                </div>
                            </div>
                            <img src="images/logo-<?php echo($titreLogiciel);?>.svg" alt="<?php echo($titreLogiciel);?>" class="logoLogiciel"/>
                            <div class="nomBarre">
                                <progress max="100" value="<?php echo($nomBarre);?>"></progress>
                            </div>
                        </div>
                <?php
                        //fin de la boucle
                    }
                }
                $lecteur=null;
                ?>

            </div>
        </section>
    </main>
</body>

</html>