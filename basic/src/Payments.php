<?php

declare(strict_types=1);

namespace Griffin\Examples\Basic;

use Griffin\Migration\MigrationInterface;

class Payments implements MigrationInterface
{
    use MigrationTrait;

    /**
     * @return string[]
     */
    public function getDependencies(): array
    {
        return [
            Orders::class,
        ];
    }
}
