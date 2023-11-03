<?php

namespace Fatchip\UnitTest\Tests\Unit\Model;

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    /**
     * @dataProvider valueProvider
     *
     * @param $value
     * @return void
     */
    public function testFcTestMe($value)
    {
        $oArticle = $this->getMockBuilder(\Fatchip\UnitTest\Model\Article::class)->setMethodsExcept(['fcTestMe'])->getMock();
        $this->assertEquals($value, $oArticle->fcTestMe($value));
    }

    public function valueProvider()
    {
        return [['10'], [4.6], [self::class]];
    }
}