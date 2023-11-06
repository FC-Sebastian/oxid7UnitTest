<?php

namespace Fatchip\UnitTest\Tests\Unit\Model;

use PHPUnit\Framework\TestCase;

class FcknArticleTest extends TestCase
{
    public function testuScreamEyeScream()
    {
        $oArticle = new \Fatchip\UnitTest\Model\FcknArticle();
        $this->expectOutputString('WiiScream4EyesCREAM');
        $oArticle->uScreamEyeScream();
    }
}