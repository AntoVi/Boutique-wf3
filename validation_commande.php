<?php 
require_once 'inc/init.inc.php';
require_once 'inc/header.inc.php';
require_once 'inc/nav.inc.php';
?>

    <h1 class="text-center my-5">Félicitations !</h1>

    <h4 class="text-center">Votre commande n° <?= $_SESSION['num_commande'] ?> a bien été prise en compte.</h4>

    <p class="text-center my-3">Un email de confirmation vous a été envoyé.</p>

<?php 
require_once 'inc/footer.inc.php';