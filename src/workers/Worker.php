<?php
/**
 * Created by PhpStorm.
 * User: peetenbart
 * Date: 05-10-17
 * Time: 11:40
 */

namespace workers;

interface Worker
{
    public function work();
}