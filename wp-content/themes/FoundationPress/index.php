<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

<section id="slideshow">
<img src="wp-content/themes/FoundationPress/assets/images/img/slider1.png" alt="Illustration une" width="100%"/>
</section>

<section class="programme">
  <div class="row small-12 columns">
    <h2>PROGRAMME</h2>
    <p class="p-after">PROGRAMME</p>
  </div>
    <div class="row">
    <div class="small-12 medium-6 large-2 columns prog-contour prog1">
      <h3>3 MAI</h3>
      <p>CIE OUÏE/DIRE</p>
      <p class="p-second-child">Vous disiez phonographie ?</p>
      <a href="#"><button type="button" name="button"><img src="wp-content/themes/FoundationPress/assets/images/img/localisation.png" alt="Localisation" />Médiathèque</button></a>
    </div>

    <div class="small-12 medium-6 large-2 columns prog-contour">
      <h3>5 MAI</h3>
      <p>CIE OUÏE/DIRE</p>
      <p class="p-second-child">Vous disiez phonographie ?</p>
      <a href="#"><button type="button" name="button"><img src="wp-content/themes/FoundationPress/assets/images/img/localisation.png" alt="Localisation" />Saint-Leon</button></a>
    </div>

    <div class="small-12 medium-6 large-2 columns prog-contour">
      <h3>6 MAI</h3>
      <p>CIE OUÏE/DIRE</p>
      <p class="p-second-child">Vous disiez phonographie ?</p>
      <a href="#"><button type="button" name="button"><img src="wp-content/themes/FoundationPress/assets/images/img/localisation.png" alt="Localisation" />CCAM</button></a>
    </div>

    <div class="small-12 medium-6 large-2 columns prog-contour">
      <h3>9 MAI</h3>
      <p>CIE OUÏE/DIRE</p>
      <p class="p-second-child">Vous disiez phonographie ?</p>
      <a href="#"><button type="button" name="button"><img src="wp-content/themes/FoundationPress/assets/images/img/localisation.png" alt="Localisation" />Médiathèque</button></a>
    </div>
    </div>

<section class="informations">
  <div class="row small-12 columns">
    <h2>INFORMATIONS</h2>
    <p class="p-after">INFORMATIONS</p>
  </div>

  <div class="row" id="informations">
    <p class="small-8 small-offset-1 columns">« Musique Action participe à la stimulation des sensibilités, au-delà de la production industrielle, qui ne saurait présenter tous les aspects de la création. Panorama des propositions musicales d'aujourd'hui, éventail de pistes pour un futur sans cesse plus proche, Musique Action, par sa conception même et la souplesse de son organisation affirme une différence non gratuite au service d'une passion à réactiver ; celle pour les musiques, donc pour la musique... »
    L'aventure proposée cette année aura pour guide Dominique Répécaud, directeur de la Scène nationale de Vandœuvre. Il avait invité à l'occasion de cette trente troisième édition une centaine d'interprètes qui nous entraîneront sur les pistes des musiques qui accompagnaient depuis plus de trente ans cette personnalité exceptionnelle. </p>
    <img class="small-2 columns" src="wp-content/themes/FoundationPress/assets/images/img/illustration.png" alt="Illustration" />
  </div>
</section>

<section class="lelabel">
  <div class="row small-12 columns">
    <h2>LE LABEL</h2>
    <p class="p-after">LE LABEL</p>
  </div>

  <div class="row small-12 small-centered columns" id="label">
    <p>Vand'Œuvre est le label discographique du CCAM (Centre Culturel André Malraux) de Vandœuvre-lès-Nancy.<br />
      Le projet musical de Vand'Œuvre est de mettre en mémoire les événements musicaux produits par le CCAM et notamment ceux du festival Musique Action.<br />
      Le premier disque du label sort en 1985. En 2008 sort Défrichage sonore, un livre d'entretien autour du festival Musique Action par Henri Jules Julien aux éditons Le Mot et le Reste.</p>
  </div>
</section>

