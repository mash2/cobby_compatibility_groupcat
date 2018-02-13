<?php

class Mash2_CobbyCompatibilityGroupcat_Model_Observer
{

    public function disableGroupcatalogFilter(Varien_Event_Observer $observer)
    {
        Mage::register('amgroupcat_fetching_category', true);
    }
}
