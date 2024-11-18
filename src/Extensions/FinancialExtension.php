<?php

namespace Xefi\Faker\EnGb\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;

class FinancialExtension extends BaseFinancialExtension
{
    public function getLocale(): string|null
    {
        return 'en_GB';
    }

    public function iban(?string $countryCode = null, ?string $format = null): string
    {
        if ($countryCode === null) {
            $countryCode = 'GB';
        }

        if ($format === null) {
            $format = sprintf(
                '%s%s%s%s',
                str_repeat('{d}', 2),  // Check digits
                str_repeat('{l}', 4),  // Bank code (letters)
                str_repeat('{d}', 6),  // Sort code (digits)
                str_repeat('{d}', 8)   // Account number (digits)
            );
        }

        return parent::iban($countryCode, $format);
    }
}
