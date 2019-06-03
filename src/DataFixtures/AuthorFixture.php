<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AuthorFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
//        for ($i=1;$i<=10;$i++){
//            $author = new Author();
//            $author->setName(sprintf('bar%d',$i));
//            $author->setEmail(sprintf('foobar%d@gmail.com',$i));
//            $manager->persist($author);
//        }

        $manager->flush();
    }
}
