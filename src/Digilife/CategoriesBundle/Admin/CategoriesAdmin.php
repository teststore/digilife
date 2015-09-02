<?php
/**
 * Created by PhpStorm.
 * User: paulf_000
 * Date: 2015-09-02
 * Time: 16:13
 */
namespace Digilife\CategoriesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class CategoriesAdmin extends Admin {
    /**
     * Конфигурация отображения записи
     *
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('categoryName', null, array('label'=>'Imię kategorii'))
            ->add('parentCategory', null, array('label'=>'Parent caregory'))
        ;
    }

    /**
     * Конфигурация формы редактирования записи
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('categoryName', null, array('label'=>'Imię kategorii'))
            ->add('parentCategory', null, array('label'=>'Parent caregory'))
        ;
    }
    /**
     * Конфигурация списка записей
     *
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('categoryName', null, array('label'=>'Imię kategorii'))
            ->add('parentCategory', null, array('label'=>'Parent caregory'))
        ;
    }

    /**
     * Поля, по которым производится поиск в списке записей
     *
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('categoryName', null, array('label'=>'Imię kategorii'));
    }

    /**
     * Конфигурация левого меню при отображении и редатировании записи
     *
     * @param \Knp\Menu\ItemInterface $menu
     * @param $action
     * @param null|\Sonata\AdminBundle\Admin\Admin $childAdmin
     *
     * @return void
     */
    protected function configureSideMenu(MenuItemInterface $menu, $action, Admin $childAdmin = null)
    {
        $menu->addChild(
            $action == 'edit' ? 'Kategorie' : 'Edycja kategorii',
            array('uri' => $this->generateUrl(
                $action == 'edit' ? 'show' : 'edit', array('id' => $this->getRequest()->get('categoryName'))))
        );
    }
}