<?php

namespace WilliamEspindola\Article\Repository;

use WilliamEspindola\Article\Entity\Category;
use WilliamEspindola\Article\Storage\ORM\StorageORMInterface;

class CategoryRepository 
    extends RepositoryAbstract
    implements RepositoryInterface
{
    public function __construct(StorageORMInterface $storage)
    {
        parent::__construct('category', new Category(), $storage);
    }
}
