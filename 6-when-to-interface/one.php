<?php
// contract
interface BillingInterface {
    public function billing();
    public function retriveCustomer();
    public function cancel();
}

// implements contract
class Stripe implements BillingInterface {

    public function billing()
    {
        
    }

    public function retriveCustomer()
    {
        
    }

    public function cancel()
    {
        
    }
}

class BrainTree implements BillingInterface {

    public function billing()
    {
        
    }

    public function retriveCustomer()
    {
        
    }

    public function cancel()
    {
        
    }
    
}

// other using
class YourController {
    protected $billing;

    public function __construct (BillingInterface $billing)
    {
        $this->billing = $billing;    
    }
    
}

new YourController(new Stripe);
