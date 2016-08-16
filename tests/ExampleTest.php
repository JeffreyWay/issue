<?php

use App\Events\UserSignedUp;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $mock = Mockery::mock('Illuminate\Events\Dispatcher')->shouldIgnoreMissing();

        $mock->shouldReceive('fire')->once()->with(Mockery::on(function ($event) {
            return $event->user instanceof \App\User;
        }));

        app()->instance('events', $mock);

        $this->visit('using-facade');
    }
}

