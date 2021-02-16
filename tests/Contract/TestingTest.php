<?php

namespace Tests\Contract;

use Spectator\Spectator;
use Tests\TestCase;

class TestingTest extends TestCase
{
    /** @test */
    public function it_validates_the_testing_endpoint()
    {
        Spectator::using('openapi.yml');

        $this
            ->getJson(route('api.testing.index'))
            ->assertValidRequest()
            ->assertValidResponse(200);
    }
}
