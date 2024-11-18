<?php

final class ColorsExtensionTest extends \Xefi\Faker\EnGb\Tests\Unit\TestCase
{
    protected array $safeColorNames = [];
    protected array $colorNames = [];

    protected function setUp(): void
    {
        parent::setUp();

        $colorsExtension = new \Xefi\Faker\EnGb\Extensions\ColorsExtension(new \Random\Randomizer());
        $this->safeColorNames = (new ReflectionClass($colorsExtension))->getProperty('safeColorNames')->getValue($colorsExtension);
        $this->colorNames = (new ReflectionClass($colorsExtension))->getProperty('colorNames')->getValue($colorsExtension);
    }

    public function testSafeColorNames(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->safeColorNames); $i++) {
            $results[] = $this->faker->unique()->safeColorName();
        }

        $this->assertEqualsCanonicalizing(
            $this->safeColorNames,
            $results
        );
    }

    public function testColorNames(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->colorNames); $i++) {
            $results[] = $this->faker->unique()->colorName();
        }

        $this->assertEqualsCanonicalizing(
            $this->colorNames,
            $results
        );
    }
}
