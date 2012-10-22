<?php

class Galileo_Branches_Block_Adminhtml_Branches extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'branches';
        $this->_controller = 'adminhtml_branches';
        $this->_headerText = Mage::helper('branches')->__('Branches');
        parent::__construct();
    }
}
