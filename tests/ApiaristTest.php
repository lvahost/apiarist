<?php

namespace thepirateorange\Apiarist\Tests;

use thepirateorange\Apiarist\Facades\Apiarist;
use thepirateorange\Apiarist\ServiceProvider;
use Orchestra\Testbench\TestCase;

class ApiaristTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'apiarist' => Apiarist::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
