<?php require('data.php') ?>
<section id="sponsors">
  <h2>Nos Partenaires</h2>
  <div id="bigSponsors">
    <?php foreach ($bigSponsors as $key): ?>
      <a href="<?=$key['href']?>" target="_blank"><img src="images/logo/logo<?=$key['src']?>.png" title="Logo <?=$key['title']?>" alt="Logo <?=$key['title']?>"></a>
    <?php endforeach; ?>
  </div>

  <div id="littleSponsors">
    <?php foreach ($littleSponsors as $key): ?>
      <a href="<?=$key['href']?>" target="_blank"><img src="images/logo/logo<?=$key['src']?>.png" title="Logo <?=$key['title']?>" alt="Logo <?=$key['title']?>"></a>
    <?php endforeach; ?>
  </div>
</section>
