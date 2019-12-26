<?php

namespace App\Form;

use App\Entity\Auto;
use Doctrine\DBAL\Types\BlobType;
use PhpParser\Node\Stmt\Label;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AutoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Марка и Модель'])
            ->add('site', TextType::class, ['label' => 'Ссылка на объявление'])
            ->add('price', IntegerType::class, ['label' => 'Цена'])
            ->add('info', TextareaType::class, ['label' => 'Описание'])
            ->add('image', FileType::class, ['label' => 'Картинка'] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Auto::class,
        ]);
    }
}
