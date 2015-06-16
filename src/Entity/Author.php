<?php

namespace WilliamEspindola\Article\Entity;

class Author implements EntityInterface
{
    /**
     * @var integer Author id
     */
    public $id;

    /**
     * @var string Author name
     */
    private $name;

    /**
     * @var string Author email
     */
    private $email;

    /**
     * @param integer Author id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return integer Author id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string Author name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string Author name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string Author email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string Author email
     */
    public function getEmail()
    {
        return $this->email;
    }
}
