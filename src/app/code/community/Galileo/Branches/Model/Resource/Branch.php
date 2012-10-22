<?php

class Galileo_Branches_Model_Resource_Branch extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('branches/branches', 'id');
    }
}
