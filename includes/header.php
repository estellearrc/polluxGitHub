<?php require_once "functions.php"; ?>
    <div class = "header">
        <nav class="navbar navbar-inverse navbar-static-top" style = "background-color : #0A064D; height : 60px;">
            <div class="container" style = "font-family :'Verdana';">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand" style="font-size : 250%;">PollUX</a>
                </div>
                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <?php if (isExpConnected()) { ?>
                        <ul class="nav navbar-nav" style="font-size : 90%;">
                            <li ><a href="#">Mes expériences</a></li>
                            <li ><a href="#">Invitations</a></li>
                        </ul>
                    <?php } else { if (isUserConnected()) {?>
                        <ul class="nav navbar-nav" style="font-size : 90%;">
                            <li ><a href="#">Mes réponses</a></li>
                            <li ><a href="#">Expériences disponibles</a></li>
                        </ul>
                    <?php } } ?>
                    <ul class="nav navbar-nav navbar-right" style="font-size : 70%;">
                        <?php if (isConnected()) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> Bienvenue, <?= $_SESSION['login'] ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="logout.php">Se déconnecter</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class='glyphicon glyphicon-user'></span> Non connecté <b class='caret'></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href='login.php'>Se connecter</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            S'inscrire <b class='caret'></b> 
                                        </a>
                                        <ul>
                                            <li><a href="sign_up_user.php">Participant</a></li>
                                            <li><a href="sign_up_exp.php">Expérimentateur</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

