<?php namespace Werkgeverslist\Workgroup;

use Werkgeverslist\Persons\Werkgever;

/**
 * Interface HRCLass
 */
interface Werkgroep
{
    /**
     * @return array
     */
    public function getWorkers(): array;

    /**
     * @param Werkgever[] $werkgevers
     * @return void
     */
    public function setWorkers(array $werkgevers): void;
}
