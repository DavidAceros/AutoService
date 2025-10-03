<?php
declare(strict_types=1);
namespace App\Service;

use App\Contracts\TimeProvider;
use App\Contracts\EmailService;
use App\Contracts\AppointmentRepository;
use Exception;

class AutoServiceManager {
    private TimeProvider $time;
    private EmailService $email;
    private AppointmentRepository $repo;

    public function __construct(TimeProvider $time, EmailService $email, AppointmentRepository $repo) {
        $this->time = $time;
        $this->email = $email;
        $this->repo = $repo;
    }

    public function createAppointment(array $data): void {
        $appointment = [
            'client' => $data['client_id'],
            'date' => $this->time->now()
        ];

        try {
            $this->repo->save($appointment);
            $this->email->send($data['email'], 'Cita creada', "Tu cita: ".$appointment['date']->format(DATE_ATOM));
        } catch (Exception $e) {
            throw $e;
        }
    }
}
