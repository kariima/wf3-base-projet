<?php

class Article extends DB {

    const TABLE_NAME = "articles";

    protected $id;
    protected $title;
    protected $content;
    protected $authorId;
    protected $createdAt;
    protected $updatedAt;

//Liste des setters :

    public function setId($id) {

        $this->id = $id;

    }
    
    public function setTitle($title) {

        if (strlen($title) < 3) {

            throw new Exception ("Le titre est trop court");

        } if (strlen($title) > 255) {

            throw new Exception ("Le titre est trop long");

        }

        $this->title = $title;
    }

    public function setContent($content) {

        if (strlen ($content) < 7 ) {

            throw new Exception ("Le contenu est trop court.");
        } 

        $this->content = $content;

    }

    public function setAuthorId($authorId) {

        if (!is_numeric($authorId)) {

            throw new Exception("L'authorId doit être un entier.");

        }

        $this->authorId = $authorId;

    }

    // Liste des getters :

    public function getId()
    {
        return $this->id;
    }

    public function getTitle() {

        $titleUppercase = ucfirst($this->title);
        
        return $titleUppercase;

    }

    public function getContent() {

        $contentNumber = (int) $this->content;

        return $contentNumber;

    }

    public function getAuthorId() {


        return $this->authorId;

    }

    public function getCreatedAt() {

        return $this->createdAt;
    }

    public function save() {

        $data = [

            'title'     => $this->getTitle(),
            'content'   => $this->getContent(),
            'author_id'  => $this->getAuthorId(),
        ];

        $id = $this->dbCreate(self::TABLE_NAME, $data);

        $this->setId($id);
    }

}

