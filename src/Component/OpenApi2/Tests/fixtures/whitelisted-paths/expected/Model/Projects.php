<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Projects
{
    /**
     * @var list<Project>
     */
    public array $projects;
    /**
     * @var int
     */
    public int $perPage;
    /**
     * @var int
     */
    public int $totalPages;
    /**
     * @var int
     */
    public int $totalEntries;
    /**
     * @var int
     */
    public int $nextPage;
    /**
     * @var int
     */
    public int $previousPage;
    /**
     * @var int
     */
    public int $page;
    /**
     * @var PaginationLinks
     */
    public PaginationLinks $links;
}