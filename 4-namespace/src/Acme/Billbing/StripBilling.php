<?php

namespace Acme\Billing;

use Acme\Order;

class StripBilling {

    public function report()
    {
        $order = new Order;
        var_dump($order);
        var_dump("do strip report");
    }
    
}
