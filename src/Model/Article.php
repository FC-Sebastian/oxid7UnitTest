<?php

namespace Fatchip\UnitTest\Model;

class Article extends Article_parent
{
    public function fcTestMe($return) {
        return $return;
    }
}