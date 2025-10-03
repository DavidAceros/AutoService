<?php
declare(strict_types=1);
namespace App\Persistence;

use App\Contracts\AppointmentRepository;
use PDO;

class PdoAppointmentRepository implements AppointmentRepository {
    private PDO $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    public function save(array $appointment): void {
        $stmt = $this->pdo->prepare('INSERT INTO appointments(client_id, date_iso) VALUES (:client, :date)');
        $stmt->execute([
            ':client' => $appointment['client'],
            ':date' => $appointment['date']->format(DATE_ATOM)
        ]);
    }
    public function all(): array {
        $rows = $this->pdo->query('SELECT * FROM appointments')->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}
