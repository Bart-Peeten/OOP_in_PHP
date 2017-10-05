<?php

namespace workers;
/**
 * Created by PhpStorm.
 * User: peetenbart
 * Date: 05-10-17
 * Time: 11:43
 */

class Handyman implements Worker
{
    private $tool;

    /**
     * Handyman constructor.
     * @param $tool
     */
    public function __construct(\tool\Tool $tool)
    {
        $this->tool = $tool;
    }

    public function work()
    {
        $this->tool->doSomething();
    }
}