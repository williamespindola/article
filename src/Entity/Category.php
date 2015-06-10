<?php

namespace WilliamEspindola\Article\Entity;

class Category
{
    public $id;

    private $name;

    private $description;

    private $category_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function setCategoryId(Category $categoryId)
    {
        $this->category_id = $categoryId;
    }
}
