<?php

namespace Acme;

class EnvironmentMonitor {

    protected $temperature = 70;

    public function temperature()
    {
        return $this->temperature;
    }    

    public function addDegrees($degree = 10)
    {
        $this->temperature += $degree;
    }
    
    public function soundAlarm()
    {
        throw new \Exception('too hot, alarm alarm');
    }

    public function checkForAlarm()
    {
        if ($this->temperature >= 100) {
            $this->soundAlarm();
        }
    }
}
