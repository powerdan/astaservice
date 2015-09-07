<?php

namespace AStAService\AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class AppPageAdmin extends Admin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('delete');
    }

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', array('label' => 'App Page Titel'))
            //->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('content', 'sonata_formatter_type', array(
                'event_dispatcher' => $formMapper->getFormBuilder()->getEventDispatcher(),
                'format_field'   => 'contentFormatter',
                'source_field'   => 'rawContent',
                'source_field_options'      => array(
                    'attr' => array('class' => 'span10', 'rows' => 20)
                ),
                'listener'       => true,
                'target_field'   => 'content'
            )) //if no type is specified, SonataAdminBundle tries to guess it
            ->add('internalComment', 'text', array('required' => false, 'label' => 'Interner Redaktionshinweis')) //if no type is specified, SonataAdminBundle tries to guess it
            ->add('enabled', 'checkbox', array('required' => false, 'label' => "Seite aktiviert?"))
            ->add('asPopup', 'checkbox', array('required' => false, 'label' => "Soll als Popup dargestellt werden?"))
            ->add('links')

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('title')
            ->add('content')
            ->add('enabled')
            ->add('asPopup')
            ->add('links')
            ->add('linkedToMe')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->addIdentifier('title')
            ->add('internalComment')
            ->add('enabled')
            ->add('asPopup')
            ->add('links')
        ;
    }
}