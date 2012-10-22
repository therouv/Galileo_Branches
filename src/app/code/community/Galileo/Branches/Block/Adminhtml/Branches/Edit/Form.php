<?php

class Galileo_Branches_Block_Adminhtml_Branches_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();

        $id = $this->getRequest()->getParam('id');
        $branch = Mage::getModel('branches/branch');
        if ($id) {
            $branch->load($id);
        }

        $fieldset = $form->addFieldset(
            'base_fieldset',
            array('legend' => Mage::helper('branches')->__('Information'))
        );

        if ($id) {
            $fieldset->addField('id', 'hidden', array('name' => 'id'));
        }


        $fieldset->addField(
            'name',
            'text',
            array(
                'name'     => 'name',
                'label'    => Mage::helper('customer')->__('Name'),
                'title'    => Mage::helper('customer')->__('Name'),
                'required' => true,
            )
        );

        $fieldset->addField(
            'street',
            'text',
            array(
                'name'     => 'street',
                'label'    => Mage::helper('customer')->__('Street'),
                'title'    => Mage::helper('customer')->__('Street'),
                'required' => true,
            )
        );

        $fieldset->addField(
            'postcode',
            'text',
            array(
                'name'     => 'postcode',
                'label'    => Mage::helper('customer')->__('Postcode'),
                'title'    => Mage::helper('customer')->__('Postcode'),
                'required' => true,
            )
        );

        $fieldset->addField(
            'city',
            'text',
            array(
                'name'     => 'city',
                'label'    => Mage::helper('customer')->__('City'),
                'title'    => Mage::helper('customer')->__('City'),
                'required' => true,
            )
        );

        $fieldset->addField(
            'country',
            'text',
            array(
                'name'     => 'country',
                'label'    => Mage::helper('customer')->__('Country'),
                'title'    => Mage::helper('customer')->__('Country'),
                'required' => true,
            )
        );

        $fieldset->addField(
            'telephone',
            'text',
            array(
                'name'     => 'telephone',
                'label'    => Mage::helper('customer')->__('Telephone'),
                'title'    => Mage::helper('customer')->__('Telephone'),
                'required' => true,
            )
        );

        $fieldset->addField(
            'fax',
            'text',
            array(
                'name'     => 'fax',
                'label'    => Mage::helper('customer')->__('Fax'),
                'title'    => Mage::helper('customer')->__('Fax'),
            )
        );

        $fieldset->addField(
            'email',
            'text',
            array(
                'name'     => 'email',
                'label'    => Mage::helper('customer')->__('Email'),
                'title'    => Mage::helper('customer')->__('Email'),
                'required' => true,
            )
        );

        $fieldset->addField(
            'business_hours',
            'textarea',
            array(
                'name'     => 'business_hours',
                'label'    => Mage::helper('branches')->__('Business Hours'),
                'title'    => Mage::helper('branches')->__('Business Hours'),
                'required' => true,
            )
        );

        $form->setValues($branch->getData());
        $form->setAction($this->getUrl('*/*/save'));
        $form->setMethod('post');
        $form->setUseContainer(true);
        $form->setId('edit_form');

        $this->setForm($form);
        return parent::_prepareForm();
    }
}
