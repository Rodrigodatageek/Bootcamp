<?php

// 1
class Computer 
{
    // 2
    public $model = null;
    public $operating_system = null;
    public $is_portable = false;
    public $status = "off";


    //6
    //method
    public function switchOff() 
    {
        $this->status = 'off';

    }

    //7
    public function toggleSwitch()
    {
        if($this->status == 'on') {
            $this->status = 'off';
        } else 
        {$this->status = 'on';
        }
    }


}




// Declare method switchOff in the class.

// Inside the method, change the current object's property $status to 'off'

// Call the method sometime before your HTML output and check the output to see if it was switched off.