<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class InvoiceAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('invoiceid')
            ->add('invoicedate')
            ->add('billingaddress')
            ->add('billingcity')
            ->add('billingstate')
            ->add('billingcountry')
            ->add('billingpostalcode')
            ->add('total')
            ->add('customerid')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('invoiceid', null, ['label' => '#'])
            ->add('invoicedate')
            ->add('billingaddress')
            ->add('billingcity')
            ->add('billingstate')
            ->add('billingcountry')
            ->add('billingpostalcode')
            ->add('total')
            ->add('customerid', null, ['label' => 'Customer'])
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
            ->add('invoiceid')
            ->add('invoicedate')
            ->add('billingaddress')
            ->add('billingcity')
            ->add('billingstate')
            ->add('billingcountry')
            ->add('billingpostalcode')
            ->add('total')
            ->add('customerid')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('invoiceid')
            ->add('invoicedate')
            ->add('billingaddress')
            ->add('billingcity')
            ->add('billingstate')
            ->add('billingcountry')
            ->add('billingpostalcode')
            ->add('total')
            ->add('customerid')
        ;
    }
}
