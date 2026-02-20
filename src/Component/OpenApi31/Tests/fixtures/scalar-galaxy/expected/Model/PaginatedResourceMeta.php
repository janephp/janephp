<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class PaginatedResourceMeta
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var int
     */
    protected $limit;
    /**
     * @var int
     */
    protected $offset;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var string|null
     */
    protected $next;
    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }
    /**
     * @param int $offset
     *
     * @return self
     */
    public function setOffset(int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNext(): ?string
    {
        return $this->next;
    }
    /**
     * @param string|null $next
     *
     * @return self
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
}