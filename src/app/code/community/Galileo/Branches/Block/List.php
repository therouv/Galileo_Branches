<?php

class Galileo_Branches_Block_List extends Mage_Core_Block_Template
{
    protected $_collection = null;

    public function getCollection()
    {
        if (is_null($this->_collection)) {
            $this->_collection = Mage::getResourceModel('branches/branch_collection');
        }
        return $this->_collection;
    }
}
