<?php

class Galileo_Branches_Block_Adminhtml_Branches_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _construct()
    {
        $this->setSaveParametersInSession(true);
        $this->setId('branchesGrid');
        $this->setIdFieldName('id');
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel('branches/branch_collection');
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header' => Mage::helper('adminhtml')->__('ID'),
            'index'  => 'id',
            'width'  => '75px',
        ));
        $this->addColumn('name', array(
            'header'   => Mage::helper('customer')->__('Name'),
            'index'    => 'name',
        ));
        $this->addColumn('street', array(
            'header'   => Mage::helper('customer')->__('Street'),
            'index'    => 'street',
        ));
        $this->addColumn('postcode', array(
            'header'   => Mage::helper('customer')->__('Postcode'),
            'index'    => 'postcode',
        ));
        $this->addColumn('city', array(
            'header'   => Mage::helper('customer')->__('City'),
            'index'    => 'city',
        ));
        $this->addColumn('telephone', array(
            'header'   => Mage::helper('customer')->__('Telephone'),
            'index'    => 'telephone',
        ));
        $this->addColumn('fax', array(
            'header'   => Mage::helper('customer')->__('Fax'),
            'index'    => 'fax',
        ));
        $this->addColumn('email', array(
            'header' => Mage::helper('customer')->__('Email'),
            'index'  => 'email'
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($item)
    {
        return $this->getUrl('*/*/edit', array('id' => $item->getId()));
    }
}
