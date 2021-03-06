<?php
/**
 * Created by PhpStorm.
 * User: grzegorz
 * Date: 14/08/15
 * Time: 13:57
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class RepairerMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('content', 'textarea', [
            'label' => false,
            'required' => false,
            'constraints' => [
                new Assert\NotBlank()
            ]]);

        $builder->add('send', 'submit', [
            'label' => 'Wyślij'
        ]);
    }

    public function getName()
    {
        return 'repairerMessage';
    }
}