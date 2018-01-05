<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 *
 * See COPYING.txt for license details.
 */
namespace Faonni\Novaposhta\Model\Carrier;

/**
 * Newposhta Plugin
 */
class Newposhta
{ 
    /**
     * Check If Carrier Has Shipping Tracking Option Available
     *
     * @param \Magegain\Novaposhta\Model\Carrier\Newposhta $subject
     * @param bool $result
     * @return bool
     */     
    public function afterIsTrackingAvailable($subject, $result)
    {
        return true;
    }
}