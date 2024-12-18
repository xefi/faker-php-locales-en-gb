<?php

namespace Xefi\Faker\EnGb\Tests\Unit;

use Random\Randomizer;
use Xefi\Faker\EnGb\Extensions\CompanyExtension;

final class CompanyExtensionTest extends TestCase
{
    protected array $companies = [];

    protected function setUp(): void
    {
        parent::setUp();

        $companyExtension = new CompanyExtension(new Randomizer());
        $this->companies = (new \ReflectionClass($companyExtension))->getProperty('companies')->getValue($companyExtension);
    }

    public function testVatNumber()
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->vatNumber();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression('/^GB\d{9}$/', $result, 'VAT number should start with "GB" and have 9 digits.');
            $this->assertEquals(11, strlen($result), 'VAT number should be 11 characters long (GB + 9 digits).');
        }
    }

    public function testCompanyRegistrationNumber()
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->companyRegistrationNumber();
        }

        foreach ($results as $result) {
            if (preg_match('/^\d{8}$/', $result)) {
                $this->assertEquals(8, strlen($result), 'Company registration number should be 8 digits long.');
            } elseif (preg_match('/^[A-Za-z]{2}\d{6}$/', $result)) {
                $this->assertEquals(8, strlen($result), 'Company registration number should have 2 letters followed by 6 digits.');
            } else {
                $this->fail('Unexpected company registration number format: ' . $result);
            }
        }
    }

    public function testCompany()
    {
        $results = [];
        for ($i = 0; $i < count($this->companies); $i++) {
            $results[] = $this->faker->unique()->company();
        }

        $this->assertEqualsCanonicalizing(
            $this->companies,
            $results
        );
    }
}
