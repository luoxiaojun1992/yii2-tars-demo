<?php

namespace app\tars\impl;

use app\tars\servant\PHPTest\Yii2Tars\tarsObj\TestTafServiceServant;

class TestTafServiceImpl implements TestTafServiceServant
{
    public function test()
    {
        return 666;
    }
}
