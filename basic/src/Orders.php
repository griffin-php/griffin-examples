<?php

declare(strict_types=1);

namespace Griffin\Examples\Basic;

use Griffin\Migration\MigrationInterface;

class Orders implements MigrationInterface
{
    protected bool $status = false;

    public function getName(): string
    {
        return self::class;
    }

    /**
     * @return string[]
     */
    public function getDependencies(): array
    {
        return [];
    }

    public function assert(): bool
    {
        return $this->status;
    }

    public function up(): void
    {
        $this->status = true;
    }

    public function down(): void
    {
        $this->status = false;
    }
}
