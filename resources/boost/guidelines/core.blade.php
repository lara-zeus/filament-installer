## Lara Zeus Filament Installer (`lara-zeus/installer`)

Global CLI installer (forked from Laravel Installer) that scaffolds a fresh Laravel application with Filament panels and an initial admin user pre-installed.

### Key Components
- CLI Binary: `bin/filament`
- Command: `LaraZeus\Installer\NewCommand` (`filament new <name>`)
- Trait: `LaraZeus\Installer\Concerns\FilamentInstaller`
- Not a Laravel runtime package: no `ServiceProvider`, no Filament `Plugin` class, no config, and no migrations.

### Rules & Anti-Patterns
- **Install globally, not per-project**: Install via `composer global require lara-zeus/installer`; do not add it as a runtime dependency to an existing Laravel application or register it in a Filament `Panel`.
- **Do not assume existing-app installation**: `filament new <name>` creates a brand-new project directory (`laravel/laravel` or starter kit) and then runs `composer require filament/filament`, `php artisan filament:install --panels`, and `php artisan make:filament-user`.
- **Change seeded credentials before production**: `FilamentInstaller` creates an initial user with email `admin@<name>.com` and password `password`.
