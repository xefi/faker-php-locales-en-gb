<?php

namespace Xefi\Faker\EnGb\Tests\Unit;

use Xefi\Faker\Calculators\Iban;

final class FinancialExtensionTest extends TestCase
{
    public function testIban()
    {
        $iban = $this->faker->iban();

        $this->assertMatchesRegularExpression('/^GB\d{2}[A-Z]{4}\d{14}$/', $iban);
        $this->assertStringStartsWith('GB', $iban);
        $this->assertTrue(Iban::isValid($iban));
    }
}
