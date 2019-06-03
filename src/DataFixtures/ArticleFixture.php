<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Author;
use App\Repository\AuthorRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1;$i<=10;$i++){
            $article = new Article();
            $article->setName(sprintf('foo%d',$i));
            $author = new Author();
            $author->setName(sprintf('bar%d',$i));
            $author->setEmail(sprintf('foobar%d@gmail.com',$i));
            $article->setAuthor($author);
            $manager->persist($author);
            $manager->persist($article);
        }


        $manager->flush();
    }
}
