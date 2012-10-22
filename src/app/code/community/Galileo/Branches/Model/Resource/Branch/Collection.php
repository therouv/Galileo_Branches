<?php
/**
 * This file is part of the Itabs_MarkOrders module.
 *
 * PHP version 5
 *
 * @category  Itabs
 * @package   Itabs_MarkOrders
 * @author    Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2012 ITABS GmbH (http://www.itabs.de). All rights served.
 * @license   http://www.itabs.de Commercial License
 * @version   0.1.0
 * @link      http://www.itabs.de/
 */
/**
 * Blacklist Resource Collection Model
 *
 * @category  Itabs
 * @package   Itabs_MarkOrders
 * @author    Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2012 ITABS GmbH (http://www.itabs.de). All rights served.
 * @license   http://www.itabs.de Commercial License
 * @version   0.1.0
 * @link      http://www.itabs.de/
 */
class Itabs_MarkOrders_Model_Resource_Blacklist_Collection
    extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Init collection item model and resource model
     *
     * @see Mage_Core_Model_Resource_Db_Collection_Abstract::_construct()
     * @return void
     */
    protected function _construct()
    {
        $this->_init('markorders/blacklist');
    }
}
