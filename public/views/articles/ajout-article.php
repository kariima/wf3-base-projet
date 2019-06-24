<?php ob_start(); ?>

<h1>Ajoutez un article</h1>

<!-- Ici l'action correspond au nom du fichier (la view). Indiquer l'url dans le fichier config puis n'indiquer dans l'action que le chemin vers le fichier vue dans du php -->
<form action="<?= url('/ajout-article') ?>" method="POST">

    <label for="id">Id de l'article :</label><br>
    <input id="id" name="articleId" type="number"><br>

    <label for="id">Titre :</label><br>
    <input id="title" name="title" type="text"><br>

    <label for="id">Contenu :</label><br>
    <input id="content" name="content" type="text"><br>

    <label for="id">Id de l'auteur :</label><br>
    <input id="Id" name="authorid" type="number"><br>

    <label for="id">Date de création :</label><br>
    <input id="created_at" name="created_at" type="date"><br>

    <label for="id">Date de mise à jour :</label><br>
    <input id="updated_at" name="updated_at" type="date"><br>

    <input type="submit" name="Envoyer" value="Envoyer">

</form>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')); ?>