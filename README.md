# 🚗 AutoService Refactored – Testable PHP System

This project is a **self-directed practical workshop** where we take **untestable legacy code** and transform it into a **clean, modular, and 100% testable architecture** using PHP.

The scenario is an **auto repair shop system** that handles customers, appointments, and invoices.
The goal: apply **dependency injection, test doubles, and transactional databases** to achieve high test coverage (>90%).

---

## 🎯 Objective

Refactor a legacy system to be testable by applying 3 key concepts:

1. **Tests with transactional databases (SQLite in-memory)**
2. **Testability-focused design (dependency injection)**
3. **Effective use of test doubles (Mocks, Fakes, Spies, InMemory repos)**

---

## 📂 Project Structure

├─ src/
│ ├─ Contracts/ # Interfaces (TimeProvider, EmailService, Repository)
│ ├─ Service/ # Core business logic (AutoServiceManager)
│ ├─ Persistence/ # Real implementation with PDO + SQLite
│ └─ TestDoubles/ # Fakes and InMemory repos for testing
├─ tests/ # Unit and integration tests with PHPUnit
├─ composer.json
├─ phpunit.xml
└─ README.md



---

## ⚙️ Installation and Setup

### 1. Requirements

* PHP >= 8.1
* [Composer](https://getcomposer.org/)
* PHP `pdo_sqlite` extension enabled

  * Verify with:

    ```bash
    php -m | grep sqlite
    ```
  * If not present, enable in `php.ini`:

    ```
    extension=pdo_sqlite
    extension=sqlite3
    ```

### 2. Installation

Clone the repository and install dependencies:

```bash
git clone https://github.com/yourusername/autoservice-refactor.git
cd autoservice-refactor
composer install

./vendor/bin/phpunit

XDEBUG_MODE=coverage ./vendor/bin/phpunit --coverage-html coverage

📝 Suggested Exercises
Transactional Database Tests

Insert appointment → verify persistence → automatic rollback

Validate FOREIGN KEY constraints (fail if customer doesn't exist)

Refactoring for Testability

Identify problems in legacy code

Apply dependency injection step by step

Advanced Test Doubles

Mock: verify correct email is sent

Spy: capture notification calls

Fake: simulate payment gateway

🚀 Conclusion
With this refactoring we achieved:

Decoupled, modular, and maintainable code

Reliable unit and integration tests

Ability to reach high test coverage (>90%)

Flexibility to add new features without breaking existing functionality
