<?php ob_start(); ?>

<h1>Contactez-nous :</h1>

<form action="<?= url('/contact') ?>" method="POST">

    <label for="id">Nom :</label><br>
    <input id="nom" name="lastname" type="text"><br>

    <label for="id">Prénom :</label><br>
    <input id="prenom" name="firstname" type="text"><br>

    <label for="id">Message :</label><br>
    <input type="text-area" name="message" placeholder="Entrez votre message ..."><br>

    <input type="submit" name="Envoyer" value="Envoyer">

</form>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>