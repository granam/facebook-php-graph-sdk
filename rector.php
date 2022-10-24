<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/tests',
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_73,
        \Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_40,
        \Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_50,
        \Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_60,
        \Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_70,
        \Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_80,
        \Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_90,
        \Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_91,
    ]);
};
