--TEST--
Delete some article
--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Relational\Mapper;
use Respect\Relational\Sql;
use WilliamEspindola\Article\Storage\ORM\RespectRelational;
use WilliamEspindola\Article\Repository\CategoryRepository;
use WilliamEspindola\Article\Entity\Category;

$mapper = new Mapper(new PDO('mysql:host=localhost;dbname=article','root','123'));

$storage = new RespectRelational($mapper);
$storage->setEntityNamespace('\\WilliamEspindola\\Article\\Entity\\');
$repository = new CategoryRepository($storage);

$category = new Category();
$category->setName('Category name');
$category->setUri('category-name');

$repository->save($category);

echo gettype($category->id);
?>
--EXPECT--
string
