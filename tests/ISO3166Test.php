<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ISO3166Test extends TestCase
{
    public function testAlpha2(): void
    {
        $iso = new gratbrav\ISO3166\ISO3166();

        $this->assertSame('AD', $iso->alpha2('Andorra'));
        $this->assertSame('AE', $iso->alpha2('united arab emirates'));
    }

    public function testFind(): void
    {
        $iso = new gratbrav\ISO3166\ISO3166();

        $this->assertIsArray($iso->find('Islands'));
        $this->assertGreaterThan(1, count($iso->find('Islands')));
        $this->assertCount(0, $iso->find('XYZ'));
    }
}