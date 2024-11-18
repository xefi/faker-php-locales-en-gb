<?php

namespace Xefi\Faker\EnGb\Tests\Unit;

use Xefi\Faker\Container\Container;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected Container $faker;

    protected function setUp(): void
    {
        Container::packageManifestPath('/tmp/packages.php');

        (new \Xefi\Faker\EnGb\FakerEnGbServiceProvider())->boot();

        $this->faker = (new Container(false))->locale('en_GB');
    }
}
