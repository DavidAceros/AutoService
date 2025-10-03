<?php
declare(strict_types=1);
namespace App\Contracts;

interface EmailService {
    public function send(string $to, string $subject, string $body): void;
}
