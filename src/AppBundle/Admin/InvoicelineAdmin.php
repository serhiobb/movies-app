<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class InvoicelineAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('invoicelineid')
            ->add('unitprice')
            ->add('quantity')
            ->add('invoiceid')
            ->add('trackid')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('invoicelineid', null, ['label' => '#'])
            ->add('unitprice')
            ->add('quantity')
            ->add('invoiceid')
            ->add('trackid', null, ['label' => 'Track'])
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
            ->add('invoicelineid')
            ->add('unitprice')
            ->add('quantity')
            ->add('invoiceid')
            ->add('trackid')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('invoicelineid')
            ->add('unitprice')
            ->add('quantity')
            ->add('invoiceid')
            ->add('trackid')
        ;
    }
}
