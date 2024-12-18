<?php

namespace Xefi\Faker\EnGb\Tests\Unit;

use Random\Randomizer;
use Xefi\Faker\EnGb\Extensions\AddressExtension;
use ReflectionClass;

final class AddressExtensionTest extends TestCase
{
    protected AddressExtension $addressExtension;
    protected array $counties = [];
    protected array $regions = [];
    protected array $cities = [];
    protected array $streetNames = [];

    protected function setUp(): void
    {
        parent::setUp();

        $addressExtension = new AddressExtension(new Randomizer());
        $reflection = new ReflectionClass($addressExtension);

        $this->regions = $reflection->getProperty('regions')->getValue($addressExtension);
        $this->counties = $reflection->getProperty('counties')->getValue($addressExtension);
        $this->cities = $reflection->getProperty('cities')->getValue($addressExtension);
        $this->streetNames = $reflection->getProperty('streetNames')->getValue($addressExtension);
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

    public function testCities(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->cities); $i++) {
            $results[] = $this->faker->unique()->city();
        }

        $this->assertEqualsCanonicalizing(
            $this->cities,
            $results
        );
    }

    public function testStreetName(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->streetNames); $i++) {
            $results[] = $this->faker->unique()->streetName();
        }

        $this->assertEqualsCanonicalizing(
            $this->streetNames,
            $results
        );
    }

    public function testStreetAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $streetAddress = $this->faker->unique()->streetAddress();

            [$houseNumber, $streetName] = explode(' ', $streetAddress, 2);
            $this->assertGreaterThanOrEqual(1, $houseNumber);
            $this->assertLessThanOrEqual(200, $houseNumber);
            $this->assertContains($streetName, $this->streetNames);
        }
    }

    public function testHouseNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $houseNumber = $this->faker->unique()->houseNumber();
            $this->assertGreaterThanOrEqual(1, $houseNumber);
            $this->assertLessThanOrEqual(200, $houseNumber);
        }
    }

    public function testPostcodeFormat(): void
    {
        $pattern = '/^[A-Z]{1,2}[1-9][0-9A-Z]? \d[A-Z]{2}$/';

        for ($i = 0; $i < 100; $i++) {
            $postcode = $this->faker->postcode();
            $this->assertMatchesRegularExpression($pattern, $postcode);
        }
    }

    public function testFullAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $fullAddress = $this->faker->unique()->fullAddress();

            $this->assertMatchesRegularExpression(
                '/^\d{1,3} .+, .+, .+, [A-Z]{1,2}[1-9][0-9A-Z]? \d[A-Z]{2}$/',
                $fullAddress
            );
        }
    }
}
