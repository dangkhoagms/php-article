<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Author;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    private $article;


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->article =  new Article();
        $this->article =  $options['data'];
        $builder->add('name')
        ->add('author', EntityType::class, [
            'class' => Author::class,
        ])
        ->add('categories',CollectionType::class,[
            'entry_type' =>Category::class,

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
