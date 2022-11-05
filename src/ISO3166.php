<?php

namespace gratbrav\ISO3166;

use gratbrav\ISO3166\Country\EN;

class ISO3166
{
    public array $country = [];

    public function __construct() {
        $this->country = array_merge(
            array_flip(EN::$country),
        );
    }

    public function alpha2(string $county): string
    {
        $countryList = array_change_key_case($this->country);
        return $countryList[strtolower($county)] ?? '';
    }
}