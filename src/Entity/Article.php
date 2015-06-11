<?php

namespace WilliamEspindola\Article\Entity;

use WilliamEspindola\Article\Entity\Author;

class Article implements EntityInterface
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var text
     */
    private $title;

    /**
     * @var longtext
     */
    private $content;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var object WilliamEspindola\Article\Entity\Author
     */
    private $author_id;

    /**
     * @var text
     */
    private $metakeywords;

    /**
     * @var text
     */
    private $image;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer Article id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return text title content
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param text the Article titile
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return text Article Content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param text the Article content
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return integer Article Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param integer the Article status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime Article Created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \Datetime the Article created
     * @return void
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created->format('Y-m-d H:i:s');
    }

    /**
     * @return \DateTime Article Modified
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param \Datetime the Article modified
     * @return void
     */
    public function setModified(\DateTime $modified)
    {
        $this->modified = $modified->format(self::DATETIME_FORMAT);
    }

    /**
     * @return object WilliamEspindola\Article\Entity\Author
     */
    public function getAurhor()
    {
        return $this->author_id;
    }

    /**
     * @param \Datetime the Article modified
     * @return void
     */
    public function setAuthor(Author $author)
    {
        $this->author_id = $author;
    }

    /**
     * @return text Article metakeywords
     */
    public function getMetakeywords()
    {
        return $this->metakeywords;
    }

    /**
     * @return void
     */
    public function setMetakeywords($meta)
    {
        $this->metakeywords = $meta;
    }

    /**
     * @return text image name
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return void
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}
