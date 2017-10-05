<?php
/**
 * Created by PhpStorm.
 * User: peetenbart
 * Date: 05-10-17
 * Time: 11:35
 */
require_once '\tool\Tool.php';
require_once '\tool\Broom.php';
require_once '\workers\Worker.php';

$broom = new \tool\Broom();
$henry = new \workers\Handyman($broom);
$henry->work();