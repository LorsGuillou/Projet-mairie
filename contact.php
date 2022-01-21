<?php include('header.php'); ?>
    <main class="container">
        <div id="contact">
            <h2>Contactez-nous</h2>
            
            <form action="envoyerform.php" method="post" class="transition">
                <div id="contact_form">
                <p id="gender">
                    <input type="radio" name="civility" id="civility_mr" value="Mr">
                    <label for="civility_mr">Mr</label>
                    <input type="radio" name="civility" id="civility_mrs" value="Mme">
                    <label for="civility_mrs">Mme</label>
                </p>
                <p class="contact_typing">
                    <label for="nom">Votre nom<span class="red">*</span> : </label>
                    <input type="text" name="nom" id="nom" placeholder="Tapez votre nom">
                </p>
                <p class="contact_typing">
                    <label for="prenom">Votre prénom<span class="red">*</span> : </label>
                    <input type="text" name="prenom" id="prenom" placeholder="Tapez votre prénom">
                </p>
                <p class="contact_typing">
                    <label for="email">Votre adresse mail<span class="red">*</span> : </label>
                    <input type="email" name="email" id="email" placeholder="Tapez votre mail">
                </p>
                <p class="contact_typing">
                    <label for="telephone">Votre téléphone<span class="red">*</span> : </label>
                    <input type="tel" name="telephone" id="telephone" placeholder="06 01 02 03 04">
                </p>
                <p id="obligatory"><span class="red">*</span> Champs obligatoires</p>
                </div>
                <div id="contact_message">
                <p class="contact_object">
                    <span id="object">Objet : </span>
                    <span>
                        <input type="checkbox" name="objet" id="information" value="information">
                        <label for="information">Demande de renseignements</label>
                    </span>
                    <span>
                        <input type="checkbox" name="objet" id="issues" value="issues">
                        <label for="issues">Problème sur le site</label>
                    </span>
                    <span>
                        <input type="checkbox" name="objet" id="other" value="other">
                        <label for="other">Autre</label>
                    </span>
                </p>
                <label for="message">Votre message : </label><br>
                <textarea name="message" rows="5" id="message" placeholder="Posez-nous vos questions"></textarea>
                <p><input type="submit" value="Envoyer"><input type="reset" value="Annuler"></p>
                </div>
                <div id="rgpd">
                    <input type="checkbox" name="rgpd" id="rgpd_clause" value="rgpd_clause">
                    <label for="rgpd_clause">J'autorise ce site à conserver mes données personnelles transmises via ce formulaire. Aucune exploitation commerciale ne sera faite des données conservées. Voir notre <a href="#">politique de gestion des données personnelles</a>.</a></label>
                </div>
        </form>
        <div id="cityhall" class="transition">
            <h2>La mairie</h2>
            <div id="cityhall_info">
                <address class="cityhall_info_content">
                    <h3><i class="fas fa-map-marker-alt"></i>Adresse</h3>
                    Mairie de Saint-Rivoal<br>
                    Le Bourg<br>
                    29190 Saint-Rivoal<br>
                    Sur la place, à gauche de l'école
                </address>
                <div class="cityhall_info_content">
                    <h3><i class="fas fa-clock"></i>Horaires</h3>
                    <p>Lundi : de 10h à 12h, et de 14h à 17h</p>
                    <p>Mardi : de 14h à 17h</p>
                    <p>Jeudi : de 14h à 17h</p>
                    <p>Vendredi : de 10h à 12h, et de 14h à 17h</p>
                </div>
                <div class="cityhall_info_content">
                    <h3><i class="fas fa-phone"></i>Téléphone</h3>
                    <p>+33 2 98 98 98 98</p>
                </div>
                <!-- <div class="cityhall_info_content">
                    <h3><i class="fas fa-envelope"></i></i>E-mail</h3>
                    <p><a href="#">Contactez-nous par mail</a></p>
                </div> -->
            </div>
            <p id="covid_info">Du gel hydroalcoolique est à votre disposition. Le port du masque est conseillé.</p>
        </div>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2651.5913677267813!2d-3.9988525851785726!3d48.349159244380985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48114715d7784b71%3A0xfa573a16de6df9f7!2sMairie!5e0!3m2!1sfr!2sfr!4v1637830452834!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>
<?php include('footer.php'); ?>