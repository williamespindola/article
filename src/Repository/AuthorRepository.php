<?php

namespace WilliamEspindola\Article\Repository;

use WilliamEspindola\Article\Entity\Author;
use WilliamEspindola\Article\Storage\ORM\StorageORMInterface;

class AuthorRepository extends RepositoryAbstract
{
    public function __construct(StorageORMInterface $storage)
    {
        parent::__construct('author', new Author(), $storage);
    }
}
