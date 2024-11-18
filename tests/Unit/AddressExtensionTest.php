<?php

namespace Xefi\Faker\EnGb\Tests\Unit;

use ReflectionClass;

final class AddressExtensionTest extends TestCase
{
    protected array $counties = [];
    protected array $regions = [];

    protected function setUp(): void
    {
        parent::setUp();

        $addressExtension = new \Xefi\Faker\EnGb\Extensions\AddressExtension(new \Random\Randomizer());
        $this->regions = (new ReflectionClass($addressExtension))->getProperty('regions')->getValue($addressExtension);
        $this->counties = (new ReflectionClass($addressExtension))->getProperty('counties')->getValue($addressExtension);
    }

    public function testRegion(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->regions); $i++) {
            $results[] = $this->faker->unique()->region();
        }

        $this->assertEqualsCanonicalizing(
            $this->regions,
            $results
        );
    }

    public function testCounty(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->counties); $i++) {
            $results[] = $this->faker->unique()->county();
        }

        $this->assertEquals(
            sort($this->counties),
            sort($results)
        );
    }
}
