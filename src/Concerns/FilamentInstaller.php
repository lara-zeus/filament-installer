<?php

namespace LaraZeus\Installer\Concerns;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

trait FilamentInstaller
{
    /**
     * Install FilamentPHP into the application.
     *
     * @return void
     */
    protected function installFilament(string $directory, InputInterface $input, OutputInterface $output): void
    {
        $name = $input->getArgument('name');

        $commands = array_filter([
            $this->findComposer().' require filament/filament', //--quiet
            $this->phpBinary().' artisan filament:install --panels', // --no-interaction --quiet
        ]);

        $this->runCommands($commands, $input, $output, workingPath: $directory);

        $this->runCommands([$this->phpBinary().' artisan make:filament-user --name=Admin --email="admin@'.$name.'.com" --password=password'], $input, $output, workingPath: $directory);

        $this->commitChanges('Install Filament', $directory, $input, $output);
    }
}