<?php

session_start();
ob_start();

/**
 * 
 * CONNECTION PRO>VISOIRE !!!
 * 
 */

$_SESSION['user']['id'] = 0;
$_SESSION['user']['firstName'] = "Morgane";
$_SESSION['user']['gender'] = "women";


?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon p'tit Trip</title>

    <!-- CSS -- BOOTSTRAP & ICONES -->
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/footer.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>

    <header>
        <nav>
            <img src="./file/img/MPT--logo.png" alt="">
            <div class="d-none d-md-block">A toi, voyageur aguéri !</div>
            <div class="d-flex align-items-center position-relative">
                <?php

                if (isset($_SESSION['user']['id'])) {
                ?>
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-between" id="connection">
                        <div class="d-none d-sm-block" id="firstName"><?= $_SESSION['user']['firstName'] ?></div>
                        <?php
                        switch ($_SESSION['user']['gender']) {
                            case 'men':
                                echo '<img src="./file/img/header/menProfil.png" alt="profil">';
                                break;

                            case 'women':
                                echo '<img src="./file/img/header/womenProfil.png" alt="profil">';
                                break;

                            default:
                                echo '<img src="./file/img/header/neutralProfil.png" alt="profil">';
                                break;
                        }
                        ?>
                    </div>
                <?php
                } else {
                ?>
                    <div id="connection">
                        Connexion
                    </div>
                <?php
                }

                ?>
                <div class="menuIcone open"><i class="bi bi-three-dots"></i></div>
                <div class="menuIcone close"><i class="bi bi-x-lg"></i></div>
            </div>
            <ul class="general">
                <li class="deployed">
                    <div>
                        <a class="w-100" href="">
                            Acceuil
                        </a>
                    </div>
                </li>
                <li class="underItemContainer">
                    <div class="d-flex justify-content-between">
                        <a href="">Discover</a>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <ul>
                        <a class="w-100" href="">
                            <li>Tous les voyages</li>
                        </a>
                        <a class="w-100" href="">
                            <li>Les certifiés</li>
                        </a>
                        <a class="w-100" href="">
                            <li>Les mieux notés</li>
                        </a>
                    </ul>
                </li>
                <li class="underItemContainer">
                    <div class="d-flex justify-content-between">
                        <a href="">Tips&Tricks</a>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <ul>
                        <a class="w-100" href="">
                            <li>Tous les articles</li>
                        </a>
                        <a class="w-100" href="">
                            <li>Les certifiés</li>
                        </a>
                        <a class="w-100" href="">
                            <li>Les mieux notés</li>
                        </a>
                    </ul>
                </li>
                <li class="underItemContainer">
                    <div class="d-flex justify-content-between">
                        <a href="">Dashboard</a>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                    <ul>
                        <a href="">
                            <li>Mon espace</li>
                        </a>
                        <a href="">
                            <li>Mes voyages</li>
                        </a>
                        <a href="">
                            <li>Mes articles</li>
                        </a>
                        <a href="">
                            <li>Ajouter du contenu</li>
                        </a>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="acountMenu">
            <nav>
                <ul>
                    <a href="">
                        <li>Modifier mes informations</li>
                    </a>
                    <a href="">
                        <li>Identification et sécurité</li>
                    </a>
                    <a href="">
                        <li>Visibilité de vos travaux</li>
                    </a>
                    <a href="">
                        <li>Déconnexion</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>