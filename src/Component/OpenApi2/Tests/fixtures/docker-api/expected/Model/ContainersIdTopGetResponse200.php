<?php

namespace Docker\Api\Model;

class ContainersIdTopGetResponse200
{
    /**
     * The ps column titles
     *
     * @var list<string>
     */
    public array $titles;
    /**
     * Each process running in the container, where each is process
     * is an array of values corresponding to the titles.
     * 
     *
     * @var list<list<string>>
     */
    public array $processes;
}