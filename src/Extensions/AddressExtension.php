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
        'England', 'Scotland', 'Wales', 'Northern Ireland',
    ];

    public function region(): string
    {
        return $this->pickArrayRandomElement($this->regions);
    }

    public function county(): array
    {
        return $this->pickArrayRandomElement($this->counties);
    }
}
