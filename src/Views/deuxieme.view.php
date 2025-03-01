<?php
require_once(__DIR__ . "/partials/head.php");
?>

<h1>Deuxieme étape</h1>
<p>Maintenant que le controller est crée ainsi que la méthode il faut d'abord créer la vue puis envoyé la vue depuis le controller</p>
<div class="img-container">
  <img src="/public/img/creation-vue.png" alt="">
</div>

<h2>Maintenant qu la vue est créer</h2>
<p>Ici c'est un formulaire d'inscription alors dans la vue on créer un formulaire avec un boutton type submit <br><strong>IMPORTANT</strong></p>
<p>Dans le formulaire il faut que les input on un <strong>name</strong> avec une valeur associé</p>
<div class="img-container">
  <img src="/public/img/inputname.png" alt="">
</div>
<p>Car le <strong>name</strong> est ce que le controller va recevoir en <strong>POST</strong></p>
<div class="img-container">
  <img src="/public/img/formulaire.png" alt="">
</div>
<p>La vue est maintenant terminée, tout les input on bien un <strong>name</strong>, peux importe la valeur qui est dans le <strong>name</strong> par exemple même si mes input on " toto tata tutu" sa marche</p>
<p>Première chose a faire dans le controller c'est de vérifier que on reçoi bien les valeurs du formulaire</p>
<div class="img-container">
  <img src="/public/img/formulaire-controller.png" alt="">
</div>
<p>Ici je regarde avec <strong>isset</strong> si il recoi en <strong>POST</strong> les valeurs de mon formulaire. Les valeur entre "[ ]" des <strong>POST</strong> est le <strong>name</strong> de mes input donc $_POST['firstname'] recevera comme valeur ce que l'user remplie dans mon input qui a comme name="firstname"</p>
<p>si il reçoi bien toute les valeurs de mon formulaire alors le var dump s'affichera en haut de ma page</p>
<a href="/troisieme">Etape suivant</a>
<?php
require_once(__DIR__ . "/partials/head.php");
?>