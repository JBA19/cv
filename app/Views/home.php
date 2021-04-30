<?= $this->extend("app") ?>
<?= $this->section("body") ?>

    <main id="main" class="row h-80">
        <section>
            <h1>Jean-Baptiste AUBER</h1>
            <h2>Développeur web fullstack</h2>
            <h3>Front End / Back End / CMS</h3>
            <p>Actuellement en recherche d'emploi dans ce domaine, je cherche à parfaire ma formation à travers une première expérience significative.</p>
            <p>Je vous invite donc à découvrir <a href="<?php echo base_url(); ?>/about">qui je suis</a>, quelles sont mes <a href="<?php echo base_url(); ?>/skills">compétences</a>, ainsi que mes premières <a href="<?php echo base_url(); ?>/work">réalisations</a>.</p>
            <p>Si mon profil vous intéresse, un formulaire de <a href="<?php echo base_url(); ?>/contact">contact</a> est à votre disposition.</p>
            <p><em><strong>Bonne visite !</strong></em></p>
        </section>
    </main>

<?= $this->endsection("body") ?>