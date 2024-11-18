<?php

namespace Xefi\Faker\EnGb;

use Xefi\Faker\EnGb\Extensions\AddressExtension;
use Xefi\Faker\EnGb\Extensions\ColorsExtension;
use Xefi\Faker\EnGb\Extensions\CompanyExtension;
use Xefi\Faker\EnGb\Extensions\FinancialExtension;
use Xefi\Faker\EnGb\Extensions\PersonExtension;
use Xefi\Faker\EnGb\Extensions\TextExtension;
use Xefi\Faker\Providers\Provider;

class FakerEnGbServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->extensions([
            AddressExtension::class,
            CompanyExtension::class,
            FinancialExtension::class,
            PersonExtension::class,
            ColorsExtension::class,
            TextExtension::class,
        ]);
    }
}
