<?php
/**
 * Created by PhpStorm.
 * User: what_
 * Date: 2021/8/23
 * Time: 0:22
 */

namespace MediaServer\Rtmp;


use React\EventLoop\Loop;
use \Exception;

trait RtmpVideoHandlerTrait
{


    public function rtmpVideoHandler()
    {
        logger()->info("rtmpVideoHandler");
    }
}