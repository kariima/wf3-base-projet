<?php

//ArticlesController.php

class ArticlesController {

    public function ajout () {

        view ('articles.ajout-article'); //"articles" = dossier contenant la vue. "ajout-article" = fichier vue.

    }

    public function save () {

        $article = new Article;
        $article->setTitle($_POST['title']);
        $article->setContent($_POST['content']);
        $article->setAuthorId($_POST['authorid']);

        echo "Test de getContent() : ";
        dump($article);

        $article->save();

        dump($article);

        echo "L'article est l'id " . $article->getId();



    }
}