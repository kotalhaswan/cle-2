<?php

namespace Werkgeverslist\Workgroup;
use Werkgeverslist\Persons\Werkgever;


class equansWerkers implements Werkgroep
{

    /**
     * @return Werkgever[]
     */
    public function getWorkers(): array
    {
        return $this->werkgevers;
    }

    /**
     * Retrieve raw array value & pass to Student object
     *
     * @param Werkgever[] $werkgevers
     * @throws \Exception
     */
    public function setWorkers(array $werkgevers): void
    {
        $this->werkgevers = $werkgevers;

    }

    /**
     * @return int
     */
    public function getTotalWorkers(): int
    {
        return count($this->werkgevers);
    }
}