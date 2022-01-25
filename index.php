<?php include_once ('layout/header.php'); ?>
  <main class="container">
    <div id="welcome" class="transition">
      <h2>Bienvenue à Saint-Rivoal</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, reiciendis! Facere adipisci
        consequuntur quisquam laborum sapiente mollitia aliquam eum. Nostrum, veritatis. Obcaecati illo, autem earum,
        nihil, libero animi fugit aperiam qui quas assumenda harum repellendus tempore. Expedita laboriosam suscipit
        saepe. Ad eius quam repellendus nesciunt eveniet, laborum distinctio voluptatem alias.</p>
    </div>
    <section id="index_actu" class="transition">
      <h3>Les dernières actualités</h3>

      <?php if (isset($actualites)) {
        for ($i = 0; $i < 3; $i++) { 
        ?>
      <article class="index_content">
        <figure class="imgsize"><img src=<?= $actualites[$i]->getImg(); ?> alt=<?= $actualites[$i]->getTitle(); ?> ></figure>
        <div class="index_content_text">
          <h4><?= $actualites[$i]->getTitle(); ?><span><?= $actualites[$i]->getDate(); ?></span></h4>
          <p><?= $actualites[$i]->getAccroche(); ?></p>
          <a href="actus.php?id=<?= $i; ?>">Lire la suite<i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </article>
      <?php 
          };
        }; 
      ?>

      <div class="index_further">
        <a href="news.php">Toute l'actualité<i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </section>
    <section id="index_agenda">
      <h3>Prochainement</h3>

      <?php if (isset($evenements)) {
        for ($i = 0; $i < 3; $i++) { 
        ?>
      <article class="index_content">
        <figure class="imgsize"><img src=<?= $evenements[$i]->getImg(); ?> alt=<?= $evenements[$i]->getTitle(); ?> ></figure>
        <div class="index_content_text">
          <h4><?= $evenements[$i]->getTitle(); ?><span><?= $evenements[$i]->getDate(); ?></span></h4>
          <p><?= $evenements[$i]->getAccroche(); ?></p>
          <a href="#">Lire la suite<i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </article>
      <?php 
          };
        }; 
      ?>

      <div class="index_further">
        <a href="#">Tous les évènements<i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </section>
  </main>
<?php include_once ('layout/footer.php'); ?>