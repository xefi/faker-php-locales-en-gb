<?php

namespace Xefi\Faker\EnGb\Extensions;

use Xefi\Faker\Extensions\Extension;

class AddressExtension extends Extension
{
    protected $counties = [
        ['ENG' => 'Bedfordshire'], ['ENG' => 'Berkshire'], ['ENG' => 'Bristol'], ['ENG' => 'Buckinghamshire'],
        ['ENG' => 'Cambridgeshire'], ['ENG' => 'Cheshire'], ['ENG' => 'Cornwall'], ['ENG' => 'Cumbria'],
        ['ENG' => 'Derbyshire'], ['ENG' => 'Devon'], ['ENG' => 'Dorset'], ['ENG' => 'Durham'],
        ['ENG' => 'East Sussex'], ['ENG' => 'Essex'], ['ENG' => 'Gloucestershire'], ['ENG' => 'Greater London'],
        ['ENG' => 'Greater Manchester'], ['ENG' => 'Hampshire'], ['ENG' => 'Herefordshire'], ['ENG' => 'Hertfordshire'],
        ['ENG' => 'Isle of Wight'], ['ENG' => 'Kent'], ['ENG' => 'Lancashire'], ['ENG' => 'Leicestershire'],
        ['ENG' => 'Lincolnshire'], ['ENG' => 'Merseyside'], ['ENG' => 'Norfolk'], ['ENG' => 'North Yorkshire'],
        ['ENG' => 'Northamptonshire'], ['ENG' => 'Northumberland'], ['ENG' => 'Nottinghamshire'], ['ENG' => 'Oxfordshire'],
        ['ENG' => 'Rutland'], ['ENG' => 'Shropshire'], ['ENG' => 'Somerset'], ['ENG' => 'South Yorkshire'],
        ['ENG' => 'Staffordshire'], ['ENG' => 'Suffolk'], ['ENG' => 'Surrey'], ['ENG' => 'Tyne and Wear'],
        ['ENG' => 'Warwickshire'], ['ENG' => 'West Midlands'], ['ENG' => 'West Sussex'], ['ENG' => 'West Yorkshire'],
        ['ENG' => 'Wiltshire'], ['ENG' => 'Worcestershire'],
        ['WLS' => 'Anglesey'], ['WLS' => 'Brecknockshire'], ['WLS' => 'Caernarfonshire'], ['WLS' => 'Cardiganshire'],
        ['WLS' => 'Carmarthenshire'], ['WLS' => 'Denbighshire'], ['WLS' => 'Flintshire'], ['WLS' => 'Glamorgan'],
        ['WLS' => 'Merioneth'], ['WLS' => 'Monmouthshire'], ['WLS' => 'Montgomeryshire'], ['WLS' => 'Pembrokeshire'],
        ['WLS' => 'Radnorshire'],
        ['SCT' => 'Aberdeenshire'], ['SCT' => 'Angus'], ['SCT' => 'Argyll'], ['SCT' => 'Ayrshire'],
        ['SCT' => 'Banffshire'], ['SCT' => 'Berwickshire'], ['SCT' => 'Caithness'], ['SCT' => 'Clackmannanshire'],
        ['SCT' => 'Dumfries'], ['SCT' => 'Dunbartonshire'], ['SCT' => 'East Lothian'], ['SCT' => 'Fife'],
        ['SCT' => 'Inverness'], ['SCT' => 'Kincardineshire'], ['SCT' => 'Kinross'], ['SCT' => 'Kirkcudbrightshire'],
        ['SCT' => 'Lanarkshire'], ['SCT' => 'Midlothian'], ['SCT' => 'Moray'], ['SCT' => 'Nairnshire'],
        ['SCT' => 'Orkney'], ['SCT' => 'Peeblesshire'], ['SCT' => 'Perthshire'], ['SCT' => 'Renfrewshire'],
        ['SCT' => 'Ross and Cromarty'], ['SCT' => 'Roxburghshire'], ['SCT' => 'Selkirkshire'], ['SCT' => 'Shetland'],
        ['SCT' => 'Stirlingshire'], ['SCT' => 'Sutherland'], ['SCT' => 'West Lothian'], ['SCT' => 'Wigtownshire'],
        ['SCT' => 'Western Isles'],
        ['NI' => 'Antrim'], ['NI' => 'Armagh'], ['NI' => 'Down'], ['NI' => 'Fermanagh'], ['NI' => 'Londonderry'], ['NI' => 'Tyrone'],
    ];

