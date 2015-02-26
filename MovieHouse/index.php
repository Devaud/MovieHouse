<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css" />
        <title> MovieHouse </title>
        <script src='./js/jquery-2.1.3.min.js'></script>
        <script src='./js/jscript.js'></script>
    </head>
    <body>
        <!-- CONTENU DE LA PAGE -->
        <section id="page">
            <section class="sec-sup">
                <nav class="nav-sup">
                    <ul>
                        <li>
                            <a href="./index.php?page=home">Home</a>
                        </li>
                        <li>
                            <a href="./index.php?page=films">Films</a>
                        </li>
                        <li>
                            <a href="./index.php?page=series">Séries</a>
                        </li>
                        <li>
                            <a href="./index.php?page=animes">Animes</a>
                        </li>
                        <li>
                            <a href="#" data-rel="popup-demande" data-width="700" class="poplight">Demande de films, séries, animes</a>
                        </li>
                    </ul>
                </nav>

            </section>

            <section class="contenu">
                <section class="box">
                    <section class="box-header">
                        <h2>Nouveaux films</h2>
                    </section>

                    <section class="box-body">

                        <article class="artic">
                            <section class="artic-affiche">
                                <img src="./ressources/bilbo-the-hobbit-affiche-film-1.jpg" alt="the hobbit" class="picture"/>
                            </section>
                            <section class="artic-contenu">
                                <ul>
                                    <li>Titre : The Hobbit</li>
                                    <li>Synopsis : Dans UN VOYAGE INATTENDU, Bilbon Sacquet cherche à reprendre le Royaume perdu des Nains d'Erebor, conquis par le redoutable dragon Smaug. ...</li>
                                </ul>
                                <a href="#">Lire plus</a>
                            </section>
                        </article>

                        <article class="artic">
                            <section class="artic-affiche">
                                <img src="./ressources/bilbo-the-hobbit-affiche-film-1.jpg" alt="the hobbit" class="picture"/>
                            </section>
                            <section class="artic-contenu">
                                <ul>
                                    <li>Titre : The Hobbit</li>
                                    <li>Synopsis : Dans UN VOYAGE INATTENDU, Bilbon Sacquet cherche à reprendre le Royaume perdu des Nains d'Erebor, conquis par le redoutable dragon Smaug. ...</li>
                                </ul>
                                <a href="#">Lire plus</a>
                            </section>
                        </article>

                        <article class="artic">
                            <section class="artic-affiche">
                                <img src="./ressources/bilbo-the-hobbit-affiche-film-1.jpg" alt="the hobbit" class="picture"/>
                            </section>
                            <section class="artic-contenu">
                                <ul>
                                    <li>Titre : The Hobbit</li>
                                    <li>Synopsis : Dans UN VOYAGE INATTENDU, Bilbon Sacquet cherche à reprendre le Royaume perdu des Nains d'Erebor, conquis par le redoutable dragon Smaug. ...</li>
                                </ul>
                                <a href="#">Lire plus</a>
                            </section>
                        </article>

                    </section>
                </section>

            </section>
        </section>
        <!-- FIN DU CONTENU DE LA PAGE -->

        <!-- POPUP -->
        <section id='popup-demande' class='popup-block'>
            <h2>Demande de films, séries, animes</h2>
            <form method="post" action="" class='sForm'>
                <section class='sForm-sec'>
                    <label>Nom :</label>
                    <input type="text" name="nom" placeholder="The hobbit" />
                </section>

                <section class="sForm-sec">
                    <label>Type :</label>
                    <select class="type">
                        <option>Films</option>
                        <option>Séries</option>
                        <option>Animes</option>
                    </select>
                </section>
                
                <section class="sForm-sec films series">
                    <label>Qualité :</label>
                    <select>
                        <option>TS cam</option>
                        <option>HD 720p</option>
                        <option>HD 1080p</option>
                    </select>
                </section>
                
                <section class="sForm-sec films series">
                    <label>Langue :</label>
                    <select>
                        <option>VOSTFR</option>
                        <option>VO</option>
                        <option>VFF</option>
                        <option>VFQ</option>
                        <option>VVF</option>
                    </select>
                </section>

                <section class='sForm-sec'>
                    <label>Description :</label>
                    <textarea rows="4" placeholder="Qu'est-ce ? Plus détailé !"></textarea>
                </section>
            </form>
        </section>
        <!-- FIN DE LA POPUP -->
    </body>
</html>
