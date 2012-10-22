<?php

class Galileo_Branches_Block_Adminhtml_Branches_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_blockGroup = 'branches';
        $this->_controller = 'adminhtml_branches';
    }

    public function getHeaderText()
    {
        return Mage::helper('branches')->__('Branches');
    }
}
