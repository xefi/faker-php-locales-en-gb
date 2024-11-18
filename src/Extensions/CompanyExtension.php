<?php

namespace Xefi\Faker\EnGb\Extensions;

use Xefi\Faker\Calculators\Luhn;
use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    public function vatNumber(): string
    {
        $prefix = 'GB';
        $suffix = $this->randomizer->getBytesFromString(implode(range(0, 9)), 9);

        return $prefix . $suffix;
    }

    public function companyRegistrationNumber(): string
    {
        $format = $this->randomizer->getInt(0, 1) === 0
            ? str_repeat('{d}', 8)
            : str_repeat('{l}', 2) . str_repeat('{d}', 6);

        return $this->formatString($format);
    }
}
