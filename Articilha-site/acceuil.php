<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/acceuil.css">
</head>

<body>
    <section>
        <div class="container">
            <div id="container-video">
                <!-- Video background -->
                <video id="newspapers-video" autoplay muted loop>
                    <source src="img/newspapers.mp4" type="video/mp4" />
                </video>
                <!-- ---------------- -->
            </div>
            <div id="video-blend-bg"></div>
            <!--//todo: La barre de navigation :  -->
            <!-- Logo -->
            <main id="header-main">
                <div id="logo">
                    <img src="img/A-letter-Logo-Design.png" alt="A-letter-Logo-Design" />
                    <p>Articilha</p>
                </div>
                <!-- La barre de navigation -->
                <nav id="navbar">
                    <ul>
                        <li>
                            <a href="">
                                <i class="fas fa-home middle-icons"></i>
                            </a>
                        </li>
                        <li><a href="">Acceuil</a></li>
                        <li><a href="">Categorie</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">S'inscrire</a></li>
                        <li><a href="#login">Se connecter</a></li>
                        <li><a href="">Recherche</a></li>
                    </ul>
                </nav>
                <!-- ==================================== -->
                <i class="fas fa-bars middle-icons" id="menu-icon" onclick="toggle('active-navbar','#navbar')"></i>
            </main>
            <!--* Barre de recherche -->
            <main id="main">
                <p id="main-text">
                    SUIVEZ EN TEMP REEL TOUTE L'ACTUALITE DES SCIENCES SUR ARTICILHA
                </p>
                <form id="form-cherche-bar">
                    <div id="cherche-bar">
                        <label for="cherche">
                            <i class="fas fa-search"></i>
                            <input type="text" name="cherche" id="cherche" placeholder="Cherche" />
                        </label>
                    </div>
                    <button type="submit">submit</button>
                </form>
            </main>
            <!--* ==================== -->
        </div>
    </section>
</body>

</html>