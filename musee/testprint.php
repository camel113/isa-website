<!DOCTYPE html>
<html lang="fr">
    <head>
        <script src="js/jquery-1.4.2.min.js"></script>
        <script src="js/tooltip.js"></script>
        <script src="js/js.js"></script>
        <meta name="robots" content="noindex">
        <link rel="stylesheet" href="css/csspr.css" />
        <title>SCULPTURE 1500 // Musée d'art et d'histoire Fribourg</title>
        <meta charset="UTF-8">

    </head>
    <body>
        <div id="global">
            <div id="phrase">
                <p class="txt" id="commandi">[Entrez votre nom ici]</p><p class="txt">&nbsp;commande le retable de&nbsp;</p>
                <p class="txt" id="maitre2">
                    <select name="fonction">
                        <OPTION VALUE=""></OPTION>
                        <OPTION VALUE="sainte Vierge">sainte Vierge</OPTION>
                        <OPTION VALUE="saint Michel">saint Michel</OPTION>
                        <OPTION VALUE="saint Georges">saint Georges</OPTION>
                        <OPTION VALUE="sainte Marie-Madeleine">sainte Marie-Madeleine</OPTION>
                        <OPTION VALUE="saint Léonard">saint Léonard</OPTION>
                        <OPTION VALUE="saint Wendelin">saint Wendelin</OPTION>
                        <OPTION VALUE="saint Eloi">saint Eloi</OPTION>
                        <OPTION VALUE="saint Ulrich">saint Ulrich</OPTION>
                    </select>
                </p>
                <p class="txt">&nbsp;du maître&nbsp;</p>
                <p class="txt" id="maitre">
                    <select name="fonction">
                        <OPTION VALUE=""></OPTION>
                        <OPTION VALUE="aux gros nez">aux gros nez</OPTION>
                        <OPTION VALUE="Hans Geiler">Hans Geiler</OPTION>
                        <OPTION VALUE="Hans Gieng">Hans Gieng</OPTION>
                        <OPTION VALUE="Hans Roditzer">Hans Roditzer</OPTION>
                        <OPTION VALUE="Martin Gramp">Martin Gramp</OPTION>
                    </select>
                    <!--                </p> onclick="window.open(this.href); return false;"-->
                </p>
                <p class="txt" id="print"><a href="javascript:window.print()">Imprimer</a></p>
            </div>
            <div id="appli">
                <canvas id="canvas" width="600" height="450">Vous ne pouvez pas profitez de l'appli avec votre explorateur internet</canvas>
                <div id="choix">
                    <a class="button" id="volets" href="#">Choisissez une paire de volets</a>
                    <div class="liste" id="listevolets">
                        <img src="images/miniatures/GS1-8-Furno.gif" alt="images/calques/volets/GS1-8-Furno.png" title="furno"/>
                        <img src="images/miniatures/GS3-6-Estavayer-Blonay.gif" alt="images/calques/volets/GS3-6-Estavayer-Blonay.png" title="estavayer"/>
                        <img src="images/miniatures/cugy.gif" alt="images/calques/volets/cugy.png" title="cugy"/>
                        <img src="images/miniatures/MAHF2006.gif" alt="images/calques/volets/4eme.png" title="mahf"/>
                    </div>
                    <a id="couleurs" href="#" class="button">Choisissez la couleur de fond</a>
                    <div class="liste" id="listecouleur">
                        <div class="color aucun" alt="aucun" id="aucun"></div>
                        <div class="color" Style="background-image: url('images/couleurs/tapvert.png');" id="tapvert"></div>
                        <div class="color" Style="background-image: url('images/couleurs/taprosa.png');" id="taprosa"></div>
                        <div class="color" Style="background-image: url('images/couleurs/taporange.png');" id="taporange"></div>
                    </div>
                    <a id="sculptures" class="button" href="#">Choisissez 1 à 3 sculptures</a><br/>
                    <div id="boxsculpt">
                        <div id="position">
                            <a class="buttonshsel" id="1" href="#">I</a>
                            <a class="buttonsh" id="2" href="#">II</a>
                            <a class="buttonsh" id="3" href="#">III</a>
                        </div>
                        <p class="annee">Version 1500</p>
                        <div class="liste listesculpt">
                            <div>
                                <img src="images/miniatures/F1-8-sainte-Vierge.gif" alt="F1-8-sainte-Vierge.png" class="scul preview first"/>
                                <img src="images/miniatures/F1-9-saint-Georges.gif" alt="F1-9-saint-Georges.png" class="scul preview"/>
                                <img src="images/miniatures/F1-10-saint-Michel.gif" alt="F1-10-saint-Michel.png" class="scul preview"/>

                                <img src="images/miniatures/F1-11-sainte-Marie-Madeleine.gif" alt="F1-11-sainte-Marie-Madeleine.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-2-saint-diacre.gif" alt="GS1-2-saint-diacre.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-6-saint-Léonard.gif" alt="GS1-6-saint-Léonard.png" class="scul preview"/>

                                <img src="images/miniatures/GS1-6-saint-Wendelin.gif" alt="GS1-6-saint-Wendelin.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-7sainte-Vierge.gif" alt="GS1-7sainte-Vierge.png" class="scul preview"/>
                                <img src="images/miniatures/GS4-10-saint-Eloi.gif" alt="GS4-10-saint-Eloi.png" class="scul preview"/>

                                <img src="images/miniatures/GS4-14-saint-Ulrich.gif" alt="GS4-14-saint-Ulrich.png" class="scul preview last"/>
                            </div>
                        </div>
                        <p class="annee">Version 21ème</p>
                        <div class="liste listesculpt" id="listesculpt2">
                            <div id="liste1">
                                <img src="images/miniatures/diacresol.png" alt="diacresol.png" class="scul preview first"/>
                                <img src="images/miniatures/GS1-6-saint-Léonard3.png" alt="GS1-6-saint-Léonard3.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-6-saint-Wendelin3.png" alt="GS1-6-saint-Wendelin3.png" class="scul preview"/>

                                <img src="images/miniatures/GS1-7sainte-Vierge2.png" alt="GS1-7sainte-Vierge2.png" class="scul preview"/>
                                <img src="images/miniatures/GS4-10-saint-Eloi1.png" alt="GS4-10-saint-Eloi1.png" class="scul preview"/>
                                <img src="images/miniatures/GS4-10-saint-Eloi6.png" alt="GS4-10-saint-Eloi6.png" class="scul preview"/>

                                <img src="images/miniatures/Marie-Madeleineverte.png" alt="Marie-Madeleineverte.png" class="scul preview"/>
                                <img src="images/miniatures/Viergenoire.png" alt="Viergenoire.png" class="scul preview"/>
                                <img src="images/miniatures/Georgesrouille.png" alt="Georgesrouille.png" class="scul preview"/>

                                <img src="images/br_next.png" alt="br_next.png" class="last fleche" title="suivant"/>
                            </div>
                            <div id="liste2">
                                <img src="images/prew.png" alt="prew" class="first fleche" title="precedant"/>
                                <img src="images/miniatures/GS1-6-saint-Léonard4.png" alt="GS1-6-saint-Léonard4.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-6-saint-Wendelin4.png" alt="GS1-6-saint-Wendelin4.png" class="scul preview"/>

                                <img src="images/miniatures/GS1-7sainte-Vierge3.png" alt="GS1-7sainte-Vierge3.png" class="scul preview"/>
                                <img src="images/miniatures/GS4-10-saint-Eloi2.png" alt="GS4-10-saint-Eloi2.png" class="scul preview"/>
                                <img src="images/miniatures/GS4-14-saint-Ulrich1.png" alt="GS4-14-saint-Ulrich1.png" class="scul preview"/>

                                <img src="images/miniatures/Michelbleu.png" alt="Michelbleu.png" class="scul preview"/>
                                <img src="images/miniatures/Viergerose.png" alt="Viergerose.png" class="scul preview"/>
                                <img src="images/miniatures/Georgesviolet.png" alt="Georgesviolet.png" class="scul preview"/>

                                <img src="images/br_next.png" alt="br_next.png" class="last fleche" title="suivant"/>
                            </div>
                            <div id="liste3">
                                <img src="images/prew.png" alt="prew" class="first fleche"/>
                                <img src="images/miniatures/GS1-6-saint-Léonard5.png" alt="GS1-6-saint-Léonard5.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-6-saint-Wendelin5.png" alt="GS1-6-saint-Wendelin5.png" class="scul preview"/>

                                <img src="images/miniatures/GS1-7sainte-Vierge4.png" alt="GS1-7sainte-Vierge4.png" class="scul preview"/>
                                <img src="images/miniatures/GS4-10-saint-Eloi3.png" alt="GS4-10-saint-Eloi3.png" class="scul preview"/>
                                <img src="images/miniatures/Marie-Madeleinebleue.png" alt="Marie-Madeleinebleue.png" class="scul preview"/>

                                <img src="images/miniatures/Michelnoir.png" alt="Michelnoir.png" class="scul preview"/>
                                <img src="images/miniatures/Viergerouge.png" alt="Viergerouge.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-6-saint-Léonard1.png" alt="GS1-6-saint-Léonard1.png" class="scul preview"/>

                                <img src="images/br_next.png" alt="br_next.png" class="last fleche"/>
                            </div>
                            <div id="liste4">
                                <img src="images/prew.png" alt="prew" class="first fleche"/>
                                <img src="images/miniatures/GS1-6-saint-Wendelin1.png" alt="GS1-6-saint-Wendelin1.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-6-saint-Wendelin6.png" alt="GS1-6-saint-Wendelin6.png" class="scul preview"/>

                                <img src="images/miniatures/GS1-7sainte-Vierge5.png" alt="GS1-7sainte-Vierge5.png" class="scul preview"/>
                                <img src="images/miniatures/GS4-10-saint-Eloi4.png" alt="GS4-10-saint-Eloi4.png" class="scul preview"/>
                                <img src="images/miniatures/Marie-Madeleinejaune.png" alt="Marie-Madeleinejaune.png" class="scul preview"/>

                                <img src="images/miniatures/Michelrose.png" alt="Michelrose.png" class="scul preview"/>
                                <img src="images/miniatures/Viergeverte.png" alt="Viergeverte.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-6-saint-Léonard2.png" alt="GS1-6-saint-Léonard2.png" class="scul preview"/>

                                <img src="images/br_next.png" alt="br_next.png" class="last fleche"/>
                            </div>
                            <div id="liste5">
                                <img src="images/prew.png" alt="prew" class="first fleche"/>
                                <img src="images/miniatures/GS1-6-saint-Wendelin2.png" alt="GS1-6-saint-Wendelin2.png" class="scul preview"/>
                                <img src="images/miniatures/GS1-7sainte-Vierge1.png" alt="GS1-7sainte-Vierge1.png" class="scul preview"/>

                                <img src="images/miniatures/GS1-7sainte-Vierge6.png" alt="GS1-7sainte-Vierge6.png" class="scul preview"/>
                                <img src="images/miniatures/GS4-10-saint-Eloi5.png" alt="GS4-10-saint-Eloi5.png" class="scul preview"/>
                                <img src="images/miniatures/Marie-Madeleinerouge.png" alt="Marie-Madeleinerouge.png" class="scul preview"/>

                                <img src="images/miniatures/Viergebleue.png" alt="Viergebleue.png" class="scul preview"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
