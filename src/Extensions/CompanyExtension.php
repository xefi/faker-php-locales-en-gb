<?php

namespace Xefi\Faker\EnGb\Extensions;

use Xefi\Faker\Calculators\Luhn;
use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    private array $companies = [
        "TechWave Innovations", "CloudSphere Solutions", "Quantum Nexus Labs",
        "FutureSync Systems", "DigitalFoundry Inc.", "PrimeCore Investments",
        "EverTrust Capital", "SafeHaven Financials", "WealthWise Group",
        "BlueChip Advisors", "VitalBloom Healthcare", "PureWellness Clinics",
        "MediCore Diagnostics", "BrightPath Medical", "CareUnity Group",
        "GreenPeak Energy", "SolarSphere Dynamics", "EcoCurrent Solutions",
        "Infinity Power Corp.", "BrightGrid Utilities", "GoldenOak Ventures",
        "UrbanEdge Retail", "NextGen Supplies", "ClearSky Services",
        "AnchorPoint Logistics", "IronClad Manufacturing", "SteelCore Industries",
        "PrimeMotion Fabricators", "EverCraft Machineries", "Vertex Assembly Co."
    ];

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

    public function company(): string
    {
        return $this->pickArrayRandomElement($this->companies);
    }
}
