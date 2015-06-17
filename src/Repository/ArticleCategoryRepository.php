<?php

namespace WilliamEspindola\Article\Repository;

use WilliamEspindola\Article\Entity\ArticleCategory;
use WilliamEspindola\Article\Storage\ORM\StorageORMInterface;

class ArticleCategoryRepository extends RepositoryAbstract
{
    public function __construct(StorageORMInterface $storage)
    {
        parent::__construct('article_category', new ArticleCategory(), $storage);
    }
}
