<?php
require_once(__DIR__ . "/partials/head.php");
?>

<h1>Commencement d'un projet POO</h1>
<p>Pour commencer on créer tout d'abord les chemin</p>
<div class="img-container">
  <img src="/public/img/home.png" alt="">
</div>
<a href="/deuxieme-etape">Suivant</a>

<h2>Explication : </h2>
<p>Le premier parametre est le nom de la route ici register</p>
<p>Le deuxième parametre est le nom du controller ou sera la méthode qui envoie la vue</p>
<p>Le troisième parametre est le nom de la MÉTHODE DANS LE CONTROLLER qui va envoyer la vue et aussi gérer SI la vue envoie des données (comme un formulaire par exemple)</p>

<?php
require_once(__DIR__ . "/partials/footer.php");
?>