<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EmployeeAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('employeeid')
            ->add('lastname')
            ->add('firstname')
            ->add('title')
            ->add('birthdate')
            ->add('hiredate')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('country')
            ->add('postalcode')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('reportsto')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('employeeid', null, ['label' => '#'])
            ->add('lastname')
            ->add('firstname')
            ->add('title')
            ->add('birthdate')
            ->add('hiredate')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('country')
            ->add('postalcode')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('reportsto', null, ['label' => 'Report STO'])
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('employeeid')
            ->add('lastname')
            ->add('firstname')
            ->add('title')
            ->add('birthdate')
            ->add('hiredate')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('country')
            ->add('postalcode')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('reportsto')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('employeeid')
            ->add('lastname')
            ->add('firstname')
            ->add('title')
            ->add('birthdate')
            ->add('hiredate')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('country')
            ->add('postalcode')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('reportsto')
        ;
    }
}
