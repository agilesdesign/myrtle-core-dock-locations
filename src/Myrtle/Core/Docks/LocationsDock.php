<?php

namespace Myrtle\Core\Docks;

class LocationsDock extends Dock
{
    public $description = 'Locations system';

    public function configPaths()
    {
        return [
            'docks.' . self::class => dirname(__DIR__, 2) . '/config/docks/locations.php',
        ];
    }

    public function migrationPaths()
    {
        return [
            dirname(__DIR__, 2) . '/database/migrations',
        ];
    }
}
