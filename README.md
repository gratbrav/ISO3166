# ISO3166

A small library for the ISO 3166-1 alpha-2 standard

## Usage

```php
$iso = new gratbrav\ISO3166\ISO3166();
// returns AD
$iso->alpha2('Andorra');
```

Found function
```php
$iso = new gratbrav\ISO3166\ISO3166();
$iso->find('Islands');
```
will response:
```php
[
    [AX] => Åland Islands
    [CC] => Cocos (Keeling) Islands
    [CK] => Cook Islands
    [FK] => Falkland Islands
    [FO] => Faroe Islands
    [GS] => South Georgia and the South Sandwich Islands
    [HM] => Heard Island and McDonald Islands
    [KY] => Cayman Islands
    ...
]
```
