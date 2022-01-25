<?php 
    include('layout/header.php');
    $id = $_GET["id"];
?>
    <main class="container">
        <section class="article_full">
            <figure class="article_banner"><img src=<?= $actualites[$id]->getImg(); ?> alt=<?= $actualites[$id]->getTitle(); ?> ></figure>
            <div class="article_title transition">
                <h2><?= $actualites[$id]->getTitle(); ?></h2>
                <p class="article_date"><?= $actualites[$id]->getDate(); ?></p>
                <p><?= $actualites[$id]->getAccroche(); ?></p>
            </div>
            <div class="article_full_content">
                <p><?= $actualites[$id]->getContent(); ?></p>
            </div>
        </section>
    </main>
<?php include('layout/footer.php'); ?>