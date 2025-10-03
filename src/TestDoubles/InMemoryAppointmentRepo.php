<?php
declare(strict_types=1);
namespace App\TestDoubles;

use App\Contracts\AppointmentRepository;

class InMemoryAppointmentRepo implements AppointmentRepository {
    private array $items = [];
    public function save(array $appointment): void {
        $this->items[] = $appointment;
    }
    public function all(): array {
        return $this->items;
    }
}
