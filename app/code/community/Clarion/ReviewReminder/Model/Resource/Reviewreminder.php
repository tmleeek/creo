<?php
/**
 * @category   Clarion
 * @package    Clarion_ReviewReminder
 * @created    4th Dec, 2014
 * @author     Clarion magento team <magento.team@clariontechnologies.co.in>
 * @purpose    Review reminder resource model class
 * @copyright  Copyright (c) 2014 Clarion Technologies Pvt. Ltd.
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License
 */
class Clarion_ReviewReminder_Model_Resource_Reviewreminder extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('clarion_reviewreminder/reviewreminder', 'reminder_id');
    }
}