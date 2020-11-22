<?php

namespace Github\Model;

class BranchWithProtection
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Commit
     *
     * @var Commit
     */
    protected $commit;
    /**
     * 
     *
     * @var BranchWithProtectionLinks
     */
    protected $links;
    /**
     * 
     *
     * @var bool
     */
    protected $protected;
    /**
     * Branch Protection
     *
     * @var BranchProtection
     */
    protected $protection;
    /**
     * 
     *
     * @var string
     */
    protected $protectionUrl;
    /**
     * 
     *
     * @var string
     */
    protected $pattern;
    /**
     * 
     *
     * @var int
     */
    protected $requiredApprovingReviewCount;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Commit
     *
     * @return Commit
     */
    public function getCommit() : Commit
    {
        return $this->commit;
    }
    /**
     * Commit
     *
     * @param Commit $commit
     *
     * @return self
     */
    public function setCommit(Commit $commit) : self
    {
        $this->commit = $commit;
        return $this;
    }
    /**
     * 
     *
     * @return BranchWithProtectionLinks
     */
    public function getLinks() : BranchWithProtectionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param BranchWithProtectionLinks $links
     *
     * @return self
     */
    public function setLinks(BranchWithProtectionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getProtected() : bool
    {
        return $this->protected;
    }
    /**
     * 
     *
     * @param bool $protected
     *
     * @return self
     */
    public function setProtected(bool $protected) : self
    {
        $this->protected = $protected;
        return $this;
    }
    /**
     * Branch Protection
     *
     * @return BranchProtection
     */
    public function getProtection() : BranchProtection
    {
        return $this->protection;
    }
    /**
     * Branch Protection
     *
     * @param BranchProtection $protection
     *
     * @return self
     */
    public function setProtection(BranchProtection $protection) : self
    {
        $this->protection = $protection;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProtectionUrl() : string
    {
        return $this->protectionUrl;
    }
    /**
     * 
     *
     * @param string $protectionUrl
     *
     * @return self
     */
    public function setProtectionUrl(string $protectionUrl) : self
    {
        $this->protectionUrl = $protectionUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPattern() : string
    {
        return $this->pattern;
    }
    /**
     * 
     *
     * @param string $pattern
     *
     * @return self
     */
    public function setPattern(string $pattern) : self
    {
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRequiredApprovingReviewCount() : int
    {
        return $this->requiredApprovingReviewCount;
    }
    /**
     * 
     *
     * @param int $requiredApprovingReviewCount
     *
     * @return self
     */
    public function setRequiredApprovingReviewCount(int $requiredApprovingReviewCount) : self
    {
        $this->requiredApprovingReviewCount = $requiredApprovingReviewCount;
        return $this;
    }
}