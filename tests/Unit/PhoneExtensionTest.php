<?php

namespace Xefi\Faker\EnGb\Tests\Unit;

final class PhoneExtensionTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0(2[089]\d{8}|1(1[3-8]|[2-6]1)\d{7}|7[45789]\d{8})$/', $this->faker->phoneNumber());
        }
    }

    public function testLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0(2[089]-\d{4}-\d{4}|1(1[3-8]|[2-6]1)-\d{3}-\d{4})$/', $this->faker->dashedLandlinePhoneNumber());
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^07[45789]\d{2} \d{6}$/', $this->faker->spacedCellPhoneNumber());
        }
    }

    public function testIndicatoredPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^\+44(2[089]\d{8}|1(1[3-8]|[2-6]1)\d{7}|7[45789]\d{8})$/', $this->faker->indicatoredPhoneNumber());
        }
    }

    public function testIndicatorIsSeparatedFromTheNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertStringStartsWith('+44 ', $this->faker->spacedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+44-', $this->faker->dashedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+44.', $this->faker->dottedIndicatoredPhoneNumber());
            $this->assertMatchesRegularExpression('/^\+44\d+$/', $this->faker->indicatoredPhoneNumber());
        }
    }
}
