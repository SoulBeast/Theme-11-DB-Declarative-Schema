<?php

namespace Perspective\Theme11Datapatch\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Contactdetails extends AbstractDb
{
    public function _construct()
    {

        $this->_init("customer_contactdetails", 'id');
    }
}
