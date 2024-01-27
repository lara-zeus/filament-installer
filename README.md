# Filament Installer

<a href="https://github.com/lara-zeus/filament-installer/actions"><img src="https://github.com/lara-zeus/filament-installer/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/lara-zeus/filament-installer"><img src="https://img.shields.io/packagist/dt/lara-zeus/filament-installer" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/lara-zeus/filament-installer"><img src="https://img.shields.io/packagist/v/lara-zeus/filament-installer" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/lara-zeus/filament-installer"><img src="https://img.shields.io/packagist/l/lara-zeus/filament-installer" alt="License"></a>

## Note:

This is a fork from [Laravel Installer](https://github.com/laravel/installer), and I only added the filament instalation with a defualt panel and crete a user for you.

> any feedbacks are welcome

## Installation

`composer global require lara-zeus/filament-installer`

## Usage:

from your terminal run the command:

`filament new app`

follow the steps, and you're done.

### this will do:

- install laravel
- setup the database (tested in MySql only)
- install filament
- create default panel called "admin"
- create a new user in the DB with the email: "admin@app.com" and the password: "password"

> still in beta feel free to open an issue or send a PR 🙏🏽