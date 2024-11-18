<?php

namespace Xefi\Faker\EnGb\Extensions;

use Xefi\Faker\Extensions\TextExtension as BaseTextExtension;

class TextExtension extends BaseTextExtension
{
    public function getLocale(): string|null
    {
        return 'en_GB';
    }

    protected array $paragraphs = [
        [
            ['Innovation', 'drives', 'progress', 'in', 'modern', 'industries', 'and', 'services.'],
            ['Collaboration', 'between', 'teams', 'leads', 'to', 'more', 'efficient', 'outcomes.'],
            ['Effective', 'communication', 'is', 'a', 'cornerstone', 'of', 'productive', 'work', 'environments.'],
            ['Flexibility', 'and', 'adaptability', 'are', 'crucial', 'in', 'dynamic', 'business', 'settings.'],
        ],
        [
            ['Resource', 'management', 'is', 'essential', 'for', 'achieving', 'organizational', 'goals.'],
            ['Continuous', 'improvement', 'helps', 'businesses', 'stay', 'competitive', 'and', 'relevant.'],
            ['The', 'use', 'of', 'technology', 'enables', 'teams', 'to', 'work', 'smarter', 'and', 'faster.'],
            ['Strategic', 'planning', 'leads', 'to', 'long-term', 'success', 'in', 'challenging', 'markets.'],
        ],
        [
            ['Customer', 'satisfaction', 'remains', 'a', 'key', 'metric', 'for', 'business', 'success.'],
            ['Monitoring', 'progress', 'helps', 'identify', 'opportunities', 'for', 'growth', 'and', 'improvement.'],
            ['Daily', 'challenges', 'are', 'overcome', 'through', 'teamwork', 'and', 'innovative', 'solutions.'],
            ['Regular', 'reviews', 'ensure', 'processes', 'align', 'with', 'business', 'objectives.'],
        ],
        [
            ['Professional', 'development', 'empowers', 'employees', 'to', 'reach', 'their', 'full', 'potential.'],
            ['Training', 'programs', 'support', 'both', 'individual', 'and', 'organizational', 'growth.'],
            ['Continuous', 'learning', 'encourages', 'innovation', 'and', 'adaptation', 'to', 'changing', 'needs.'],
            ['Personalized', 'approaches', 'to', 'development', 'promote', 'engagement', 'and', 'employee', 'retention.'],
        ],
        [
            ['Data', 'analysis', 'provides', 'insights', 'into', 'performance', 'and', 'market', 'trends.'],
            ['Goals', 'are', 'adjusted', 'to', 'align', 'with', 'changing', 'customer', 'expectations.'],
            ['Regular', 'reviews', 'allow', 'quick', 'responses', 'to', 'emerging', 'challenges.'],
            ['Decisions', 'are', 'driven', 'by', 'accurate', 'data', 'and', 'clear', 'strategies.'],
            ['Ongoing', 'evaluations', 'refine', 'approaches', 'and', 'drive', 'sustainable', 'growth.'],
        ],
    ];
}
