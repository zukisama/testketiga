<?php

namespace Tests\Feature;

use App\Data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class serviceContainerTest extends TestCase
{

    public function testDependencyInjection()
    {
        $foo1 = $this->app->make(Foo::class); //new Foo()
        $foo2 = $this->app->make(Foo::class); //new Foo()

        self::assertEquals('foo', $foo1->foo());
        self::assertEquals('foo', $foo2->foo());
        self::assertNotSame($foo1, $foo2);
    }
}
