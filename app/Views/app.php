<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CV AUBER Jean-Baptiste, développeur full-stack">
        <title>Portfolio AUBER Jean-Baptiste</title>
        <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>/favicon.ico" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/general.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/animations.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>

    <body>
        <header id="header">
            <nav class="navbar navbar-expand-md flex-nowrap">
                <div class="container-fluid col">
                    <div class="col-md-4 col-8">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="icons/logo.png" alt="logo"></a>
                    </div>
                    <div class="col-md-6 col-4">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-baseline">
                                <li class="menu-anim nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>/home" >
                                    <i class="fas fa-home menu-anim-dynamic"></i>
                                    <span class="menu-anim-static"><p>Home</p></span>
                                </a>
                                </li>
                                
                                <li class="menu-anim nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>/about">
                                    <i class="far fa-id-card menu-anim-dynamic"></i>
                                    <span class="menu-anim-static"><p>About me</p></span>
                                </a>
                                </li>
                    
                                <li class="menu-anim nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>/skills">
                                    <i class="fas fa-cog menu-anim-dynamic"></i>
                                    <span class="menu-anim-static"><p>skills</p></span>
                                </a>
                                </li>
                    
                                <li class="menu-anim nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>/work">
                                    <i class="far fa-eye menu-anim-dynamic"></i>
                                    <span class="menu-anim-static"><p>My work</p></span>
                                </a>
                                </li>
                    
                                <li class="menu-anim nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>/contact">
                                    <i class="far fa-envelope menu-anim-dynamic"></i>
                                    <span class="menu-anim-static"><p>Contact</p></span>
                                </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.linkedin.com/in/jean-baptiste-auber-852353197" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </nav>
        </header>
<!-- ON INSERE ICI LE CONTENU SPECIFIQUE DE CHAQUE PAGE -->
        <?= $this->renderSection("body") ?>

        <!-- <div id="scroll_to_top">
			<img src="<?php echo base_url(); ?>/images/scrolltop.png" alt="Retourner en haut">
		</div> -->
		
        <footer class="col-md-12">
          <div class="col col-xs-12">
            <p>2020</p>
          </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ad6fd6db77.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>/js/timeline.js"></script>
    </body>

</html>