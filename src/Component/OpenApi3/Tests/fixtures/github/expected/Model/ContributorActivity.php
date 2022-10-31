<?php

namespace Github\Model;

class ContributorActivity extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var ContributorActivityAuthor|null
     */
    protected $author;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @var ContributorActivityWeeksItem[]
     */
    protected $weeks;
    /**
     * 
     *
     * @return ContributorActivityAuthor|null
     */
    public function getAuthor() : ?ContributorActivityAuthor
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param ContributorActivityAuthor|null $author
     *
     * @return self
     */
    public function setAuthor(?ContributorActivityAuthor $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * 
     *
     * @return ContributorActivityWeeksItem[]
     */
    public function getWeeks() : array
    {
        return $this->weeks;
    }
    /**
     * 
     *
     * @param ContributorActivityWeeksItem[] $weeks
     *
     * @return self
     */
    public function setWeeks(array $weeks) : self
    {
        $this->initialized['weeks'] = true;
        $this->weeks = $weeks;
        return $this;
    }
}