    protected $regions = [
        // ENG - England (regions)
        'East Midlands', 'East of England', 'London', 'North East', 'North West',
        'South East', 'South West', 'West Midlands', 'Yorkshire and the Humber',

        // SCT - Scotland (Council Areas)
        'Aberdeenshire', 'Angus', 'Argyll and Bute', 'Clackmannanshire',
        'Dumfries and Galloway', 'Dundee', 'East Ayrshire', 'East Dunbartonshire',
        'East Lothian', 'East Renfrewshire', 'Edinburgh', 'Falkirk', 'Fife',
        'Glasgow', 'Highland', 'Inverclyde', 'Midlothian', 'Moray',
        'North Ayrshire', 'North Lanarkshire', 'Orkney Islands', 'Perth and Kinross',
        'Renfrewshire', 'Scottish Borders', 'Shetland Islands', 'South Ayrshire',
        'South Lanarkshire', 'Stirling', 'West Dunbartonshire', 'West Lothian',

        // WLS - Wales (Principal Areas)
        'Blaenau Gwent', 'Bridgend', 'Caerphilly', 'Cardiff', 'Carmarthenshire',
        'Ceredigion', 'Conwy', 'Denbighshire', 'Flintshire', 'Gwynedd',
        'Isle of Anglesey', 'Merthyr Tydfil', 'Monmouthshire', 'Neath Port Talbot',
        'Newport', 'Pembrokeshire', 'Powys', 'Rhondda Cynon Taf', 'Swansea',
        'Torfaen', 'Vale of Glamorgan', 'Wrexham',

        // NI - Northern Ireland (Local Government Districts)
        'Antrim and Newtownabbey', 'Ards and North Down', 'Armagh, Banbridge and Craigavon',
        'Belfast', 'Causeway Coast and Glens', 'Derry and Strabane',
        'Fermanagh and Omagh', 'Lisburn and Castlereagh', 'Mid and East Antrim',
        'Mid Ulster', 'Newry, Mourne and Down'
    ];

    protected $cities = [
        'London', 'Birmingham', 'Manchester', 'Leeds', 'Glasgow', 'Liverpool', 'Newcastle', 'Sheffield',
        'Bristol', 'Edinburgh', 'Cardiff', 'Belfast', 'Nottingham', 'Leicester', 'Coventry', 'Hull',
        'Stoke-on-Trent', 'Southampton', 'Reading', 'Aberdeen', 'Cambridge', 'Oxford', 'Plymouth',
        'Derby', 'Exeter', 'Brighton', 'Norwich', 'York', 'Swansea', 'Wolverhampton', 'Portsmouth',
        'Dundee', 'Blackpool', 'Luton', 'Milton Keynes'
    ];

    protected $streetNames = [
        'High Street', 'Station Road', 'Church Lane', 'Park Avenue', 'London Road', 'Victoria Street',
        'Green Lane', 'King\'s Road', 'Queen\'s Avenue', 'Elm Street', 'The Crescent', 'York Road',
        'Main Street', 'Market Place', 'Mill Lane', 'School Lane', 'Chester Avenue', 'Parkside',
        'Brook Street', 'Grange Road', 'Hilltop', 'Bridge Street', 'New Street', 'Church Road',
        'Oakwood Drive', 'Maple Close', 'Meadow View', 'Waterloo Road', 'Clarence Street', 'Beechwood Avenue',
        'West End', 'Northgate', 'Eastfield Road', 'Southfield Drive'
    ];

    public function region(): string
    {
        return $this->pickArrayRandomElement($this->regions);
    }

    public function county(): array
    {
        return $this->pickArrayRandomElement($this->counties);
    }

    public function city(): string
    {
        return $this->pickArrayRandomElement($this->cities);
    }

    public function streetName(): string
    {
        return $this->pickArrayRandomElement($this->streetNames);
    }

    public function streetAddress(): string
    {
        return sprintf('%d %s', $this->houseNumber(), $this->streetName());
    }

    public function houseNumber(): int
    {
        return $this->randomizer->getInt(1, 200);
    }

    public function postcode(): string
    {
        $prefixLetters = $this->randomizer->getInt(0, 1) === 0
            ? chr($this->randomizer->getInt(65, 90))
            : chr($this->randomizer->getInt(65, 90)) . chr($this->randomizer->getInt(65, 90));

        $prefixDigits = $this->randomizer->getInt(0, 2);
        switch ($prefixDigits) {
            case 0:
                $middlePart = $this->randomizer->getInt(1, 9);
                break;
            case 1:
                $middlePart = $this->randomizer->getInt(1, 9) . $this->randomizer->getInt(0, 9);
                break;
            case 2:
                $middlePart = $this->randomizer->getInt(1, 9) . chr($this->randomizer->getInt(65, 90));
                break;
        }

        $suffix = $this->randomizer->getInt(0, 9) . chr($this->randomizer->getInt(65, 90)) . chr($this->randomizer->getInt(65, 90));

        return sprintf('%s%s %s', $prefixLetters, $middlePart, $suffix);
    }

    public function fullAddress(): string
    {
        return sprintf(
            '%d %s, %s, %s, %s',
            $this->houseNumber(),
            $this->streetName(),
            $this->city(),
            array_values($this->county())[0],
            $this->postcode()
        );
    }
}