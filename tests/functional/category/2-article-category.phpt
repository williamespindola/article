--TEST--
Delete some article
--FILE--
<?php
require 'vendor/autoload.php';

use Respect\Relational\Mapper;
use Respect\Relational\Sql;
use WilliamEspindola\Article\Storage\ORM\RespectRelational;
use WilliamEspindola\Article\Repository\ArticleCategoryRepository;
use WilliamEspindola\Article\Repository\ArticleRepository;
use WilliamEspindola\Article\Repository\CategoryRepository;
use WilliamEspindola\Article\Entity\Article;
use WilliamEspindola\Article\Entity\ArticleCategory;
use WilliamEspindola\Article\Entity\Category;

$mapper = new Mapper(new PDO('mysql:host=localhost;dbname=article','root','123'));

$storage = new RespectRelational($mapper);
$storage->setEntityNamespace('\\WilliamEspindola\\Article\\Entity\\');
$repository = new ArticleCategoryRepository($storage);
$articleRepository = new ArticleRepository($storage);
$categoryRepository = new CategoryRepository($storage);

$article = new Article();
$article->setTitle('post title');
$article->setContent('<p>post content</p>');
$article->setUri('post-title');
$article->setStatus(1);
$article->setCreated(new \DateTime('now'));
$article->setModified(new \DateTime('now'));
$article->setMetakeywords('meta1, meta2');

$articleRepository->save($article);

$category = $categoryRepository->findOne([ 'uri' => 'category-name']);

$articleCategory = new ArticleCategory();
$articleCategory->setArticle($article);
$articleCategory->setCategory($category);

$repository->save($articleCategory);

echo ($articleCategory->getCategory() == $category);
?>
--EXPECT--
1
