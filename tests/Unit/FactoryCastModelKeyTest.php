<?php

namespace Tests\Unit;

use App\Models\TestModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FactoryCastModelKeyTest extends TestCase
{
    use RefreshDatabase;

    // A factory create does not cast the ID properly.
    public function testFactoryCreate()
    {
        $test = TestModel::factory()->create();

        $this->assertEquals('string', gettype($test->id));
    }

    // A factory create and then separate fetch works just fine, and the ID casts properly
    public function testFactoryCreateAndGet()
    {
        TestModel::factory()->create();
        $test = TestModel::all()->first();

        $this->assertEquals('string', gettype($test->id));
    }
}

