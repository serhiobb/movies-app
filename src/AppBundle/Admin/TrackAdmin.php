<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TrackAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('trackid')
            ->add('name')
            ->add('composer')
            ->add('milliseconds')
            ->add('bytes')
            ->add('unitprice')
            ->add('albumid')
            ->add('genreid')
            ->add('mediatypeid')
            ->add('playlistid')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('trackid', null, ['label' => '#'])
            ->add('name')
            ->add('composer')
            ->add('milliseconds')
            ->add('bytes')
            ->add('unitprice')
            ->add('albumid', null, ['label' => 'Album'])
            ->add('genreid', null, ['label' => 'Genre'])
            ->add('mediatypeid', null, ['label' => 'MediaType'])
            ->add('playlistid', null, ['label' => 'Playlist'])
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
            ->add('trackid')
            ->add('name')
            ->add('composer')
            ->add('milliseconds')
            ->add('bytes')
            ->add('unitprice')
            ->add('albumid')
            ->add('genreid')
            ->add('mediatypeid')
            ->add('playlistid')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('trackid')
            ->add('name')
            ->add('composer')
            ->add('milliseconds')
            ->add('bytes')
            ->add('unitprice')
            ->add('albumid')
            ->add('genreid')
            ->add('mediatypeid')
            ->add('playlistid')
        ;
    }
}
