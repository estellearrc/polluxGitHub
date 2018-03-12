<?php
require_once "includes/functions.php";
session_start();
?>

<!doctype html>
<html>
    <?php require_once "includes/head.php";?> 
    <body>
        <?php require_once "includes/header.php";?>
        <div class="jumbotron banner"></div>
        <div id="nav">
            <div class="navbar navbar-inverse navbar-static-top" style = "background-color : #0A064D;">
                <div class="container">
                     <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <ul class="nav navbar-nav" style ="font-size : 100%">
                        <li><a href="#Qu'est-ce que c'est ?">Qu'est-ce que c'est ?</a></li>
                        <li><a href="#Qu'apportons-nous ?">Qu'apportons-nous ?</a></li>
                        <li><a href="#Comment ça marche ?">Comment ça marche ?</a></li>
                     </ul>
                </div>
            </div>
        </div>
            <div id="Qu'est-ce que c'est ?" class = " col-lg-offset-3 col-lg-6">
                <div class = "well clearfix">
                    <img src="images/accueil2.jpg" alt ="image" class="pull-right gap-left"/>
                    <p id="text" > 
                        <h3>Qu'est-ce que c'est ?</h3>
                        <p>
                            Bonjour je m’appelle Jean-Michel mais mes amis m’appellent Mich <br/>
                            c’est plus joli et je ramasse toutes les filles (ça rime). </p>
                            Je précise que ce que je note ne sera pas sur le site.<br/>
                            Notre site vous offrira des tests UX à diffuser à qui vous plaira puis <br/>
                            vous fournira les analyses.  
                        </p> 
                    </p>
                </div>
            </div>
            <div id="Qu'apportons-nous ?" class = "col-lg-offset-3 col-lg-6">
                <div class = "well clearfix">
                    <img src="images/accueil3.jpg" alt ="image" class="pull-right gap-left"/>
                    <p id="text" > 
                        <h3>Qu'apportons-nous ?</h3>
                        <p>
                            Bonjour je m’appelle Jean-Michel mais mes amis m’appellent Mich <br/>
                            c’est plus joli et je ramasse toutes les filles (ça rime). </p>
                            Je précise que ce que je note ne sera pas sur le site.<br/>
                            Notre site vous offrira des tests UX à diffuser à qui vous plaira puis <br/>
                            vous fournira les analyses.  
                        </p> 
                    </p>
                </div>
            </div>
            <div id="Comment ça marche ?" class = " col-lg-offset-3 col-lg-6">
                <div class = "well clearfix">
                    <img src="images/accueil4.jpg" alt ="image" class="pull-right gap-left"/>
                    <p id="text" > 
                        <h3>Comment ça marche ?</h3>
                        <p>
                            Bonjour je m’appelle Jean-Michel mais mes amis m’appellent Mich <br/>
                            c’est plus joli et je ramasse toutes les filles (ça rime). </p>
                            Je précise que ce que je note ne sera pas sur le site.<br/>
                            Notre site vous offrira des tests UX à diffuser à qui vous plaira puis <br/>
                            vous fournira les analyses.  
                        </p> 
                    </p>
                </div>
            </div>
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/scripts.php"; ?>
    </body>
</html>
            

      