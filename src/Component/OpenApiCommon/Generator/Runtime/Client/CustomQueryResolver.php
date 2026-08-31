<?php

use Symfony\Component\OptionsResolver\Options;

interface CustomQueryResolver
{
    /**
     * Resolve a query option value for a query parameter.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function __invoke(Options $options, mixed $value);
}
