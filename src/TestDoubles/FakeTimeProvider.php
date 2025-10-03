<?php
declare(strict_types=1);
namespace App\TestDoubles;

use App\Contracts\TimeProvider;
use DateTimeImmutable;

class FakeTimeProvider implements TimeProvider {
    private DateTimeImmutable $now;
    public function __construct(DateTimeImmutable $now) {
        $this->now = $now;
    }
    public function now(): DateTimeImmutable {
        return $this->now;
    }
}
