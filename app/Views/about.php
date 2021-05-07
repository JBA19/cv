<?= $this->extend("app") ?>
<?= $this->section("body") ?>
<!-- 
    <main id="main" class="row">
        <section>
            <h1>A propos de moi !</h1>
            <p>Grâce à une formation, je me suis connecté au monde du développement web depuis fin 2018.</p>
            <p>Initié aux technologies à la fois front et back end, j'ai également été présenté aux certifications des méthodes Agiles ainsi qu'aux bonnes pratiques OPQUAST.</p>
            <p>Je suis actuellement à la recherche d'un poste qui me permettra de parfaire les connaissances acquises et d'explorer toujours plus les technologies actuelles.</p>
            <p>Rigoureux et curieux, je suis globalement passionné de sciences, et plus particulièrement l'astro-physique. Sportif, je pratique le basket-ball depuis mon adolescence, sport que j'affectionne pour son aspect stratégique et la cohésion de groupe.</p>
        </section>
    </main>
</div> -->
<main id="main" class="container-fluid">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <span type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1986</span>
    <span type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">2004</span>
    <span type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">2018</span>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.cieletespace.fr/media/default/0001/17/ESA_Gaia_DR2_1400x700-5c75.jpeg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block animate__animated animate__backInRight">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.cieletespace.fr/media/default/0001/17/ESA_Gaia_DR2_1400x700-5c75.jpeg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block animate__animated animate__backInRight">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.cieletespace.fr/media/default/0001/17/ESA_Gaia_DR2_1400x700-5c75.jpeg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block animate__animated animate__backInRight">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <!-- <li class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="">Previous</span>
  </li>
  <li class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="">Next</span>
  </li> -->
</div>
</main>
<?= $this->endsection("body") ?>
