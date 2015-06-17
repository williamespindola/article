--TEST--
Delete some article
--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Relational\Mapper;
use Respect\Relational\Sql;
use WilliamEspindola\Article\Storage\ORM\RespectRelational;
use WilliamEspindola\Article\Repository\ArticleCategoryRepository;

$mapper = new Mapper(new PDO('mysql:host=localhost;dbname=article','root','123'));

$storage = new RespectRelational($mapper);
$storage->setEntityNamespace('\\WilliamEspindola\\Article\\Entity\\');
$repository = new ArticleCategoryRepository($storage);

$categories = $repository->findBy(['category_id' => 1], Sql::orderBy('article_id'));

echo (count($categories) >= 1);
?>
--EXPECT--
1
