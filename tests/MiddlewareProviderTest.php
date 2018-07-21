<?php

/**
 * Created by PhpStorm.
 * User: rmncst
 * Date: 21/07/18
 * Time: 19:17
 */
class MiddlewareProviderTest extends \PHPUnit\Framework\TestCase
{
    public function testJustWorks() {
        $mid = new \PackageProviders\Provider\MiddlewareProvider();
        $this->assertTrue(strpos($mid->test(),'works') > 0);
    }
}