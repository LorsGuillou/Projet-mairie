<?php include('layout/header.php'); ?>
    <main class="container">
        <div id="news_title" class="transition">
            <h2>L'actualité à Saint-Rivoal</h2>
        </div>
        <section id="news">
            <header id="categories" class="transition">
                <nav id="menucategories">
                    <ul>
                        <li><a href="#" id="news_all" class="active_page_actu">Tout</a></li>
                        <li><a href="#" id="news_mayor">Mairie</a></li>
                        <li><a href="#" id="news_school">Ecole</a></li>
                        <li><a href="#" id="news_assocs">Associations</a></li>
                        <li><a href="#" id="news_culture">Culture</a></li>
                        <li><a href="#" id="news_arree">Monts d'Arrée</a></li>
                    </ul>
                </nav>
            </header>
            <?php if(isset($actualites)) {
                foreach($actualites as $actualite) {
            ?>
            <actualite class="news_content">
                <figure class="imgsize"><img src=<?= $actualite->getImg() ?> alt=<?= $actualite->getTitle() ?> ></figure>
                <div class="news_text">
                    <h3><?= $actualite->getTitle() ?><span><?= $actualite->getDate() ?></span></h3>                   
                    <p><?= $actualite->getAccroche() ?></p>
                    <a href="actus.php?id=<?= array_search($actualite, $actualites) ?>">Lire la suite<i class="fas fa-long-arrow-alt-right"></i></a> 
                </div>
            </actualite>
            <?php
                };
            };
            ?>
            <footer id="pages">
                <a href="#" class="active_page">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </footer>
        </section>
    </main>
<?php include('layout/footer.php'); ?>