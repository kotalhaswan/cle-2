<?php

namespace Werkgeverslist\Workgroup;
use Werkgeverslist\Persons\Werkgever;


class equansWerkers implements Werkgroep
{
    public string $name = 'Advanced Group';
    public string $slogan = 'We rock!';
    private array $students = [];
    public const MAX_STUDENTS = 25;

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

        if ($this->getTotalWorkers() > self::MAX_STUDENTS) {
            throw new \Exception('Too many students!');
        }
    }

    /**
     * @return int
     */
    public function getTotalWorkers(): int
    {
        return count($this->werkgevers);
    }
}