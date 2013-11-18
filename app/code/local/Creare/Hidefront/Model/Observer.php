<?php

class Creare_Hidefront_Model_Observer
{
    public function hideFront()
    {
        
        if (Mage::getStoreConfig('dev/restrict/hidefrontend'))
        {
            $ips = explode(",", preg_replace('/\s+/', '', Mage::getStoreConfig('dev/restrict/allow_ips'));

            if (!in_array($_SERVER['REMOTE_ADDR'], $ips))
            {
                die(Mage::getStoreConfig('dev/restrict/message'));
            }
        }
    }
}