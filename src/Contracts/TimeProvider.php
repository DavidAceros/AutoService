<?php
declare(strict_types=1);
namespace App\Contracts;

use DateTimeImmutable;

interface TimeProvider {
    public function now(): DateTimeImmutable;
}
