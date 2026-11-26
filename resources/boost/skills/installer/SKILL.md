---
name: zeus-installer
description: Scaffold a new Laravel application with Filament panels and an admin user using the global Lara Zeus Filament Installer CLI.
---

# Lara Zeus Filament Installer

## Overview & Requirements
`lara-zeus/installer` is a fork of the Laravel Installer that provides the `filament` CLI binary to create a new Laravel project, configure the database, install `filament/filament`, scaffold the default `admin` panel, and create an initial Filament user.

- **Package**: `lara-zeus/installer` (Free / MIT)
- **Requirements**: PHP `^8.2`, `illuminate/filesystem` `^10.20|^11.0|^12.0|^13.0`, `illuminate/support` `^10.20|^11.0|^12.0|^13.0`, `laravel/prompts` `^0.3`, `symfony/console` `^8.1.11`, `symfony/process` `^6.2|^7.0`

## Installation
Install globally with Composer (ensure Composer's global `vendor/bin` is on your `PATH`):

```bash
composer global require lara-zeus/installer
```

## Configuration & Migrations
None. This is a standalone CLI tool (`bin/filament`) with no Laravel service provider, config files, or package migrations.

## Filament Panel Registration
None. It generates a new application and runs `php artisan filament:install --panels` automatically during project creation.

## Core Usage

### Create a New Laravel + Filament Project
```bash
filament new my-app
```

During execution, `LaraZeus\Installer\NewCommand`:
1. Prompts for project options (starter kit, testing framework, database driver, NPM build) or reads CLI flags (`--database`, `--react`, `--vue`, `--livewire`, `--workos`, `--pest`, `--phpunit`, `--git`, `--github`, `--npm`, `--force`, `--dev`).
2. Runs `composer create-project` and `php artisan key:generate`.
3. Configures `.env` / `.env.example` database settings and optionally runs `php artisan migrate`.
4. Runs `FilamentInstaller::installFilament()`:
   - `composer require filament/filament`
   - `php artisan filament:install --panels`
   - `php artisan make:filament-user --name=Admin --email="admin@<name>.com" --password=password`

## Common Pitfalls & Anti-Patterns
- **Adding to an existing project**: Do not `composer require lara-zeus/installer` inside an existing app expecting Artisan commands or a panel plugin; use `composer global require` and run `filament new`.
- **Database driver & migrations**: Non-SQLite drivers require the database to exist before migrations run; if using `--database`, valid drivers are `mysql`, `mariadb`, `pgsql`, `sqlite`, and `sqlsrv`.
- **Default admin credentials**: The installer seeds `admin@<name>.com` with password `password`—change these before deploying.
