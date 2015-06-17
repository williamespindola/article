<?php

namespace WilliamEspindola\Article\Repository;

use WilliamEspindola\Article\Entity\Article;
use WilliamEspindola\Article\Storage\ORM\StorageORMInterface;

class ArticleRepository 
    extends RepositoryAbstract
    implements RepositoryInterface
{
    public function __construct(StorageORMInterface $storage)
    {
        parent::__construct('article', new Article(), $storage);
    }
}
