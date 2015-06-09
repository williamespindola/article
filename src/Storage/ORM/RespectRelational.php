<?php

namespace WilliamEspindola\Article\Storage\ORM;

use Respect\Relational\Mapper;
use Respect\Relational\Sql;
use Respect\Data\Styles;

/**
 * Providers the Respect\Relational\Mapper ORM behavior
 *
 * @package Article
 * @subpackage Storage\ORM
 * @author William Espindola <oi@williamespindola.com.br>
 */
class RespectRelational implements StorageORMInterface
{
    const INVALID_MAPPER_MESSAGE = 'Argument must be Respect\Relational\Mapper';
    
    /**
     * @var object Respect\Relational\Mapper 
     */
    protected $mapper;

    protected $namespace = '\\';


    public function __construct(Mapper $mapper)
    {
        $this->setMapper($mapper);
    }

    /**
     * @param namepsace entities
     * @return void
     */
    public function setEntityNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    /**
     * @param string $tableName
     * @param object $data
     */
    public function persist($tableName, $data)
    {
        $this->getMapper()->$tableName->persist($data);
    }

    /**
     * @param string $tableName
     * @param object $data
     */
    public function remove($tableName, $data)
    {
        $this->getMapper()->$tableName->remove($data);
    }

    /**
     * @param $tableName
     * @return array
     */
    public function findAll($tableName)
    {
        return $this->getMapper()->$tableName->fetchAll();
    }

    /**
     * @param $tableName
     * @param array $criteria for optimizing your clauses
     * @return void
     */
    public function findBy($tableName, array $criteria, Sql $optimization)
    {
        return $this->getMapper()->$tableName($criteria)->fetchAll($optimization);
    }

    /**
     * @param $tableName
     * @param array $criteria for optimizing your clauses
     * @return object
     */
    public function findOne($tableName, array $criteria)
    {
        return $this->getMapper()->$tableName($criteria)->fetch();
    }

    /**
     * @return object Respect\Relational\Mapper
     */
    public function getMapper()
    {
        $this->mapper->entityNamespace = $this->namespace;

        return $this->mapper;
    }

    /**
     * @param object Respect\Relational\Mapper
     * @throws \InvalidArgumentException
     */
    public function setMapper($mapper)
    {
        if (!($mapper instanceof Mapper))
            throw new \InvalidArgumentException(RespectRelational::INVALID_MAPPER_MESSAGE);
    
        $this->mapper = $mapper;
    }

    /**
     * @return boolean
     */
    public function flush()
    {
        return $this->getMapper()->flush();
    }
}
