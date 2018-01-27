<?php require('data.php') ?>
<section id="comite">
  <h2>Comité d'organisation</h2>
  <p>L'association du Trail des Casemates est née d'un groupe de passionnés de course à pied. Leur envie première est de faire découvrir, par le biais d’un défi sportif, ses « terrains de jeu ». Ces derniers, riches en patrimoine et vestiges historiques, seront sans nul doute, instructifs à tous les amoureux de course nature. Représentés par une dizaine de membres dynamiques, les acteurs de cette manifestation se retrouvent au travers des valeurs : <mark> Courage, Rigueur, Abnégation, Fair-play, Respect </mark> et <mark> Convivialité. </mark></p>
  <img class="encadrement" src="images/autre/comite.png" alt="Photo des membres du comité" title="Membres du comité">
  <ul>
    <?php foreach ($menbresComite as $key): ?>
      <li><?=$key['title']?> : <mark><?=$key['name']?></mark></li>
    <?php endforeach; ?>
  </ul>
</section>
