<?php

namespace Werkgeverslist\Form\Validation;
/**
 * Interface Validator
 * @package Werkgeverslist\Form\Validation
 */
interface Validator
{
    /**
     * Validate magic
     */
    public function validate(): void;

    /**
     * @return array
     */
    public function getErrors(): array;
}