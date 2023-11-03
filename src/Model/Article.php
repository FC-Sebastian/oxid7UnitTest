<?php

namespace Fatchip\UnitTest\Model;

class Article extends Article_Parent
{
    public function fcTestMe($return) {
        return $return;
    }
}