<?php

class Creare_Hidefront_Model_Observer
{
    public function hideFront()
    {
        
        if (Mage::getStoreConfig('dev/restrict/hidefrontend'))
        {
            if (!Mage::helper('core')->isDevAllowed() || !Mage::getStoreConfig('dev/restrict/allow_ips'))
            {
                die(Mage::getStoreConfig('dev/restrict/message'));
            }
        }
    }
}