<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'fc_unitTestTest',
    'title'       => 'UnitTestTest',
    'description' =>  '',
    'thumbnail'   => 'pictures/logo.png',
    'version'     => '2.0.0',
    'author'      => 'OXID eSales AG',
    'url'         => '',
    'email'       => '',
    'extend'      => [
        \OxidEsales\Eshop\Application\Model\Article::class => \Fatchip\UnitTest\Model\Article::class,
    ]
];
