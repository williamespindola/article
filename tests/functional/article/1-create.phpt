--TEST--
Teste create some article
--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Relational\Mapper;
use WilliamEspindola\Article\Storage\ORM\RespectRelational;
use WilliamEspindola\Article\Repository\ArticleRepository;
use WilliamEspindola\Article\Entity\Article;

$mapper = new Mapper(new PDO('mysql:host=localhost;dbname=article','root','123'));

$storage = new RespectRelational($mapper);
$repository = new ArticleRepository($storage);

$article = new Article();
$article->setTitle('post title');
$article->setContent('<p>post content</p>');
$article->setStatus(1);
$article->setCreated(new \DateTime('now'));
$article->setModified(new \DateTime('now'));
$article->setMetakeywords('meta1, meta2');

$repository->save($article);

echo gettype($article->id);
?>
--EXPECT--
string
