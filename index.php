<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Cirriculum vitae | Elise BOUARD | Etudiante MMI1</title>
    <meta name="description" content="Page index du curriculum vitæ de Elise BOUARD " />
    <link rel="shortcut icon" href="images/logo_elise_n.svg" type="images/logo-elise">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <style>
        @import url('https://fonts.googleapis.com/css2? family= Montserrat:wght@500 & family= Open+Sans:wght@500 & display=swap');
    </style>
</head>

<body class="body_index">
    <header>
        <a href="index.php">
            <img class="logo_elise_b" src="images/logo_elise_b.svg" alt="Logo élise Bouard." />
        </a>
        <nav>
            <ul class="nav_links">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#realisation">Réalisations</a></li>
                <li><a class="button_contact" href="contact.html">Contact</a></li>
            </ul>
        </nav>

    </header>



    <main>
        <section class="bienvenue">
            <div class="bienvenueBloc">
                <div class="illustrationBloc">
                    <img src="images/croquis_elise.png" alt="Illustration d'élise" class="illustration_elise">
                </div>
                <div class="texteBloc">
                    <h1 class="titreBienvenue">Bienvenue sur mon Curriculum vitæ</h1>
                    <p>Bonjour, vous verrez ci-dessous les différentes <strong class="motImportant">informations</strong> me
                        concernant. </p>
                    <hr class="hr_bienvenue">
                    <div class="reseaux_groupe_bienvenue">
                        <div class="picto">
                            <a href="https://www.linkedin.com/in/élise-bouard-8120871b9" target="_blank">
                                <img title="Me suivre sur LinkedIn" class="img_picto" src="images/pictogramme/SVG/pico_linkedin.svg" alt="LinkedIn d'élise" />
                            </a>
                        </div>

                        <div class="picto">
                            <a href="https://www.behance.net/elisebouard" target="_blank">
                                <img title="Rejoindre mon behance" class="img_picto" src="images/pictogramme/SVG/picto_behance.svg" alt="Behance d'élise" />
                            </a>
                        </div>

                        <div class="picto">
                            <a href="mailto:contact@bouardelise.pro@gmail.com" target="_blank">
                                <img title="Me contacter par mail" class="img_picto" src="images/pictogramme/SVG/picto_mail.svg" alt="Mail d'élise" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fleche_bienvenue">
                <a href="#profil">
                    <img class="fleche_bienvenue" src="images/pictogramme/SVG/fleche.svg" alt="Logo élise Bouard." />
                </a>
            </div>
        </section>


        <section id="profil">
            <h2>Qui suis-je ?</h2>
            <div class="presentationEtParcours">

                <div class="presentationBloc">
                    <img src="images/moi.jpg" alt="photo Elise BOUARD" class="photoProfil">
                    <div class="infosPersonnelles">
                        <p>Elise BOUARD</p>
                        <p>19 ans</p>
                        <hr class="hr_infos">
                        <p>Curieuse</p>
                        <p>Dynamique</p>
                        <p>Disponible</p>
                        <hr class="hr_infos">
                        <p>Perfectionniste</p>
                        <p>Manque de confiance</p>
                        <a href="/fichier/CV_ELISE BOUARD.pdf" download="CV_EliseBOUARD" class="btn telechargerCV">MON
                            CV</a>

                    </div>
                </div>
            </div>
            <p class="description_profil">Je m'appelle Elise BOUARD, actuellement en première année en <strong class="motImportant">BUT MMI</strong> (Métier du Multimédia et de
                l'Internet) à l'IUT de Laval, je compte à l'avenir m'orienter dans des <strong class="motImportant">métiers du web</strong>, notamment dans le
                développement front-end. Mais je m'ouvre à de nombreuses <strong class="motImportant">possibilités</strong> de parcours dans l'avenir. </p>
        </section>
        <section id="parcours">
            <h2>Parcours</h2>
            <div class="parcoursBloc">
                <!--ici mettre une timeline-->
                <ol>
                    <li class="timeline">
                        <p class="diplome">Brevet des Collèges</p>
                        <span class="point"></span>
                        <p class="description">2016 - 2017<br>Diplôme du <strong class="motImportant">collège</strong> <br> Mention
                            assez bien</p>
                    </li>
                    <li class="timeline">
                        <p class="diplome">Baccaleauréat STI2D</p>
                        <span class="point"></span>
                        <p class="description">
                            2019 - 2020<br>Bac <strong class="motImportant">STI2D</strong> (Sciences et Technologies de l'Industrie et
                            du Développement Durable) <br> Mention Bien
                        </p>
                    </li>
                    <li class="timeline">
                        <p class="diplome">Prépa Design</p>
                        <span class="point"></span>
                        <p class="description">2020 - 2021<br>Classe préparatoire en <strong class="motImportant">Design</strong>
                            <br>Découverte du monde du design sous différentes formes.
                        </p>
                    </li>
                    <li class="timeline">
                        <p class="diplome">BUT MMI</p>
                        <span class="point"></span>
                        <p class="description">2021 - 2022<br>BUT <strong class="motImportant">MMI</strong> (Métiers du Multimédia et
                            de l’Internet) <br>En cours d'apprentissage</p>
                    </li>
                    <li class="timeline">
                        <p class="diplome">Futur</p>
                        <span class="point"></span>
                        <p class="description">2024 - ?<br>Master - Monde professionnel</p>
                    </li>
                </ol>
            </div>
        </section>


        <section id="competences">
            <h2>Compétences</h2>
            <div class="competencesLogiciels">

                <?php
                $lecteur = new SplFileObject("fichier/competences.csv", 'r');
                while ($lecteur->eof() == false) {
                    $ligne = $lecteur->fgets();
                    if ($ligne != "") {
                        $tab = explode(";", $ligne);
                        $titreLogiciel = $tab[0];
                        $nomBarre      =  $tab[1];
                        $texteLogiciel = $tab[2];
                        $nomLogiciel = $tab[3];


                        //début de boucle
                ?>
                        <div class="logiciel">
                            <div class="blocDescriptionLogiciel">
                                <div class="descriptionLogiciel">
                                    <h5 class="titreLogiciel"><?php echo ($titreLogiciel); ?></h5>
                                    <p class="texteLogiciel"><?php echo ($texteLogiciel); ?></p>

                                </div>
                            </div>
                            <img src="images/php/logo-<?php echo ($titreLogiciel); ?>.svg" alt="<?php echo ($titreLogiciel); ?>" class="logoLogiciel" />
                            <div class="nomBarre">
                                <h3 class="nomLogiciel"><?php echo ($nomLogiciel); ?></h3>
                                <progress max="100" value="<?php echo ($nomBarre); ?>"></progress>
                            </div>
                        </div>
                <?php
                        //fin de la boucle
                    }
                }
                $lecteur = null;
                ?>

            </div>
        </section>




        <section id="realisation">
            <h2>Mes réalisations</h2>
            <p class="projets">
                Voici les projets que j'ai pu réaliser au cours de mon <strong class="motImportant">année préparatoire</strong> de design en 2020 et au début
                de mon année en <strong class="motImportant">BUT MMI</strong> à Laval en 2021. Pour plus de détails, cliquez sur les <strong class="motImportant">liens</strong> des projets, n'hésitez pas !
            </p>

            <hr class="hr_projets">

            <div class="galerie_ensemble">
                <ul class="galerie_realisation">

                    <li class="cadre_projets">
                        <a href="etonnants_voyageurs.html" target="_blank">
                            <img class="cadre_projets" src="images/realisation/test/etonnants_voyageurs.jpg" alt="Logo du festival Etonnants voyageurs" title="Logo pour le festival Etonnants Voyageurs" />
                            <div class="infosProjets">
                                <div class="degrade_projets"></div>
                                <h3>Réalisation d'un logo pour un festival</h3>
                            </div>
                        </a>
                    </li>

                    <li class="cadre_projets">
                        <a href="https://www.behance.net/gallery/119930177/Ralisation-dun-logo-pour-une-compagnie-arienne" target="_blank">
                            <img class="cadre_projets" src="images/realisation/test/jetair.jpg" alt="Logo de la compagnie aérienne Jet'air" title="Logo pour une compagnie aérienne" />
                            <div class="infosProjets">
                                <div class="degrade_projets"></div>
                                <h3>Réalisation d'un logo pour une compagnie aérienne</h3>
                            </div>
                        </a>
                    </li>

                    <li class="cadre_projets">
                        <a href="https://www.behance.net/gallery/119928437/Ralisation-dune-affiche-promotionnelle-dun-film" target="_blank">
                            <img class="cadre_projets" src="images/realisation/test/affiche-malefique.jpg" alt="Affiche promotionnelle du disney Maléfique" title="Affiche promotionnelle d'un film" />
                            <div class="infosProjets">
                                <div class="degrade_projets"></div>
                                <h3>Réalisation d'une affiche promotionnelle pour le film Maléfique de Disney</h3>
                            </div>
                        </a>
                    </li>

                    <li class="cadre_projets">
                        <a href="https://www.behance.net/gallery/119927325/Ralisation-dun-coffret-limit-incluant-3-DVD" target="_blank">
                            <img class="cadre_projets" src="images/realisation/test/abecedaire.jpg" alt="Coffret abécédaire avec DVD" title="Coffret dvd" />
                            <div class="infosProjets">
                                <div class="degrade_projets"></div>
                                <h3>Réalisation d'un coffret limité incluant 3 DVD</h3>
                            </div>
                        </a>
                    </li>

                    <li class="cadre_projets">
                        <a href="https://www.behance.net/gallery/118254277/Ralisation-dune-affiche-dinfographie" target="_blank">
                            <img class="cadre_projets" src="images/realisation/test/affiche-infographie.jpg" alt="Affiche infographique sur le taux de population qui joue aux jeux vidéo" title="Affiche infographique" />
                            <div class="infosProjets">
                                <div class="degrade_projets"></div>
                                <h3>Réalisation d'une affiche infographique</h3>
                            </div>
                        </a>
                    </li>

                    <li class="cadre_projets">
                        <a href="https://www.behance.net/gallery/118238003/Ralisation-dune-pochette-de-vinyle" target="_blank">
                            <img class="cadre_projets" src="images/realisation/test/vinyle-top.jpg" alt="Pochette de vinyle de Twenty One Pilot" title="Affiche infographique" />
                            <div class="infosProjets">
                                <div class="degrade_projets"></div>
                                <h3>Réalisation d'une pochette de vinyle</h3>
                            </div>
                        </a>
                    </li>

                    <li class="cadre_projets">
                        <a href="https://www.behance.net/gallery/117589433/Poster-promotionnel-dune-police-typographique" target="_blank">
                            <img class="cadre_projets" src="images/realisation/test/affiche-typographique.jpg" alt="Affiche typographique d'une police" title="Affiche typographique" />
                            <div class="infosProjets">
                                <div class="degrade_projets"></div>
                                <h3>Poster promotionnel d'une police typographique</h3>
                            </div>
                        </a>
                </ul>
            </div>
        </section>

    </main>

    <!-- onglets contact en bas de page-->
    <footer>
        <p>© Copyright Site web de Elise BOUARD - 2021 - Tous droits réservés. - Mentions Légales</p>
    </footer>
</body>

</html>