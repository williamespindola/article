--TEST--
Update some articles
--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Relational\Mapper;
use Respect\Relational\Sql;
use WilliamEspindola\Article\Storage\ORM\RespectRelational;
use WilliamEspindola\Article\Repository\ArticleRepository;
use WilliamEspindola\Article\Entity\Article;

$mapper = new Mapper(new PDO('mysql:host=localhost;dbname=article','root','123'));

$storage = new RespectRelational($mapper);
$storage->setEntityNamespace('\\WilliamEspindola\\Article\\Entity\\');
$repository = new ArticleRepository($storage);

$one = $repository->findOne(['title' => 'post title']);
$one->setContent('<p>new content</p>');

$repository->save($one);

$result = $repository->findOne(['id' => $one->getId()]);

echo $result->getContent();
?>
--EXPECT--
<p>new content</p>
