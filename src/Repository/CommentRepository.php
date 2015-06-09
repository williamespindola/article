<?php

namespace WilliamEspindola\Article\Repository;

use WilliamEspindola\Article\Entity\Comment;
use WilliamEspindola\Article\Storage\ORM\StorageORMInterface;

class CommentRepository extends RepositoryAbstract
{
    public function __construct(StorageORMInterface $storage)
    {
        parent::__construct('comment', new Comment(), $storage);
    }
}
