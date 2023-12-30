<?php

declare(strict_types=1);

namespace {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }}Bundle\Tests\Unit;

class {{ camelcase (snakecase PackageName) }}Test extends TestCase
{
    public function testExample(): void
    {
        $this->assertTrue(true);
    }
}
