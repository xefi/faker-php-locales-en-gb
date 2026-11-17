<?php

namespace Xefi\Faker\EnGb\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public string $defaultPrefix = '0';

    public string $indicator = '+44';

    /**
     * Get the locale handled by this extension.
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return 'en_GB';
    }

    protected array $landlineFormats = [
        '20{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '28{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '29{separator}{d}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '113{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '114{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '115{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '116{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '117{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '118{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '121{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '131{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '141{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '151{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
        '161{separator}{d}{d}{d}{separator}{d}{d}{d}{d}',
    ];

    protected array $cellFormats = [
        '74{d}{d}{separator}{d}{d}{d}{d}{d}{d}',
        '75{d}{d}{separator}{d}{d}{d}{d}{d}{d}',
        '77{d}{d}{separator}{d}{d}{d}{d}{d}{d}',
        '78{d}{d}{separator}{d}{d}{d}{d}{d}{d}',
        '79{d}{d}{separator}{d}{d}{d}{d}{d}{d}',
    ];
}
