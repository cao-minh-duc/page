<?php

namespace UiBuilder\Page\Tests;

use Orchestra\Testbench\TestCase;
use UiBuilder\Page\PageServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PageServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