<section class="billeterie">
  <div class="row small-12 columns">
    <h2>BILLETERIE</h2>
    <p class="p-after">BILLETERIE</p>
  </div>

  <div class="row">
    <div class=" small-12 large-5 columns colonne-gauche">
      <h3>PASS</h3>
      <section class="pass1">
        <b>PASS WEEK-END</b>: 60€
        <p>Individuel et valable pour tous les concerts du mer 24 au dim 28 mai.</p>
      </section>
      <section class="pass2">
        <b>PASS 6</b>: 54€
        <p>Individuel et valable pour 6 concerts au choix sur l’ensemble du festival</p>
      </section>
      <section class="pass3">
        <b>PASS 6 réduit</b>: 39€
        <p>Individuel et valable pour 6 concerts au choix sur l’ensemble du festival proposé aux adhérents de l’AUCCAM, associations et MJC de Vandœuvre, +60 ans, familles nombreuses, demandeurs d’emploi, étudiants non salariés, adhérents MGEL et MGEN, étudiants venant à deux, C.E. partenaires du CCAM, groupes à partir de 5 personnes.</p>
      </section>
      <section class="pass4">
        <b>PASS AUCCAM</b>: 24€
        <p>Individuel et valable pour 6 concerts au choix sur l’ensemble du festival proposé aux adhérents de l’AUCCAM, associations et MJC de Vandœuvre, +60 ans, familles nombreuses, demandeurs d’emploi, étudiants non salariés, adhérents MGEL et MGEN, étudiants venant à deux, C.E. partenaires du CCAM, groupes à partir de 5 personnes.</p>
      </section>
    </div>
    <div class="small-12 large-5 columns colonne-droite">
      <h3>INDIVIDUELLE</h3>

      <section class="indiv1">
        <b>TARIF A</b>: 17€ <br />
      </section>

      <section class="indiv2">
        <b>TARIF B</b>: 11€
        <p>proposé aux abonnés du Théâtre de la Manufacture (Nancy), Nest (Thionville), Caméo (Nancy et Metz), Théâtre de Bussang, La Méridienne (Lunéville), Trait d’Union (Neufchateau), TGP (Frouard, CCN-Ballet de Lorraine, Théâtre du Saulcy (Metz), Arsenal (Metz), ACB (Bar-le-Duc).</p>
      </section>

      <section class="indiv3">
        <b>TARIF C</b>: 7€
        <p>proposé aux adhérents de l’AUCCAM, associations et MJC de Vandœuvre, séniors, familles nombreuses, adhérents MGEN demandeurs d’emploi, C.E. partenaires du CCAM, groupes à partir de 5 personnes, adhérents Autre Canal (Nancy).</p>
      </section>

      <section class="indiv4">
        <b>TARIF D</b>: 4€
        <p>proposé aux bénéficiares des minima sociaux, -18 ans, adhérents MGEL, étudiants non salariés.</p>
      </section>

      <section class="indiv5">
        <b>TARIF studio de danse / théâtre</b>: 6/4€
        <p>* proposé aux adhérents de l’AUCCAM, associations et MJC de Vandœuvre, +60 ans, familles nombreuses, demandeurs d’emploi, étudiants non salariés, C.E. partenaires du CCAM, groupes à partir de 5 personnes, bénéficiaires des minima sociaux, -18 ans, adhérents MGEL et MGEN.</p>
      </section>

      <section class="indiv6">
        <b>TARIF TGP Frouard</b>: 11€
      </section>
      </div>
    </div>
  </div>

</section>

<section class="row">
  <div class="row small-12 columns">
    <h2>CONTACT</h2>
    <p class="p-after">CONTACT</p>
  </div>

  <form id="formulaire" action="index.php" method="post">
  <div class="small-12 large-6 columns">
      <label for="nom">Nom</label>
      <input type="text" id="nom" />
  </div>
  <div class="small-12 large-6 columns">
      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" />
  </div>
  <div class="small-12 large-6 columns">
      <label for="telephone">Téléphone</label>
      <input type="email" id="telephone" />
  </div>
  <div class="small-12 columns">
      <label for="message">Message</label>
      <textarea id="message"></textarea>
  </div>
</form>
</section>

<footer>
  <div class="row">
    <img class="first-img" src="wp-content/themes/FoundationPress/assets/images/img/local-footer.png" alt="Localisation" />
    <p class="first-p">CCAM - Rue de Parme 54500 Vandoeuvre-lès-Nancy</p>
    <img class="first-img" src="wp-content/themes/FoundationPress/assets/images/img/tel.png" alt="Téléphone" />
    <p class="first-p">03.89.56.15.00</p>
    <img src="wp-content/themes/FoundationPress/assets/images/img/twitter.png" alt="Twitter" />
    <img src="wp-content/themes/FoundationPress/assets/images/img/facebook.png" alt="Facebook" />
    <img class="first-p" src="wp-content/themes/FoundationPress/assets/images/img/instagram.png" alt="Instagram" />
    <p>Copyright: Musique Action - 2017</p>
  </div>
</footer>

<?php get_footer();
