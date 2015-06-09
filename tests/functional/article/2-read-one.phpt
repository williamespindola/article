--TEST--
Read on article
--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Relational\Mapper;
use WilliamEspindola\Article\Storage\ORM\RespectRelational;
use WilliamEspindola\Article\Repository\ArticleRepository;
use WilliamEspindola\Article\Entity\Article;

$mapper = new Mapper(new PDO('mysql:host=localhost;dbname=article','root','123'));

$storage = new RespectRelational($mapper);
$storage->setEntityNamespace('\\WilliamEspindola\\Article\\Entity\\');
$repository = new ArticleRepository($storage);

$result = $repository->findOne(['title' => 'post title']);

echo $result->getTitle();
?>
--EXPECT--
post title
