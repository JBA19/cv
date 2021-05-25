<?= $this->extend("app") ?>
<?= $this->section("body") ?>
<head>
  <meta name="description" content="A propos - AUBER Jean-Baptiste, développeur full-stack. Vous trouverez sur cette page l'intégralité de mon parcours, des formations aux expériences professionnelles.">
  <title>A propos - Portefolio JB AUBER</title>
</head>

<main id="main" class="container-fluid">
  <h1>A propos de moi !</h1>
  <div id="timeline-carousel" class=" carousel slide" data-bs-ride="carousel" data-bs-interval="false">
    <div class="carousel-indicators">
      <span type="button" data-bs-target="#timeline-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1986</span>
      <span type="button" data-bs-target="#timeline-carousel" data-bs-slide-to="1" aria-label="Slide 2">2004</span>
      <span type="button" data-bs-target="#timeline-carousel" data-bs-slide-to="2" aria-label="Slide 3">2009</span>
      <span type="button" data-bs-target="#timeline-carousel" data-bs-slide-to="3" aria-label="Slide 4">2010</span>
      <span type="button" data-bs-target="#timeline-carousel" data-bs-slide-to="4" aria-label="Slide 5">2010-2012</span>
      <span type="button" data-bs-target="#timeline-carousel" data-bs-slide-to="5" aria-label="Slide 6">2012-2014</span>
      <span type="button" data-bs-target="#timeline-carousel" data-bs-slide-to="6" aria-label="Slide 7">2016-2018</span>
      <span type="button" data-bs-target="#timeline-carousel" data-bs-slide-to="7" aria-label="Slide 8">2018-2021</span>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url(); ?>/img/1986.jpg" class="d-block w-100" alt="naissance">
        <div class="carousel-caption d-none d-md-block text-end animate__animated animate__backInRight">
          <h2>Venue au monde !</h2>
          <p>Tout le mérite revient à ma mère,</p>
          <p>mais cela reste quand même le point de départ !</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url(); ?>/img/2004.jpeg" class="d-block w-100" alt="baccalauréat">
        <div class="carousel-caption d-none d-md-block text-end animate__animated animate__backInRight">
          <h2>Baccalauréat Littéraire</h2>
          <p>Options Mathématiques et LV3 Arabe, Lycée Saint Martin d'Angers.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url(); ?>/img/2009.jpg" class="d-block w-100" alt="...Master droit international">
        <div class="carousel-caption d-none d-md-block text-end animate__animated animate__backInRight">
          <h2>Master Droit International public</h2>
          <p>Université de droit et de sciences politiques d'Angers.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url(); ?>/img/2010.jpg" class="d-block w-100" alt="Stage ONG">
        <div class="carousel-caption d-none d-md-block text-end animate__animated animate__backInRight">
          <h2>Stage auprès du CETIM</h2>
          <p>Membre de la délégation représentative de l'ONG</p>
          <p>lors de la sesssion du Conseil des Droits de l'Homme de l'ONU, Genève.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url(); ?>/img/2012.jpg" class="d-block w-100" alt="Secrétaire juridique Avoué">
        <div class="carousel-caption d-none d-md-block text-end animate__animated animate__backInRight">
          <h2>Secrétaire juridique</h2>
          <p>SCP J-J BAZILLE, Avoué près de la Cour d'Appel de Rennes</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url(); ?>/img/2014.jpg" class="d-block w-100" alt="Master droit public">
        <div class="carousel-caption d-none d-md-block text-end animate__animated animate__backInRight">
          <h2>Master Droit public</h2>
          <p>Université de droit et de sciences politiques de Rennes.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url(); ?>/img/2016.jpg" class="d-block w-100" alt="Clerc d'huissier">
        <div class="carousel-caption d-none d-md-block text-end animate__animated animate__backInRight">
          <h2>Clerc d'Huissier</h2>
          <p>SCP SCHMITT-SOUIL, Huissiers de Justice en Corrèze.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url(); ?>/img/2021.png" class="d-block w-100" alt="Développeur web">
        <div class="carousel-caption d-none d-md-block text-end animate__animated animate__backInRight">
          <h2>Titre professionnel développeur web</h2>
          <p>Formation auprès de la Corrèze Digital School, Tulle.</p>
        </div>
      </div>
    </div>
  </div>
</main>
<?= $this->endsection("body") ?>
