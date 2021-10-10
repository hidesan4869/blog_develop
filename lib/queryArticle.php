<?php 
    class QueryArticle extends connect {
        private $article;

        public function __construct() {
            parent::__construct();
        }
        public function setArticle(Article $article) {
            $this->article = $article;
        }

        public function save() {
            if ($this->article->getId()) {
     
            } else {
                $title = $this->article->getTitle();
                $body = $this->article->getBody();
                $stmt = $this->dbh->prepare('INSERT INTO articles (title, body, created_at, updated_at) VALUES (:title, :body, NOW(), NOW()');
                $stmt->bindParm(':title', $title, PDO::PARAM_STR);
                $stmt->bindParm(':body', $body, PDO::PARAM_STR);
                $stmt->execute();
            }
        }
    }