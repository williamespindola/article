<?php

namespace WilliamEspindola\Article\Entity;

class ArticleCategory implements EntityInterface
{
    /**
     * @var object Article
     */
    private $article_id;

    /**
     * @var object Category
     */
    private $category_id;

    /**
     * @return void
     * @param object WilliamEspindola\Article\EntityInterface
     */
    public function setArticle(EntityInterface $article)
    {
        $this->article_id = $article;
    }

    /**
     * @param object WilliamEspindola\Article\EntityInterface
     */
    public function getArticle()
    {
        return $this->article_id;
    }

    /**
     * @return void
     * @param object WilliamEspindola\Article\EntityInterface
     */
    public function setCategory(EntityInterface $category)
    {
        $this->category_id = $category;
    }

    /**
     * @param object WilliamEspindola\Article\EntityInterface
     */
    public function getCategory()
    {
        return $this->category_id;
    }
}
