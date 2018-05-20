<?php

namespace Blog\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * PostType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('cuerpo')
            ->add('estado')
            ->add('creado', 'bootstrapdatetime', array(
                'required'   => true,
                'label'      => 'Creado',
                'label_attr' => array(
                    'class' => 'col-lg-2 col-md-2 col-sm-2',
                ),
                'widget_type' => 'both',
            ))
            ->add('editado', 'bootstrapdatetime', array(
                'required'   => true,
                'label'      => 'Editado',
                'label_attr' => array(
                    'class' => 'col-lg-2 col-md-2 col-sm-2',
                ),
                'widget_type' => 'both',
            ))
            ->add('categoria', 'select2', array(
                'class' => 'Blog\BlogBundle\Entity\Categoria',
                'url'   => 'Post_autocomplete_categoria',
                'configs' => array(
                    'multiple' => false,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
            ->add('tags', 'select2', array(
                'class' => 'Blog\BlogBundle\Entity\Tag',
                'url'   => 'Post_autocomplete_tags',
                'configs' => array(
                    'multiple' => true,//required true or false
                    'width'    => 'off',
                ),
                'attr' => array(
                    'class' => "col-lg-12 col-md-12 col-sm-12 col-xs-12",
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\BlogBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_blogbundle_post';
    }
}
