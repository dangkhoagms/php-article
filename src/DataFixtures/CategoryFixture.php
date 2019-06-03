<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1;$i<=10;$i++){
            $category = new Category();
            $category->setName(sprintf('baz%d',$i));
            $manager->persist($category);
        }

        $manager->flush();
    }
}
