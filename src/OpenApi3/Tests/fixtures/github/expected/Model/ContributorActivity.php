<?php

namespace Github\Model;

class ContributorActivity
{
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
        $this->weeks = $weeks;
        return $this;
    }
}