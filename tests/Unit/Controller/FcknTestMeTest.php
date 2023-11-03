<?php

namespace Fatchip\UnitTest\Tests\Unit\Controller;

use PHPUnit\Framework\TestCase;

class FcknTestMeTest extends TestCase
{
    public function testicle()
    {
        $oFuck = $this->getMockBuilder(\Fatchip\UnitTest\Controller\FcknTestMe::class)->setMethodsExcept(['icle'])->getMock();
        $this->assertEquals('Hello fucker', $oFuck->icle());
    }
}