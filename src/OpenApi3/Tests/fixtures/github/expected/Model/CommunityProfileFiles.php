<?php

namespace Github\Model;

class CommunityProfileFiles
{
    /**
     * 
     *
     * @var CommunityProfileFilesCodeOfConduct|null
     */
    protected $codeOfConduct;
    /**
     * 
     *
     * @var CommunityProfileFilesLicense|null
     */
    protected $license;
    /**
     * 
     *
     * @var CommunityProfileFilesContributing|null
     */
    protected $contributing;
    /**
     * 
     *
     * @var CommunityProfileFilesReadme|null
     */
    protected $readme;
    /**
     * 
     *
     * @var CommunityProfileFilesIssueTemplate|null
     */
    protected $issueTemplate;
    /**
     * 
     *
     * @var CommunityProfileFilesPullRequestTemplate|null
     */
    protected $pullRequestTemplate;
    /**
     * 
     *
     * @return CommunityProfileFilesCodeOfConduct|null
     */
    public function getCodeOfConduct() : ?CommunityProfileFilesCodeOfConduct
    {
        return $this->codeOfConduct;
    }
    /**
     * 
     *
     * @param CommunityProfileFilesCodeOfConduct|null $codeOfConduct
     *
     * @return self
     */
    public function setCodeOfConduct(?CommunityProfileFilesCodeOfConduct $codeOfConduct) : self
    {
        $this->codeOfConduct = $codeOfConduct;
        return $this;
    }
    /**
     * 
     *
     * @return CommunityProfileFilesLicense|null
     */
    public function getLicense() : ?CommunityProfileFilesLicense
    {
        return $this->license;
    }
    /**
     * 
     *
     * @param CommunityProfileFilesLicense|null $license
     *
     * @return self
     */
    public function setLicense(?CommunityProfileFilesLicense $license) : self
    {
        $this->license = $license;
        return $this;
    }
    /**
     * 
     *
     * @return CommunityProfileFilesContributing|null
     */
    public function getContributing() : ?CommunityProfileFilesContributing
    {
        return $this->contributing;
    }
    /**
     * 
     *
     * @param CommunityProfileFilesContributing|null $contributing
     *
     * @return self
     */
    public function setContributing(?CommunityProfileFilesContributing $contributing) : self
    {
        $this->contributing = $contributing;
        return $this;
    }
    /**
     * 
     *
     * @return CommunityProfileFilesReadme|null
     */
    public function getReadme() : ?CommunityProfileFilesReadme
    {
        return $this->readme;
    }
    /**
     * 
     *
     * @param CommunityProfileFilesReadme|null $readme
     *
     * @return self
     */
    public function setReadme(?CommunityProfileFilesReadme $readme) : self
    {
        $this->readme = $readme;
        return $this;
    }
    /**
     * 
     *
     * @return CommunityProfileFilesIssueTemplate|null
     */
    public function getIssueTemplate() : ?CommunityProfileFilesIssueTemplate
    {
        return $this->issueTemplate;
    }
    /**
     * 
     *
     * @param CommunityProfileFilesIssueTemplate|null $issueTemplate
     *
     * @return self
     */
    public function setIssueTemplate(?CommunityProfileFilesIssueTemplate $issueTemplate) : self
    {
        $this->issueTemplate = $issueTemplate;
        return $this;
    }
    /**
     * 
     *
     * @return CommunityProfileFilesPullRequestTemplate|null
     */
    public function getPullRequestTemplate() : ?CommunityProfileFilesPullRequestTemplate
    {
        return $this->pullRequestTemplate;
    }
    /**
     * 
     *
     * @param CommunityProfileFilesPullRequestTemplate|null $pullRequestTemplate
     *
     * @return self
     */
    public function setPullRequestTemplate(?CommunityProfileFilesPullRequestTemplate $pullRequestTemplate) : self
    {
        $this->pullRequestTemplate = $pullRequestTemplate;
        return $this;
    }
}