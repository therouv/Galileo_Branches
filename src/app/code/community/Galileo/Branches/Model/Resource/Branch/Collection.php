<?php

class Galileo_Branches_Model_Resource_Branch_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('branches/branch');
    }
}
