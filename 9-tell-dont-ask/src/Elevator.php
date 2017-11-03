<?php

namespace Acme;

class Elevator {
    protected $monitor;
    protected $ocupates = [];

    public function __construct (EnvironmentMonitor $monitor)
    {
        $this->monitor = $monitor;    
    }

    public function addPerson($person)
    {
        $this->ocupates[] = $person;
        $this->monitor->addDegrees();
    }

    public function monitor()
    {
        return $this->monitor;
    }

    public function checkForAlarm()
    {
        $this->monitor->checkForAlarm();
    }
}
