<?php

namespace WilliamEspindola\Article\Entity;

class Comment implements EntityInterface
{
    public $id;

    private $author;

    private $email;

    private $status;

    private $created;

    private $comment_id;

    private $content;

    private $article_id;

    public function setId($Id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }

    public function getCommentId()
    {
        return $this->commentId;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setArtitleId($articleId)
    {
        $this->articleId = $articleId;
    }

    public function getArticleId()
    {
        return $this->articleId;
    }
}
