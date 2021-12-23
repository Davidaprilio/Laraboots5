<?php

namespace Davidaprilio\Laraboots5;

class Greetr
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}