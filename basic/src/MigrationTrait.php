<?php

declare(strict_types=1);

namespace Griffin\Examples\Basic;

trait MigrationTrait
{
    protected bool $status = false;

    public function getName(): string
    {
        return self::class;
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
