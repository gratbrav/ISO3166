<?php

namespace gratbrav\ISO3166;

use gratbrav\ISO3166\Country\EN;
use gratbrav\ISO3166\Country\ES;

class ISO3166
{
    public array $country = [];

    public function __construct() {
        $this->country = array_merge(
            array_flip(EN::$country),
            array_flip(ES::$country),
        );
    }

    public function alpha2(string $county): string
    {
        $countryList = array_change_key_case($this->country);
        return $countryList[strtolower($county)] ?? '';
    }

    public function find(string $search): array
    {
        return array_filter($this->country, function($alpha2, $country) use($search) {
            return strpos($country, $search) !== false;
        }, ARRAY_FILTER_USE_BOTH);
    }
}